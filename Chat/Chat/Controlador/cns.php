<?php
	include("Consultas.php");
	$cns=new Consultas();
	$resultado=$cns->Conecta();
	echo $resultado;
	
?>