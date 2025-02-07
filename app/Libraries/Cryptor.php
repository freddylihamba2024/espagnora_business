<?php
    namespace App\Libraries;
    
    class Cryptor{
        
        protected static $secret_key = '6"BsUQ.q520)vO3g`bg-eyf622p3Z#';
        protected static $secret_iv = 'bPlC~fqFzVf3XSRM8yjz';
        protected static $encrypt_method = "AES-256-CTR";
        
        public static function encrypt($value)
        {
            if(is_array($value) || is_object($value)) {
                $value = json_encode($value);
            }
            $output = false;
            // hash
            $key = hash('sha512', self::$secret_key);

            // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
            $iv = substr(hash('sha512', self::$secret_iv), 0, 16);
            
            //do the encyption given text/string/number
            $output = openssl_encrypt($value, self::$encrypt_method, $key, 0, $iv);
            $output = base64_encode($output);
            return $output;
        }
        
        
        public static function decrypt($value)
        {
            $output = false;
            // hash
            $key = hash('sha512', self::$secret_key);

            // iv - encrypt method AES-256-CBC expects 16 bytes - else you will get a warning
            $iv = substr(hash('sha512', self::$secret_iv), 0, 16);        
            //decrypt the given text/string/number
            $output = openssl_decrypt(base64_decode($value), self::$encrypt_method, $key, 0, $iv);
            return $output;
        }
    }
