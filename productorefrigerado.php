<?php
include 'Producto.php';
class refrigerado extends Producto
{
    private $codigo_organismo;
    private $temperatura_recomendada;
    public function __construct($fecha_caducidad, $num_lote, $pais_origen, $fecha_envasado, $codigo_organismo, $temperatura_recomendada)
    {
        parent::__construct($fecha_caducidad, $num_lote, $pais_origen);
        $this -> codigo_organismo = $codigo_organismo;
        $this -> temperatura_recomendada = $temperatura_recomendada;}


        public function getCodigoOrganismo()
        {
            return $this->codigo_organismo;
        }

        public function getTemperaturaRecomendada()
        {
            return $this->temperatura_recomendada;
        }

        public function setCodigoOrganismo($codigo_organismo)
        {
            $this->codigo_organismo = $codigo_organismo;
        }

        public function setTemperaturaRecomendada($temperatura_recomendada)
        {
            $this->temperatura_recomendada = $temperatura_recomendada;
        }

}
?>