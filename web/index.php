<?php
$loader = require_once '../vendor/autoload.php';

// Create the application
$app = new Veto\App('../config/app.json');

// Handle the incoming request
$request = new \Veto\HTTP\Request;
$request->initWithGlobals();
$response = $app->handle($request);

// Send the output
$response->send();
