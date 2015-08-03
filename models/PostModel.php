<?php

  class PostModel{

    protected $consult;
    public $rows;

    public function __construct()
    {
        $this->consult = new Querys();
    }


    public function get($value = null)
    {
        $query = $this->consult->getConsultar("
            SELECT *
            FROM post
            WHERE id_post = '$value'
        ");

        while($row = $query->fetch_array(MYSQLI_ASSOC)){
            $this->rows[] = $row;
        }

        return $this->rows;

    }
    public function getVisits($value = null)
    {
        $query = $this->consult->getConsultar("
            SELECT visits_post
            FROM post
            WHERE id_post = '$value'
        ");

        while($row = $query->fetch_array(MYSQLI_ASSOC)){
            $this->rows[] = $row;
        }

        return $this->rows;

    }

    public function getAll($value = null)
    {
        $query = $this->consult->getConsultar("
            SELECT *
            FROM post
        ");

        while($row = $query->fetch_array(MYSQLI_ASSOC)){
            $this->rows[] = $row;
        }

        return $this->rows;

    }

    public function create($values = array())
    {
      extract($values);
      if($this->consult->getConsultar("
              INSERT INTO post
              (id_post, title_post, content_post, cover_post, author_book, id_categoria, name_user)
              VALUES
              (null, '$titulo', '$contenido', '$cover', '$author', '$categoria', '$user');
          "))
      {
         Cookies::set("complete","Se ha creadi el usuario correctamente","20-s");
         Redirection::go("post");
      }else{
         Cookies::set("alert","Error: por algun motivo no se pudo crear el usuario intenta de nuevo","20-s");
         Redirection::go("post");
      }
    }

    public function update($values=array())
    {
      if($this->consult->getConsultar("
          UPDATE post
          SET name = '$name'
          WHERE name_user = '$user'
      "))
      {
        $_SESSION['user']=$name;
        Cookies::set("complete","Se ha editado el usuario correctamente","20-s");
        Redirection::go("post");
      }else{
        Cookies::set("alert","Error: por algun motivo no se pudo editar el usuario intenta de nuevo","20-s");
        Redirection::go("post");
      }   
    }

    public function updateVisits($id,$cont)
    {
      if($this->consult->getConsultar("
          UPDATE post
          SET visits_post = '$cont'
          WHERE id_post = '$id'
      "))
      {
       
       
       
      }else{
        Cookies::set("alert","Error: por algun motivo no se pudo editar el usuario intenta de nuevo","20-s");
        Redirection::go("post");
      }   
    }

    public function destroy($id)
    {
        if($this->consult->getConsultar("
            DELETE FROM post
            WHERE id_user = '$id'
        ")){
           Cookies::set("delete","Se ha eliminado el usuario correctamente","20-s");
           Redirection::go("post");
        }else
        {
           Cookies::set("alert","Error: No se ha podido eliminar el usuario intenta de nuevo","20-s");
          Redirection::go("post");
        }
    }
  }