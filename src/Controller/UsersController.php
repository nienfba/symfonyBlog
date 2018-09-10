<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

use App\Entity\User;

use App\Repository\UserRepository;

class UsersController extends AbstractController
{
    /**
     * @Route("/users", name="users")
     */
    public function index(UserRepository $repository)
    {
        $users = $repository->findAll();

        return $this->render('users/index.html.twig', [
            'users' => $users
        ]);
    }

    /**
     * @Route("/users/{id}", name="userdetails", requirements={"id"="\d+"})
     */
    public function details(UserRepository $repository,$id)
    {
        $user = $repository->findOneById($id);

        return $this->render('users/details.html.twig', [
            'user' => $user
        ]);
    }

    /**
     * @Route("/users/add/", name="useradd", requirements={"id"="\d+"})
     * @Route("/users/edit/{id}", name="useredit", requirements={"id"="\d+"})
     */
    public function form(Users $user, ObjectManager $manager )
    {
        

        return $this->render('users/form.html.twig', [
            'form' => $form
        ]);
    }

    
    
}
