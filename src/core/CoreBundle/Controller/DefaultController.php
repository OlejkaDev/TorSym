<?php
// src/Controller/DefaultController.php
namespace App\CoreBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Debug\Debug;

class DefaultController extends Controller
{
	
	
    public function homepage()
    {
		
		$tor = $this->get('torrent');
		
		return $this->render('index.html.twig', array(
            'number' => $tor::timeout,
        ));
    }
}