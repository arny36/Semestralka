<?php
namespace App;


class Auth
{
    public static function prihlasit($email,$id){
        $_SESSION['email'] = $email;
        $_SESSION['id'] = $id;
    }

    public static function odhlasit(){
        unset($_SESSION['email']);
    }


    public static function idPrihlaseneho(){
        $id = $_SESSION['id'];
        return($id);
    }

    public static function ktoJePrihlaseny(){

        $nazov = $_SESSION['email'];
        return($nazov);
    }


    public static function jePrihlaseny(){
        return isset($_SESSION['email']);
    }

    public static function jePrihlasenyAdmin(){
        if(isset($_SESSION['email'])){
            if($_SESSION['email']  == 'admin@gmail.com'){

                return true;
            }

        }
        return false;


    }


}