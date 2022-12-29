<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Parteners;

class PartenersController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }

    #[Route('user/offers/parteners', name: 'app_parteners')]
    public function index(): Response
    {   
        $repository = $this->entityManager->getRepository(Parteners::class);
        $parteners = $repository->findAll();

        return $this->render('user/offers_all/parteners/index.html.twig', [
            'parteners' => $parteners
        ]);
    }
}
