<?php
$fitxer = "ex34.txt";

$text = file_get_contents($fitxer);

// Convertimos las líneas "## título" en <h1>
$html = preg_replace('/^## (.*?)(<BR>)?\s*$/m', '<h1>$1</h1>', $text);
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>ex34</title>
    <style>
        table { border-collapse: collapse; width: 100%; }
        th, td { border: 1px solid #ccc; padding: 10px; vertical-align: top; text-align: left; }
        th { background: #eee; }
        pre { margin: 0; white-space: pre-wrap; font-family: inherit; }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>Arxiu de text:</th>
            <th>Codi generat:</th>
            <th>Visualitzem:</th>
        </tr>
        <tr>
            <td><pre><?php echo htmlspecialchars($text); ?></pre></td>
            <td><pre><?php echo htmlspecialchars($html); ?></pre></td>
            <td><?php echo $html; ?></td>
        </tr>
    </table>
</body>
</html>