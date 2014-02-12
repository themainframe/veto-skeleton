<?php
$loader = require_once '../vendor/autoload.php';

// Create the application
$app = new Veto\App('../config/app.json');

// Handle the incoming request
$request = new \Veto\HTTP\Request;
$request->initWithGlobals();
$app->handle($request);
