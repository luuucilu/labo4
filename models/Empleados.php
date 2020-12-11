<?php
class Empleados extends Model {



	//GET
	public function getTodos(){
		$this->db->query("select * from empleados");
		return $this->db->fetchAll();
	}
	

	//INGRESAR
	public function entrar($mail, $contrasena){
		if(strlen($mail)<2) throw new ValidacionException("Debe ingresar Mail");
		$mail=substr($mail, 0, 50);
		$mail=$this->db->escapeString($mail);
		
		if(strlen($contrasena)<2) throw new ValidacionException("Debe ingresar Contraseña");
		$contrasena=substr($contrasena, 0, 50);
		$contrasena=$this->db->escapeString($contrasena);
		

		

		$this->db->query("SELECT * 
						FROM empleados
						WHERE mail='$mail' AND contrasena='$contrasena'");
		if($this->db->numRows()!=1) throw new ValidacionException("Contraseña Incorrecta");
		return $this->db->fetch();
	}
}