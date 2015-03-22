<?php
$loader = require_once '../vendor/autoload.php';

// Create the application
$app = new Veto\App('../config/app.yml');

// Handle the incoming request
$request = new \Veto\HTTP\Request;
$request->initWithGlobals();
$response = $app->handle($request);

// Send the output
$response->send();
