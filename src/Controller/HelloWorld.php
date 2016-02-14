<?php
namespace Controller;

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
                'version' => $this->getContainer()->getParameter('version')
            )

        );
    }

    public function sayYourName($yourName)
    {
        return $this->render(

            'Welcome.html',

            array(
                'version' => $this->getContainer()->getParameter('version'),
                'name' => $yourName
            )

        );
    }
}
