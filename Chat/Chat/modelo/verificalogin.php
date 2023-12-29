<?php
if($_REQUEST['operacion']==1){
	$Usuario=$_REQUEST["txtUsuario"];
	$password=$_REQUEST["txtpwd"];
	if($Usuario=="Gaspar" && $password=="12345"){ session_start();
		$_SESSION['$_Usuario']=$Usuario;
		$_SESSION['$_pwd']=$password;
		echo "1";
	
	}else{
		echo "0";
	}
}else{
	session_destroy();
	echo 2;
}
?>
	
	