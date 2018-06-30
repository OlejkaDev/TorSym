<?php

namespace App\TorrentBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Debug\Debug;

class TorrentController extends Controller
{

  public function index($id) {

    return new Response('
        <html>
            <body>
                <h1>Hello '.$id.'</h1>
            </body>
        </html>
    ');

  }

}
