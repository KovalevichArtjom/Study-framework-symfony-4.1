<?php
/**
 * Created by PhpStorm.
 * User: Professional
 * Date: 30.06.2018
 * Time: 2:04
 */

namespace App\Controller;

use App\Entity\Organization;
use App\Entity\Users;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ArticleController extends AbstractController
{
    /**
     * @Route("/", name="app_homepage")
     */
    public function homepage(){

        return $this->render('article/homepage.html.twig');
    }

    /**
     * @Route("/organization/", name="app_organization")
     */
    public function organization()
    {
        $user= $this->getDoctrine()
            ->getRepository(Organization::class)
            ->findAll();

        return $this->render('page/organization.html.twig',[
            'data' => $user
        ]);
    }

    /**
     * @Route("/users/", name="app_users")
     */
    public function users()
    {
        $user= $this->getDoctrine()
            ->getRepository(Users::class)
            ->findAll();

        return $this->render('page/users.html.twig',[
            'data' => $user
        ]);
    }

    /**
     * @Route("/job/", name="app_job")
     */
    public function jobAction()
    {
        $user= $this->getDoctrine()
            ->getRepository(Users::class)
            ->findAll();

        return $this->render('page/job.html.twig',[
                'data' => $user
                //'middlename' => $user->getMiddlename(),
                //'lastname' => $user->getLastname(),
                //'inn' => $user ->getInn(),
                //'snils' => $user ->getSnils()
    ]);

    }
}