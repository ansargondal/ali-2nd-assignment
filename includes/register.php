<?php
include 'config.php';

//if form has been submitted process it
//if (isset($_POST['submit'])) {

if (strlen($_POST['username']) < 5) {
    $error[] = 'Username is too short.';
} else {
    $stmt = $db->prepare('SELECT username FROM  users WHERE username = :username');
    $stmt->execute(array(':username' => $_POST['username']));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!empty($row['username'])) {
        $error[] = 'Username provided is already in use.';
    }
}

if (strlen($_POST['password']) < 5) {
    $error[] = 'Password is too short.';
}

if (strlen($_POST['confirm_password']) < 5) {
    $error[] = 'Confirm password is too short.';
}

if ($_POST['password'] !== $_POST['confirm_password']) {
    $error[] = 'Passwords do not match.';
}

//email validation
if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $error[] = 'Please enter a valid email address';
} else {
    $stmt = $db->prepare('SELECT email FROM users WHERE email = :email');
    $stmt->execute(array(':email' => $_POST['email']));
    $row = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!empty($row['email'])) {
        $error[] = 'Email provided is already in use.';
    }
}

//if no errors have been created carry on
if (!isset($error)) {

    //hash the password
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);


    $stmt = $db->prepare('INSERT INTO users(username,password,email) VALUES (:username, :password, :email)');
    $stmt->execute(array(
        ':username' => $_POST['username'],
        ':password' => $password,
        ':email' => $_POST['email'],
    ));

    $user_id = $db->lastInsertId();

    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['user_id'] = $user_id;

    $_SESSION['message'] = 'Congratulations! You are logged in.' . ' <a href="users.php">Follow people </a> to see their posts.';
    header('Location: ../index.php');
    die;

} else {
    $_SESSION['errors'] = $error;
    $_SESSION['post'] = $_POST;
    header('Location: ../register.php');
    die;
}
//}