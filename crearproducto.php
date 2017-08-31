<?php

	$realname=$_POST['realname'];
	$talla=$_POST['talla'];
	$observaciones= $_POST['observaciones'];
	$marca=$_POST['marca'];
	$cantidad=$_POST['cantidad'];
	$fecha=$_POST['fecha'];
	require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT nombre FROM marca WHERE nombre='$realname'");
	$check_mail=mysqli_num_rows($checkemail);
		if($realname!=''){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, no existe marca");</script> ';
			}else{
				
				//require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				mysqli_query($mysqli,"INSERT INTO `producto` (`id_producto`, `nombre`, `talla`, `observaciones`, `marca_producto`, `cant_inventario`, `fecha_embarque`) VALUES('','$realname', '$talla', '$observaciones', '$marca', '$cantidad', '$fecha')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				
			}
			
		}else{
			
		}

	
?>