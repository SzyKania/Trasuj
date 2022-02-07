<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';
class UserController extends AppController
{
    private $userRepository;
    private $routeRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
        $this->routeRepository = new routeRepository();
    }

    public function users()
    {
        $users = $this->userRepository->getUsers();
        $this->render('users', ['users' => $users]);
    }

    public function profile()
    {
        if(is_null($_GET['id'])) {
            return $this->users();
        }
        $user = $this->userRepository->getUserById($_GET['id']);
        $follows = $this->userRepository->getFollowed($_GET['id']);
        $routes = $this->routeRepository->getUserRoutes($_GET['id']);

        $this->render('profile', ['user' => $user, 'routes' => $routes, 'follows' => $follows]);
    }

    public function favourites()
    {
        session_start();
        $routes = $this->routeRepository->getUserFavourites($_SESSION["userid"]);
        $this->render('favourites', ['routes' => $routes]);
    }

    public function follow()
    {
        session_start();
        if($this->isPost()){
            $this->userRepository->followUser($_SESSION["userid"], $_POST['id']);
        }
    }

    public function unfollow()
    {
        session_start();
        if($this->isPost()){
            $this->userRepository->unfollowUser($_SESSION["userid"], $_POST['id']);
        }
    }

    public function favourite()
    {
        session_start();
        if($this->isPost()){
            $this->userRepository->favouriteRoute($_SESSION["userid"], $_POST['id']);
        }
    }

    public function unfavourite()
    {
        session_start();
        if($this->isPost()){
            $this->userRepository->unfavouriteRoute($_SESSION["userid"], $_POST['id']);
        }
    }

}