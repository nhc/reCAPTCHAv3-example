<?php 
header("Access-Control-Allow-Origin: *");

// Check if form was submitted:
if ($_SERVER['REQUEST_METHOD'] === 'GET' && isset($_GET['recaptcha_response'])) {

    // Build POST request:
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6LfO0JsUAAAAAI0n85zL6qLGT0XpHWnwOXa8A5Yj';
    $recaptcha_response = $_GET['recaptcha_response'];

    // Make and decode POST request:
    $recaptcha = file_get_contents($recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    $recaptcha = json_decode($recaptcha);

    echo json_encode($recaptcha);
   
} ?>