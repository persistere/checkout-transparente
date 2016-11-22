<?php

	require "app/Checkout.class.php";

	$checkout = new Checkout(false);
	$checkout->printSessionId();

?>
