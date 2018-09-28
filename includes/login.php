<?php
require_once 'config.php';

$password = $_POST['password'];

$stmt = $db->prepare('SELECT password,id, username FROM  users WHERE username = :username');
$stmt->execute(array('username' => $_POST['username']));
$user = $stmt->fetch();
$hash = $user['password'];
if (password_verify($password, $hash)) {

    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $_POST['username'];
    $_SESSION['user_id'] = $user['id'];
    header('Location: ../index.php');
    die;

} else {
    $_SESSION['error'] = 'Your credentials are incorrect!';
    header('Location: ../login.php');
    die;
}