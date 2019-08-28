<?php

namespace App\Controller;

use Narmafzam\JalaliDateBundle\Form\DataTransformer\NarmafzamDateTransformer;
use Narmafzam\JalaliDateBundle\Form\DataTransformer;
use Narmafzam\JalaliDateBundle\Model\Converter\DateConverter;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Form\DataTransformerInterface;
use Symfony\Component\Form\Exception\TransformationFailedException;
use Symfony\Component\Form\Exception\UnexpectedTypeException;
use Symfony\Component\Routing\Annotation\Route;

require_once __DIR__.'/../../vendor/autoload.php';
use Symfony\Component\Finder\Finder;

class TransformDate extends AbstractController
{



    /**
     * @var DateConverter
     */
  //  protected $dateConverter;

    /**
     * @var string
     */
   // protected $serverFormat;

    /**
     * @var string
     */
   // protected $locale;


    // private $dateConverter;

  /*  public function __construct(DateConverter $dateConverter)
    {
        $this->transformer = $dateConverter;
    }*/


    /**
     * @Route("/convertdate", name="convertdate", methods={"GET"})
     */

/*    public function getLocale()
    {
        return $this->locale;
    }*/

/*    public function getCalendar()
    {
        return $this->calendar;
    }*/


    public function transformdate (): Response
    {
       // $this->calendar = $locale == 'fa' ? 'persian' : 'gregorian';
        //$result = $this->dateConverter->georgianToPersian($gDate, $this->serverFormat, $this->getLocale(), $this->getCalendar(), false);

  /*      $finder = new Finder();
        $finder->files()->in('/hghgh');
        //$finder->

        if ($finder->hasResults()) {
            return new  Response('<h3> There are so many files </h3>');
        }

        else{
            return new  Response('<h3> There are no files </h3>');
        }*/

/*        foreach ($finder as $file) {
            $absoluteFilePath = $file->getRealPath();
            $fileNameWithExtension = $file->getRelativePathname();

            // ...
        }*/

     //$jalali = new NarmafzamDateTransformer($dateConverter, $serverFormat, $locale) ;
    // $jalali = $this->dateConverter->georgianToPersian('2019-08-28', $this->serverFormat, $this->getLocale(), $this->getCalendar(), false);
      //echo $jalali;
        return new Response(
            'There are no jobs in the database',
            Response::HTTP_OK
        );

    }

}


