<?php

namespace App\Controllers;

use App\Config\Configuration;
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


                $this->redirectToIndex("Uspesne ste pridali prvok");
            }else {
                $this->redirectToIndex("Nepodarilo sa pridat prvok - Obrazok sa nenašiel");
            }

        } else {
            $this->redirectToIndex("Nepodarilo sa pridat prvok - Vyplňte všetky polia");
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
            $this->redirectToIndex("Uspesne ste vymazali prvok");
        } else
        {
            $this->redirectToIndex("Nepodarilo sa vymazať prvok");

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