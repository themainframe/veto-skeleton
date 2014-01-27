<?php
namespace Controller;

use Veto\MVC\AbstractController;
use Veto\HTTP\Request;
use Veto\HTTP\Response;

class HelloWorld extends AbstractController
{
    public function __construct(\Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    public function sayHelloAction(Request $request)
    {
        $resp = new Response($this->twig->render(
            'Welcome.html',
            array('version' => $this->get('app')->version)
        ));

        return $resp;
    }
}
