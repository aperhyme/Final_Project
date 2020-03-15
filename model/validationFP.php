<?php

/**
 * Alex Grigorenko
 * Eugene Mishkin
 * 2/27/20
 * /328/Final_Project/model/validationFP.php
 *
 */

function validSchedule()
{
    global $f3;
    $isValid = true;

    // validates the first name
    if (!validFirst($f3->get('firstName'))) {

        $isValid = false;
        $f3->set("errors['firstName']", "Please enter first name");
    }

    // validates the last name
    if (!validLast($f3->get('lastName'))) {

        $isValid = false;
        $f3->set("errors['lastName']", "Please enter last name");
    }

    // validates the phone number
    if (!validPhone($f3->get('phone'))) {

        $isValid = false;
        $f3->set("errors['phone']", "Please enter a valid phone number");
    }

    // validates the email
    if(!validEmail($f3->get('email'))){
        $isValid = false;
        $f3->set("errors['email']", "Please enter a valid email");
    }

    return $isValid;

}


//validate first name
function validFirst($firstName)
{

    return !empty($firstName) && ctype_alpha($firstName);
}
//validate last name
function validLast($lastName)
{

    return !empty($lastName) && ctype_alpha($lastName);
}

// validate phone number
function validPhone($phone)
{

    return !empty($phone) && ctype_digit($phone);
}

// validate email
function validEmail($email)
{

    return !empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL);
}
