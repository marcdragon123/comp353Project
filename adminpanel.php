<?php session_start();
    include "backend/setup.php";
 ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
</head>
<body>
<div class="row">
    <div class="large-12 columns" style="text-align: center;">
        <h1>Welcome!</h1>
    </div>
</div>

<div class="row">
    <div class="small-3 columns">
        <div class="callout">
            <img src="images/Anonymous.jpg">
            <div>
                <span style="text-align:center">Hello Admin!</span>
            </div>
        </div>
    </div>
    <div class="small-9 columns">
        <div class="primary callout">
            <p><span style="font-weight: bold; text-align:center;">This is your admin panel where you may view, modify and delete rides. You may also use this panel to manage the user database by suspending or reinstating users as well as completely erasing them. </span>
            </p>
            <p> Please use this application responsibly.</p>
        </div>
    </div>
    test
</div>

<div class="row">
    <div class="small-6 columns">
        <?php
   

        $rides = getAllRides();
     

 ?>

        <table id='display'>
            <?php
            date_default_timezone_set('UTC');
        while($row = $rides->fetch_assoc()) {
            if($row['date']>=date ( 'Y-m-d' )) {
            //print_r($row);
    ?>
            <tr>
                <td><?php echo $row['rideID']; ?></td>
                <td>
                    <ul class="dropdown menu" data-dropdown-menu>
                        <li>
                            <a href="#">Modify</a>
                            <ul class="menu">
                                <li><a href="#" data-reveal-id="AdminEmailModal">Email</a></li>
                                <li><a href="#" data-reveal-id="AdminFirstNameModal">First name</a></li>
                                <li><a href="#" data-reveal-id="AdminLastNameModal">Last name</a></li>
                            </ul>
                    </ul>
                </td>
            </tr>
            <?php
        }}
     ?>
        </table>

    </div>

    <div id="AdminEmailModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true"
         role="dialog">
        <div class="row">
            <div class="small-9 columns">
                <input type="text" placeholder="Email">
            </div>
            <div class="small-3 columns">
                <a href="#" class="button postfix">Change</a>
            </div>
        </div>
    </div>

    <div id="AdminFirstNameModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true"
         role="dialog">
        <div class="row">
            <div class="small-9 columns">
                <input type="text" placeholder="First Name">
            </div>
            <div class="small-3 columns">
                <a href="#" class="button postfix">Change</a>
            </div>
        </div>
        <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div>

    <div id="AdminLastNameModal" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true"
         role="dialog">
        <div class="row">
            <div class="small-9 columns">
                <input type="text" placeholder="Last Name">
            </div>
            <div class="small-3 columns">
                <a href="#" class="button postfix">Change</a>
            </div>
        </div>
        <a class="close-reveal-modal" aria-label="Close">&#215;</a>
    </div>

    <a href="#" class="button">Create new ride!</a>

    <div class="small-6 columns">

        <?php
    session_start();

    include('Super_db.php');

    $user_email = 'user_email';
    $firstname = 'firstname';
    $lastname = 'lastname';


$sql = mysql_query("SELECT * FROM personalinfo"); ?>

        <table id='display'>
            <?php
        while($rows = mysql_fetch_array($sql)) {
    ?>
            <tr>
                <td><?php echo $rows[$user_email]; ?></td>
                <td>
                    <ul class="dropdown menu" data-dropdown-menu>
                        <li>
                            <a href="#">Modify</a>
                            <ul class="menu">
                                <!-- Functionality not done, not sure how this works yet, give me some time -->


                                <li><a href="#" data-reveal-id="AdminChangeEmail">Email</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </td>
                <td><a href="#" class="alert button">DELETE</a></td>
                <!-- And so on-->
            </tr>
            <?php
        }
     ?>
        </table>
    </div>
</div>

<div id="Email" class="reveal-modal" data-reveal aria-labelledby="modalTitle" aria-hidden="true" role="dialog">
    <div class="row">
        <div class="small-9 columns">
            <input type="text" placeholder="Email">
        </div>
        <div class="small-3 columns">
            <a href="#" class="button postfix">Change</a>
        </div>
    </div>
    <a class="close-reveal-modal" aria-label="Close">&#215;</a>
</div>


<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>
