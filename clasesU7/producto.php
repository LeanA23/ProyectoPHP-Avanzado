<?php
class Producto{
    private $db;

    public function __construct($base){
        $this->db = $base;
    }

    public function getProductos(){
        $reply = $this->db->enviarQuery("SELECT * FROM productos");
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