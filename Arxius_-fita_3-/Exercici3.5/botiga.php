<?php
$productes = file("productes.txt", FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
$missatge = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $usuari = trim($_POST["usuari"] ?? "");
    $triats = $_POST["productes"] ?? [];

    if ($usuari !== "" && count($triats) > 0) {
        // nom_d'usuari,prod1,prod2,etc.
        $linia = "\n" . $usuari . "," . implode(",", $triats) . PHP_EOL;
        file_put_contents("comandes.txt", $linia, FILE_APPEND);
        $missatge = "Comanda guardada!";
    } else {
        $missatge = "Escriu el teu nom i tria almenys un producte.";
    }
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>ex35</title>
</head>
<body>
    <h1>Ex35</h1>
    <br>
    <h2>Botiga</h2>

    <?php if ($missatge !== "") echo "<p>" . htmlspecialchars($missatge) . "</p>"; ?>

    <form method="post" action="botiga.php">
        <?php foreach ($productes as $producte): ?>
            <label>
                <input type="checkbox" name="productes[]" value="<?php echo htmlspecialchars($producte); ?>">
                <?php echo htmlspecialchars($producte); ?>
            </label><br>
        <?php endforeach; ?>

        <br>
        <label for="usuari">Nom d'usuari:</label>
        <input type="text" name="usuari" id="usuari">
        <br><br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>