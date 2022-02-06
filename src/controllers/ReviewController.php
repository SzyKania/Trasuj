<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Review.php';
require_once __DIR__.'/../repository/ReviewRepository.php';

class ReviewController extends AppController
{
    private $messages = [];
    private $reviewRepository;
    private $routeRepository;

    public function __construct()
    {
        parent::__construct();
        $this->reviewRepository = new ReviewRepository();
        $this->routeRepository = new RouteRepository();
    }

    public function addReview()
    {   
        if($this->isPost() && $this->validate($_POST['rating'], $_POST['description'])) {

            session_start();
            $id_user = $_SESSION["userid"];

            //TODO fix this
            $review = new Review($_POST['rating'], time(), $_POST['description'], NULL, NULL, NULL, NULL);
            $this->reviewRepository->addReview($review, $_GET['id'], $id_user);

            return $this->render('routedetails',
                ['messages' => $this->messages,
                    'reviews' => $this->reviewRepository->getRouteReviews($_GET['id']),
                    'route' => $this->routeRepository->getRoute($_GET['id'])]);
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