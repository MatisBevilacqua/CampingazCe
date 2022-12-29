<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Travels;

class TravelController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }

    #[Route('user/offers/travel', name: 'app_travel')]
    public function index(): Response
    {
        $repository = $this->entityManager->getRepository(Travels::class);
        $travels = $repository->findAll();

        return $this->render('user/offers_all/travel/index.html.twig', [
            'travels' => $travels,
        ]);
    }
}
