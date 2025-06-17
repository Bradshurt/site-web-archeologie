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
    <main class="principal-container">
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

    </main>
    <?php include"includes/footer.php" ?>
    <script src="assets/js/script.js"></script>
  </body>
</html>
