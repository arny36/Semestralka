<?php

namespace App\Models;

use App\Core\Model;
class Zucasneni extends Model
{

    public $id;
    public $id_prispevku;
    public $email_hlasovatela;
    /**
     * Udalost constructor.
     * @param $id
     * @param $id_prispevku
     * @param $email_hlasovatela;
     */
    public function __construct()
    {
        $this->id = 0;
        $this->id_prispevku = 0;
        $this->email_hlasovatela = null;
    }


    public function setIdPrispevku($id_prispevku): void
    {
        $this->id_prispevku = $id_prispevku;
    }

    public function setEmail($nazov): void
    {
        $this->email_hlasovatela = $nazov;
    }

    public function getIdPrispevku()
    {
       return  $this->id_prispevku;
    }

    public function getEmail()
    {
        return $this->email_hlasovatela;
    }




    static public function setDbColumns()
    {
        return ['id','id_prispevku','email_hlasovatela'];
    }

    static public function setTableName()
    {
        return 'zucasneni';
    }
}