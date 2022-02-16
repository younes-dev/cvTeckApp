<?php

namespace App\Controller;

use App\Entity\Post;
use App\Repository\PostRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class OffersController extends AbstractController
{
    /**
     * @Route("/offers", name="offers_list", methods={"GET"})
     */
    public function index(PostRepository $postRepository): Response
    {
            return $this->render('offers/index.html.twig', [
                'controller_name' => 'OffersController',
//                'offers' => $postRepository->findAll(),
            ]);
    }


    /**
     * @Route("/offers/{id}", name="offers_show", methods={"GET"})
     */
    public function show(PostRepository $postRepository): Response
    {
        return $this->render('offers/index.html.twig', [
            'post' =>  $postRepository->find(),

        ]);
    }
}
