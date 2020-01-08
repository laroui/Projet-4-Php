<?php 

class Router{
    private $_ctrl;
    private $_view;

    public function routeReq(){

        $url = '';

        //CHARGEMENT LES CLASS DU DOSSIER models
        spl_autoload_register(function($class){
            require_once('models/'.$class.'.php');
        });

        try {
            if(isset($_GET['url']))
            {
                $url = explode('/',filter_var($_GET['url'],FILTER_SANITIZE_URL));
                $controllerClass = 'Controller'.$url[0];
                $controllerFile = 'controllers/'.$controllerClass.'.php';

                if(file_exists($controllerFile))
                {
                    require_once($controllerFile);
                    $this->_ctrl = $controllerClass($url);
                }else
                {
                    throw new Exception('404');
                }
            }else
            {
                require_once('controllers/ControllerAccueil.php');
                $this->_ctrl = new ControllerAccueil($url);
            }
        } catch (\Exception $e) {
            $php_errormsg = $e->getMessage();
            require_once('views/viewError.php');
        }
    }
}