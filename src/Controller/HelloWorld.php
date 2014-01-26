<?php
namespace Controller;

use Veto\MVC\AbstractController;
use Veto\HTTP\Request;
use Veto\HTTP\Response;

class HelloWorld extends AbstractController
{
    public function sayHelloAction(Request $request)
    {
        $twig = $this->get('twig');
        $resp = new Response($twig->render('Welcome.html'));

        return $resp;
    }
}
