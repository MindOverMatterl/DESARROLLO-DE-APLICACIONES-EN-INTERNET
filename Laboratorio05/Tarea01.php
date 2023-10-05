<?php
$sueldoBasico = 600;
$porcentajeComision = 7.5;
$descuentoPorcentaje = 11;
$bonificacionPorHijo = 50;

$importeTotalVendido = 15000; 
$cantidadHijosEscolar = 3;    

$comision = ($porcentajeComision / 100) * $importeTotalVendido;
$bonificacion = $bonificacionPorHijo * $cantidadHijosEscolar;
$sueldoBruto = $sueldoBasico + $comision + $bonificacion;
$descuento = ($descuentoPorcentaje / 100) * $sueldoBruto;
$sueldoNeto = $sueldoBruto - $descuento;

echo "Comisión: S/. " . number_format($comision, 2) . "<br>";
echo "Bonificación: S/. " . number_format($bonificacion, 2) . "<br>";
echo "Sueldo Bruto: S/. " . number_format($sueldoBruto, 2) . "<br>";
echo "Descuento: S/. " . number_format($descuento, 2) . "<br>";
echo "Sueldo Neto: S/. " . number_format($sueldoNeto, 2) . "<br>";
?>
