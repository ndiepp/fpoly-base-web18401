<?php

// Create Router instance
$router = new \Bramus\Router\Router();


// Define routes
require_once _DIR_ . '/admin.php';
require_once _DIR_ . '/client.php';


// Run it
$router->run();