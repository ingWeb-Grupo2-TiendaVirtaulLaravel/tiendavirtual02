<?php
		class Conexion{
			var $ruta;
			var $usuario;
			var $contrasena;
			var $baseDatos;

			function Conexion(){
				$this->ruta       ="localhost"; 
				$this->usuario    ="root"; 
				$this->contrasena =""; 
				$this->baseDatos  ="tiendavirtual02"; 
			}

			function conectarse(){
				
				$enlace = mysqli_connect($this->ruta, $this->usuario, $this->contrasena, $this->baseDatos);
				if($enlace){
					echo "   REPORTE DE DATOS   ";	
				}else{
					die('Error de documento (' . mysqli_connect_errno() . ') '.mysqli_connect_error()); 
				}
				return($enlace);
			}
		}

?>
