<?php

namespace App\Controllers;

use App\Config\Configuration;

use App\Models\Prispevok;


/**
 * Class HomeController
 * Example of simple controller
 * @package App\Controllers
 */
class HomeController extends AControllerRedirect
{

    public function index()
    {
        return $this->html(
            [

            ]);
    }


    public function galeria()
    {
        return $this->html(Prispevok::getAll());


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
        if (strlen($_POST['nazov']) < 3 || preg_match('/[^a-zA-Z]/', $_POST['nazov'])) {

            $this->redirect("?c=home&a=pridajPrispevok", "V názve je možné použiť len písmena a musí byť dlhší ako 3 znaky");
            return;


        }
        if (strlen($_POST['popis']) < 30) {

            $this->redirect("?c=home&a=pridajPrispevok", "Popis musí byť dlhší ako 30 znakov");
            return;

        }


        $tmp_name = $_FILES['obrazok']['tmp_name'];


        $name = time() . "_" . $_FILES["obrazok"]["name"];

        if (!(preg_match('/\.(jpg|png|jpeg)$/',  $name))) {
            if ($tmp_name == null) {
                $this->redirect("?c=home&a=pridajPrispevok", "Nevybrali ste žiadny obrázok");
                return;
            }

            $this->redirect("?c=home&a=pridajPrispevok", "Súbor môže byť len typu png jpg alebo jpeg");
            return;

        }

        if (empty(str_replace(array("0", "-", ":", " "), "", $_POST['datum']))) {
            $this->redirect("?c=home&a=pridajPrispevok", "Musíte zadať dátum");
            return;
        }


        $path = Configuration::UPLOAD_DIR . "/$name";
        move_uploaded_file($tmp_name, $path);


        $novyPrispevok = new Prispevok();
        $novyPrispevok->obrazok = $name;
        $novyPrispevok->setNazov(ucfirst($_POST['nazov']));
        $novyPrispevok->setDatum($_POST['datum']);
        $novyPrispevok->setPopis($_POST['popis']);
        $novyPrispevok->save();

        $this->redirect("?c=home&a=pridajPrispevok", "Uspešne ste pridali prvok");
    }


    public function vymaz()
    {
        if (isset($_GET['id'])) {
            $art = Prispevok::getOne($_GET['id']);
            $art->delete();
            $this->redirect("?c=home&a=galeria", "Uspesne ste vymazali");
        } else {
            $this->redirect("?c=home&a=galeria", "Nepodarilo sa vymazať prvok");

        }


    }

    public function uprav()
    {
        if ( strlen($_POST['nazov']) < 3 || preg_match('/[^a-zA-Z]/', $_POST['nazov'])) {

            $this->redirect("?c=home&a=galeria", "V názve je možné použiť len písmena a musí byť dlhší ako 3 znaky");
            return;


        }
        if (strlen($_POST['popis']) < 30) {

            $this->redirect("?c=home&a=galeria", "Popis musí byť dlhší ako 30 znakov");
            return;

        }


        $tmp_name = $_FILES['obrazok']['tmp_name'];


        $name = time() . "_" . $_FILES["obrazok"]["name"];
        if ($tmp_name != null){
            if (!(preg_match('/\.(jpg|png|jpeg)$/', $name))) {


                $this->redirect("?c=home&a=galeria", "Súbor môže byť len typu png jpg alebo jpeg");
                return;

            }
        }

        if (empty(str_replace(array("0", "-", ":", " "), "", $_POST['datum']))) {
            $this->redirect("?c=home&a=galeria", "Musíte zadať dátum");
            return;
        }

        $novyPrispevok = Prispevok::getOne($_GET['id']);


        $path = Configuration::UPLOAD_DIR . "/$name";
        move_uploaded_file($tmp_name, $path);

        if ($tmp_name != null) {
        $novyPrispevok->setObrazok($name);
        }

        $novyPrispevok->setNazov($_POST['nazov']);
        $novyPrispevok->setDatum($_POST['datum']);
        $novyPrispevok->setPopis($_POST['popis']);

        $novyPrispevok->save();

        $this->redirect("?c=home&a=galeria", "Uspesne ste upravili prvok");

    }






















}