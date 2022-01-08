<?php

namespace App\Models;

use App\Core\AControllerBase;
use App\Core\DB\Connection;
use App\Core\Model;
class Kontakt extends Model
{

    public $id;
    public $nazov;
    public $priezvisko;
    public $pozicia;
    public $email;
    /**
     * Udalost constructor.
     * @param $id
     * @param $meno
     * @param $priezvisko;
     * @param $pozicia;
     * @param $email;
     */
    public function __construct()
    {
        $this->id = 0;
        $this->meno = null;
        $this->priezvisko = null;
        $this->pozicia = 0;
        $this->email = null;
    }


    public function setMeno($nazov): void
    {
        $this->meno = $nazov;
    }

    public function setPriezvisko($nazov): void
    {
        $this->priezvisko = $nazov;
    }
    public function setPozicia($nazov): void
    {
        $this->pozicia = $nazov;
    }
    public function setEmail($nazov): void
    {
        $this->email = $nazov;
    }
    static public function setDbColumns()
    {
        return ['id','meno','priezvisko', 'pozicia','email'];
    }

    static public function setTableName()
    {
        return 'kontakt';
    }
}