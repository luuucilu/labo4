<?php
class Articulos extends Model {



	//GET All
	public function getTodos(){
		$this->db->query("select * from articulos");
		return $this->db->fetchAll();
	}


	//POST
	public function alta($nombre, $tipo, $precio, $detalle, $stock){

		if(!ctype_digit($tipo)) throw new ValidacionException("Verifique que haya ingresado correctamente el tipo");

		if(strlen($nombre)<2) throw new ValidacionException("Verifique que haya ingresado correctamente el nombre");
		$nombre=substr($nombre, 0, 50);
		$nombre=$this->db->escapeString($nombre);

		if(!is_numeric($precio)) throw new ValidacionException("Verifique que haya ingresado correctamente el precio");
		if($precio<0) throw new ValidacionException("Verifique que haya ingresado correctamente el precio");

		if(strlen($detalle)<2) throw new ValidacionException("Verifique que haya ingresado correctamente el detalle");
		$detalle=substr($detalle, 0, 50);
		$detalle=$this->db->escapeString($detalle);


		if(!ctype_digit($stock)) throw new ValidacionException("Verifique que haya ingresado correctamente el stock");



		$this->db->query("INSERT into articulos
						(tipo, nombre, precio, detalle, stock)
						values 
						($tipo, '$nombre', $precio, '$detalle' , $stock)");
	}


	//PUT
	public function modificar($id, $nombre, $precio, $detalle, $stock){
		if(!ctype_digit($id)) throw new ValidacionException("id no es un digito");

		if(strlen($nombre)<2) throw new ValidacionException("Nombre no puede estar vacio");
		$nombre=substr($nombre, 0, 20);
		$nombre=$this->db->escapeString($nombre);

		if(!is_numeric($precio)) throw new ValidacionException("Precio no es un número");
		if($precio<0) throw new ValidacionException("Precio no puede ser negativo");

		if(strlen($detalle)<2) throw new ValidacionException("Detalle no puede estar vacio");
		$detalle=substr($detalle, 0, 20);
		$detalle=$this->db->escapeString($detalle);

		if(!ctype_digit($stock)) throw new ValidacionException("Stock no es un digito");

		
		$this->db->query("UPDATE articulos
						SET nombre='$nombre', precio=$precio, detalle='$detalle', stock=$stock
						WHERE id_articulo=$id");
}

	//PUT
	public function modificarStock($id, $stock){
		if(!ctype_digit($id)) throw new ValidacionException("id no es un digito");

		if(!ctype_digit($stock)) throw new ValidacionException("Stock no es un digito");
	
		$this->db->query("SELECT stock from articulos WHERE id_articulo = $id");
		$aux = $this->db->fetch();
		$stockTotal = $aux['stock'];

		$stockFinal =  $stockTotal - $stock;

		if($stockFinal < 0 ) throw new ValidacionException("No hay stock de producto");

		$this->db->query("UPDATE articulos
						SET stock=$stockFinal
						WHERE id_articulo=$id");
}


	//DELETE
	public function borrar($id){
		if(!ctype_digit($id)) throw new ValidacionException("Id no es un digito");

			

		$this->db->query("DELETE
        FROM articulos
        WHERE id_articulo=$id
        LIMIT 1
        ");

}


	//GET By ID
	public function busquedaEspecifica($id){
			
		if(!ctype_digit($id)) throw new ValidacionException("Id no es un digito");

		$this->db->query("SELECT *
		FROM articulos
		WHERE id_articulo=$id
		");

		if($this->db->numRows()!=1) throw new ValidacionException("Error numrows");
		return $this->db->fetch();
		}
}
