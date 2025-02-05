<?php
use PHPUnit\Framework\TestCase;
use App\Calculadora;

class CalculadoraTest extends TestCase {
    
    // Test para el método de suma
    public function testSuma() {
        $calc = new Calculadora();
        $this->assertEquals(5, $calc->suma(3, 2));
        $this->assertEquals(0, $calc->suma(-2, 2));
        $this->assertEquals(-5, $calc->suma(-2, -3));
    }

    // Test para el método de resta
    public function testResta() {
        $calc = new Calculadora();
        $this->assertEquals(1, $calc->resta(3, 2));
        $this->assertEquals(0, $calc->resta(2, 2));
        $this->assertEquals(-1, $calc->resta(-3, -2));
    }

    // Test para el método de multiplicación
    public function testMultiplicacion() {
        $calc = new Calculadora();
        $this->assertEquals(6, $calc->multiplicacion(3, 2));
        $this->assertEquals(0, $calc->multiplicacion(0, 5));
        $this->assertEquals(-6, $calc->multiplicacion(-3, 2));
    }

    // Test para el método de división
    public function testDivision() {
        $calc = new Calculadora();
        $this->assertEquals(1.5, $calc->division(3, 2));
        $this->assertEquals(-1.5, $calc->division(-3, 2));
        $this->expectException(\InvalidArgumentException::class);
        $calc->division(3, 0); // Debe lanzar excepción por división por cero
    }

    // Test para el método de raíz cuadrada
    public function testRaizCuadrada() {
        $calc = new Calculadora();
        $this->assertEquals(2, $calc->raizCuadrada(4));
        $this->assertEquals(3, $calc->raizCuadrada(9));
        $this->expectException(\InvalidArgumentException::class);
        $calc->raizCuadrada(-4); // Debe lanzar excepción por número negativo
    }
}
