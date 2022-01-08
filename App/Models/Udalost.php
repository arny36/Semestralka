<?php

namespace App\Models;

use App\Core\AControllerBase;
use App\Core\DB\Connection;
use App\Core\Model;
class Udalost extends Model
{

    public $id;
    public $nazov;
    public $obrazok;
    public $popis;
    public $datum;
    public $zucastneni;

    /**
     * Udalost constructor.
     * @param $id
     * @param $nazov
     * @param $obrazok;
     * @param $popis;
     * @param $datum;
     * @param $zucastneni;
     */
    public function __construct()
    {
        $this->id = 0;
        $this->nazov = null;
        $this->datum = null;
        $this->popis = null;
        $this->obrazok = null;
        $this->zucastneni = 0;

    }

    public function getIdc()
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


    public function getZucastneni()
    {
        return $this->zucastneni;
    }

    public function setZucastneni(): void
    {
        $this->zucastneni += 1;
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
        return ['id','nazov','popis', 'obrazok','zucastneni',  'datum'];
    }

    static public function setTableName()
    {
        return 'podujatie';
    }
}