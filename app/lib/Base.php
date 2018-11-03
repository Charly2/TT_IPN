<?php
/**
 * Created by PhpStorm.
 * User: Charly
 * Date: 27/10/2018
 * Time: 12:18 AM
 */


    define(PATH_URL,'/TT_IPN/');

function extractCod($obj,$cod)
{
    if(is_array($obj))
    {
        foreach($obj as $cmp => $val)
        {
            $objN[$cod.$cmp]=$val;
        }
        return $objN;

    }
    return null;
}



?>
