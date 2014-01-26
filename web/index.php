<?php

$loader = require_once '../vendor/autoload.php';

class SomeClass
{
    public function __construct(SomeArgClass $foo)
    {
        print 'I was passed a ' . get_class($foo);
    }
}

class SomeArgClass
{
    public function lol()
    {
        return 'LOL!';
    }
}

$app = new Veto\App;
$request = new \Veto\HTTP\Request;
$request->initWithGlobals();
$app->handle($request);
