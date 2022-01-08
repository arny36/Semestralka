<?php

namespace App\Controllers;

use App\Config\Configuration;
use App\Core\AControllerBase;
use App\Models\Kontakt;
use App\Models\Prispevok;
use App\Models\Udalost;

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

            ]);
    }
    public function podujatie()
    {
        return $this->html(Udalost::getAll());
    }


    public function galeria()
    {
        return $this->html(Prispevok::getAll());


    }

    public function kontakt()
    {
        return $this->html(Kontakt::getAll());
    }



    public function pridajPrispevok()
    {
        return $this->html(
            []
        );

    }

    public function pridajUdalost()
    {
        return $this->html(
            []
        );

    }
    public function pridajKontakt()
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

        if ($this->skontroluj($_POST['nazov'],  $_POST['popis'])){
            if ($_FILES["obrazok"]["error"] == UPLOAD_ERR_OK) {

                $tmp_name = $_FILES['obrazok']['tmp_name'];

                $name = time()."_".$_FILES["obrazok"]["name"];
                $path = Configuration::UPLOAD_DIR . "/$name";
                move_uploaded_file($tmp_name, $path);


                $novyPrispevok = new Prispevok();
                $novyPrispevok->obrazok = $name;
                $novyPrispevok->setNazov($_POST['nazov']);
                $novyPrispevok->setDatum($_POST['datum']);
                $novyPrispevok->setPopis($_POST['popis']);
                $novyPrispevok->save();


                $this->redirectToGaleria("Uspesne ste pridali prvok");
            }else {
                $this->redirectToGaleria("Nepodarilo sa pridat prvok - Obrazok sa nenašiel");
            }

        } else {
            $this->redirectToGaleria("Nepodarilo sa pridat prvok - Vyplňte všetky polia");
        }





    }

    public function skontroluj($nazov,$popis)
    {
        if(!($nazov==null)){

                if(!($popis==null)){
                    return true;
                }

        }
        return false;

    }

    public function vymaz() {
        if (isset($_GET['id'])) {
            $art = Prispevok::getOne($_GET['id']);
            $art->delete();
            $this->redirectToGaleria("Uspesne ste vymazali prvok");
        } else
        {
            $this->redirectToGaleria("Nepodarilo sa vymazať prvok");

        }


    }

    public function uprav(){

        if ($this->skontroluj($_POST['nazov'],  $_POST['popis'])){


            $novyPrispevok = Prispevok::getOne($_GET['id']);
            if ($_FILES["obrazok"]["error"] == UPLOAD_ERR_OK) {
                $tmp_name = $_FILES['obrazok']['tmp_name'];

                $name = time() . "_" . $_FILES["obrazok"]["name"];
                $path = Configuration::UPLOAD_DIR . "/$name";
                move_uploaded_file($tmp_name, $path);


                $novyPrispevok->setObrazok($name);
            }
            $novyPrispevok->setNazov($_POST['nazov']);
            $novyPrispevok->setDatum($_POST['datum']);
            $novyPrispevok->setPopis($_POST['popis']);

            $novyPrispevok->save();

            $this->redirectToGaleria("Podarilo sa upraviť prvok");


        }   else {
            $this->redirectToGaleria("Zadali ste zle parametre");
        }



        }




    public function pridajUda()
    {

        if ($this->skontroluj($_POST['nazov'],  $_POST['popis'])){
            if ($_FILES["obrazok"]["error"] == UPLOAD_ERR_OK) {

                $tmp_name = $_FILES['obrazok']['tmp_name'];

                $name = time()."_".$_FILES["obrazok"]["name"];
                $path = Configuration::UPLOAD_DIR . "/$name";
                move_uploaded_file($tmp_name, $path);


                $novyPrispevok = new Udalost();
                $novyPrispevok->obrazok = $name;
                $novyPrispevok->setNazov($_POST['nazov']);
                $novyPrispevok->setDatum($_POST['datum']);
                $novyPrispevok->setPopis($_POST['popis']);
                $novyPrispevok->setZucastneni(0);
                $novyPrispevok->save();


                $this->redirectToUdalost("Podarilo sa upraviť prvok");
            }

        }

    }

    public function pridajKont()
    {


        $novyKontakt = new Kontakt();
        $novyKontakt->setMeno($_POST['meno']);
        $novyKontakt->setPriezvisko($_POST['priezvisko']);
        $novyKontakt->setPozicia($_POST['pozicia']);
        $novyKontakt->setEmail($_POST['email']);
        $novyKontakt->save();


        $this->redirectToKontakt("Podarilo sa upraviť prvok");

    }

    public function vymazKontakt()
    {


        if (isset($_GET['id'])) {
            $kont = Kontakt::getOne($_GET['id']);
            $kont->delete();
            $this->redirectToKontakt("Podarilo sa vymazať prvok");
        } else
        {
            $this->redirectToGaleria("Nepodarilo sa vymazať prvok");

        }

    }

    public function zucasni(){
        if (isset($_GET['id'])) {

            $udalost = Udalost::getOne($_GET['id']);
            $udalost->setZucastneni();
            $udalost->save();
            $this->redirectToUdalost("Uspesne ");
        } else
        {
            $this->redirectToUdalost("Neuspesne");
        }

    }

    public function vymaz1() {
        if (isset($_GET['id'])) {
            $art = Udalost::getOne($_GET['id']);
            $art->delete();
            $this->redirectToUdalost("Uspesne ste vymazali prvok");
        } else
        {
            $this->redirectToUdalost("Nepodarilo sa vymazať prvok");

        }


    }

    public function redirectToUdalost($vypis)
    {
        if ($vypis=="") {

            header("Location:?c=home&a=podujatie");
        }else {
            header("Location:?c=home&a=podujatie&error=$vypis");
        }
        die();
    }

    public function redirectToKontakt($vypis)
    {
        if ($vypis=="") {

            header("Location:?c=home&a=kontakt");
        }else {
            header("Location:?c=home&a=kontakt&error=$vypis");
        }
        die();
    }

    public function redirectToGaleria($vypis)
    {
        if ($vypis=="") {

            header("Location:?c=home&a=galeria");
        }else {
        header("Location:?c=home&a=galeria&error=$vypis");
        }
        die();
    }
}