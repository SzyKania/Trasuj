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
        $user = $this->userRepository->getUser($_GET['id']);
        $routes = $this->routeRepository->getUserRoutes($_GET['id']);
        $this->render('profile', ['user' => $user, 'routes' => $routes]);
    }

}