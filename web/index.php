<?php
$loader = require_once '../vendor/autoload.php';
$app = new Veto\App;
$request = new \Veto\HTTP\Request;
$request->initWithGlobals();
$app->handle($request);
