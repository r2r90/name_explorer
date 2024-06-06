<?php
// user: allowed_users
// pw : @q97Twrw/PX[E1EX

try {
    $pdo = new PDO('mysql:host=localhost;dbname=names', 'root', '', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}