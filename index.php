<?php

    // Turn on error reporting - this is critical!
    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    //Require the autoload file
    require_once('vendor/autoload.php');

    //Start session
    session_start();

    //Create an instance of the base class
    $f3 = Base::instance();

    //Turn on Fat-Free error reporting
    $f3->set('DEBUG', 3);

    $controller = new Controller($f3);


$f3->set('states', array('Alabama', 'Alaska', 'Arizona', 'Arkansas', 'California',
    'Colorado', 'Connecticut','Delaware','District Of Columbia', 'Florida',
    'Georgia', 'Hawaii', 'Idaho', 'Illinois', 'Indiana',
    'Iowa', 'Kansas', 'Kentucky', 'Louisiana', 'Maine',
    'Maryland', 'Massachusetts', 'Michigan', 'Minnesota', 'Mississippi',
    'Missouri', 'Montana', 'Nebraska', 'Nevada', 'New Hampshire',
    'New Jersey', 'New Mexico', 'New York' ,'North Carolina', 'North Dakota',
    'Ohio', 'Oklahoma', 'Oregon', 'Pennsylvania', 'Rhode Island',
    'South Carolina', 'South Dakota', 'Tennessee', 'Texas', 'Utah' , 'Vermont',
    'Virginia', 'Washington', 'West Virginia', 'Wisconsin', 'Wyoming'));


    //Define a default route
    $f3->route('GET /', function (){
        $GLOBALS['controller']->home();
    });

    //Define an about us route
    $f3->route('GET /about', function (){
        $GLOBALS['controller']->about();
    });

    //Define an contact route
    $f3->route('GET|POST /contact', function (){
        $GLOBALS['controller']->contact();
    });

    //Define an Schedule route
    $f3->route('GET|POST /schedule', function (){
        $GLOBALS['controller']->schedule();
    });

    //Define a results route
    $f3->route("GET|POST /results", function () {
        $GLOBALS['controller']->results();
    });

    //Define an login route
    $f3->route('GET|POST /login', function (){
        $GLOBALS['controller']->login();
    });

    //Define an summary route
    $f3->route('GET|POST /summary', function (){
        $GLOBALS['controller']->summary();
    });

    //Define an Contact summary route
    $f3->route('GET|POST /contactUs', function (){
        $GLOBALS['controller']->contactSum();
    });


    //Run fat free
    $f3->run();