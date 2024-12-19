<?php

// Get the requested URI
$requestUri = $_SERVER['REQUEST_URI'];
$requestFile = ltrim($requestUri, '/');

// List of valid routes (files)
$validRoutes = [
    'about.php', 'callforpaper.php', 'editorialboard.php',
    'guidelines.php', 'author.php', 'calendar.php',
    'contact.php', 'filemanager.php', 'header.php',
    'footer.php', 'home.php', 'news.php',
    'register.php', 'speaker.php', 'thrustareas.php'
];

// Check if the requested file is valid
if (in_array($requestFile, $validRoutes)) {
    include $requestFile;
} else {
    // Default to home.php or show a 404 error
    if ($requestFile === '' || $requestFile === 'index.php') {
        include 'home.php';
    } else {
        http_response_code(404);
        echo "404 Not Found";
    }
}
