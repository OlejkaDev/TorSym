<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Debug\Debug;

class TorrentsController extends Controller
{

  public function torrentsAction() {

    return new Response('
        <html>
            <body>
                <h1>Hello Torrents</h1>
            </body>
        </html>
    ');

  }

}
