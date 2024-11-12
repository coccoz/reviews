<?php
session_start();

$data = $_POST['data'];
$voto = $_POST['voto'];

if (!isset($_SESSION['numero_invio'])) {
    $_SESSION['numero_invio'] = 0;
}
if (!isset($_SESSION['voti'])) {
    $_SESSION['voti'] = [];
}
if (!isset($_SESSION['ultima_data'])) {
    $_SESSION['ultima_data'] = "";
}

$_SESSION['numero_invio']++;
$_SESSION['voti'][] = $voto;
$_SESSION['ultima_data'] = $data;

echo "<h1>Dati inviati</h1>";
echo "<p>Data: $data</p>";
echo "<p>Voto: $voto</p>";
echo "<p>Numero di invii: " . $_SESSION['numero_invio'] . "</p>";
echo "<p>Voti: " . implode(", ", $_SESSION['voti']) . "</p>";
echo "<p>Ultima data inviata: " . $_SESSION['ultima_data'] . "</p>";

echo '<br><a href="presentazione.html">Torna indietro</a>';
?>


