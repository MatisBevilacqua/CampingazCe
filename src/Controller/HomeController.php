<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Contacts;
use App\Form\ContactsType;

class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(Request $request, EntityManagerInterface $entityManager): Response
    {

        $contacts = new Contacts();
        $form = $this->createForm(ContactsType::class, $contacts);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid()){
            $contacts = $form->getData();
        }

        $entityManager->persist($contacts);
        $entityManager->flush();

        return $this->render('user/home/home.html.twig', [
            'form' => $form,
        ]);
    }
}
