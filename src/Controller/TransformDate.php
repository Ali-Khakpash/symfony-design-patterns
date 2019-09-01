<?php

namespace App\Controller;

use Morilog\Jalali\Jalalian;
use Narmafzam\JalaliDateBundle\Form\DataTransformer\NarmafzamDateTransformer;
use Narmafzam\JalaliDateBundle\Form\DataTransformer;
use Narmafzam\JalaliDateBundle\Model\Converter\DateConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Symfony\Component\Form\Exception\UnexpectedTypeException;
use Symfony\Component\Routing\Annotation\Route;
use App\CustomFunctions\gregorian2jalali;

require_once __DIR__.'/../../vendor/autoload.php';
use Symfony\Component\Finder\Finder;

class TransformDate extends AbstractController
{

     private $test;

    /**
     * @Route("/convertdate", name="convertdate", methods={"GET"})
     */

    public function transformdate (): Response
    {


 /*       $this->test;
        $jalali = new gregorian2jalali;
        $jalali->mydate = "2007-02-14 H:i:s";
        $jal = $jalali->gregorian_to_jalali("yy/mm/dd");*/

        $date = Jalalian::now();


        return new Response(
            'Date:'.$date,
            Response::HTTP_OK
        );

    }

}


