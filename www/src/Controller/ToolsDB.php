<?php
/**
 * Created by PhpStorm.
 * User: Professional
 * Date: 01.07.2018
 * Time: 21:31
 */

namespace App\Controller;


use App\Entity\Organization;
use App\Entity\PlaceJob;
use App\Entity\Users;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bridge\Doctrine\Tests\Fixtures\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;

class ToolsDB extends AbstractController
{
    /**
     * @Route("/job/add", name="job_addUser")
     */
    public function addjobAction()
    {
        $em = $this->getDoctrine()->getManager();

        $user = new Users();
        $user ->setFirstname('Александр');
        $user ->setMiddlename('Сергеевич');
        $user ->setLastname('Пушкин');
        $user ->setInn('8947345345354890');
        $user ->setSnils('7667877898233');

        $em  ->persist($user);

        $em ->flush();

        return new Response('Saved new product with id '.$user->getId());
    //    return $this->render('page/job.html.twig');
    }

    /**
     * @Route("/placejob/add", name="placaejob_add")
     */
    public function addplacaejobAction()
    {
        $em = $this->getDoctrine()->getManager();

        $placaejob = new PlaceJob();
        $placaejob ->setOkmo('34586905567');
        $placaejob ->setSnils('9762345358233');

        $em  ->persist($placaejob);

        $em ->flush();

        return new Response('Saved new product with id '.$placaejob->getId());
        //    return $this->render('page/job.html.twig');
    }



    /**
     * @Route("/job/{id}", name="show_User")
     */
    public function showuserAction($id)
    {
       $user= $this->getDoctrine()
           ->getRepository(Users::class)
           ->find($id);
       if(!$user){
           throw $this->createNotFoundException(
               'Not found users.'.$id
           );
       }

        return new Response('Saved new product with id '.$user->getFirstname());
        //    return $this->render('page/job.html.twig');
    }

    /**
     * @Route("/job/delet/{id}", name="delet_User")
     */
    public function deleteuserAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(Users::class)->find($id);

        if (!$user) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        $em->remove($user);
        $em->flush();

        return new Response('delet '.$id);
        //    return $this->render('page/job.html.twig');
    }

    /**
     * @Route("/placejob/delet/{id}", name="delet_Placejob")
     */
    public function deleteplacejobAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $placejob = $em->getRepository(PlaceJob::class)->find($id);

        if (!$placejob) {
            throw $this->createNotFoundException(
                'No delete for id '.$id
            );
        }

        $em->remove($placejob);
        $em->flush();

        return new Response('delet '.$id);
    }

    /**
     * @Route("/job/update/{id}", name="update_User")
     */
    public function updateAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $user = $em->getRepository(Users::class)->find($id);

        if (!$user) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }

        $user ->setFirstname('Александр');
        $user ->setMiddlename('Сергеевич');
        $user ->setLastname('Пушкин');
        $user ->setInn('8947345345354890');
        $user ->setSnils('7667877898233');

        $em->flush();

        return new Response('delet '.$id);
        //    return $this->render('page/job.html.twig');
    }

}
