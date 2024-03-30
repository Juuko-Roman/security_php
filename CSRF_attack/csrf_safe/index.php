<?php

session_start();

require __DIR__ . '/inc/header.php';

$errors = []; // for storing the error messages
$inputs = []; // for storing sanitized input values

$request_method = strtoupper($_SERVER['REQUEST_METHOD']);

if ($request_method === 'GET') {
	// generate a token
	// $_SESSION['token'] = bin2hex(random_bytes(35));
	$_SESSION['token'] = bin2hex(random_bytes(35));

	// show the form
	require __DIR__ . '/inc/get.php';
} elseif ($request_method === 'POST') {
	// handle the form submission
	require __DIR__ . '/inc/post.php';
	// re-display the form if the form contains errors
	if ($errors) {
		require __DIR__ . '/inc/get.php';
	}
}

require __DIR__ . '/inc/footer.php';
