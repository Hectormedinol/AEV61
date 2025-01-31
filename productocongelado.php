<?php
include 'Producto.php';
class congelado extends Producto
{
    private $temperatura_recomendada;
    public function __construct($fecha_caducidad, $num_lote, $pais_origen, $fecha_envasado)
    {parent::__construct($fecha_caducidad, $num_lote, $pais_origen, $fecha_envasado);
    $this->temperatura_recomendada}

    public function getTemperaturaRecomendada()
    {
        return $this->temperatura_recomendada;
    }

    public function setTemperaturaRecomendada($temperatura_recomendada)
    {
        $this->temperatura_recomendada = $temperatura_recomendada;
    }
}

class congelado_aire extends congelado
{
    private $nitrogeno;
    private $oxigeno;
    private $dioxido;
    private $vapor;

    public function __construct($fecha_caducidad, $num_lote, $pais_origen, $fecha_envasado, $temperatura_recomendada, $nitrogeno, $oxigeno, $dioxido, $vapor)
    {
        parent::__construct($fecha_caducidad, $num_lote, $pais_origen, $fecha_envasado, $temperatura_recomendada);
        $this->nitrogeno = $nitrogeno;
        $this->oxigeno = $oxigeno;
        $this->dioxido = $dioxido;
        $this->vapor = $vapor;}

        public function getNitrogeno()
        {
            return $this->nitrogeno;
        }
        public function setNitrogeno($nitrogeno)
        {
            $this->nitrogeno = $nitrogeno;
        }
        public function getOxigeno()
        {
            return $this->oxigeno;
        }
        public function setOxigeno($oxigeno)
        {
            $this->oxigeno = $oxigeno;
        }
        public function getDioxido()
        {
            return $this->dioxido;
        }
        public function setDioxido($dioxido)
        {
            $this->dioxido = $dioxido;
        }
        public function getVapor()
        {
            return $this->vapor;
        }
        public function setVapor($vapor)
        {
            $this->vapor = $vapor;
        }
}
class congelado_agua extends congelado
{
    private $salinidad;
    public function __construct($fecha_caducidad, $num_lote, $pais_origen, $fecha_envasado, $temperatura_recomendada, $salinidad)
    {
        parent::__construct($fecha_caducidad, $num_lote, $pais_origen, $fecha_envasado, $temperatura_recomendada);
        $this->salinidad = $salinidad;}
        
        public function getSalinidad()
        {
            return $this->salinidad;
        }
        public function setSalinidad($salinidad)
        {
            $this->salinidad = $salinidad;
        }  
}

class congelado_nitrogeno extends congelado
{
    private $metodo;
    private $tiempo;
    public function __construct($fecha_caducidad, $num_lote, $pais_origen, $fecha_envasado, $temperatura_recomendada, $metodo, $tiempo)
    {
        parent::__construct($fecha_caducidad, $num_lote, $pais_origen, $fecha_envasado, $temperatura_recomendada);
        $this->metodo = $metodo;
        $this->tiempo = $tiempo;}
        
        public function getMetodo()
        {
            return $this->metodo;
        }
        public function setMetodo($metodo)
        {
            $this->metodo = $metodo;
        }
        public function getTiempo()
        {
            return $this->tiempo;
        }
        public function setTiempo($tiempo)
        {
            $this->tiempo = $tiempo;
        }
}

?>