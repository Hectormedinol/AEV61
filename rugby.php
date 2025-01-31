<?php
include_once 'deporte.php';
class Rugby extends Deporte
{
    private $anchurazonagol;
    private $ensayosporpartido;
    public function __construct($numjugadores, $tiempo, $largocampo, $formapelota, $sueldomedio, $anchurazonagol, $ensayosporpartido)
    {parent::__construct($numjugadores, $tiempo, $largocampo, $formapelota, $sueldomedio);
        $this->anchurazonagol = $anchurazonagol;
        $this->ensayosporpartido = $ensayosporpartido;
    }
    public function getAnchurazonagol()
    {
        return $this->anchurazonagol;
    }
    public function getEnsayosporpartido()
    {
        return $this->ensayosporpartido;
    }

    public function setEnsayosporpartido($ensayosporpartido)
    {
        $this->ensayosporpartido = $ensayosporpartido;
    }

    public function setAnchurazonagol($anchurazonagol)
    {
        $this->anchurazonagol = $anchurazonagol;
    }
}