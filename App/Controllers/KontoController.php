<?php

namespace App\Controllers;

use App\Models\Registracia;
use App\Auth;
use mysqli;


class KontoController extends AControllerRedirect
{

    public function index()
    {
        return $this->html(
            [

            ]);
    }


    public function login()
    {
        return $this->html([]);
    }

    public function konta()
    {
        return $this->html(Registracia::getAll());
    }

    public function register()
    {
        return $this->html([]);
    }


    public function zaregistruj()
    {
        if (strlen($_POST['meno']) < 1 || preg_match('/[^a-zA-Z]/', $_POST['meno'])) {

            $this->redirect("?c=konto&a=register", "V názve je možné použiť len písmena a musí byť dlhší ako 3 znaky");
            return;


        }
        if (strlen($_POST['priezvisko']) < 1 || preg_match('/[^a-zA-Z]/', $_POST['priezvisko'])) {

            $this->redirect("?c=konto&a=register", "V názve je možné použiť len písmena a musí byť dlhší ako 3 znaky");
            return;


        }
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){

            $this->redirect("?c=konto&a=register", "Email je v nesprávnom formáte");
            return;
        }
        $conn = new mysqli("localhost", "root", "dtb456");

        if (isset($_POST['email'])) {
            $email = $_POST['email'];
            $insData = mysqli_query($conn, "INSERT INTO `register`(`email`) VALUES('$email')") or
            $this->redirect("?c=konto&a=register", "Email sa už používa");
        }



        if (strlen($_POST['heslo']) < 8 ) {

            $this->redirect("?c=konto&a=register", "Vaše heslo musí byť dlhšie ako 8 znakov");
            return;


        }
        if ($_POST['heslo'] != $_POST['heslo2'] ) {
            $this->redirect("?c=podujatia&a=pridajUdalost", "Heslá sa nezhodujú");
            return;
        }

        $udaj = new Registracia();
        $udaj->setMeno(ucfirst($_POST['meno']));
        $udaj->setPriezvisko(ucfirst($_POST['priezvisko']));
        $udaj->setHeslo(password_hash($_POST['heslo'],PASSWORD_DEFAULT));
        $udaj->setEmail($_POST['email']);
        $udaj->save();


        $this->redirect("?c=konto&a=login","Uspesne ste sa zaregistrovali");

    }


    public function prihlas()
    {
        $heslo = $_POST['heslo'];
        $data = Registracia::getAll('email = ?', [$_POST['email']]);
        if (password_verify($heslo, $data[0]->heslo)){

            Auth::prihlasit($data[0]->email,$data[0]->id);

            $this->redirect("?c=home&a=index","");
            return;
        }
        $this->redirect("?c=home&a=login","Nepodarilo sa prihlasit");

    }


    public function odhlas()
    {
        Auth::odhlasit();
        $this->redirect("?c=home&a=index","Uspesne ste sa odhlasili");


    }












}