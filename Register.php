<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function Register(string $Email, string $dob, string $FirstName, string $Lastname, string $Address, string $City, string $Password)
{
    $query1 = NULL;
    $query2 = NULL;
    if (IsValide($Email) && IsValide($Password)) {
        $query1 = "INSERT INTO `users` (`email`,`password`,`isAdmin`,`status`,`balance`) VALUES (`" . $Email . "`,`" . $Password . "`,`false`,`null,`0.0`)";
    }
    if (IsValide($dob) && IsValide($FirstName) && IsValide($Lastname) && IsValide($Address) && IsValide($City) && IsValide($query)) {
        $query2 = "INSERT INTO `personalinfo`(`user_email`,`firstname`,`lastname`,`address`,`city`,`dob`) VALUES (`" . $Email . "`,`" . $FirstName . "`,`" . $Lastname . "`,`" . $Address . "`,`" . $City . "`,`" . $dob . "`)";
    }

    if (IsValide($query2) && IsValide($query1)) {
        $db->query($query1);
        $db->query($query2);
    }
}

function IsValide(string $input)
{
    if (!empty($input) && !strpos($input, 'DROP')) {
        return true;
    } else {
        return false;
    }
}

?>