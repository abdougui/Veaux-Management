<?php
namespace Projet\App;
use PDO;
    class Model{
        static $connected=false;
        static $connections;
        static $connection = array();
        public $database;
        public $id;
        public function __construct(){
            //si la connection est deja rétabli
            if(Model::$connected){
                $this->db = Model::$connections ;
                return true ;
            }

            try{
                //Connection a la base de donnée
                $pdo = new PDO('mysql:host='.DB['DB_HOST_NAME'].';dbname='.DB['DB_DATABASE'].';',DB['DB_USER_NAME'],DB['DB_PASSWORD'],
                              array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
                //les erreurs
                $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_WARNING) ;
                Model::$connections = $pdo ;
                Model::$connected=true;
                $this->database = $pdo ;
                
            }
            catch(PDOException $e){
                    //die($e->getMessage());
                    die('Impossible de se connecter à la base de donnée') ;
                }
            

        }
        protected function execute($action,$data,$table){
            if($action=='update'){

            }else if($action=='insert'){

            }else if($action=='delete'){
                
            }else if($action==''){
                
            }
        }
        function relativedate($sec,$date=null) {
            $secs = date('U') - $sec ;
            $second = 1;
            $minute = 60;
            $hour = 60*60;
            $day = 60*60*24;
            $week = 60*60*24*7;
            $month = 60*60*24*7*30;
            $year = 60*60*24*7*30*365;
            if ($secs <= 0) { $output = "à l'instant ";
            }elseif ($secs > $second && $secs < $minute) { $output = round($secs/$second)." second";
            }elseif ($secs >= $minute && $secs < $hour) { $output = round($secs/$minute)." minute";
            }elseif ($secs >= $hour && $secs < $day) { $output = round($secs/$hour)." heure";
            }elseif ($secs >= $day && $secs < $week) { $output = round($secs/$day)." jour";
            }elseif ($secs >= $week && $secs < $month) { $output = round($secs/$week)." semaine";
            }elseif ($secs >= $month && $secs < $year) { $output = round($secs/$month)." mois";
            }elseif ($secs >= $year && $secs < $year*10) { $output = round($secs/$year)." année";
            }else{ $output = $date; }
           
            if ($output <> "à l'instant " and strpos($output,'mois') === false){
                $output = (substr($output,0,2)<>"1 ") ? ' Il y a '.$output."s" : ' Il y a '.$output;
            }
        return $output;
    }
        public function dateNow(){
          date_default_timezone_set('Africa/Casablanca') ;
          setlocale(LC_TIME, 'French_Monaco') ;
          return ucfirst(strftime("%A")).' le '.Date('d/m/Y').', à '.Date('H:i:s') ;
      }
        function url_custom_encode($titre) {
          $titre = htmlspecialchars($titre);
          $find = array('À', 'Á', 'Â', 'Ã', 'Ä', 'Å', 'Æ', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ð', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ', 'Ö', 'Ø', 'Ù', 'Ú', 'Û', 'Ü', 'Ý', 'ß', 'à', 'á', 'â', 'ã', 'ä', 'å', 'æ', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï', 'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ø', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', 'Œ', 'œ', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', 'Š', 'š', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', 'Ÿ', '?', '?', '?', '?', 'Ž', 'ž', '?', 'ƒ', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?');
          $replace = array('A', 'A', 'A', 'A', 'A', 'A', 'AE', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'D', 'N', 'O', 'O', 'O', 'O', 'O', 'O', 'U', 'U', 'U', 'U', 'Y', 's', 'a', 'a', 'a', 'a', 'a', 'a', 'ae', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i', 'n', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y', 'A', 'a', 'A', 'a', 'A', 'a', 'C', 'c', 'C', 'c', 'C', 'c', 'C', 'c', 'D', 'd', 'D', 'd', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'E', 'e', 'G', 'g', 'G', 'g', 'G', 'g', 'G', 'g', 'H', 'h', 'H', 'h', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'I', 'i', 'IJ', 'ij', 'J', 'j', 'K', 'k', 'L', 'l', 'L', 'l', 'L', 'l', 'L', 'l', 'l', 'l', 'N', 'n', 'N', 'n', 'N', 'n', 'n', 'O', 'o', 'O', 'o', 'O', 'o', 'OE', 'oe', 'R', 'r', 'R', 'r', 'R', 'r', 'S', 's', 'S', 's', 'S', 's', 'S', 's', 'T', 't', 'T', 't', 'T', 't', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'W', 'w', 'Y', 'y', 'Y', 'Z', 'z', 'Z', 'z', 'Z', 'z', 's', 'f', 'O', 'o', 'U', 'u', 'A', 'a', 'I', 'i', 'O', 'o', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'U', 'u', 'A', 'a', 'AE', 'ae', 'O', 'o', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?', '?');
           $titre = str_replace($find, $replace, $titre);
           $titre = strtolower($titre);
           $mots = preg_split('/[^A-Z^a-z^0-9]+/', $titre);
           $encoded = "";
           foreach($mots as $mot) {
              if(strlen($mot) >= 3 OR str_replace(['0','1','2','3','4','5','6','7','8','9'], '', $mot) != $mot) {
                 $encoded .= $mot.'-';
              }
           }
          $encoded = substr($encoded, 0, -1);
          return $encoded;
        }
        public function save($sql)
        {
            $pre = $this->database->prepare($sql);
            $pre->execute() ;
            $this->id = $this->database->lastInsertId() ;
        }
}