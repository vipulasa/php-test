<?php
$page = $_GET['page'] ?? 'home';

$pages = ['home', 'about', 'gallery', 'contact'];

if (!in_array($page, $pages)) {
    $page = '404';
}

$title = ucfirst($page);

$content = '';

// This is where you can dynamically load content

$content = 'lorem ipsum dolor sit amet';
