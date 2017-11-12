<?php

namespace Kolomiets\MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContentController extends Controller
{
    public function contentAction($align)
    {
        return $this->render('@KolomietsMy/Content/content.html.twig', [
            'align' => $align,
            'urls' => [
                'Home Page' => $this->generateUrl('kolomiets_my_homepage'),
                'Contacts' => $this->generateUrl('kolomiets_my_contacts'),
                'Horizontal content' => $this->generateUrl('kolomiets_my_content'),
                'Vertical content' => $this->generateUrl('kolomiets_my_content', [ 'align' => 'vertical' ]),
            ],
        ]);
    }
}
