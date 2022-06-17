<?php

class App {
    protected $controller = 'Home';
    protected $method = 'index';
    protected $params = [];
    public function __construct()
    {
        if($this->ParseURL() == TRUE) {
            $url = $this->ParseURL();
        }
        else {
            $url = ['Home', 'index'];
        }
        
        // $debug = var_export($url, true);
        // $myfile = fopen("newfile.txt", "w");
        // $rizal = "Rizal Ganteng";
        // fwrite($myfile, $rizal);
        // fwrite($myfile, $debug);
        // fclose($myfile);
        // var_dump($url);
        // echo getcwd();

        // controller
        if( file_exists('../app/controllers/' . $url[0] . '.php') ){
            $this->controller = $url[0];
            unset($url[0]);
        }

        require_once '../app/controllers/' . $this->controller . '.php';
        $this->controller = new $this->controller;

        // method
        if( isset($url[1]) ) {
            if( method_exists($this->controller, $url[1]) ) {
                $this->method = $url[1];
                unset($url[1]);
            }
        }

        // params
        if( !empty($url) ) {
            $this->params = array_values($url);
        }
        // jalankan controller & method serta kirimkan parameter kalau ada
        call_user_func_array([$this->controller, $this->method], $this->params);
    }

    public function ParseURL() {
        if( isset($_GET['url']) ) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            // $url = array_slice($url,6);
            return $url;
        }
        else{
            return FALSE;
        }
    }

}
?>