<?php
include_once 'deporte.php';
class Futbol extends Deporte
{
    private $alturaporteria;
    private $penaltisporpartido;
    public function __construct($numjugadores, $tiempo, $largocampo, $formapelota, $sueldomedio,$alturaporteria, $penaltisporpartido)
    {parent::__construct($numjugadores, $tiempo, $largocampo, $formapelota, $sueldomedio);
    $this->alturaporteria = $alturaporteria;
    $this->penaltisporpartido = $penaltisporpartido;
    }

    public function getAlturaporteria()
    {
    return $this->alturaporteria;
    }

    public function getPenaltisporpartido()
    {
        return $this->penaltisporpartido;
    }
    public function setPenaltisporpartido($penaltisporpartido)
    {
        $this->penaltisporpartido = $penaltisporpartido;
    }
    public function setAlturaporteria($alturaporteria)
    {
    $this->alturaporteria = $alturaporteria;
    }
}
?>
