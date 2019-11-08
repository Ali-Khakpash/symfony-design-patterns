<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
//use Narmafzam\JalaliDateBundle\NarmafzamJalaliDateBundle;
//use Narmafzam\JalaliDateBundle\Form\DataTransformer\NarmafzamDateTransformer;
//use Narmafzam\JalaliDateBundle\Twig\NarmafzamDateExtension;
//use Narmafzam\JalaliDateBundle\Form\Type\NarmafzamJalaliGregorianDateType;
//use Narmafzam\JalaliDateBundle\Form\Type\NarmafzamJalaliDateType;

class UserProfileController extends AbstractController
{

    /**
     * @Route("/userprofile", name="app_userprofile")
     */
    public function UserProfileController()
    {
/*        $this->denyAccessUnlessGranted('ROLE_USER');

        // or add an optional message - seen by developers
        $this->denyAccessUnlessGranted('ROLE_USER', null, 'User tried to access a page without having ROLE_USER');*/

        $this->denyAccessUnlessGranted('IS_AUTHENTICATED_FULLY');
        /** @var \App\Entity\User $user */
        $user = $this->getUser();


        return $this->render('userprofile.html.twig',['obj'=>$user]);


    }

    

}
