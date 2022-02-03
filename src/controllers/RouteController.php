<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/Route.php';
require_once __DIR__.'/../repository/RouteRepository.php';


class RouteController extends AppController
{
    const MAX_FILE_SIZE = 1024*1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpeg'];
    const UPLOAD_DIRECTORY ='/../public/uploads/';

    private $messages = [];
    private $routeRepository;

    public function __construct()
    {
        parent::__construct();
        $this->routeRepository = new RouteRepository();
    }

    public function addRoute()
    {   
        if($this->isPost() && is_uploaded_file($_FILES['file']['tmp_name']) && $this->validate($_FILES['file'])) {

            move_uploaded_file(
                $_FILES['file']['tmp_name'],
                dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['file']['name']
            );

            $route = new Route($_POST['title'], $_POST['city'], $_POST['roadtype'], $_FILES['file']['name']);
            $this->routeRepository->addRoute($route);

            return $this->render('browse', ['messages' => $this->messages, 'route' => $route]);
        }

        $this->render('add-route', ['messages' => $this->messages]);
    }

    private function validate(array $file): bool
    {
        if($file['size'] > self::MAX_FILE_SIZE) {
            $this->messages[] = 'File is too large for destination file system.';
            return false;
        }

        if(!isset($file['type']) || !in_array($file['type'], self::SUPPORTED_TYPES)) {
            $this->messages[] = 'File type is not supported';
            return false;
        }
        return true;
    }

}