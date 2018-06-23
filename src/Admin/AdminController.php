<?php
// src/Controller/DefaultController.php
namespace App\Admin;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Debug\Debug;

class AdminController extends Controller
{

    public function adminpage()
    {
        return new Response('
            <html>
                <body>
                    <h1>Hello admin</h1>
                </body>
            </html>
        ');
    }
}
