<?php

class Type
{

    private $_type;


    // default constructor
    function __construct( $type = "type")
    {
        $this->_type = $type;
    }


    function setType($type)
    {
        $this->_type = $type;
    }

    function getType()
    {
        return $this->_type;
    }



}