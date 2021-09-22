<?php
class BaseDD{
    private $conexion;
    public $error;

    public function __construct($sv,$usu,$pass,$bdd){
        if (!$this->_connect($sv,$usu,$pass,$bdd)){
            $this->error = $this->conexion->connect_error;
        }
    }

    private function _connect($sv,$usu,$pass,$bdd){
        $this->conexion = new mysqli($sv,$usu,$pass,$bdd);
        if (!$this->conexion->connect_errno){
            $this->error = $this->conexion->connect_error;
            return false;
        }
    }

    public function enviarQuery($query){
        $tipo = strtoupper(substr($query, 0,6));

        switch($tipo){
            case 'SELECT':
                $result = $this->conexion->query($query);
                if (!$result){
                    $this->error = $this->conexion->error;
                    return false;
                }else {
                    while($fila = $result->fetch_assoc()){
                        $arr_result[]=$fila;
                    }
                    return $arr_result;
                }
            break;
            case 'INSERT':
                $result = $this->conexion->query($query);
                if(!$result){
                    $this->error = $this->conexion->error;
                    return false;
                }else {
                    return $this->conexion->insert_id;
                }
            break;
            case 'UPDATE':
            case 'DELETE':
                $result = $this->conexion->query($query);
                if(!$result){
                    $this->error = $this->conexion->error;
                    return false;
                }else{
                    return $this->conexion->affected_rows;
                }
            break;
            default: $this->error = "Query error";
        }
    }
}

class Producto{
    public $codigo;
    public $producto;
    public $descripcion;
    public $precio;

    public function __construct($cod,$prod,$desc,$precio){
        $this->codigo = $cod;
        $this->producto = $prod
        $this->descripcion = $desc;
        $this->precio = $precio;
    }
}

class Carrito{
    private $db;
	
	public function __construct($base){
		$this->db = $base;
    }
    
    private function agregar_prod($cod, $prod, $desc, $precio){
        $reply = $this->db->enviarQuery("INSERT INTO compras VALUES('$codigo','$producto','$descripcion', '$precio')");

        if (!$reply){
			echo $this->db->error; 
			return false;
		}else{
			return $reply;
		}

    }
    private function eliminar_prod($id){
        $reply = $this->db->enviarQuery("DELETE FROM compras WHERE codigo = $id");
        
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