<?php

require __DIR__ . '/inc/header.php';

$errors = []; // for storing the error messages
$inputs = []; // for storing sanitized input values

$request_method = strtoupper($_SERVER['REQUEST_METHOD']);

if ($request_method === 'GET') {
	// show the form
	require __DIR__ . '/inc/get.php';
} elseif ($request_method === 'POST') {
	// handle the form submission
	require __DIR__ . '/inc/post.php';

	// re-display the form if the form contains errors
	if ($errors) {
		require __DIR__ . '/inc/get.php';
	} else {
		echo '<p class="">Amount transfered successfully</p>';
	}
}

require __DIR__ . '/inc/footer.php';
