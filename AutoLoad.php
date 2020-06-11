<?php

    function AutoLoad($carga)
    {

        if(is_file('Controlador/'.$carga.'.Controller.php'))
        {
          require_once('Controlador/'.$carga.'.Controller.php');
        }

        else if(is_file('Modelo/'.$carga.'.Model.php'))
        {
          require_once('Modelo/'.$carga.'.Model.php');
        }

        else if(is_file('Librerias/'.$carga.'.Lib.php'))
        {
          require_once('Librerias/'.$carga.'.Lib.php');
        }

        else if(is_file('Framework/Smarty/'.$carga.'.class.php'))
        {
          require_once('Framework/Smarty/'.$carga.'.class.php');
        }
    }

    spl_autoload_register('AutoLoad');

 ?>
