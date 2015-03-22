<?php
$loader = require_once '../vendor/autoload.php';

// Create the application
$app = new Veto\App('../config/app.yml');

// Create a request from the current environment
$environment = new \Veto\Collection\Bag($_SERVER);
$request = \Veto\HTTP\Request::createFromEnvironment($environment);

// Handle the incoming request
$response = $app->handle($request);

// Send the output
$response->send();
