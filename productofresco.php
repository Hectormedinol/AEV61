<?php
include 'Producto.php';
class fresco extends Producto
{
    public function __construct($fecha_caducidad, $num_lote, $pais_origen, $fecha_envasado)
    {parent::__construct($fecha_caducidad, $num_lote, $pais_origen);}
}

?>