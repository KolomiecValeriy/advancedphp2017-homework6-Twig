<?php

namespace Kolomiets\MyBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class ContactsController extends Controller
{
    public function contactAction()
    {
        return $this->render('@KolomietsMy/Contact/contact.html.twig', [
            'company' => 'home work 6',
            'urls' => [
                'Home Page' => $this->generateUrl('kolomiets_my_homepage'),
                'Content Page' => $this->generateUrl('kolomiets_my_content'),
            ],
            'contacts' => [
                'address' => 'City, Street XX',
                'email' => 'some@email.com',
                'phone' => '+3 8 (999) 123-45-67',
            ],
        ]);
    }
}
