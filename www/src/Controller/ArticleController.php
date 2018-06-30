<?php
/**
 * Created by PhpStorm.
 * User: Professional
 * Date: 30.06.2018
 * Time: 2:04
 */

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class ArticleController
{
    /**
     * @Route("/news/{slug}")
     */
    public function show($slug)
    {
        return new Response(sprintf('Future page to show article: "%s"', $slug));
    }

}