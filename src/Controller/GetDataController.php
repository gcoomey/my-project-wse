<?php

namespace App\Controller;

use App\Entity\Login;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class GetDataController extends AbstractController
{
    /**
     * @Route("/SimpleGet", name="index")
     */
    public function index()
    {
        $person = $this->getDoctrine()->getRepository(Login::Class)
			->find(1);
			
		if (!$person) {
			throw $this->createNotFoundException(
			'No person found for ID'.$id
			);
		}
		
		return new response ('Hello there:'.$person->getUsername());
	}
}
		
	
		
		
  