<?php
if (isset($_GET['type'])) {
    $type = escapeshellarg($_GET['type']); // sécurise l'entrée
    $command = "python C:\\laragon\\www\\year-end_project\\python\\password_generator.py $type 2>&1";
    $output = shell_exec($command);
    echo trim($output);
} else {
    echo "Erreur : aucun type reçu";
}
?>
