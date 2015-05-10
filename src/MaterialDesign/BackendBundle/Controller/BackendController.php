<?php

namespace MaterialDesign\BackendBundle\Controller;

use Symfony\Component\HttpFoundation\Request;

class BackendController extends CustomController
{
    public function indexAction()
    {
        return $this->render('BackendBundle:Backend:index.html.twig');
    }

    public function saveMessageAction(Request $request) {
        $jsonResponse = json_encode(array('ok' => false));
        ldd($request->isXmlHttpRequest(), $request->isMethod('post'));
        if ($request->isXmlHttpRequest()) {
           ldd($request->request);
        }

        return $this->getHttpJsonResponse($jsonResponse);
    }
}
