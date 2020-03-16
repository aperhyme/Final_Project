<?php

/**
 * Alex Grigorenko
 * Eugene Mishkin
 * 2/27/20
 * /328/Final_Project/controller/controller.php
 *
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
    public function contact($_f3)
    {

        //If form has been submitted, validate
        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            //Get data from form
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $email = $_POST['email'];
            $mesg = $_POST['mesg'];

            //Add data to hive
            $_f3->set('firstName', $firstName);
            $_f3->set('lastName', $lastName);
            $_f3->set('email', $email);
            $_f3->set('mesg', $mesg);




            //If data is valid
           //if (validContact()) {

                $_SESSION['firstName'] = $firstName;
                $_SESSION['lastName'] = $lastName;
                $_SESSION['email'] = $email;
                $_SESSION['mesg'] = $mesg;

                //Redirect to profile page
<<<<<<< HEAD
                $this->_f3->reroute('/contactUs');
            //}
            //else{
                $this->_f3->set("errors['firstName']", "Please enter an first name");
                $this->_f3->set("errors['lastName']", "Please enter an last name");
                $this->_f3->set("errors['email']", "Please enter an email");
                $this->_f3->set("errors['mesg']", "Please enter a message");
            //}
=======
                $_f3->reroute('/contactUs');
            }
            else{
                $_f3->set("errors['firstName']", "Please enter an first name");
                $_f3->set("errors['lastName']", "Please enter an last name");
                $_f3->set("errors['email']", "Please enter an email");
                $_f3->set("errors['mesg']", "Please enter a message");
            }
>>>>>>> 9e9adbdecf303b58146be03d5d240f9c10da1586
        }

        $view = new Template();
        echo $view->render('views/contact.html');
    }

    /**
     * Schedule appointment page route
     */
    public function schedule($_f3)
    {


        //If form has been submitted, validate
        if($_SERVER['REQUEST_METHOD'] == 'POST') {


            //Get data from form
            $firstName = $_POST['firstName'];
            $lastName = $_POST['lastName'];
            $phone = $_POST['phone'];
            $email = $_POST['email'];
            $city = $_POST['city'];
            $type = $_POST['type'];
            $location = $_POST['location'];
            $hear = $_POST['hear'];
            $additional = $_POST['additional'];

            //Add data to hive
            $_f3->set('firstName', $firstName);
            $_f3->set('lastName', $lastName);
            $_f3->set('phone', $phone);
            $_f3->set('email', $email);
            $_f3->set('city', $city);
            $_f3->set('type', $type);
            $_f3->set('location', $location);
            $_f3->set('hear', $hear);
            $_f3->set('additional', $additional);



            //If data is valid
            //if (validSchedule()) {

                $_SESSION['firstName'] = $firstName;
                $_SESSION['lastName'] = $lastName;
                $_SESSION['phone'] = $phone;
                $_SESSION['email'] = $email;

                //Redirect to profile page
<<<<<<< HEAD
                //$_SESSION['type']->setType($type);
               $this->_f3->reroute('/results');
            //}
            //else{
                $this->_f3->set("errors['firstName']", "Please enter an first name");
                $this->_f3->set("errors['lastName']", "Please enter an last name");
                $this->_f3->set("errors['phone']", "Please enter an phone number");
                $this->_f3->set("errors['email']", "Please enter an email");
            //}

=======
                $_SESSION['type']->setType($type);
                $_f3->reroute('/results');
            }
            else{
                $_f3->set("errors['firstName']", "Please enter an first name");
                $_f3->set("errors['lastName']", "Please enter an last name");
                $_f3->set("errors['phone']", "Please enter an phone number");
                $_f3->set("errors['email']", "Please enter an email");
            }
>>>>>>> 9e9adbdecf303b58146be03d5d240f9c10da1586
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
     * login page route
     */
    public function login()
    {
        $view = new Template();
        echo $view->render('views/login.php');
    }

    /**
     * Admin summary page route
     */
    public function summary()
    {
        $view = new Template();
        echo $view->render('views/summary.php');
    }

    /**
     * Contact us summary page route
     */
    public function contactSum()
    {
        $view = new Template();
        echo $view->render('views/contactSum.html');
    }


}