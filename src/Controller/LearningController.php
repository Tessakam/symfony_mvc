<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\AboutMe;

class LearningController extends AbstractController
{
    /**
     * @Route("/", name="learning")
     */
    public function index(): Response
    {
        $user = new AboutMe();
        return $this->render('learning/index.html.twig', [
            'controller_name' => $user->changeMyName(),
        ]);
    }

    /**
     * @Route("/about", name="about")
     */
    public function aboutme()
    {
        $user = new AboutMe();
        return $this->render('learning/about.html.twig', [
            'controller_name' => $user->changeMyName(),
        ]);
    }
}
