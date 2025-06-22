<?php
session_start();

// Redirige vers l'accueil si l'utilisateur est déjà connecté
function redirectIfLoggedIn() {
    if (isset($_SESSION['user_id'])) {
        header("Location: pages/accueil.php");
        exit();
    }
}

// Redirige vers la page de connexion si l'utilisateur n'est pas connecté
function redirectIfNotLoggedIn() {
    if (!isset($_SESSION['user_id'])) {
        header("Location: ../index.php");
        exit();
    }
}
?>
