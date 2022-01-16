<?php

namespace App\Controllers;

use App\Core\AControllerBase;


/**
 * Class HomeController
 * Example of simple controller
 * @package App\Controllers
 */
abstract class AControllerRedirect extends AControllerBase
{
    public function redirect($kam , $vypis)
    {

        if ($vypis == "") {
            header("Location:$kam");

        } else {

            header("Location:$kam&error=$vypis");
        }
    }



}