<?php

namespace App\Models;

use App\Core\AControllerBase;
use App\Core\DB\Connection;
use App\Core\Model;
class Registracia extends Model
{
    public $id;
    public $meno;
    public $priezvisko;
    public $heslo;
    public $email;
    /**
     * Udalost constructor.
     * @param $id
     * @param $meno
     * @param $priezvisko;
     * @param $heslo;
     * @param $email;
     */
    public function __construct()
    {
        $this->id = 0;
        $this->meno = null;
        $this->priezvisko = null;
        $this->heslo = null;
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
    public function setHeslo($nazov): void
    {
        $this->heslo = $nazov;
    }
    public function setEmail($nazov): void
    {
        $this->email = $nazov;
    }
    static public function setDbColumns()
    {
        return ['id','meno','priezvisko', 'email','heslo'];
    }

    static public function setTableName()
    {
        return 'register';
    }
}