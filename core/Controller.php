<?php 
namespace Projet\App;
class Controller
{
	    public $request ;
        private $vars       = array() ;
        public $layout      = 'error' ;//le theme par defaut
        private $rendered   = false ;
        protected $id ;
    /**
     * @param $viewName
     * @param $params
     */
    function __construct($request = null){
        if($request){
                $this->request = $request ;
                if(array_key_exists($request->controller,ROUTES)) {
                	$this->renderView();
                }
                //$this->renderView();
            }
        }
    protected function renderView(){
        $view = new View();
        $view->createView($this->layout,$this->vars);
    }
 	function e404($message,$type = null){
            $this->layout = "error" ;
            $this->set('message',$message) ;
            $this->renderView('error') ;
            die();
        }
     public function set($key,$value=null){
            if(is_array($key)){
                $this->vars += $key ;
            }
            else{
                $this->vars[$key] = $value ;
            }
    }
    function loadModel($name){
        if(!isset($this->$name)){
            $file = ROOT.DS.'Model'.DS.$name.'.php' ;
            require_once($file);
            $this->$name = new $name() ;
            }
    }
            //charger un model
}
