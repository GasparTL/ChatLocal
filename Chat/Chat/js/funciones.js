function valida(){
	var Usuario=$("#txtuser").val();
	var password=$("#txtpwd").val();
	$.post("../modelo/verificalogin.php",{operacion:1,txtUsuario:Usuario,txtpwd:password},function(respuesta){
	if(respuesta==1){
		window.location.href="chat.php";
	}else{
	alert("Error de usuario y contraseña");
	}
	});
}

function Cerrar_Sesion(){
	$.post("../modelo/verificalogin.php",{operacion:2},function(respuesta){
		window.location.href="Login.php";
	});
}

function Registrarse(){
	var Nombre=$("#txtNombre").val();
	var ApePat=$("#txtApePat").val();
	var ApePat=$("#txtApeMat").val();
	//var Fecha_de_Nacimiento=$("#").val();
	var Dia=$("#cmbDia").val();
	var Mes=$("#cmbMes").val();
	var Anio=$("#cmbAnio").val();
	var Sexo=$("#cmbSex").val();
	var user=$("#Usuario").val()
	var contra=$("#Contrasena").val()
	
	$.post("../modelo/Registrarse.php",{txtNombre:Nombre,txtApePat:ApePat,txtApeMat:ApePat,cmbDia:Dia,cmbMes:Mes,cmbAnio:Anio,cmbSex:Sexo,user:user,contra:contra},function(respuesta){
		alert(respuesta);
	});
}   