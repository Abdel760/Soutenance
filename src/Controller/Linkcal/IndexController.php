<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 19/03/2018
 * Time: 16:53
 */

namespace App\Controller\Linkcal;


use Symfony\Flex\Response;

class IndexController
{
    public function index() {
        return new Response("<html><body><h1>PAGE D'ACCUEIL</h1></body></html>");
    }
}
