<?php

require "Interfaces/PrintableInterface.php";

/**
* Monitor Description
*
* @author ilpaijin <ilpaijin@gmail.com>
*/
class Monitor implements PrintableInterface
{
    /**
     * @link /PHP/Sublime_Text_2-autoimport_signature/case-require/src/Ilpaijin/Interfaces/PrintableInterface.php
     * @see Interfaces/PrintableInterface
     */
    public function printMe()
    {
        //Do something
    }
            
    function __construct()
    {
        $this->printMe();
        $this->saveMe();
        $this->holdMe;
    }

    public function printMe()
    {

    }

    public function saveMe()
    {

    }

    public function holdMe()
    {
        # code...
    }

}