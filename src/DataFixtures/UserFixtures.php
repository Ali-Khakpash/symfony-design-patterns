<?php

namespace App\DataFixtures;

use App\Entity\User;
use App\Entity\Product;
use App\Entity\Category;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use App\Repository\ProductRepository;


class UserFixtures extends Fixture
{
     private $passwordEncoder;

     public function __construct(UserPasswordEncoderInterface $passwordEncoder)
    {
        $this->passwordEncoder = $passwordEncoder;
    }

    public function load(ObjectManager $manager)
    {

         $category = new Category();
         $category->setName('Computer Peripherals');

        //$repo= $this->getDoctrine()->getRepository(Category::class);

         $product = new Product();
         $product->setName('White Hat');
/*         $user->setPassword($this->passwordEncoder->encodePassword(
            $user,
            'stalingerad1945'
        ))*/;

         $product->setPrice(55.35);
         $product->setDescription('Just For Hackers');
         $product->setCreatedAt(new \DateTime());
         // relates this product to the category
         $product->setCategory($category);


         $manager->persist($product);
         $manager->persist($category);


        //Second Test
        $category = new Category();
        $category->setName('Computer Peripherals');



        $product = new Product();
        $product->setName('Red Bulls');
        /*         $user->setPassword($this->passwordEncoder->encodePassword(
                    $user,
                    'stalingerad1945'
                ))*/;

        $product->setPrice(1000.35);
        $product->setDescription('Just For Bastards');
        $product->setCreatedAt(new \DateTime());
        // relates this product to the category
        $product->setCategory($category);


        $manager->persist($product);
       // if() {
            $manager->persist($category);
       // }

         $manager->flush();


/*        $user = new User();
        $user->setEmail('saman@gmail.com');
        $user->setPassword($this->passwordEncoder->encodePassword(
            $user,
            'stalingerad1945'
        ));

        $user->setRoles(['ROLE_USER']);

        $manager->persist($user);


        $manager->flush();*/
    }

}
