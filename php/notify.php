<?php

$q = $_GET["email"];

$response = array();

if (!filter_var($q, FILTER_VALIDATE_EMAIL)) {
	$response['result'] = 0;
	$response['message'] = 'Invalid email given - try again';
}
else{
	// write to file or database
	$response['result'] = 1;
	$response['message'] = "Thanks, your details have been added, we'll notify you when we launch!";
}

try {
    $out = json_encode($response);
} catch (Exception $e) {
    echo $e->getMessage();
}

echo $out;

?>