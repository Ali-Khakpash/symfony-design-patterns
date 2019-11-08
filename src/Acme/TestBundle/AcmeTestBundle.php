<?php

// src/Acme/TestBundle/AcmeTestBundle.php
namespace App\Acme\TestBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class AcmeTestBundle extends Bundle
{

    public function boot()
    {
        parent::boot();
        date_default_timezone_set("Asia/Tehran");
    }

}