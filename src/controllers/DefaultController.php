<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    function login(){
        //include __DIR__.'/../views/login.php';
        $this->render("login");
    }

    function signUp() {
        /*var_dump("ok");*/
        $this->render("signUp");
    }

    function dashboard() {
        //include __DIR__.'/../views/dashboard.php';
        //$title => "MY CAKE";
        //$this->render("dashboard", ["title"=> $title]);
        $this->render("dashboard");
    }

    function chooseCategory() {
        //include __DIR__.'/../views/dashboard.php';
        //$title => "MY CAKE";
        //$this->render("dashboard", ["title"=> $title]);
        $this->render("chooseCategory");
    }

    function orderForm() {
        //include __DIR__.'/../views/dashboard.php';
        //$title => "MY CAKE";
        //$this->render("dashboard", ["title"=> $title]);
        $this->render("orderForm");
    }

    function success() {
        //include __DIR__.'/../views/dashboard.php';
        //$title => "MY CAKE";
        //$this->render("dashboard", ["title"=> $title]);
        $this->render("success");
    }

    function account() {
        //include __DIR__.'/../views/dashboard.php';
        //$title => "MY CAKE";
        //$this->render("dashboard", ["title"=> $title]);
        $this->render("account");
    }

}