<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Hobbies;
use App\Entity\Travels;
use App\Entity\Desktop;
use App\Entity\Parteners;
use App\Entity\Tickets;

class OffresController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }

    #[Route('user/offers', name: 'app_offres')]
    public function index(): Response
    {
        $repository = $this->entityManager->getRepository(Desktop::class);
        $desktop = $repository->findAll();

        $repository1 = $this->entityManager->getRepository(Travels::class);
        $travel = $repository1->findAll();

        $repository2 = $this->entityManager->getRepository(Hobbies::class);
        $hobbies = $repository2->findAll();

        $repository3 = $this->entityManager->getRepository(Parteners::class);
        $parteners = $repository3->findAll();

        $repository4 = $this->entityManager->getRepository(Tickets::class);
        $tickets = $repository4->findAll();


        return $this->render('user/offers_all/offers/offres.html.twig', [
            'travels' => $travel,
            'hobbies' => $hobbies,
            'parteners' => $parteners,
            'tickets' => $tickets
        ]);
    }
}
