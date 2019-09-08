<?php
namespace App\Controller\email;
use App\Entity\HostedPBXUser;
use FOS\UserBundle\Mailer\MailerInterface;
use FOS\UserBundle\Model\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ResetPass extends AbstractController
{

    /**
     * @Route("/resetpass", name="resetpass" , methods={"GET"})
     */

    public function enterEmail()
    {
        return $this->render('email/email.html.twig');
    }


    /**
     * @Route("/resetpasslink", name="resetPassLink", methods={"POST"})
     * @throws \Exception
     */
    public function resetPassLink(Request $request): Response
    {
       // $repo = $this->getDoctrine()->getRepository(HostedPBXUser::class);
       // $con = $repo->findOneBy(['email' => $request->get('email')]);
        $entityManager = $this->getDoctrine()->getManager();
        $user = $entityManager->getRepository(HostedPBXUser::class)->findOneBy(['email' => $request->get('email')]);
        $user->setRememberToken(random_bytes(2));

        $entityManager->persist($user);
        $entityManager->flush();


        return $this->render('HostedPBX/index.html.twig', [
            /* 'products' => $productRepository->findAll(),*/
        ]);
    }




    /**
     * @Route("/mail", name="mail")
     */

    public function index(\Swift_Mailer $mailer)
    {

        //$name = null;
        $message = (new \Swift_Message('Hello Email'))
            ->setFrom('ali.khakpash@gmail.com')
            ->setTo('gamestubbe@gmail.com')
            ->setBody(
                $this->renderView(
                // templates/emails/registration.html.twig
                    'email/resetpass.html.twig',
                    ['name' => 'f']
                ),
                'text/html'
            )

            // you can remove the following code if you don't define a text version for your emails
/*            ->addPart(
                $this->renderView(
                // templates/emails/registration.txt.twig
                    'emails/registration.txt.twig',
                    ['name' => $name]
                ),
                'text/plain'
            )*/
        ;

        $mailer->send($message);

         return new Response('ddd');
    }


}