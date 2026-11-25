<?php
session_start();
require_once __DIR__ . '/helpers/functions.php';
$routes = [
 'dashboard' => __DIR__ . '/views/dashboard.php',
 'user/list' => __DIR__ . '/modules/user/list.php',
 'user/add' => __DIR__ . '/modules/user/add.php',
 'user/edit' => __DIR__ . '/modules/user/edit.php',
 '404' => __DIR__ . '/views/404.php',
];
$page = $_GET['page'] ?? 'dashboard';
if (!is_string($page) || !array_key_exists($page, $routes)) {
 http_response_code(404); $contentFile = $routes['404'];
} else { $contentFile = $routes[$page]; }
require_once __DIR__ . '/views/header.php';
require $contentFile;
require_once __DIR__ . '/views/footer.php';
?>
