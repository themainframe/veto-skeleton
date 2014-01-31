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

    public function sayHello()
    {
        return new TwigResponse('Welcome.html', array(
            'version' => $this->get('app')->version
        ));
    }

    public function sayYourName($yourName)
    {
        return new TwigResponse('Welcome.html', array(
            'version' => $this->get('app')->version,
            'name' => $yourName
        ));
    }
}
