<?php

class HomeController{

    public function indexAction($hola="hola")
    {
      // Controlador principal en esta carpeta crear los demas controladores.

      	$post=new PostModel();
      	$values=$post->getAll();
        return new View("home/index", ["title" => "Blog", "layout" => "on", "nameLayout" => "layout","values"=>$values]);
    }

}
