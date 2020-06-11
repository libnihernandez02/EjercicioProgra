<?php
  /**
   * Clase librerias se cargaran funcionalidades varias del proyecto
   */
  class ClassName
  {

    function __construct()
    {
      // code...
    }

    public function DatosSmarty($consulta)
    {
        $ar=array();

        while($row=mysqli_fetch_assoc($consulta))
        {
            array_push($ar,$row);
        }
        return $ar;
    }

		public function DatosRow($consulta)
     {
        $assoc_arr = mysqli_fetch_assoc($consulta);
        return $assoc_arr;
     }
  }

 ?>
