<?php

require_once 'includes/config.php';

if ($_GET['action'] === 'follow') {
    $follower_id = $_SESSION['user_id'];
    $user_id = (int)$_GET['user_id'];

    $stmt = $db->prepare('INSERT INTO follow(user_id,follower_id) VALUES (:user_id, :follower_id)');
    $stmt->execute(array(
        ':user_id' => $user_id,
        ':follower_id' => $follower_id
    ));

} else {

    $follower_id = $_SESSION['user_id'];
    $user_id = (int)$_GET['user_id'];

    $stmt = $db->prepare('DELETE FROM follow WHERE user_id = :user_id AND follower_id = :follower_id');
    $stmt->execute(array(
        ':user_id' => $user_id,
        ':follower_id' => $follower_id
    ));
}
header('Location: users.php');
die;
