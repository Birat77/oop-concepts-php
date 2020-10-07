<?php

include "Mobile.php";
include "NoHeadphoneJackTrait.php";
include "HeadphoneJackTrait.php";


class IphoneClone extends Mobile
{
    //collistion in trait methods
    // use NoHeadphoneJack, HeadphoneJack;
    //resolve for specific method using instead of
    //Or if possible use one trait in another trait
    use NoHeadphoneJack, HeadphoneJack {
        HeadphoneJack::headphoneJack insteadof NoHeadphoneJack;
    }
    /**
     * Preference order of methods
     * * Inside Current Class
     * * Trait
     * * Subtrait
     */
}
$obj = new IphoneClone;
$obj->hasBattery();
if (!$obj->headphoneJack()) {
    echo "I have a headphone jack.";
}
