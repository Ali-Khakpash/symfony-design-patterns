<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;


class UserFixtures extends Fixture
{
     private $passwordEncoder;

     public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {
         $user = new User();
         $user->setEmail('ali@gmail.com');
         $user->setPassword($this->passwordEncoder->encodePassword(
            $user,
            'stalingerad1945'
        ));

         $user->setRoles(['ROLE_USER','ROLE_ADMIN']);

         $manager->persist($user);


         $manager->flush();


        $user = new User();
        $user->setEmail('saman@gmail.com');
        $user->setPassword($this->passwordEncoder->encodePassword(
            $user,
            'stalingerad1945'
        ));

        $user->setRoles(['ROLE_USER']);

        $manager->persist($user);


        $manager->flush();
    }

}
