<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\AboutMe;
use App\Entity\LoggedIn;

class LoggedIngController extends AbstractController
{
    /**
     * @Route("/logged_in", name="logged_in", methods={"POST"})
     */
    public function index(): Response
    {
        $user = new AboutMe();
        $loggedIn = new LoggedIn();

        return $this->render('logged_in/index.html.twig', [
            'controller_name' => $user->changeMyName(),
            'controller_text' => $loggedIn->getText(),
        ]);
    }
}
