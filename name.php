<?php
require __DIR__ . '/inc/all.inc.php';
$name = (string)($_GET['name'] ?? '');

if (empty($name)) {
    header("Location: index.php");
    die();
}

$data = fetch_info_by_name($name);

render('name.view', [
    'name' => $name,
    'data' => $data,
    'char' => $name[0]
]);







