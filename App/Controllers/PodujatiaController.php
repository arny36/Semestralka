<?php

namespace App\Controllers;



use App\Auth;
use App\Config\Configuration;
use App\Models\Registracia;
use App\Models\Udalost;
use App\Models\Zucasneni;

class PodujatiaController extends AControllerRedirect
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
    public function pridajUdalost()
    {
        return $this->html(
            []
        );

    }

    public function pridajUda()
    {

        if (strlen($_POST['nazov']) < 3 || preg_match('/[^a-zA-Z]/', $_POST['nazov'])) {

            $this->redirect("?c=podujatia&a=pridajUdalost", "V názve je možné použiť len písmena a musí byť dlhší ako 3 znaky");
            return;


        }
        if (strlen($_POST['popis']) < 30) {

            $this->redirect("?c=podujatia&a=pridajUdalost", "Popis musí byť dlhší ako 30 znakov");
            return;

        }


        $tmp_name = $_FILES['obrazok']['tmp_name'];


        $name = time() . "_" . $_FILES["obrazok"]["name"];

        if (!(preg_match('/\.(jpg|png|jpeg)$/',  $name))) {
            if ($tmp_name == null) {
                $this->redirect("?c=podujatia&a=pridajUdalost", "Nevybrali ste žiadny obrázok");
                return;
            }

            $this->redirect("??c=podujatia&a=pridajUdalost", "Súbor môže byť len typu png jpg alebo jpeg");
            return;

        }

        if (empty(str_replace(array("0", "-", ":", " "), "", $_POST['datum']))) {
            $this->redirect("?c=podujatia&a=pridajUdalost", "Musíte zadať dátum");
            return;
        }


        $path = Configuration::UPLOAD_DIR . "/$name";
        move_uploaded_file($tmp_name, $path);
        $novyPrispevok = new Udalost();
        $novyPrispevok->obrazok = $name;
        $novyPrispevok->setNazov(ucfirst($_POST['nazov']));
        $novyPrispevok->setDatum($_POST['datum']);
        $novyPrispevok->setPopis($_POST['popis']);
        $novyPrispevok->setZucastneni(0);
        $novyPrispevok->save();


        $this->redirect("?c=podujatia&a=podujatie","Uspesne ste pridali prvok");



    }

    public function zucasnit(){
        if (isset($_GET['id'])) {
            $udalost = Udalost::getOne($_GET['id']);
            $prihlasny = Registracia::getOne(Auth::idPrihlaseneho());


            $vsetci  = Zucasneni::getAll('id_prispevku = ?', [$_GET['id']]);
            foreach ($vsetci as $zucasneni){
                if ($zucasneni->id_prispevku == $_GET['id']  && $zucasneni->email_hlasovatela == $prihlasny->email){

                    $zucasneni->delete();
                    $udalost->setZucastneni(-1);
                    $udalost->save();
                    $this->redirect("?c=podujatia&a=podujatie","Odhlasili ste sa ");
                    return;
                }

            }

            $zucasneny = new Zucasneni();
            $zucasneny->setIdPrispevku($_GET['id']);
            $zucasneny->setEmail($prihlasny->email);
            $zucasneny->save();
            $udalost->setZucastneni(1);
            $udalost->save();


            $this->redirect("?c=podujatia&a=podujatie","Zucastnili ste sa");
        } else
        {
            $this->redirect("?c=podujatia&a=podujatie","Nepodarilo sa zucastnit");
        }

    }

    public function vymazPodujatie() {
        if (isset($_GET['id'])) {
            $art = Udalost::getOne($_GET['id']);
            $art->delete();
            $this->redirect("?c=podujatia&a=podujatie","Uspesne ste vymazali prvok");
        } else
        {
            $this->redirect("?c=podujatia&a=podujatie","Nepodarilo sa vymazat prvok");

        }


    }








}