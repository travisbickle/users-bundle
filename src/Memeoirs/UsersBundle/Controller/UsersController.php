<?php

namespace Memeoirs\UsersBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UsersController extends Controller
{
    public function indexAction()
    {
        return $this->render('MemeoirsUsersBundle:Users:index.html.twig');
    }

    public function dashboardAction()
    {
        return $this->render('MemeoirsUsersBundle:Users:dashboard.html.twig');
    }
}
