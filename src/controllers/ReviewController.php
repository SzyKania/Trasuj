<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Review.php';
require_once __DIR__.'/../repository/ReviewRepository.php';

class ReviewController extends AppController
{
    private $messages = [];
    private $reviewRepository;

    public function __construct()
    {
        parent::__construct();
        $this->reviewRepository = new ReviewRepository();
    }

    public function addReview()
    {   
        if($this->isPost() && $this->validate($_POST['rating'], $_POST['description'])) {

            $review = new Review($_POST['rating'], time(), $_POST['description']);
            $this->reviewRepository->addReview($review);

            return $this->render('routedetails', ['messages' => $this->messages, 'review' => $review]);
        }

        $this->render('add-review', ['messages' => $this->messages]);
    }

    private function validate(string $rating, string $description): bool
    {
        if(strlen($rating) === 0) {
            $this->messages[] = 'Rating can\'t be empty';
            return false;
        }

        if(strlen($description) === 0) {
            $this->messages[] = 'Review can\'t be empty';
            return false;
        }

        if(strlen($description) > 256) {
            $this->messages[] = 'Review is too long';
            return false;
        }

        return true;
    }

}