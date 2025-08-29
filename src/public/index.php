<?php
require_once __DIR__ . '/../../config.php';
$page = $_GET['page'] ?? 'home';
$pages = [
    'home' => __DIR__ . '/../app/home.php',
];
$content = $pages[$page] ?? $pages['home'];
include __DIR__ . '/../app/header.php';
include $content;
include __DIR__ . '/../app/footer.php';
?>