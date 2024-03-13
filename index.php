<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    
<h1>Verificação de Números</h1>
<form method="post">
<label for="numero">Digite um número:</label>
<input type="number" id="numero" name="numero" required>
<button type="submit">Verificar</button>
</form>

<div class="resultado">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$num = $_POST["numero"];

// Verifica se o número é par ou ímpar
if ($num % 2 == 0) {
echo "<p>O número informado é PAR.</p>";
} else {
echo "<p>O número informado é ÍMPAR.</p>";
}

// Verifica se o número é redondo (quadrado perfeito)
$raizQuadrada = sqrt($num);
if ($raizQuadrada == floor($raizQuadrada)) {
echo "<p>O número informado é um quadrado perfeito.</p>";
} else {
echo "<p>O número informado não é um quadrado perfeito.</p>";
}

// Verifica se o número é positivo, negativo ou neutro (zero)
if ($num > 0) {
echo "<p>O número informado é POSITIVO.</p>";
} elseif ($num < 0) {
 echo "<p>O número informado é NEGATIVO.</p>";
 } else {
 echo "<p>O número informado é NEUTRO (ZERO).</p>";
                }
            }
   ?>
    
</div>
    </div>
</body>
</html>

