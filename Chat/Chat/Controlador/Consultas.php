<?php
	class Consultas{
	private $con;
	public function Conecta(){
		try{
			$this->con=new PDO("mysql:localhost;dbname=mychat","root","");
			$this->con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
			return "Conectado";
		}catch(PDOException $e){
			return "Error".$e->getMessage();
		}
	}
	public function InsertaUsuario($Nombre,$ApPat,$ApMat,$Sexo,$Fec_Nac,$user,$pwd){
		try{$stmt=$this->con->prepare("Insert into tbl_Usuarios(Nombre,ApPat,ApPat,Sexo,Fec_Nac,user,password,status) 				values(:N,:ApP,:ApM,:S,:FN,:u,:p,0)");
		$stmt->execute(array('N'=>$Nombre,'ApPet'=>$ApPat,'ApMat'=>$ApMat,'S'=>$Sexo,'FN'=>$Fec_Nac,'u'=>$user,'p'=>$pwd));
		return "Registro Exitoso";
		}catch(Exception $e){
			return "Error de Registro".$e->getMessage();
		}
	}

	public function ConsultaLogin($user,$pwd){
		$stmt=$this->con->prepare("select * from tbl_Usuarios where tusuarios=:u and password=:p");
		$stmt->execute(array('u'=>$user,'p'=>$pwd));
		while ($datos=$stmt->fetch()){
			$id_user=$datos[0];
		}
		return $id_user;
	}
}
?>