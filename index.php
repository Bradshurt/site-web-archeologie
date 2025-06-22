<?php
session_start();

if (isset($_SESSION['user_id'])) {
    header("Location: pages/accueil.php");
    exit();
}

require_once __DIR__ . "/database/database.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // INSCRIPTION
    if (isset($_POST['register-username'])) {
        $prenom = trim($_POST['firstname']);
        $nom = trim($_POST['lastname']);
        $username = trim($_POST['register-username']);
        $email = trim($_POST['email']);
        $mot_de_passe = password_hash(trim($_POST['register-password']), PASSWORD_DEFAULT);

        $stmt = $pdo->prepare("INSERT INTO utilisateurs (prenom, nom, username,
email, mot_de_passe) VALUES (?, ?, ?, ?, ?)"); try { $stmt->execute([$prenom,
$nom, $username, $email, $mot_de_passe]); $_SESSION['user_id'] =
$pdo->lastInsertId(); $_SESSION['username'] = $username; $_SESSION['role'] =
'membre'; header("Location: pages/accueil.php"); exit(); } catch (PDOException
$e) { $erreur_inscription = "Erreur : nom d'utilisateur ou email déjà utilisé.";
} } // CONNEXION elseif (isset($_POST['username']) && isset($_POST['password']))
{ $username = trim($_POST['username']); $password = trim($_POST['password']);
$stmt = $pdo->prepare("SELECT * FROM utilisateurs WHERE username = ?");
$stmt->execute([$username]); $user = $stmt->fetch(); if (!$user) {
$erreur_connexion = "Nom d'utilisateur incorrect."; } elseif
(!password_verify($password, $user['mot_de_passe'])) { $erreur_connexion = "Mot
de passe incorrect."; } else { $_SESSION['user_id'] = $user['id'];
$_SESSION['username'] = $user['username']; $_SESSION['role'] = $user['role'];
header("Location: pages/accueil.php"); exit(); } } } ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <?php include"includes/link.php" ?>
    <title>ArcheoIT_Project</title>
  </head>
  <body>
    <?php include"includes/header.php" ?>
    <div class="hero-background">
      <img
        src="../assets/img/vue-du-monument-mondial-pour-celebrer-la-journee-du-patrimoine-mondial.jpg"
        alt=""
        class="hero-img"
      />
      <div class="hero-overlay"></div>
    </div>
    <main class="principal-container">
      <div class="disposition">
        <section class="welcome-section">
          <h1 class="welcome-title">Bienvenue sur Archéo–IT</h1>
          <p class="welcome-description">
            Explorez les mystères de l'histoire et les technologies de demain.
            Inscrivez-vous pour découvrir nos fouilles exclusives, nos articles
            et bien plus encore.
          </p>
          <div class="cta-buttons">
            <button class="btn-primary login-button" id="show-login">Connexion</button>
            <button class="btn-secondary register-button" id="show-register">
              Inscription
            </button>
          </div>
        </section>
      </div>
      <!-- Modale de connexion -->
      <div class="modal hidden" id="login-modal">
        <div class="modal-content">
          <i class="fa-solid fa-xmark close-modal"></i>
          <h2 class="modal-title">Connexion</h2>
          <form class="content-form" action="" method="post">
            <label for="username">Nom d'utilisateur:</label>
            <input
              class="input-username <?php if (isset($erreur_connexion) && str_contains($erreur_connexion, 'Nom d\'utilisateur')) echo 'input-error'; ?>"
              type="text"
              id="username"
              name="username"
              required
            />
            <label for="password">Mot de passe:</label>
            <input
              type="password"
              id="password"
              name="password"
              class="input-pwd <?php if (isset($erreur_connexion) && str_contains($erreur_connexion, 'Mot de passe')) echo 'input-error'; ?>"
              required
            />
            <?php if (isset($erreur_connexion)): ?>
            <div class="error-message"><?= $erreur_connexion ?></div>
            <?php endif; ?>
            <a href="#" class="forgot-pwd">Mot de passe oublié ?</a>
            <button class="modal-login" type="submit">Se connecter</button>
          </form>
        </div>
      </div>
      <!-- Modale Inscription -->
      <div class="modal-first hidden" id="register-modal">
        <div class="modal-content modal-row">
          <i class="fa-solid fa-xmark close-modal"></i>
          <!-- compartiment de gauche -->
          <div class="modal-side-left modal-side-img">
            <div class="modal-img-bg">
              <div class="modal-img-overlay">
                <h2 class="modal-img-title">Bienvenue !</h2>
                <p class="modal-img-text">
                  Rejoignez la communauté Archéo–iT pour découvrir toutes nos
                  actualités.
                </p>
              </div>
            </div>
          </div>
          <!-- compartiment droit -->
          <div class="modal-side-right modal-side-form">
            <h2 class="modal-title">Inscription</h2>
            <form class="content-form-right" action="#" method="post">
              <div class="name-user">
                <div class="firstname-user">
                  <input
                    class="input-firstname"
                    type="text"
                    id="register-firstname"
                    name="firstname"
                    placeholder="Prénom"
                    required
                  />
                </div>
                <div class="lastname-user">
                  <input
                    class="input-lastname"
                    type="text"
                    id="register-lastname"
                    name="lastname"
                    placeholder="Nom"
                    required
                  />
                </div>
              </div>
              <input
                class="input-username"
                type="text"
                id="register-username"
                name="register-username"
                placeholder="Nom d'utilisateur"
                required
              />
              <input
                class="input-email"
                type="email"
                name="email"
                placeholder="Email"
                required
              />
              <label for="register-password">Mot de passe :</label>
              <div class="pwd-type-group">
                <select
                  id="password-type"
                  name="password-type"
                  class="input-select"
                >
                  <option value="" disabled selected>
                    Type de mot de passe
                  </option>
                  <option value="alpha">Alphabétique seulement</option>
                  <option value="alphanum">Alphanumérique</option>
                  <option value="complex">
                    Alphanumérique + caractères spéciaux
                  </option>
                </select>

                <div class="pwd-input-group">
                  <input
                    class="input-pwd"
                    type="password"
                    id="register-password"
                    name="register-password"
                    placeholder="Mot de passe"
                    required
                  />
                  <button
                    class="modal-pwd-btn"
                    type="button"
                    id="generate-password"
                    onclick="generatePassword()"
                  >
                    Générer
                  </button>
                </div>

                <div class="show-password">
                  <input
                    type="checkbox"
                    id="toggle-password"
                    onclick="togglePasswordVisibility()"
                  />
                  <label for="toggle-password">Afficher le mot de passe</label>
                </div>
              </div>

              <button class="modal-register" type="submit">S'inscrire</button>
            </form>
            <p class="register-connect">
              Déjà inscrit ?
              <a class="alredy-listed" href="#" id="show-login">Se connecter</a>
            </p>
          </div>
        </div>
      </div>
      <div class="news-section">
        <div class="breaking-news">
          <h2>Breaking News</h2>
          <div class="main-article">
            <img src="/assets/img/template.jpg" alt="Breaking" />
            <div class="breaking-overlay">
              <span class="badge">BREAKING</span>
              <span class="category">CULTURE</span>
              <h2>Ornare Arcu Duivivamus Arcu Felis Bibendum</h2>
              <p class="date">Nov 14, 2023</p>
            </div>
          </div>
        </div>

        <div class="popular-now">
          <h2>Popular Now</h2>
          <div class="popular-grid">
            <div class="popular-card">
              <img src="/assets/img/register.jpg" />
              <div class="badges">
                <span class="badge black">TRAVEL</span>
                <span class="badge black">WORLD</span>
              </div>
              <h4>Pellentesque Elit Bravida Cum Sociis Natoque</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            </div>
            <div class="popular-card">
              <img src="/assets/img/register.jpg" />
              <div class="badges">
                <span class="badge black">SCIENCE</span>
              </div>
              <h4>Turpis Egestas Sed Tempus Urna Pharetra</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            </div>
          </div>
        </div>
      </div>
      <div class="news-section-2">
        <!-- LEFT COLUMN (World Category + Articles) -->
        <div class="breaking-news">
          <span class="badge green">World</span>
          <h1>Découverte d'une cité maya intacte grâce au LiDAR</h1>
          <p class="date">Juin 15, 2025</p>
          <p class="description">
            Une équipe internationale a identifié une cité maya complète sous la forêt tropicale guatémaltèque. 
            Le scan laser a révélé pyramides, terrains de jeu de balle et un système hydraulique sophistiqué. 
            Ce site datant du Classique maya (250-900 ap. J.-C.) pourrait réécrire l'histoire de la région...
          </p>

          <div class="more-world-category">
            <h3>Plus d'actualités archéologiques</h3>
            <div class="article-grid">
              <div class="article-item">
                <h4>Nouvelle interprétation des peintures de Lascaux</h4>
                <p class="date">Juin 14, 2025</p>
              </div>
              <div class="article-item">
                <h4>Découverte d'un navire viking en parfait état</h4>
                <p class="date">Juin 12, 2025</p>
              </div>
              <div class="article-item">
                <h4>L'ADN ancien révèle des migrations inconnues</h4>
                <p class="date">Juin 10, 2025</p>
              </div>
              <div class="article-item">
                <h4>Un trésor romain trouvé en Bretagne</h4>
                <p class="date">Juin 8, 2025</p>
              </div>
              <div class="article-item">
                <h4>Déchiffrement partiel du disque de Phaistos</h4>
                <p class="date">Juin 5, 2025</p>
              </div>
              <div class="article-item">
                <h4>Technologie 3D pour restaurer Palmyre</h4>
                <p class="date">Juin 2, 2025</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <?php include"includes/footer.php" ?>
    <script src="assets/js/script.js"></script>
    <script src="/assets/js/generate_password.js"></script>
    <script src="/assets/js/connect-error.js"></script>
  </body>
</html>
