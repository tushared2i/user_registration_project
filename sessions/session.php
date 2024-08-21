<?php
session_start();

function checkSession() {
    if (!isset($_SESSION['user_id'])) {
        header('Location: login.php');
        exit();
    }
}

function loginUser($user_id) {
    $_SESSION['user_id'] = $user_id;
}

function logoutUser() {
    session_destroy();
    header('Location: login.php');
    exit();
}
?>
