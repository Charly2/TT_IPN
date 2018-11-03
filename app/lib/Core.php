<?php
/**
 * Created by PhpStorm.
 * User: Charly
 * Date: 27/10/2018
 * Time: 12:12 AM
 */

class Core
{
    protected $controller = 'App';
    protected $method = 'index';
    protected $parameters = [];
    protected $query = "";

    /**
     * Core constructor.
     * @param string $controller
     * @param string $method
     * @param array $parameters
     */
    public function __construct(){
        $url = $this->getUrl();
        if (file_exists('../app/controllers/'.ucwords($url[0].'.php'))){
            include_once '../app/controllers/'.ucwords($url[0].'.php');
            $this->controller = ucwords($url[0]);
            unset($url[0]);
        }
        require_once '../app/controllers/'.$this->controller.'.php';

        if (isset($url[1])){
            if (method_exists($this->controller,$url[0])){
             $this->method = ucwords($url[1]);
             unset($url[1]);
            }
        }

        $this->parameters = $url ? array_values($url):[];

        call_user_func_array([$this->controller,$this->method],$this->parameters);




       echo "<h4>Controlador: ".$this->controller."</h4>";
       echo "<h4>Method: ".$this->method."</h4>";


    }


    public function getUrl(){
       // extract(extractCod($_GET,'p_'), EXTR_PREFIX_SAME, "wddx");
        $p_url=$_GET['url'];
        if (isset($p_url)){
            $url = rtrim($p_url,'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/',$url);
            return $url;
        }
    }

}
