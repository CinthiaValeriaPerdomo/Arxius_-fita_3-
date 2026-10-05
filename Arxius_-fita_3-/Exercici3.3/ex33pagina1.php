<?php
$fitxer = "ex33.txt";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $missatge = $_POST["missatge"] ?? "";

    if (trim($missatge) !== "") {
        // Añadimos el mensaje y una línea horizontal para separar
        $contingut = htmlspecialchars($missatge) . "\n<hr>\n";
        file_put_contents($fitxer, $contingut, FILE_APPEND);
    }
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>ex33</title>
</head>
<body>
	<h1>Ex33</h1>
	<br>
    <h2>Comentaris</h2>

    <div>
        <?php
        // Mostramos todo el contenido del archivo
        echo nl2br(file_get_contents($fitxer));
        ?>
    </div>

    <form method="post" action="ex33pagina1.php">
        <textarea name="missatge" rows="5" cols="40"></textarea>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>
