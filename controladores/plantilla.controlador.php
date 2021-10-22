<?php 

class ControladorPlantilla 
{
     public function ctrTraerPlantilla()
     {
          include "vistas/plantilla-login.php";
     }

     public function ctrPlantillaGeneral()
     {
          include "vistas/plantilla.php";
     }
}
?>