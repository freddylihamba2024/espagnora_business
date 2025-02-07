<?php
    namespace App\Libraries;

    class Hush{

        public static function verify($password,$hash){
            return password_verify($password,$hash);
        }

        public static function make($password){
            return password_hash($password,PASSWORD_BCRYPT);
        }

    }
?>