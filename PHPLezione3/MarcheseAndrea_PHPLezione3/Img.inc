<?php

    class GestioneImmagini{
        
        public $path;

        function __construct($path = "MarcheseAndrea_PHPLezione3/immagini") {
            if($this->existDir($path)){
                $path = "http://localhost/".$path;
            }else{
                $path = "http://localhost/MarcheseAndrea_PHPLezione3/immagini";
            }
            $this->path = $path;
        }

        function getRandomImg(){ 
            if(count($this->checkDir()) == 0){
                echo "La cartella non contiene immagini";
                return;
            }  
            $img = $this->checkDir()[rand(0,count($this->checkDir())-1)];
            echo "<img src=".$this->path.$img.">";
            echo "<br>$img";
        }

        function checkDir(){
            $imgs = array();
            $currentPath = str_replace("http://localhost/","C:/xampp/htdocs/",$this->path);
            foreach(glob($currentPath.'/*.png') as $file) {
                array_push($imgs, str_replace($currentPath, "", $file));
            }
            foreach(glob($currentPath.'/*.jpeg') as $file) {
                array_push($imgs, str_replace($currentPath, "", $file));
            }
            foreach(glob($currentPath.'/*.jpg') as $file) {
                array_push($imgs, str_replace($currentPath, "", $file));
            }
            return $imgs;
        }

        function existDir($path){
            if(is_dir("c:/xampp/htdocs/".$path)){
                return true;
            }else{
                echo "directory non valida, path reimpostato di default<br>";
                return false;
            }
        }
    }
?>