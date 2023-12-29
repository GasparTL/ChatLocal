<html>
<head>
<body>
<h1> Login </h1>
<title> My Chat </title>
<script type="text/javascript" src="../js/jquery.js"></script>

<script type="text/javascript" src="../js/funciones.js"> </script>
<style rel="stylesheet" type="text/css">
	body {
		background:url(../Imagenes/tumblr_o7o17rfRtr1tggoj9o1_500.gif)

	}

	
	}

	#tbllogin tr td{
		color:black;

	}

</style>
</head>
<body>
<table id="tbllogin"
	<tr>
		<input type="text" placeholder="usuario" name="txtuser" id="txtuser">
		<input type="password" placeholder="password" name="txtpwd" id="txtpwd">
		<input type="button" name="btnenviar" value="enviar" onClick="valida();">
	<tr>
		<td text-aling="right"> <img src="..\Imagenes\login.jpg" alt="Imagen disponible" width="178" height="169"/></td>
	</tr>

	<tr>
		<td colspan="1"><h2> Registrate</h2> </td>
	</tr>
	<tr>
		<td> Nombre </td> 
		<td><input type="text" name="txtNombre" id="txtNombre"/></td>
	</tr>
	<tr>
		<td> Apellido Paterno </td> 
		<td><input type="text" name="txtApetPat" id="txtApePat"/></td>
	</tr>
	<tr>
		<td> Apellido Materno</td>
		<td><input type="text" name="txtApeMat" id="txtApeMat"/></td>
	</tr>
	<tr>
		<td colspan="1"><h3> Fecha de nacimiento</h3></td>
	</tr>
	<tr>
		<td> Dia: <select name="cmbDia" id="cmbDia">
					<option value="1">Dia1</option>
       				<option value="2">Dia2</option>
       				<option value="3">Dia3</option>
      		 		<option value="4">Dia4</option>
       				<option value="5">Dia5</option>
       				<option value="6">Dia6</option>
       				<option value="7">Dia7</option>
       				<option value="8">Dia8</option>
       				<option value="9">Dia9</option>
       				<option value="10">Dia10</option>
       				<option value="11">Dia11</option>
       				<option value="12">Dia12</option>
       				<option value="13">Dia13</option>
       				<option value="14">Dia14</option>
       				<option value="15">Dia15</option>      
       				<option value="16">Dia16</option>
       				<option value="17">Dia17</option> 
       				<option value="18">Dia18</option>
      				<option value="19">Dia19</option>
      	 			<option value="20">Dia20</option>
       				<option value="21">Dia21</option>
       				<option value="22">Dia22</option>
       				<option value="23">Dia23</option>
       				<option value="25">Dia25</option>
       				<option value="26">Dia26</option>
       				<option value="27">Dia27</option>
       				<option value="28">Dia28</option>
       				<option value="29">Dia29</option>
       				<option value="30">Dia30</option>
       				<option value="31">Dia31</option>
		</select>
		</td> 
		<td> Mes: <select name="cmbMes" id="cmbMes">
       				<option value="1">Enero</option>
       				<option value="2">Febrero</option>
       				<option value="3">Marzo</option>
       				<option value="4">Abril</option>
       				<option value="5">Mayo</option>
       				<option value="6">Junio</option>
       				<option value="7">Julio</option>
       				<option value="8">Agosto</option>
       				<option value="9">Septiembre</option>
       				<option value="10">Octubre</option>
       				<option value="11">Noviembre</option>
       				<option value="12">Diciembre</option>
		</select>
		</td>
		<td> Anio : <select name:"cmbAnio" id="cmbAnio">
       				<option value="1988">1988</option>
       				<option value="1989">1989</option>
       				<option value="1990">1990</option>
       				<option value="1991">1991</option>
       				<option value="1992">1992</option>
       				<option value="1993">1993</option>
       				<option value="1994">1994</option> 
       				<option value="1995">1995</option>
       				<option value="1996">1996</option>
       				<option value="1997">1997</option>
       				<option value="1998">1998</option>
       				<option value="1999">1999</option>
       				<option value="2000">2000</option>
       				<option value="2001">2001</option>
       				<option value="2002">2002</option>
       				<option value="2003">2003</option>
       				<option value="2004">2004</option>
       				<option value="2005">2005</option>
       				<option value="2006">2006</option>
       				<option value="2007">2007</option>
       				<option value="2008">2008</option>
       				<option value="2009">2009</option>
       				<option value="2010">2010</option>
       				<option value="2011">2011</option>
       				<option value="2012">2012</option>
       				<option value="2013">2013</option>
       				<option value="2014">2014</option>
       				<option value="2015">2015</option>
       				<option value="2016">2016</option>
       				<option value="2017">2017</option>
		</select>
	</td>
	</tr>
	<tr>
	<td> Sexo : <select name:"cmbSex" id="cmbSex">
					<option value="M">Masculino </option>
					<option value="F">Femenino </option>
				</select>
	</tr>
	<tr>
		<td> Usuario </td>
		<td><input type="text" name="Usuario" id="Usuario"/></td>
	</tr>
	<tr>
		<td> Contraseña </td>
		<td><input type="text" name="Contraseña" id="Contrasena"/></td>
	</tr>
	<tr>
		<td><input type="button" name="btnRegi" id="btnRegi" value="Registrarse" onClick="Registrarse();"/></td>
		</tr>
	</table>
</body>
</html>