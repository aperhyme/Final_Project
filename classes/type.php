<?php
/**
 * Alex Grigorenko
 * Eugene Mishkin
 * 3/10/20
 * /328/Final_Project/classes/type.php
 */

class Type
{

    private $_type;


    // default constructor
    function __construct( $type = "type")
    {
        $this->_type = $type;
    }

    // setter for type of photo shoot
    function setType($type)
    {
        $this->_type = $type;
    }

    // getter for type of photo shoot
    function getType()
    {
        return $this->_type;
    }



}