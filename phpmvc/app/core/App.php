<?php 

class App
{
    protected $controller = 'Home';
    protected $method = 'index';
    protected $parameters = [];

    public function __construct()
    {
        $url = $this->parseURL();
        
        if(file_exists('../app/controllers/' . $url[0] . '.php'))
        {
            $this->controller = $url[0];
            unset($url[0]);
        }else{
            echo 'tidak ada file yang namanya sesuai';
        }

        require_once '../app/controllers/' . $this->controller . '.php';

        //instansiasi dengan class yang ada di folder controllers
        $this->controller = new $this->controller;

        //cek apakah di url ditulis method
        if(isset($url[1]))
        {
            //cek apakah method ada di folder controller
            if(method_exists($this->controller, $url[1]))
            {
                $this->method = $url[1];
                //hapus array ke-1
                unset($url[1]);
            }
        }

        if( !empty($url)){
            $this->parameters = array_values($url);
        }

        //jalankan controller , method dan parameters jka ada
        call_user_func_array([$this->controller,$this->method],$this->parameters);
    }

    public function parseURL()
    {
        if(isset($_GET['url']))
        {
            $url = rtrim($_GET['url'],'/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/',$url);
            return $url;
        }
    }
}

?>