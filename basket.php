<?php
require_once 'deporte.php';
class Basket extends Deporte
{
    private $anchuraaro;
    private $tiroslibresporpartido;
    public function __construct($numjugadores, $tiempo, $largocampo, $formapelota, $sueldomedio, $anchuraaro, $tiroslibresporpartido)
    {parent::__construct($numjugadores, $tiempo, $largocampo, $formapelota, $sueldomedio);
        $this->anchuraaro = $anchuraaro;
        $this->tiroslibresporpartido = $tiroslibresporpartido;
        }

        public function getAnchuraaro()
        {
            return $this->anchuraaro;
        }

        public function getTiroslibresporpartido()
        {
            return $this->tiroslibresporpartido;
        }

        public function setTiroslibresporpartido($tiroslibresporpartido)
        {
            $this->tiroslibresporpartido = $tiroslibresporpartido;
        }

        public function setAnchuraaro($anchuraaro)
        {
            $this->anchuraaro = $anchuraaro;
        }
    }