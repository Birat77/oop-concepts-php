<?php

class User
{
    // public $name = 'birat pandey';
    static public $name = 'birat pandey';

    static public function name()
    {
        // return $this->name = 'birat';
        return self::$name = 'birat';
    }
}

// echo (new User)->name();
echo User::name();
