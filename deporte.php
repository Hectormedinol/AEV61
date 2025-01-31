<?php
class Deporte{
    protected $numjugadores;
    protected $tiempo;
    protected $largocampo;
    protected $formapelota;
    protected $sueldomedio;

    public function __construct($numjugadores, $tiempo, $largocampo, $formapelota, $sueldomedio)
    {
        $this->numjugadores = $numjugadores;
        $this->tiempo = $tiempo;
        $this->largocampo = $largocampo;
        $this->formapelota = $formapelota;
        $this->sueldomedio = $sueldomedio;
    }
    
    public function getNumJugadores()
    {
        return $this->numjugadores;
    }
    
    public function getTiempo()
    {
        return $this->tiempo;
    }
    
    public function getLargoCampo()
    {
        return $this->largocampo;
    }
    
    public function getFormaPelota()
    {
        return $this->formapelota;
    }
    
    public function getSueldoMedio()
    {
        return $this->sueldomedio;
    }
    
    public function setNumJugadores($numjugadores)
    {
        $this->numjugadores = $numjugadores;
    }
    
    public function setTiempo($tiempo)
    {
        $this->tiempo = $tiempo;
    }
    
    public function setLargoCampo($largocampo)
    {
        $this->largocampo = $largocampo;
    }
    
    public function setFormaPelota($formapelota)
    {
        $this->formapelota = $formapelota;
    }
    
    public function setSueldoMedio($sueldomedio)
    {
        $this->sueldomedio = $sueldomedio;
    }
}

    require_once 'rugby.php';
    require_once 'futbol.php';
    require_once 'basket.php';

    $arrayDeportes = [];
    $deportes = ['Futbol','Rugby','Basket'];

    
    $deporte1 = $deportes[rand(0,2)];
    $deporte2 = $deportes[rand(0,2)];
    $deporte3 = $deportes[rand(0,2)];
    $deporte4 = $deportes[rand(0,2)];
    $deporte5 = $deportes[rand(0,2)];
    
    for ($i = 0; $i < 5; $i++) {
        $deporteNombre = $deportes[rand(0, 2)];
        if ($deporteNombre == 'Rugby'){
            $arrayDeportes[] = new $deporteNombre(11, 90, 12, 'ovalada', 1200, 12, 12);
        }
        if ($deporteNombre == 'Futbol'){
            $arrayDeportes[] = new $deporteNombre(11, 90, 12, 'ovalada', 1200, 12, 12);
        }
        if ($deporteNombre == 'Basket'){
            $arrayDeportes[] = new $deporteNombre(11, 90, 12, 'ovalada', 1200, 12, 12);
        }
    }
    

    var_dump($arrayDeportes);
?>