<?php
/**
 * Created by PhpStorm.
 * User: eric
 * Date: 4/11/18
 * Time: 4:29 PM
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/")
     */
    public function homepage()
    {
        return new Response('Hello world!');
    }
}