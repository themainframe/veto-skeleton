<?php
namespace Controller;

use Veto\HTTP\Response;

class HelloWorld
{
    private $twig;
    private $version;

    public function __construct(\Twig_Environment $twig, $version)
    {
        $this->twig = $twig;
        $this->version = $version;
    }

    public function sayHello()
    {
        return new Response($this->twig->render(
            'Welcome.html',
            array(
                'version' => $this->version
            )
        ));
    }

    public function sayYourName($yourName)
    {
        return new Response($this->twig->render(
            'Welcome.html',
            array(
                'version' => $this->version,
                'name' => $yourName
            )
        ));
    }
}
