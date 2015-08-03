<?php

class PostController{

    public function indexAction()
    {
      	$post=new PostModel();
      	$values=$post->getAll();
        return new View("home/index", ["title" => "Blog", "layout" => "on", "nameLayout" => "layout","values"=>$values]);
    }

    public function newAction()
    {
    	return new View("posts/new", ["title" => "Blog", "layout" => "on", "nameLayout" => "layout"]);
    }

    public function editAction()
    {
    	$id=$_GET['id_post'];
        $post= new PostModel();
        $values=$post->get($id);
        return new View("posts/edit", ["title" => "Blog", "layout" => "on", "nameLayout" => "layout","values"=>$values]);
    }

    public function readAction()
    {

    	$id=$_GET['id_post'];
    	$post=new PostModel();
    	$values=$post->get($id);

        return new View("posts/read", ["title" => "Blog", "layout" => "on", "nameLayout" => "layout","values"=>$values]);
        
    }

    public function deleteAction()
    {
    	$del=$_GET['id'];
        $consulta= new PostModel();
        $consulta->delete($del);
    }
    
    public function updatevisitsAction()
    {
        $id=$_POST['id_post'];
        $consulta= new PostModel();
        $consulta->getVisits();
        $visits=$row['visits_post'];        
        $upvis=$visits+1;
        $consulta->updateVisits($id,$upvis);

    }
}
