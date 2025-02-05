<?php
use PHPUnit\Framework\TestCase;
use App\Calculadora;
class CalculadoraTest extends TestCase {
 public function testSuma() {
 $calc = new Calculadora();
 $this-> assertEquals(5, $calc->suma(3,2));
 }
}