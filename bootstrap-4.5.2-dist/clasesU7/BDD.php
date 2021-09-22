<?php
class BaseDD{
    private $conexion;
    public $error;

    public function __construct($sv,$usu,$pass,$bdd){
        if (!$this->_connect($sv,$usu,$pass,$bdd)){
            $this->error = $this->conexion->connect_error;
        }
    }

    public function __destruct(){
		$this->conexion->close();
    }
    
    private function _connect($sv,$usu,$pass,$bdd){
        $this->conexion = new mysqli($sv,$usu,$pass,$bdd);
        if (!$this->conexion->connect_errno){
            $this->error = $this->conexion->connect_error;
            return false;
        }
    }

    public function enviarQuery($query){
        $tipo = strtoupper(substr($query,0,6));

        switch($tipo){
            case 'SELECT':
                $result = $this->conexion->query($query);
                if (!$result){
                    $this->error = $this->conexion->error;
                    return false;
                }elseif ($this->conexion->affected_rows == 0){
				        return false;
				    }else{
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
?>