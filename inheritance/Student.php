<?php

class Student
{
    /**
     * Access modifiers
     */
    public $name = "Aakash";
    private $marks = 88;
    protected $email = "aakash@gmail.com";

    public function getName()
    {
        return $this->name;
    }
    public function getMarks()
    {
        return $this->marks;
    }
    public function getEmail()
    {
        return $this->email;
    }
}

class Captain extends Student
{
    public function __construct()
    {
        echo $this->marks;
        //cannot access private variable
        // var_dump($this);
    }
}
// $obj = new Student;
// var_dump($obj);
// $obj->email;

/**
 * protected and private properties cannot be accessed from objects
 * protected properties canbe accessed from child class
 * private accessed within the class
 */
$captain = new Captain();

// echo $obj->getMarks();
// echo $obj->getName();
// echo $obj->getEmail();
