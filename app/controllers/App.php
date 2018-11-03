<?php
/**
 * Created by PhpStorm.
 * User: Charly
 * Date: 27/10/2018
 * Time: 12:34 AM
 */

class App extends Controller
{

    /**
     * Login constructor.
     */
    public function __construct()
    {
        echo "Index";
    }
    public function index()
    {
        echo "Index";
    }
    public function hola($n)
    {

        parent::setView('inicio');
    }
}