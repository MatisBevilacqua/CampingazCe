<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Tickets;

class TicketController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }

    #[Route('user/offers/ticket', name: 'app_ticket')]
    public function index(): Response
    {
        $repository = $this->entityManager->getRepository(Tickets::class);
        $tickets = $repository->findAll();

        return $this->render('user/offers_all/ticket/index.html.twig', [
            'tickets' => $tickets,
        ]);
    }
}
