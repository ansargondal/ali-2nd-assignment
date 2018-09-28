<?php
require_once "includes/config.php";

$_SESSION[] = null;
unset($_SESSION);
session_destroy();

header('Location: index.php');
die;

