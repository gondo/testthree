<?php

namespace Brooter\ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BrooterForumBundle:Default:index.html.twig');
    }
}
