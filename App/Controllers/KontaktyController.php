<?php

namespace App\Controllers;



use App\Models\Kontakt;

class KontaktyController extends AControllerRedirect
{

    public function index()
    {
        return $this->html(
            [

            ]);
    }
    public function kontakt()
    {
        return $this->html(Kontakt::getAll());
    }



    public function pridajKontakt()
    {
        return $this->html(
            []
        );

    }

    public function pridajKont()
    {


        if ( strlen( $_POST['meno']) < 0 ||preg_match('/[^a-zA-Z]/', $_POST['meno'])) {

            $this->redirect("?c=kontakty&a=pridajKontakt", "V  mene je možné použiť len písmena a musí byť dlhší ako 3 znaky");
            return;


        }
        if ( strlen( $_POST['priezvisko']) < 0 ||preg_match('/[^a-zA-Z]/', $_POST['priezvisko'])) {

            $this->redirect("?c=kontakty&a=pridajKOntakt", "V priezvisku je možné použiť len písmena a musí byť dlhšie ako 3 znaky");
            return;


        }

        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

            $this->redirect("?c=kontakty&a=pridajKontakt", "Email je v nesprávnom formáte");
            return;
        }

        if (($_POST['pozicia']) ==null){

            $this->redirect("?c=kontakty&a=pridajKontakt", "Nevybrali ste žiadny typ kontaktu");
            return;
        }




        $novyKontakt = new Kontakt();
        $novyKontakt->setMeno(ucfirst($_POST['meno']));
        $novyKontakt->setPriezvisko(ucfirst($_POST['priezvisko']));
        $novyKontakt->setPozicia($_POST['pozicia']);
        $novyKontakt->setEmail($_POST['email']);
        $novyKontakt->save();


        $this->redirect("?c=kontakty&a=kontakt","Uspešne ste pridali kontakt");

    }

    public function vymazKontakt()
    {


        if (isset($_GET['id'])) {
            $kont = Kontakt::getOne($_GET['id']);
            $kont->delete();
            $this->redirect("?c=kontakty&a=kontakt","Uspesne ste vymazali prvok");
        } else
        {
            $this->redirect("?c=kontakty&a=kontakt","Nepodarilo sa vymazat prvok");

        }

    }










}