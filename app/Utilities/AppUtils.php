<?php
namespace App\Utilities;

use Exception;

class AppUtils
{
    public static function control_value($value, $message)
    {
            if(empty($value) || $value==null)
            {
                throw new Exception($message);
            }
    }

}

?>