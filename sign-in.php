<?php
session_start();
if (isset($_SERVER['HTTP_REFERER']) AND $_SERVER['HTTP_REFERER'] === 'https://project1175.ict-lab.nl/login.php') {
    $token_p = $_POST['token'];
    $token_s = $_SESSION['token'];
    if ($token_p === $token_s) {
        unset($_SESSION['token']);


    }
}