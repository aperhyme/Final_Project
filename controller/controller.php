<?php


/**
 * Class Controller routes to all the pages
 * @attribute $_f3 object
 *
 */
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

        //If form has been submitted, validate
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            //Get data from form
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $phone = $_POST['phone'];

            //Add data to hive
            $this->_f3->set('firstName', $firstName);
            $this->_f3->set('lastName', $lastName);
            $this->_f3->set('phone', $phone);


            //If data is valid
            if (validPersonal()) {

                //Redirect to profile page
                $this->_f3->reroute('/results');
            }
        }

        $view = new Template();
        echo $view->render('views/schedule.html');
    }

    /**
     * function for results of photo-shoot request page with all the info page
     */
    public function results()
    {
        $view = new Template();
        echo $view->render('views/results.html');

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