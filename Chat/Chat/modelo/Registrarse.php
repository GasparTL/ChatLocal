<?php
	$Nombre=$_REQUEST['txtNombre'];
	$ApePat=$_REQUEST['txtApePat'];
	$ApeMat=$_REQUEST['txtApeMat'];
	$Fecha=$_REQUEST['cmbAnio']."_".$_REQUEST['cmbMes']."_".$_REQUEST['cmbDia'];
	$Sexo=$_REQUEST['cmbSex'];
	$user=$_REQUEST['user'];
	$contra=$_REQUEST['contra'];
	
/*
	echo $Nombre;
	echo $ApePat;
	echo $ApeMat;
	echo $Dia;
	echo $Mes;
	echo $Anio;
	echo $Sex;
*/
	include("../Controlador/Consultas.php");
	$cns=new consultas();
	$cns->conecta();
	$resultado=$cns->InsertarUsuario($Nombre,$ApePat,$ApMat,$Fecha,$Sexo,$user,$contra);
	echo $resultado;
?>