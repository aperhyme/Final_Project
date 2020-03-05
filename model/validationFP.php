<?php


function validSchedule()
{
    global $f3;
    $isValid = true;

    if (!validFirst($f3->get('firstName'))) {

        $isValid = false;
        $f3->set("errors['firstName']", "Please enter first name");
    }

    if (!validLast($f3->get('lastName'))) {

        $isValid = false;
        $f3->set("errors['lastName']", "Please enter last name");
    }

    if (!validPhone($f3->get('phone'))) {

        $isValid = false;
        $f3->set("errors['phone']", "Please enter a valid phone number");
    }

    if(!validEmail($f3->get('email'))){
        $isValid = false;
        $f3->set("errors['email']", "Please enter a valid email");
    }

    return $isValid;

}


//validate name
function validFirst($firstName)
{

    return !empty($firstName) && ctype_alpha($firstName);
}

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
