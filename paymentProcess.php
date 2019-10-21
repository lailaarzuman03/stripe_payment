<?php
$products = array(
	'pids' => ['1', '2', '3'],
	'1' => 'plan_G0tdlMuZLveexV',
	'2' => 'plan_G1vlaFrPukaqtr',
	'3' => 'plan_G1vtxvhohHJHpK'
);
if (!isset($_GET['pid']) || !in_array($_GET['pid'], $products['pids']) || !isset($_POST['stripeToken']) || !isset($_POST['stripeEmail'])) {
	header('Location: index.php');
	exit();
}
require_once('stripe-php/init.php');
$stripe = [
  "secret_key"      => "sk_test_rmLmtgQEAG0OforEJqtS4hr000BAjkU5hl",
  "publishable_key" => "pk_test_gE4X5iXtaHAnPxku2SBMMBw100mY1YMSsv",
];

\Stripe\Stripe::setApiKey($stripe['secret_key']);

	$pid  = $_GET['pid'];
	$token  = $_POST['stripeToken'];
	$email  = $_POST['stripeEmail'];

	$customer = \Stripe\Customer::create([
	  'email' => $email,
	  'source'  => $token,
	]);

	\Stripe\Subscription::create([
	  "customer" => $customer->id,
	  "items" => [
	    [
	      "plan" => $products[$pid],
	    ],
	  ]
	]);

?>