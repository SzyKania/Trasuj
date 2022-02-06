<?php

require_once 'AppController.php';
require_once __DIR__.'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';

class SecurityController extends AppController
{
    private $userRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }

    public function login()
    {

        if(!$this->isPost()) {
            return $this->render('login');
        }

        $email = $_POST["email"];
        $password = md5($_POST['password']);

        $user = $this->userRepository->getUser($email);

        if (!$user) {
            return $this->render('login', ['messages' => ['User doesn\'t exist']]);
        }

        if ($user->getEmail() !== $email) {
            return $this->render('login', ['messages' => ['User with this email doesn\'t exist']]);
        }

        if ($user->getPassword() !== $password) {
            return $this->render('login', ['messages' => ['Invalid password']]);
        }

        session_start();
        $_SESSION["userid"] = $user->getId();
        $url = "http://$_SERVER[HTTP_HOST]";
        header("Location: {$url}/routes");
    }

    public function logout(){
        session_start();
        session_unset();
        session_destroy();

        return $this->render('login', ['messages' => ["Logout successful"]]);
    }

    public function register()
    {
        if (!$this->isPost()) {
            return $this->render('register');
        }

        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirmedPassword = $_POST['confirmedPassword'];
        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $phone = $_POST['phone'];

        if ($password !== $confirmedPassword) {
            return $this->render('register', ['messages' => ['Please provide proper password']]);
        }

        $user = new User($email, md5($password), $name, $surname);
        $user->setPhone($phone);

        $this->userRepository->addUser($user);

        return $this->render('login', ['messages' => ['You\'ve been succesfully registrated!']]);
    }

}