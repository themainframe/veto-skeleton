<?php
$loader = require_once '../vendor/autoload.php';

// Load configuration
$config = new \Veto\Configuration\Hive();
$config->load('../config/app.yml');

// Create the application
$app = new Veto\App(true, $config->all());

// Create a request from the current environment
$environment = new \Veto\Collection\Bag($_SERVER);
$request = \Veto\HTTP\Request::createFromEnvironment($environment);

// Handle the incoming request
$response = $app->handle($request);

// Send the output
$response->send();
