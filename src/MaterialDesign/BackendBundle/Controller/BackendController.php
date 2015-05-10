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
        if ($request->isXmlHttpRequest()) {
            // TODO: Get real avatar path
            $time = new \DateTime('now');
            $response = array('ok' => true, 'avatar' => '/material/web/bundles/backend/img/user-2.jpg',
                'time' => $time->format('d/m/Y - H:i'));
            $jsonResponse = json_encode($response);
        }

        return $this->getHttpJsonResponse($jsonResponse);
    }
}
