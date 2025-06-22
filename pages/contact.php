<?php
 include '../database/database.php';

try {
  $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
  die("Erreur de connexion : " . $e->getMessage());
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $prenom = htmlspecialchars($_POST['prenom']);
  $nom = htmlspecialchars($_POST['nom']);
  $email = htmlspecialchars($_POST['email']);
  $sujet = htmlspecialchars($_POST['sujet']);
  $message = htmlspecialchars($_POST['message']);

  $stmt = $pdo->prepare("INSERT INTO contacts (prenom, nom, email, sujet, message) VALUES (?, ?, ?, ?, ?)");
  $stmt->execute([$prenom, $nom, $email, $sujet, $message]);

  echo "Merci, votre message a bien été envoyé !";
}
?>

<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include '../includes/link.php'; ?>
    <title>Contact - Archéo-IT</title>
  </head>
  <body>
    <?php include '../includes/header.php'; ?>
    <div class="container">
      <h1>Contactez-nous</h1>
      <p>
        Pour toute demande, n'hésitez pas à remplir le formulaire ci-dessous.
      </p>

      <form action="contact.php" method="POST" class="contact-form">
        <div class="form-group">
          <label for="prenom">Prénom</label>
          <input type="text" name="prenom" id="prenom" required />
        </div>

        <div class="form-group">
          <label for="nom">Nom</label>
          <input type="text" name="nom" id="nom" required />
        </div>

        <div class="form-group">
          <label for="email">Adresse e-mail</label>
          <input type="email" name="email" id="email" required />
        </div>

        <div class="form-group">
          <label for="sujet">Sujet</label>
          <select name="sujet" id="sujet" required>
            <option value="">-- Choisir un sujet --</option>
            <option value="info">Demande d'infos</option>
            <option value="rdv">Demande de Rendez-vous</option>
            <option value="autre">Autre</option>
          </select>
        </div>

        <div class="form-group">
          <label for="message">Votre message</label>
          <textarea name="message" id="message" rows="5" required></textarea>
        </div>

        <button type="submit">Envoyer</button>
      </form>
    </div>
    <?php include '../includes/footer.php'; ?>
  </body>
</html>
