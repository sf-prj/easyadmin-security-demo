<?php

declare(strict_types=1);

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/", name="homepage")
 */
class Homepage extends AbstractController
{
    /**
     * __invoke()
     * @return Response
     */
    public function __invoke(): Response
    {
        return $this->render('layout.html.twig');
    }
}
