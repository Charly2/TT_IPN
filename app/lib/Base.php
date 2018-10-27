<?php
/**
 * Created by PhpStorm.
 * User: Charly
 * Date: 27/10/2018
 * Time: 12:18 AM
 */


    define(PATH_URL,'http://localhost/tt/');

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