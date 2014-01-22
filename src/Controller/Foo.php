<?php
namespace Controller;

use Veto\HTTP\Request;
use Veto\HTTP\Response;

class Foo
{
    public function homeAction(Request $request)
    {
        $resp = new Response('Should be a lol: ');
        $resp->setStatus(418, 'Server is a teapot');
        return $resp;
    }
}
