<?php  session_start(); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Log In To Super</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.3/foundation.css">
       <link rel="stylesheet" href="stylesheet.css" type="text/css">
       <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
    <script>
        <!-- SMOOTH SCROLLING TO REGISTER -->
        $(document).ready(function (){
            $("#registerButton").click(function (){
                $('html, body').animate({
                    scrollTop: $("#register").offset().top
                }, 400);
            });
        });
    </script>
  </head>
  <body>
  <?php include 'backend/setup.php'; ?>
  <?php 
      if(isset($_POST['username'])){
          $result = canLogin($_POST['username'],$_POST['password']);
        if($result){
          echo '<p>'.$result.'</p>';
        }
        else{
          $_SESSION['user']=$_POST['username'];
          header("Location:core.php");
        }
      }
?>
      <div id='welcome'>
          <h3>Welcome To Super!</h3>
          <form method='post' action ='login.php'>
          <div class="row">
              <div class='small-6 columns' id='loginModule'>
                  <h3>Log In</h3>
                  <div class="row">
                    <div class='small-10 small-centered columns'>
                        <input type='text' placeholder="USERNAME" name = 'username'>
                        <input type='password' placeholder="PASSWORD" name = 'password'>          
                            <div class="expanded button-group">
                                <button type="submit" class="success button removePaddingMargin">Log In </button>
                                <button id='registerButton' type="button"  class ='secondary button removePaddingMargin' >Register</button>
                            </div>
                    </div>
                  </div>   
                </div>
              <div class='small-6 columns' id='welcomeMessage'>
                  <p>Lorem Ipsum Motherfuckers</p>
              </div>
          </div>
          </form>
      </div>

                                              
<!--REGISTRATION FORM BEGINS HERE-->
                                              
      <div id='register'>
      <?php 
      if(isset($_POST['fname'])){
          $msg1= insertUser($_POST['email'],$_POST['password']);
  $msg2= insertPersonlInfo($_POST['email'],$_POST['fname'],$_POST['lname'],$_POST['adr1'],$_POST['city'],$_POST['dob']);
        if($msg2){
          echo '<p>'.$msg2.'</p>';
        }
        else{
          echo '<p> got registered</p>'; 
        }
      }
?>
          <h3 style="padding-top:1vh">Registration Form</h3>
          <h5 style="text-align:center">You sre seconds away from registering to the greatest website ever. Just make sure you have your id handy!</h5>
           <div class="row">
           <div class="small-4 columns">
           </div>
            <div class="small-8 columns">
            <form action='login.php' method ='post'>
              <formInfo>Name</formInfo>
               <div class="row">
                    <div class="small-6 columns"><input type='text' placeholder="First Name" name='fname'></div>
                    <div class="small-6 columns"><input type='text' placeholder="Last Name" name='lname'></div>
               </div>
              <formInfo>Referal Code</formInfo>
               <div class="row">
                    <div class="small-12 columns"><input type='text' placeholder="Code" name='code'></div>
               </div>
              <formInfo>Email</formInfo>
               <div class="row">
                    <div class="small-12 columns"><input type='text' placeholder="Insert email here" name='email'></div>
               </div>
               <div class="row">
                    <div class="small-12 columns"><input type='text' placeholder="Password" name='password'></div>
               </div>
              <formInfo>Address</formInfo>
               <div class="row">
                    <div class="small-12 columns"><input type='text' placeholder="Line 1" name='adr1'></div>
               </div>
               <div class="row">
                    <div class="small-12 columns"><input type='text' placeholder="Line 2" name='adr2'></div>
               </div>
               <div class="row">
                    <div class="small-6 columns"><input type='text' placeholder="City" name='city'></div>
                    <div class="small-6 columns"><input type='text' placeholder="Postal Code" name='postal'></div>
               </div>
                <div class="row">
                    <div class="small-12 columns"><input type='text' placeholder="Country" name='country'></div>
               </div>
              <formInfo>Birthday</formInfo>
               <div class="row">
                    <div class="small-12 columns" style="text-align:center"><input type='date' placeholder="Date" name='dob'></div>
               </div>
               <formInfo>Driver or Rider? (You can always change this and anything else later!)</formInfo>
                  <div class="row">
                    <div class="small-12 columns">
                   <Select>
                        <option value="Driver">Driver</option>                       
                        <option value="Rider">Rider</option>
                   </Select>
                   </div>
               </div>
               <div class="row">
                   <div class="small 12 columns">
                           <div class="expanded button-group">
                                <button type="submit" class="success button">Submit </button>
                                <button id='registerButton' type="reset"  class ='secondary button' >Reset</button>
                            </div> 
                   </div>  
               </div>
            </form>
            <br/>
           </div>
          </div>
      </div>
  </body>
</html>


