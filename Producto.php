<?php

class producto
{
    protected $fecha_caducidad;
    protected $num_lote;
    protected $pais_origen;
    protected $fecha_envasado;

    public function __construct($fecha_caducidad, $num_lote, $pais_origen, $fecha_envasado)
    {
        $this->fecha_caducidad = $fecha_caducidad;
        $this->num_lote = $num_lote;
        $this->pais_origen = $pais_origen;
        $this->fecha_envasado = $fecha_envasado;
    }

    public function getFechaCaducidad()
    {
        return $this->fecha_caducidad;
    }

    public function getNumLote()
    {
        return $this->num_lote;
    }
    
    public function getPaisOrigen()
    {
        return $this->pais_origen;
    }
    
    public function getFechaEnvasado()
    {
        return $this->fecha_envasado;
    }
    
    public function setFechaCaducidad($fecha_caducidad)
    {
        $this->fecha_caducidad = $fecha_caducidad;
    }
    
    public function setNumLote($num_lote)
    {
        $this->num_lote = $num_lote;
    }
    
    public function setPaisOrigen($pais_origen)
    {
        $this->pais_origen = $pais_origen;
    }
    
    public function setFechaEnvasado($fecha_envasado)
    {
        $this->fecha_envasado = $fecha_envasado;
    }
}


?>