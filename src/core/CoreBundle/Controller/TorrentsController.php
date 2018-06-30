<?php
// src/Controller/DefaultController.php
namespace App\CoreBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Debug\Debug;

class TorrentsController extends Controller
{
	
	
    public function index()
    {
		return $this->render('torrents.html.twig', array(
            'number' => 45
        ));
    }
}