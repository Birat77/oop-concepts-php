<?php

class Book
{
    public $name = 'Bibek';

    public function author()
    {
        return "the author name is " . $this->name;
    }
}

class newBook extends Book
{
    public function author()
    {
        return parent::author() . "<br>the author name is Hayman";
    }
}

echo (new newBook)->author();
