<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Website font  -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap"
      rel="stylesheet"
    />
    <!-- CDN website icon -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"
    />
    <link rel="stylesheet" href="assets/css/style.css" />
    <title>ArcheoIT_Project</title>
  </head>
  <body>
    <header class="nav">
      <div class="option-contrainer">
        <div class="mode-toggle">
          <button class="button-class" id="toggle-button">
            <i class="fa-solid fa-moon mode-icon" id="mode-toggle"></i>
          </button>
          <button class="search-button">
            <i
              class="fa-solid fa-magnifying-glass mode-icon"
              id="mode-icon"
            ></i>
          </button>
        </div>
        <div class="contrainer-logo">
          <h1 class="logo-title"><a href="#">ARCHÉO–iT</a></h1>
          <p class="logo-text">To be completed</p>
        </div>
        <div class="authentification">
          <button class="login-button">
            <i class="fa-regular fa-circle-user login-icon"></i>Connexion
          </button>
        </div>
      </div>
      <span class="header-separator"></span>
      <div class="nav-contrainer">
        <nav class="nav-bar">
          <ul class="position">
            <li class="nav-list"><a class="nav-link" href="#">Accueil</a></li>
            <li class="nav-list"><a class="nav-link" href="#">Chantiers</a></li>
            <li class="nav-list"><a class="nav-link" href="#">contact</a></li>
            <li class="nav-list"><a class="nav-link" href="#">Market</a></li>
          </ul>
        </nav>
      </div>
    </header>
    <main class="principal-container">
      <img
        src="./assets/img/vue-du-monument-mondial-pour-celebrer-la-journee-du-patrimoine-mondial.jpg"
        alt=""
        class="main-img"
      />
      <div class="main-overlay"></div>
    </main>

    <footer class="site-footer">
      <div class="footer-container">
        <!-- Section À propos -->
        <div class="footer-section">
          <h3>À propos d'Archéo-IT</h3>
          <p>
            Association dédiée à la promotion de l'archéologie et des
            technologies de l'information.
          </p>
          <div class="footer-logo">
            <img src="images/logo.png" alt="Logo Archéo-IT" />
          </div>
        </div>

        <!-- Section Liens rapides -->
        <div class="footer-section">
          <h3>Liens rapides</h3>
          <ul class="footer-links">
            <li><a href="index.html">Accueil</a></li>
            <li><a href="chantiers.html">Chantiers de fouilles</a></li>
            <li><a href="contact.html">Contact</a></li>
            <li><a href="inscription.html">Inscription</a></li>
          </ul>
        </div>

        <!-- Section Contact -->
        <div class="footer-section">
          <h3>Contactez-nous</h3>
          <ul class="contact-info">
            <li><i class="fas fa-envelope"></i> contact@archeo-it.fr</li>
            <li><i class="fas fa-phone"></i> +33 1 23 45 67 89</li>
            <li>
              <i class="fas fa-map-marker-alt"></i> 123 Rue de l'Archéologie,
              75000 Paris
            </li>
          </ul>
        </div>

        <!-- Section Réseaux sociaux -->
        <div class="footer-section">
          <h3>Suivez-nous</h3>
          <div class="social-links">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
          </div>
          <div class="newsletter">
            <h4>Newsletter</h4>
            <form class="newsletter-form">
              <input type="email" placeholder="Votre email" />
              <button type="submit">S'abonner</button>
            </form>
          </div>
        </div>
      </div>

      <!-- Copyright -->
      <div class="footer-bottom">
        <p>&copy; 2024-2025 Archéo-IT. Tous droits réservés.</p>
        <div class="legal-links">
          <a href="#">Mentions légales</a>
          <a href="#">Politique de confidentialité</a>
          <a href="#">Conditions d'utilisation</a>
        </div>
      </div>
    </footer>
  </body>
</html>
