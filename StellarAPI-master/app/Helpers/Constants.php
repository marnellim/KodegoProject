<?php
namespace App\Helpers;

class Constants
{
    public static function getUniqueId($model){
        $codes =  mt_rand(1000000000, 9999999999);
        if($model->find($codes))
            return self::getUniqueId($model);
        return $codes;
    }
}
?>