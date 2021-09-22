<?php 
class Usuario{
    private $nombre;
    private $apellido;
    private $fecha_nac;

    public function __construct($nom,$ape,$fech){
        $this->nombre = $nom;
        $this->apellido = $ape;
        $this->fecha_nac = $fech;
    }
    private function calc_edad(){
        $fecha_act=date('Y-m-d');
        $dif=strtotime($fecha_act)-strtotime($this->fecha_nac);
        $anios=intval($dif/(365 * 60 * 60 * 24));
        return $anios;
    }
    public function imprime_datos(){
        echo "Nombre y Apellido: ".$this->nombre." ".$this->apellido."<br>";
        echo "Edad: ".$this->calc_edad();
    }
}
?>