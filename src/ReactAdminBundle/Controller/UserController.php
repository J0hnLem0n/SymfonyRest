<?php

namespace ReactAdminBundle\Controller;

use Symfony\Component\Serializer\Serializer;
use Symfony\Component\Serializer\Encoder\XmlEncoder;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;

use Symfony\Component\HttpFoundation\Response;
use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\Controller\Annotations\Route;
use ReactAdminBundle\Entity\Users;

class UserController extends FOSRestController
{
    /**
     * @return Response
     * @Route("/", name="index")
     */
    public function indexAction()
    {
//        $encoders = array(new XmlEncoder(), new JsonEncoder());
//        $normalizers = array(new ObjectNormalizer());
//        $serializer = new Serializer($normalizers, $encoders);
//
//        $users = $this
//            ->getDoctrine()
//            ->getRepository('ReactAdminBundle:Users')
//            ->findAll();
//        $jsonContent = $serializer->serialize($users, 'json');
//        $response = new Response($jsonContent, 200, array('Content-Type'=> 'application/json'));
        $users = $this
            ->getDoctrine()
            ->getRepository('ReactAdminBundle:Users')
            ->findAll();
        print_r($users);
        $data = array("hello" => "world");
        $view = $this->view($users);
        return $this->handleView($view);
    }
}