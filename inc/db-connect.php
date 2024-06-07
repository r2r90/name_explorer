<?php
// user: allowed_users
// pw : D![t9kRM]s_qt)YV

try {
    $pdo = new PDO('mysql:host=localhost;dbname=names', 'names', 'D![t9kRM]s_qt)YV', [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    die();
}

$stmt = $pdo->prepare("SELECT * FROM `names`");
$stmt->execute();

