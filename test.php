<?php 
  include 'backend/dbconnection.php';
  include 'backend/dbFunctions.php';

require_once('vendor/autoload.php');

$stripe = array(
  "secret_key"      => "sk_test_4Y8J6BtKfO0EUM4yYE1SQbT5",
  "publishable_key" => "pk_test_mztO0iJqX5ImleTFoDgfVAj1"
);

\Stripe\Stripe::setApiKey($stripe['secret_key']);
 ?>
 <form action="charge.php" method="post">
  <script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
          data-key="<?php echo $stripe['publishable_key']; ?>"
          data-description="Access for a year"
          data-amount="500"
          data-locale="auto"></script>
</form>