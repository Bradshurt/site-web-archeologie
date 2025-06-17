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
          <button class="register-button">Inscription</button>
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
      <img
        src="./assets/img/vue-du-monument-mondial-pour-celebrer-la-journee-du-patrimoine-mondial.jpg"
        alt=""
        class="main-img"
      />
      <div class="main-overlay"></div>
      <!-- Modale de connexion -->
      <div class="modal hidden" id="login-modal">
        <div class="modal-content">
          <i class="fa-solid fa-xmark close-modal"></i>
          <h2 class="modal-title">Connexion</h2>
          <form class="content-form" action="#" method="post">
            <label for="username">Nom d'utilisateur:</label>
            <input
              class="input-username"
              type="text"
              id="username"
              name="username"
              required
            />
            <label for="password">Mot de passe:</label>
            <input
              class="input-pwd"
              type="password"
              id="password"
              name="password"
              required
            />
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
                placeholder="Email"
                required
              />
              <label for="password">Mot de passe:</label>
              <div class="pwd-type-option">
                <div class="row-pwd">
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
                  <input
                    class="input-pwd"
                    type="password"
                    id="register-password"
                    name="register-password"
                    placeholder="Mot de passe"
                    required
                  />
                </div>
                <button
                  class="modal-pwd-btn"
                  onclick="generatePassword()"
                  type="button"
                  id="generate-password"
                >
                  Générer un mot de passe
                </button>
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
      <div class="main-content">
        <div class="breaking-news">
          <div class="first-news">
            <div class="p-title-news">
              <h1 class="main-title">Bienvenue sur Archéo-IT</h1>
              <p class="main-description">
                Découvrez les dernières avancées en archéologie et technologies
                de l'information. Explorez nos chantiers de fouilles, participez
                à nos événements et rejoignez notre communauté passionnée.
              </p>
            </div>
            <div class="carousel" onmousemove="handleMouseMove(event)">
              <div class="carousel-inner disposition">
                <div class="card active">
                  <img src="/assets/img/img-card.png" alt="" class="img-card" />
                  <h3>Carte 1</h3>
                  <p>Description de la carte 1.</p>
                </div>
                <div class="card">
                  <img src="/assets/img/img-card.png" alt="" class="img-card" />
                  <h3>Carte 2</h3>
                  <p>Description de la carte 2.</p>
                </div>
                <div class="card">
                  <img src="/assets/img/img-card.png" alt="" class="img-card" />
                  <h3>Carte 3</h3>
                  <p>Description de la carte 3.</p>
                </div>
                <div class="card">
                  <img src="/assets/img/img-card.png" alt="" class="img-card" />
                  <h3>Carte 4</h3>
                  <p>Description de la carte 4.</p>
                </div>
                <div class="card">
                  <img src="/assets/img/img-card.png" alt="" class="img-card" />
                  <h3>Carte 5</h3>
                  <p>Description de la carte 5.</p>
                </div>
                <div class="card">
                  <img src="/assets/img/img-card.png" alt="" class="img-card" />
                  <h3>Carte 6</h3>
                  <p>Description de la carte 6.</p>
                </div>
                <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
                <button class="next" onclick="moveSlide(1)">&#10095;</button>
              </div>
            </div>
          </div>
          <div class="second-news"></div>
        </div>
      </div>
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
            <h1 class="logo-title"><a href="#">ARCHÉO–iT</a></h1>
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
    <script src="assets/js/script.js"></script>
  </body>
</html>
