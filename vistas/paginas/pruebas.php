<?php 

//$usuarios = ModeloFormularios::eliminar();
//echo '<prev>'; print_r($usuarios); echo '</prev>';

		function generar($length =6)
		{
			$charset ="ABCDEFGHIJKLMNOPQRSTUVWabcdefghijklmnopqrstuvwxyz0123456789@";
			$clave ="";
			for ($i=0; $i<$length;$i++)
			{
                $rand =rand() % strlen($charset);
				$clave .= substr($charset,$rand, 1);

			}
			return $clave;
		}
 echo generar(8);

 ?>