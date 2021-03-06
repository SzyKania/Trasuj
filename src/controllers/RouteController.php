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
    private $reviewRepository;

    public function __construct()
    {
        parent::__construct();
        $this->routeRepository = new RouteRepository();
        $this->reviewRepository = new ReviewRepository();
    }

    public function routes()
    {
        $routes = $this->routeRepository->getRoutes();
        $this->render('routes', ['routes' => $routes]);
    }

    public function routedetails()
    {
        if(is_null($_GET['id'])) {
            return $this->routes();
        }
        $route = $this->routeRepository->getRoute($_GET['id']);
        $reviews = $this->reviewRepository->getRouteReviews($_GET['id']);
        $this->render('routedetails', ['route' => $route, 'reviews' => $reviews]);
    }

    public function addRoute()
    {   
        if($this->isPost() && is_uploaded_file($_FILES['file']['tmp_name']) && $this->validate($_FILES['file'])) {

            move_uploaded_file(
                $_FILES['file']['tmp_name'],
                dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['file']['name']
            );

            $route = new Route($_POST['title'], $_POST['city'], $_POST['roadtype'], $_FILES['file']['name'], NULL, NULL);
            $this->routeRepository->addRoute($route);

            return $this->render('routes', [
                'routes' => $this->routeRepository->getRoutes(),
                'messages' => $this->message
            ]);
        }

        return $this->render('add-route', ['messages' => $this->messages]);
    }

    public function search()
    {
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

        if ($contentType === "application/json") {
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);

            header('Content-type: application/json');
            http_response_code(200);

            echo json_encode($this->routeRepository->getRouteByCity($decoded['search']));
        }
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