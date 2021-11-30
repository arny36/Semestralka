<?php

namespace App\Models;

use App\Core\AControllerBase;
use App\Core\Model;
class Prispevok extends Model
{

    public $id;
    public $nazov;
    public $obrazok;
    public $popis;
    public $datum;
    /**
     * Prispevok constructor.
     * @param $id
     * @param $nazov
     * @param $obrazok;
     * @param $popis;
     * @param $datum;
     */
    public function __construct()
    {
        $this->id = 0;
        $this->nazov = null;
        $this->datum = null;
        $this->popis = null;
        $this->obrazok = null;
    }

    public function getId()
    {
        return $this->id;
    }



    public function getNazov()
    {
        return $this->nazov;
    }


    public function setNazov($nazov): void
    {
        $this->nazov = $nazov;
    }

    public function getDatum()
    {
        return $this->datum;
    }

    public function setDatum($datum): void
    {
        $this->datum = $datum;
    }


    public function getPopis()
    {
        return $this->popis;
    }

    public function setPopis($popis): void
    {
        $this->popis = $popis;
    }

    public function getObrazok()
    {
        return $this->obrazok;
    }


    public function setObrazok($obrazok): void
    {
        $this->obrazok = $obrazok;
    }



    static public function setDbColumns()
    {
        return ['id','nazov', 'obrazok', 'popis', 'datum'];
    }

    static public function setTableName()
    {
        return 'galeria';
    }
}