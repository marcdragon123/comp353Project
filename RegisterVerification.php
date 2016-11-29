<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function RegisterVerify(string $Username)
{
    if($Username != null)
    {
        $query = "SELECT * FROM users WHERE username = '".$Username."'";
        $result = $db.query($query);
        $flag = true;
        foreach($result as &$value)
        {
            if(empty($value))
            {
                $flag = false;
            }
        }
        
        if ($flag)
        {
            echo '<p>User is not registered in the database</p>';
            return false;
        }
        else
        {
            echo '<p>User is registered in the database</p>';
            return true;
        }
    }
    else 
    {
        echo '<p>Username cannot be Null</p>';
        return false;
    }
}
?>