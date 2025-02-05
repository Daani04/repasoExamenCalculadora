<?php
namespace App;

class Calculadora {
    // Método para la suma
    public function suma($a, $b) {
        return $a + $b;
    }

    // Método para la resta
    public function resta($a, $b) {
        return $a - $b;
    }

    // Método para la multiplicación
    public function multiplicacion($a, $b) {
        return $a * $b;
    }

    // Método para la división
    public function division($a, $b) {
        if ($b == 0) {
            throw new \InvalidArgumentException("La división por cero no está permitida.");
        }
        return $a / $b;
    }

    // Método para la raíz cuadrada
    public function raizCuadrada($a) {
        if ($a < 0) {
            throw new \InvalidArgumentException("No se puede calcular la raíz cuadrada de un número negativo.");
        }
        return sqrt($a);
    }
}
