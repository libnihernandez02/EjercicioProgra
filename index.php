<?php
    
    if(isset($_GET['controller']))
    {
      $controller=$_GET['controller'];
      $action=$_GET['action'];
    }
    else
    {
      $controller="Home";
      $action="Inicio";
    }

    if(class_exists ($controller) && method_exists($controller,$action))
    {
      $class= new $controller();
      $class->$action();
    }
    else
    {
      echo "<br/>la clase y el controlador no existen";
    }

 ?>
