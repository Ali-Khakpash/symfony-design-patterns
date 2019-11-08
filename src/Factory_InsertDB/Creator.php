<?php
namespace App\Factory_InsertDB;
//Creator.php
use App\Controller\AppController;

abstract class Creator extends AppController
{
    protected abstract function factoryMethod(Model $Entity);
    public function doFactory($Entity)
    {

        //$countryProduct=$productNow;
        //$mfg= $this->factoryMethod($countryProduct);
        //return $mfg;
    }
}
?>