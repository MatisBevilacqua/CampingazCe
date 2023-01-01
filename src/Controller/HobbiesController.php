<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\Hobbies;

class HobbiesController extends AbstractController
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }

    #[Route('user/offers/hobbies', name: 'app_hobbies')]
    public function index(): Response
    {
        $repository = $this->entityManager->getRepository(Hobbies::class);
        $hobbies = $repository->findAll();

        return $this->render('user/offers_all/hobbies/index.html.twig', [
            'hobbies' => $hobbies,
        ]);
    }
}
