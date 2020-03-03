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

    public function home()
    {
        $view = new Template();
        echo $view->render('views/home.html');
    }

    public function about()
    {
        $view = new Template();
        echo $view->render('views/about.html');
    }

    public function contact()
    {
        $view = new Template();
        echo $view->render('views/contact.html');
    }

    public function schedule()
    {
        $view = new Template();
        echo $view->render('views/schedule.html');
    }
}