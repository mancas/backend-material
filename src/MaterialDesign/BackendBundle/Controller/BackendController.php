<?php

namespace MaterialDesign\BackendBundle\Controller;

class BackendController extends CustomController
{
    public function indexAction()
    {
        return $this->render('BackendBundle:Backend:index.html.twig');
    }
}
