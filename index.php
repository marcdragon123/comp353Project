<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Log In To Super</title>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.2.3/foundation.css">
       <link rel="stylesheet" href="stylesheet.css" type="text/css">
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
          <form method='post' action ='index.php'>
          
              <div id='loginModule'>
                <div class="row">
                    <div class='small-4 small-centered columns'>
                        <h3>Log In</h3>
                      <input type='text' placeholder="USERNAME" name ='username'>
                      <input type='password' placeholder="PASSWORD" name='password'>          
                        <div class="expanded button-group">
                        <button type="submit" class="success button removePaddingMargin">Log In </button>
                        <a href="#register" class ='secondary button removePaddingMargin'>Register</a>
                        </div>
                    </div>
                </div>
              </div>
          </form>
      </div>
      <a name='register'></a>
      <div id='register'>
      <p>Registration Form</p>
      </div> 
  </body>
</html>


