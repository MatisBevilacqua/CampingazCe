<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use App\Entity\News;


class NewsController extends AbstractController
{

    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager){
        $this->entityManager = $entityManager;
    }

    #[Route('/', name: 'app_news')]
    public function index(): Response
    {
       $repository = $this->entityManager->getRepository(News::class);
       $news = $repository->findAll();
        return $this->render('user/news/index.html.twig', [
            "news" => $news
        ]);
    }
}
