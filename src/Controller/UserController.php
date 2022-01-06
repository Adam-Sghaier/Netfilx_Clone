<?php

namespace App\Controller;

use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    /* INJECTION DE DEPENDANCE*/
    private $repo;

    public function __construct(UserRepository $repo)
    {
        $this->repo = $repo;
    }

    /**
     * @Route("/profile", name="profile")
     */
    public function index()
    {
        if ($this->getUser()) {
            return $this->render('user/index.html.twig', ['user' => $this->getUser()]);
        }
    }
}
