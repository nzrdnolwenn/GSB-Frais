<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Visiteur;
use App\Form\LoginFormType;
use App\Form\Visiteur1Type;
use App\Repository\UserRepository;
use App\Repository\VisiteurRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/visiteur')]
class VisiteurController extends AbstractController
{
    #[Route('/index', name: 'app_visiteur_index', methods: ['GET'])]
    public function index(VisiteurRepository $visiteurRepository): Response
    {
        return $this->render('visiteur/index.html.twig', [
            'visiteurs' => $visiteurRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_visiteur_new', methods: ['GET', 'POST'])]
    public function new(Request $request, UserRepository $userRepository): Response
    {
        $user = new User();
        $form = $this->createForm(LoginFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->save($user, true);

            return $this->redirectToRoute('app_visiteur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('visiteur/new.html.twig', [
            'visiteur' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_visiteur_show', methods: ['GET'])]
    public function show(Visiteur $visiteur): Response
    {
        return $this->render('visiteur/show.html.twig', [
            'visiteur' => $visiteur,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_visiteur_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, User $user, UserRepository $userRepository): Response
    {
        $form = $this->createForm(LoginFormType::class, $user);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $userRepository->save($user, true);

            return $this->redirectToRoute('app_visiteur_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('visiteur/edit.html.twig', [
            'visiteur' => $user,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_visiteur_delete', methods: ['POST'])]
    public function delete(Request $request, Visiteur $visiteur, VisiteurRepository $visiteurRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$visiteur->getId(), $request->request->get('_token'))) {
            $visiteurRepository->remove($visiteur, true);
        }

        return $this->redirectToRoute('app_visiteur_index', [], Response::HTTP_SEE_OTHER);
    }
}
