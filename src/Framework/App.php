<?php

class App {

    private function index(){
        return header("Location: index.php");
    }

    public function run()
    {
        echo 'Bonjour a tous';
        //header("Location: index.php");
    }



    private function montrer ($view){
        return header("Location:" . $view . ".php");
    }

}