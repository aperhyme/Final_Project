<?php

class Controller
{
    private $_f3;

    /**
     * Controller constructor.
     * @param $f3
     */
    public function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    /**
     * Home page route
     */
    public function home()
    {
        $view = new Template();
        echo $view->render('views/home.html');
    }

    /**
     * About Us page route
     */
    public function about()
    {
        $view = new Template();
        echo $view->render('views/about.html');
    }

    /**
     * Contact Us page route
     */
    public function contact()
    {
        $view = new Template();
        echo $view->render('views/contact.html');
    }

    /**
     * Schedule appointment page route
     */
    public function schedule()
    {
        $view = new Template();
        echo $view->render('views/schedule.html');
    }

    /**
     * Schedule appointment page route
     */
    public function login()
    {
        $view = new Template();
        echo $view->render('views/login.php');
    }
}