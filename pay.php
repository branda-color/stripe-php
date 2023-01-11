<?php

require_once('vendor/autoload.php');

//這邊擺上密鑰
\Stripe\Stripe::setApiKey('sk_test_51HvfSXFV0g6r9YWuXcmGc1Q86lvpbpClUHPOkB8OovezzPJvxQFBzf4gmkNWu6RDoj92lkdjS9DZFSC3MGR1vm8e00yFf7kEUf');

header('Content-Type: application/json');

$YOUR_DOMAIN = 'http://localhost/phpuse';

$checkout_session = \Stripe\Checkout\Session::create([
  'line_items' => [[
    # Provide the exact Price ID (e.g. pr_1234) of the product you want to sell
    'price' => "price_1MOxSdFV0g6r9YWuRDxLnjsg",
    'quantity' => 1,
  ],[
    'price' => "price_1MOxSdFV0g6r9YWuRDxLnjsg",
    'quantity' => 1,
  ]
],
  'mode' => 'payment',
  'success_url' => $YOUR_DOMAIN . '/success.html',
  'cancel_url' => $YOUR_DOMAIN . '/cancel.html',
]);

header("HTTP/1.1 303 See Other");
header("Location: " . $checkout_session->url);