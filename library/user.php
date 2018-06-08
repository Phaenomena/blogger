<?php

function authenticate(PDO $pdo, $username, $password) {
    $sql = 'SELECT * FROM user WHERE username=?';
    $stmt = $pdo->prepare($sql);

    if ($stmt->execute(array($username))) {
        var_dump($stmt->fetch());
    }
}