<?php

namespace App\Controller;

use App\Entity\Login;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class LoginController extends AbstractController
{
    /**
     * @Route("/login", name="login")
     */
    public function index()
    {
        $entityManager = $this->getDoctrine()->getManager();
		
		$login = new Login();
		$login->setUsername ('Joe Byrne');
		$login->setPassword ('Gae1lge');
		$login->setAcctype ('Manager');
	
		
		$entityManager->persist($login);
		
		$entityManager->flush();
		
		return $this->render('login/index.html.twig',[
			'controller_name'=>'LoginController',
			]);
		
		
		
    }
}
