<?php
session_start();

$mediaVoti = 0;
if (isset($_SESSION['voti']) && count($_SESSION['voti']) > 0) {
    $mediaVoti = array_sum($_SESSION['voti']) / count($_SESSION['voti']);
}

$numeroInvii = isset($_SESSION['numero_invio']) ? $_SESSION['numero_invio'] : 0;
$voti = isset($_SESSION['voti']) ? $_SESSION['voti'] : [];
$ultimaData = isset($_SESSION['ultima_data']) ? $_SESSION['ultima_data'] : "N/D";
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Risultati</title>
    <style>
        body {
            
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            border: 1px solid #ddd;
        }

  
        a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <h1>Risultati delle Recensioni</h1>

    <table>
        <tr>
            <th>Numero di Invii</th>
            <th>Ultima Data Inviata</th>
        </tr>
        <tr>
            <td><?php echo $numeroInvii; ?></td>
            <td><?php echo $ultimaData; ?></td>
        </tr>
    </table>

    <h2>Voti delle Recensioni</h2>
    <ul>
        <?php foreach ($voti as $voto) {
            echo "<li>$voto</li>";
        } ?>
    </ul>

    <h3>Media delle Recensioni: <?php echo number_format($mediaVoti, 2); ?></h3>

    <a href="presentazione.html">Torna indietro</a>
</body>
</html>
