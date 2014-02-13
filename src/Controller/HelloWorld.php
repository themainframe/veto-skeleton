<?php
namespace Controller;

use Veto\HTTP\Response;
use Veto\MVC\AbstractController;

class HelloWorld extends AbstractController
{
    public function __construct(\Twig_Environment $twig)
    {
        $this->twig = $twig;
    }

    public function sayHello()
    {
        return $this->render(

            'Welcome.html',

            array(
                'version' => $this->get('app')->version
            )

        );
    }

    public function sayYourName($yourName)
    {
        return $this->render(

            'Welcome.html',

            array(
                'version' => $this->get('app')->version,
                'name' => $yourName
            )

        );
    }
}
