<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BlogController extends AbstractController
{
    /**
     * @Route("/blog", name="blog")
     */
    public function index(): Response
    {
        return $this->render('blog/index.html.twig', [
            'controller_name' => 'BlogController',
        ]);
    }

    /**
     * @Route ("/", name="home")
     */
    public function home() {
        return $this->render('blog/home.html.twig');
    }

    /**
     * @Route ("/apropos", name="apropos")
     */
    public function apropos() {
        return $this->render('blog/apropos.html.twig');
    }

    /**
     * @Route ("/experience", name="experience")
     */
    public function experience() {
        return $this->render('blog/experience.html.twig');
    }

        /**
     * @Route ("/diplome", name="diplome")
     */
    public function diplome() {
        return $this->render('blog/diplome.html.twig');
    }
    
    /**
     * @Route ("/competence", name="competence")
     */
    public function competence() {
        return $this->render('blog/competence.html.twig');
    }

    /**
     * @Route ("/contact", name="contact")
     */
    public function contact() {
        return $this->render('blog/contact.html.twig');
    }
}
