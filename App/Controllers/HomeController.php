<?php

namespace App\Controllers;

use App\Core\AControllerBase;

/**
 * Class HomeController
 * Example of simple controller
 * @package App\Controllers
 */
class HomeController extends AControllerBase
{

    public function index()
    {
        return $this->html(
            [
                'meno' => 'študent'
            ]);
    }

    public function galeria()
    {
        return $this->html(
            []
        );
    }
    public function kontakt()
    {
        return $this->html(
            []
        );
    }
    public function podujatia()
    {
        return $this->html(
            []
        );
    }
}