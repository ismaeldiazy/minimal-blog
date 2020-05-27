<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;

/**
 * Class IndexController
 * @package App\Controller
 * @Route("/index")
 */

class IndexController extends AbstractController {
    /**
     * @Route("/hello/{name}", name="method_index")
     */
    public function index(string $name = "world") {

        return $this->json([
            'texto' => "Hola $name"
        ]);
    }
}