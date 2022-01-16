<?php
// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function index()
    {

        return new Response(
            "<html>
            <head>
                <title>HomePage</title>
            </head>
            <body>
                <h1>Bienvenue sur Lucky-site</h1>
                <p>Merci d'utiliser notre site</p>
            </body>
        </html>"
        );
    } 
}