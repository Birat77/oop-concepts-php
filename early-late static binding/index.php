<?php

class Book
{
    public static $name = 'Bibek';

    public static function author()
    {
        return "the author name is " . self::$name;
    }

    public static function getAuthor()
    {
        // return self::author(); // returns parent , early binding
        return static::author(); // late binding
    }
}

class newBook extends Book
{
    public static function author()
    {
        return "the author name is Hayman";
    }
}

// echo Book::getAuthor(); // bibek
echo newBook::getAuthor();
