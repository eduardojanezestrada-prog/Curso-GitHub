<?php
/**
 * Calcula el precio con iva
 * @param float $precio Precio sin IVA
 * @param int $iva Porcetaje de IVA
 * @return float Precio final
 */
function precioConIva(mixed $precio, mixed $iva){
     return $precio * (1 + $iva / 100);
}

/**
 * Sumo dos números
 * @param int $num1 Precio sin IVA
 * @param int $num2 Porcetaje de IVA
 * @return int Precio final
 */
function edu(mixed $num1, mixed $num2){
     return $num1 + $num2;
}