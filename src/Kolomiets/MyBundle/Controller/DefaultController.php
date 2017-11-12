<?php

namespace Kolomiets\MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('@KolomietsMy/Default/index.html.twig', [
            'urls' => [
                'Contacts' => $this->generateUrl('kolomiets_my_contacts'),
                'Content Page' => $this->generateUrl('kolomiets_my_content'),
            ],
        ]);
    }
}
