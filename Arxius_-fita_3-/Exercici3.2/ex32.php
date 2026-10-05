<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $comentari = $_POST["comentari"] ?? "";
    $separador = $_POST["separador"] ?? "";

    $fitxer = "comentaris.txt";

    
    if (!file_exists($fitxer)) {
        touch($fitxer);
    }

    
    $text = str_replace(" ", $separador, $comentari);
    file_put_contents($fitxer, $text . PHP_EOL, FILE_APPEND);
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>ex32</title>
</head>
<body>
    <h1>Ex32</h1>
    <br>
    <form method="post" action="ex32.php">
        <p>INTRODUEIX DADES</p>

        <textarea name="comentari" rows="5" cols="40"></textarea>
        <br><br>

        <label for="separador">separador:</label>
        <input type="text" name="separador" id="separador">
        <br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>