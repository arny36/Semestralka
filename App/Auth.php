<?php
namespace App;

use http\Env\Request;

class Auth
{
    public static function prihlasit($email){
        $_SESSION['email'] = $email;
    }

    public static function odhlasit(){
        unset($_SESSION['email']);
    }

    public static function jePrihlaseny(){
        return isset($_SESSION['email']);
    }


}