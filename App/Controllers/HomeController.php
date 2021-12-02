<?php

namespace App\Controllers;

use App\Core\AControllerBase;
use App\Models\Prispevok;

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
        return $this->html(Prispevok::getAll());


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

    public function pridajPrispevok()
    {
        return $this->html(
            []
        );

    }

    public function upravPrispevok()
    {
        return $this->html(
            []
        );

    }


    public function pridaj()
    {

        if ($this->skontroluj($_POST['nazov'], $_POST['obrazok'], $_POST['popis'])){
            $art = new Prispevok();
            $art->setObrazok($_POST['obrazok']);
            $art->setNazov($_POST['nazov']);
            $art->setDatum($_POST['datum']);
            $art->setPopis($_POST['popis']);
            $art->save();
            $this->redirectToIndex("Uspesne ste pridali prvok");
        } else {
            $this->redirectToIndex("Nepodarilo sa pridat prvok");
        }





    }

    public function skontroluj($nazov,$obrazok,$popis)
    {
        if(!($nazov==null)){
            if(!($obrazok==null)) {
                if(!($popis==null)){
                    return true;
                }
            }
        }
        return false;

    }

    public function vymaz() {
        if (isset($_GET['id'])) {
            $art = Prispevok::getOne($_GET['id']);
            $art->delete();
            $this->redirectToIndex("Uspesne ste vymazali prvok");
        } else
        {
            $this->redirectToIndex("Nepodarilo sa vymazať prvok");

        }


    }

    public function uprav(){

        if ($this->skontroluj($_POST['nazov'], $_POST['obrazok'], $_POST['popis'])){
            $art = Prispevok::getOne($_GET['id']);
            $art->setObrazok($_POST['obrazok']);
            $art->setNazov($_POST['nazov']);
            $art->setDatum($_POST['datum']);
            $art->setPopis($_POST['popis']);

            $art->save();

            $this->redirectToIndex("Podarilo sa upraviť prvok");
        }   else {
            $this->redirectToIndex("Zadali ste zle parametre");
        }



        }


    public function redirectToIndex($vypis)
    {
        if ($vypis=="") {

            header("Location:?c=home&a=galeria");
        }else {
        header("Location:?c=home&a=galeria&error=$vypis");
        }
        die();
    }
}