<?php
/**
 * Created by PhpStorm.
 * User: Charly
 * Date: 27/10/2018
 * Time: 12:34 AM
 */

class Login extends Controller
{

    /**
     * Login constructor.
     */
    public function __construct()
    {
        echo "Login";
    }


    public function index()
    {
        echo "Index";
    }
    public function ver($id)
    {
        print_r($id);
        echo "ver";
    }
    public function inicio()
    {
        parent::setView('inicios');
    }



}