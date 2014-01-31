<?php
namespace Controller;

use Veto\MVC\AbstractController;
use Veto\HTTP\Request;
use Veto\HTTP\Response;
use Veto\Twig\HTTP\TwigResponse;

class HelloWorld extends AbstractController
{
    public function __construct(\Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    public function sayHello(Request $request)
    {
        return new TwigResponse('Welcome.html', array(
            'version' => $this->get('app')->version
        ));
    }

    public function sayYourName(Request $request, $yourName)
    {
        return new TwigResponse('Welcome.html', array(
            'version' => $this->get('app')->version,
            'name' => $yourName
        ));
    }
}
