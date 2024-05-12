<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Get the submitted username and password
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Validate the password to contain at least one number
    if (preg_match('/\d/', $password)) {
        // Redirect to the index page (home page)
        header('Location: thx.html');
        exit();
    } else {
        // Password does not contain a number, display an error message or perform any other action
        // For example, you can redirect back to the login page with an error message:
        header('Location: login.html?error=1');
        exit();
    }
}
?>