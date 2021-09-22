<?php 
class Carrito{
    private $db;
	
	public function __construct($base){
		$this->db = $base;
    }

    public function agregar_prod($cod){
        $reply = $this->db->enviarQuery("INSERT INTO compras VALUES((SELECT codigo FROM productos WHERE codigo=$cod),(SELECT producto FROM productos WHERE codigo=$cod),(SELECT descripcion FROM productos WHERE codigo=$cod),(SELECT precio FROM productos WHERE codigo=$cod))");

        if (!$reply){
			echo $this->db->error; 
			return false;
		}else{
			return $reply;
		}

    }
    public function eliminar_prod($id){
        $reply = $this->db->enviarQuery("DELETE FROM compras WHERE cod = $id");
        
        if (!$reply){
			echo $this->db->error; 
			return false;
		}else{
			return $reply;
		}

    }
    public function getProductos(){
        $reply = $this->db->enviarQuery("SELECT * FROM compras");
		if (!$reply){
			echo $this->db->error; 
			return false;
		}
		else{
			if (!$reply){
				return false;
			}else {
				return $reply;
			}
		}
    }
}
?>