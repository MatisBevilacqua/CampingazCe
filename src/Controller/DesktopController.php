<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Desktop;

class DesktopController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }

    #[Route('user/offers/desktop', name: 'app_desktop')]
    public function index(): Response
    {   
        $repository = $this->entityManager->getRepository(Desktop::class);
        $desktop = $repository->findAll();
        return $this->render('user/offers_all/desktop/index.html.twig', [
            'desktop' => $desktop
        ]);
    }
}   
