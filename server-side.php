<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmPassword = $_POST['confirmPassword'];

$errors = [];

if ($name === '') {
    $errors['name'] = 'Name is required';
} elseif (!ctype_alpha($name)) {
    $errors['name'] = 'Name should contain only alphabetic characters';
}

if ($email === '') {
    $errors['email'] = 'Email is required';
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = 'Email is invalid';
}

if ($password === '') {
    $errors['password'] = 'Password is required';
} elseif (strlen($password) < 8) {
    $errors['password'] = 'Password should be at least 8 characters long';
}

if ($confirmPassword === '') {
    $errors['confirmPassword'] = 'Confirm Password is required';
} elseif ($confirmPassword !== $password) {
    $errors['confirmPassword'] = 'Passwords do not match';
}

if (empty($errors)) {
    // Perform registration process here (e.g., store data in database)
    echo 'Registration successful!';
} else {
    header('HTTP/1.1 422 Unprocessable Entity');
    header('Content-Type: application/json; charset=UTF-8');
    echo json_encode($errors);
}
?>
