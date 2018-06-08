<?php

// Page de connexion

require 'init.php';
require LIB_PATH . DS . 'user.php';

//$hash = password_hash('0000', PASSWORD_BCRYPT);
//var_dump(password_verify('0000', $hash));

$username = $_POST['username'] ?? null;
$password = $_POST['password'] ?? null;

// Validation du formulaire

if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
    $user = authenticate($db, $username, $password);
}

// Affichage de la vue

$title = "Page de connexion";
$styles = [BASE_URL . '/views/' . THEME . '/css/signin.css'];

include THEME_PATH . DS . 'login.phtml';