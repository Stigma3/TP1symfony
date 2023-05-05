<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Repository\PublicationRepository;
use Twig\Environment;
use Symfony\Component\HttpFoundation\Request;
use App\Entity\Publication;
use App\Form\PublicationFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Security\Http\Authentication\UserAuthenticatorInterface;
use App\Security\LoginAuthenticator;


class IndexController extends AbstractController
{
    #[Route('/login', name: 'app_index')]
    


     public function show(Request $request, PublicationRepository $PublicationRepository,EntityManagerInterface $entityManager, LoginAuthenticator $authenticator, UserAuthenticatorInterface $userAuthenticator): Response
     {
        
        $publication = new Publication();
        $form = $this->createForm(PublicationFormType::class, $publication);
        $form->handleRequest($request);

     if ($form->isSubmitted() && $form->isValid()) {
          $publication->setEnvoi(1);
          $publication->setNbLike(0);
          $publication->setNbLikes(0);
          $entityManager->persist($publication);
          $entityManager->flush();

      }
      

      return new Response($this->render('index/index.html.twig', [

          'publicationForm' => $form->createView(),



     ]));
}

     #[Route('/publications', name: 'app_publications')]

     public function index(Request $request, Environment $twig, PublicationRepository $PublicationRepository): Response
     {
     
    $offset = max(0, $request->query->getInt('offset', 0));
    $paginator = $PublicationRepository->getPublicationPaginator($offset);

    return new Response($twig->render('index/publications.html.twig', [
         'publications' => $paginator, 
         'previous' => $offset - PublicationRepository::PAGINATOR_PER_PAGE,
         'next' => min(count($paginator), $offset + PublicationRepository::PAGINATOR_PER_PAGE),
    ]));
    
     }
}




          
   
     




