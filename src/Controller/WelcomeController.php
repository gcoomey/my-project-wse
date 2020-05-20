<?php
namespace App\Controller;

// src/Controller/WelcomeController.php

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
	/**
      * @Route("/")
      */
    public function product()
    {       
        return new Response(
            'Your choice of delicious doughnuts!'
        );

	}
		/**
      * @Route("/place-order")
      */

	public function order()
	{
		return new Response(
            'Place your order here!'
        );
    }
}