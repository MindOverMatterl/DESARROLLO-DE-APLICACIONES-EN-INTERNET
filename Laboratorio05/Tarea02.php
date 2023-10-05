<?php
$precioActualGaseosa = 3.50;
$cantidadUnidadesAdquiridas = 10;

$porcentajeRebaja = 5;
$porcentajeDescuento = 7;
$caramelosPorGaseosa = 2;

$nuevoPrecioGaseosa = $precioActualGaseosa - ($precioActualGaseosa * $porcentajeRebaja / 100);
$importeCompra = $nuevoPrecioGaseosa * $cantidadUnidadesAdquiridas;
$descuento = ($porcentajeDescuento / 100) * $importeCompra;
$importeAPagar = $importeCompra - $descuento;
$caramelosObsequiados = $caramelosPorGaseosa * $cantidadUnidadesAdquiridas;

echo "Nuevo precio de la gaseosa: S/. " . number_format($nuevoPrecioGaseosa, 2) . "<br>";
echo "Importe de la compra: S/. " . number_format($importeCompra, 2) . "<br>";
echo "Importe del descuento: S/. " . number_format($descuento, 2) . "<br>";
echo "Importe a pagar: S/. " . number_format($importeAPagar, 2) . "<br>";
echo "Caramelos obsequiados: " . $caramelosObsequiados . "<br>";
?>
