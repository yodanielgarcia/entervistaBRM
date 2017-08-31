<?php

	$realname=$_POST['realname'];
	$mail=$_POST['nick'];
	
	require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM marca WHERE nombre='$realname'");
	$check_mail=mysqli_num_rows($checkemail);
		if($mail!= ''){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe una marca igual o referencia , verifique sus datos");</script> ';
			}else{
				
				//require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				mysqli_query($mysqli,"INSERT INTO marca VALUES('$realname','$mail')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				
			}
			
		}else{
			
		}

	
?>