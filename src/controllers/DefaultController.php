<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index() {
        $this->render('login');
    }

    public function routes() {
        $this->render('routes');
    }

    public function favourites() {
        $this->render('favourites');
    }
    
    public function friends() {
        $this->render('friends');
    }

    public function profile() {
        $this->render('profile');
    }

    public function routedetails() {
        $this->render('routedetails');
    }

    public function users() {
        $this->render('users');
    }

    public function upload() {
        $this->render('upload');
    }

}