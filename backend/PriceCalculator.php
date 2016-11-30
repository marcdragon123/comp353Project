<?php
/**
 * Created by PhpStorm.
 * User: Mihai Damaschin
 * Date: 29/11/16
 * Time: 3:05 PM
 */
//Distance calculated in front end as "#distance" is to be input at will here
//This calculates the price set in stone by the company administrating the website
function getPriceInStone($distanceInput)
{
    //I thought about making it dependant on his reviews which would reward good drivers for good work but I think the system
    // could be abused? No? I mean we could.

    $price = $distanceInput * 1.1 + 2.28; //65% of what a taxi in Montreal gets paid

    return $price;
}

?>