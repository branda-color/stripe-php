<?php

require_once('vendor/autoload.php');


//這邊擺上密鑰
$stripe = new \Stripe\StripeClient('sk_test_51HvfSXFV0g6r9YWuXcmGc1Q86lvpbpClUHPOkB8OovezzPJvxQFBzf4gmkNWu6RDoj92lkdjS9DZFSC3MGR1vm8e00yFf7kEUf');

$stripe->charges->create([
    'amount' => 2000,
    'currency' => 'usd',
    'source' => $_POST['stripeToken'],
    'description' => 'My First Test Charge (created for API docs at https://www.stripe.com/docs/api)',
  ]);




exit;