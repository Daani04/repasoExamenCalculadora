<?php
require 'vendor/autoload.php';
use App\Calculadora;

$resultado = null;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = $_POST['a'] ?? 0;
    $b = $_POST['b'] ?? 0;

    $calc = new Calculadora();
    $resultado = $calc->suma($a, $b);
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
        <input type="number" id="b" name="b" required>
        <br>
        <button type="submit">Sumar</button>
    </form>

    <?php if ($resultado !== null): ?>
        <h2>Resultado: <?php echo $resultado; ?></h2>
    <?php endif; ?>
</body>
</html>