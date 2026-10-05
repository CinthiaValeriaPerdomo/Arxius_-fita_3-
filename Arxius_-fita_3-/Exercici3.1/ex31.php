<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <style>
        td {
            border: 2px solid black;
        }
        table {
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h1>PROCESSA CONTACTES</h1>
    <table>
        <?php
        $contactesStr = file_get_contents("contactes31.txt");
        $contactes = explode("\n", $contactesStr);
        $linia = "";
        for ($i=0; $i < count($contactes); $i++) { 
            $contacte = explode(",", $contactes[$i]);
            echo "<tr>";
            echo "<td>".$contacte[0]."</td>\n";
            echo "<td>".$contacte[1]."</td>\n";
            echo "<td>".$contacte[2]."</td>\n";
            echo "<td>".$contacte[3]."</td>\n";
            echo "</tr>\n";

            $linia .= $contacte[0]."#".$contacte[1]."#".$contacte[2]."#".$contacte[3]."\n";
        }
        file_put_contents("contactes31b.txt", $linia);

        ?>    
    </table>


</body>
</html>