<?php
/**
* Dispatcher
* Permet de charger le controller en fonction de la requète utilisateur
**/
    class Dispatcher{

        //Objet Request prend tout les informations de URL
        var $request ;

        //Charge le controller en fonction du routing
        function __construct(){
            // debug($_SESSION) ;
            //URL taper par l'utilisateur
            $this->request = new \Projet\App\Request() ;
            //parser l'URL
            //Router::parse($this->request->url,$this->request);
            //charger le controller appellé par l'utilisateur
            $controller = $this->loadController() ;

            //action appellé par utilisateur
            $action = $this->request->action;
            /*faire appelle aux fonctions des controleurs qui correspend aux nom des actions tapez par l'utilisateur
            comme $controller->view($this->request->params) ;*/
        }
        //permet de générer une page d'erreur en cas de problème au niveau du routing (page inexistante)
        function error($message,$type=null){
            $controller = new Projet\App\Controller($this->request) ;
            $controller->e404($message) ;
        }

        //permet de charger un controleur
        function loadController(){
            $name = ucfirst($this->request->controller).'Controller' ;
            $file = ROOT.DS.'Controller'.DS.$name.'.php' ;
            /*if(!file_exists($file)){
                $this->error("Le controleur ".$this->request->controller." n'existe pas") ;
            }*/
            require_once $file;
            $controller = new $name($this->request);
            return $controller ;
        }
    }

