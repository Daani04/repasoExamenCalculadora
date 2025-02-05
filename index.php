<?php
require 'vendor/autoload.php';
use App\Calculadora;

$resultado = null;
$mensajeError = null; // Variable para manejar errores

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = $_POST['a'] ?? 0;
    $b = $_POST['b'] ?? 0;
    $operacion = $_POST['operacion'] ?? 'suma'; // Obtenemos la operación seleccionada

    $calc = new Calculadora();

    try {
        // Dependiendo de la operación seleccionada, realizamos el cálculo correspondiente
        switch ($operacion) {
            case 'suma':
                $resultado = $calc->suma($a, $b);
                break;
            case 'resta':
                $resultado = $calc->resta($a, $b);
                break;
            case 'multiplicacion':
                $resultado = $calc->multiplicacion($a, $b);
                break;
            case 'division':
                $resultado = $calc->division($a, $b);
                break;
            case 'raizCuadrada':
                $resultado = $calc->raizCuadrada($a);
                break;
            default:
                $mensajeError = "Operación no válida.";
        }
    } catch (\InvalidArgumentException $e) {
        $mensajeError = $e->getMessage(); // Capturamos el mensaje de error si ocurre
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Web</title>
</head>
<body>
    <h1>Calculadora Web</h1>
    <form method="POST">
        <label for="a">Número A:</label>
        <input type="number" id="a" name="a" required>
        <br>
        <label for="b">Número B:</label>
        <input type="number" id="b" name="b">
        <br>
        <label for="operacion">Selecciona operación:</label>
        <select id="operacion" name="operacion" required>
            <option value="suma">Suma</option>
            <option value="resta">Resta</option>
            <option value="multiplicacion">Multiplicación</option>
            <option value="division">División</option>
            <option value="raizCuadrada">Raíz Cuadrada</option>
        </select>
        <br>
        <button type="submit">Calcular</button>
    </form>

    <?php if ($mensajeError): ?>
        <h2 style="color: red;">Error: <?php echo $mensajeError; ?></h2>
    <?php elseif ($resultado !== null): ?>
        <h2>Resultado: <?php echo $resultado; ?></h2>
    <?php endif; ?>
</body>
</html>
