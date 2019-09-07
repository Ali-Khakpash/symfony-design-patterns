<?php
namespace App\Controller\HandleUserRoles;

use App\Entity\Category;
use App\Entity\Product;
use App\Entity\User;
use App\Form\ProductType;
use App\Repository\UserHandleRepository;
use App\Security\LoginFormAuthenticator;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\UserHandle;
use App\Entity\RoleHandle;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\Tests\Encoder\PasswordEncoder;
use Symfony\Component\Security\Guard\GuardAuthenticatorHandler;


/**
 * @Route("/user")
 */

class HandleUserController extends AbstractController {




    /**
     * @Route("/", name="user_index", methods={"GET"})
     */
    public function showAllUsers(UserHandleRepository $userHandleRepositoryRepository): Response
    {
        return $this->render('HandleUser/userlist.html.twig', [
            'users' => $userHandleRepositoryRepository->findAll(),
        ]);
    }


    /**
     * @Route("/{id}", name="user_show", methods={"GET"})
     */
    public function show(UserHandle $userHandle): Response
    {
        $repository = $this->getDoctrine()->getRepository(Category::class);
        // $category = $repository->findOneBy(['id' => $userHandle->getCategory()->getId()]);

        return $this->render('HandleUser/singleuser.html.twig', [
            'user' => $userHandle,

        ]);
    }


    /**
     * @Route("/add", name="addUserIndex", methods={"GET"})
     */
    public function index(): Response
    {
        return $this->render('HandleUser/index.html.twig', [
            /*'products' => $productRepository->findAll(),*/
        ]);
    }


    /**
     * @Route("/adduser", name="addUser", methods={"POST"})
     */
    public function addUser(Request $request , UserPasswordEncoderInterface $passwordEncoder, GuardAuthenticatorHandler $guardHandler, LoginFormAuthenticator $authenticator): Response
    {
        $userrepo = $this->getDoctrine()->getRepository(UserHandle::class);
        $check1 = $userrepo->findOneBy(['name' => $request->get('name')]);

        $rolerepo = $this->getDoctrine()->getRepository(RoleHandle::class);
        $check2 = $rolerepo->findOneBy(['role' => $request->get('role')]);

        $role = new RoleHandle();
        $user = new UserHandle();
        $user->setName($request->get('name'));
        $user->setPassword($passwordEncoder->encodePassword(
            $user,
            $request->get('password')
        ));
        //$user->addUserRole($role->setRole($request->get('role')));
        $user->setRoles(explode(" ",strtoupper('ROLE_'.$request->get('role'))));

        // $role->setRole($check2);
        // $user->addUserRole($role->setRole('n'));

        $entityManager = $this->getDoctrine()->getManager();
        if(!$check1){
            $entityManager->persist($user);
        }
        else{
            return new Response('ops this user was added before');
        }
        // if(){
        $entityManager->persist($role);
        //   }

        $entityManager->flush();

        return $this->render('HandleUser/index.html.twig', [
            /*'products' => $productRepository->findAll(),*/
        ]);
    }


    /**
     * @Route("/{id}/edit", name="user_edit", methods={"GET","POST"})
     */
    public function edit(UserHandle $userHandle , Request $request ): Response
    {

        $userHandle->setName(strval($request->get('name')));
        //$userHandle->setPassword('ggh');
        $userHandle->setRoles(explode(" ",strtoupper('ROLE_'.$request->get('role'))));

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($userHandle);
        $entityManager->flush();

        return $this->render('HandleUser/edituser.html.twig', [
            'user' => $userHandle,
        ]);
    }




    /**
     * @Route("/addroles", name="addUserRoles", methods={"GET"})
     */
    public function addRoles(Request $request): Response
    {
        return $this->render('HandleUser/indexroles.html.twig', [
            /*'products' => $productRepository->findAll(),*/
        ]);
    }



    /**
     * @Route("/addrolesaction", name="addUserRolesAction", methods={"POST"})
     */
    public function addUsr(Request $request): Response
    {

        $user = new RoleHandle();
        $user->setRole($request->get('role'));

        $entityManager = $this->getDoctrine()->getManager();
        $entityManager->persist($user);
        $entityManager->flush();

        return $this->render('HandleUser/indexroles.html.twig', [
            /*'products' => $productRepository->findAll(),*/
        ]);

    }



    /**
     * @Route("/testAccess", name="", methods={"GET"})
     */
    public function testAccessControll(): Response
    {

        $this->denyAccessUnlessGranted('ROLE_SUPER');
        return $this->render('base.html.twig', [
            /*'products' => $productRepository->findAll(),*/
        ]);

    }




}