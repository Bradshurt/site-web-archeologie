<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<header class="nav">
  <div class="option-contrainer">
    <div class="mode-toggle">
      <button class="button-class" id="toggle-button">
        <i class="fa-solid fa-moon mode-icon" id="mode-toggle"></i>
      </button>
      <button class="search-button">
        <i class="fa-solid fa-magnifying-glass mode-icon" id="mode-icon"></i>
      </button>
    </div>
    <div class="contrainer-logo">
      <h1 class="logo-title"><a href="#">ARCHÉO–iT</a></h1>
      <p class="logo-text">To be completed</p>
    </div>
    <div class="authentification">
      <?php if (isset($_SESSION['user_id'])): ?>
      <form class="btn-logout" action="/includes/logout.php" method="post">
        <button type="submit" class="logout-button">
          <i class="fa-solid fa-right-from-bracket logout-icon"></i> Déconnexion
        </button>
      </form>
      <?php else: ?>
      <button class="login-button">
        <i class="fa-regular fa-circle-user login-icon"></i>Connexion
      </button>
      <button class="register-button">Inscription</button>
      <?php endif; ?>
    </div>
    <div class="burger-menu" id="burger-menu">
      <i class="fa-solid fa-bars"></i>
    </div>
  </div>
  <span class="header-separator"></span>
  <div class="nav-contrainer">
    <nav class="nav-bar" id="mobile-nav">
      <ul class="position">
        <li class="nav-list">
          <a class="nav-link" href="<?php echo isset($_SESSION['user_id']) ? '../pages/accueil.php' : '../index.php'; ?>">
            Accueil
          </a>
        </li>
        <li class="nav-list"><a class="nav-link" href="../pages/chantiers.php">Chantiers</a></li>
        <li class="nav-list"><a class="nav-link" href="../pages/contact.php">contact</a></li>
        <div class="nav-auth">
          <?php if (isset($_SESSION['user_id'])): ?>
          <div class="auth-mobile">
            <form action="/includes/logout.php" method="post">
              <button type="submit" class="logout-button" action="/includes/logout.php" method="post>
                <i class="fa-solid fa-right-from-bracket logout-icon"></i>
                Déconnexion
              </button>
            </form>
          </div>
          <?php else: ?>
          <div class="auth-mobile">
            <button class="login-button">
              <i class="fa-regular fa-circle-user login-icon"></i>Connexion
            </button>
            <button class="register-button">Inscription</button>
          </div>
          <?php endif; ?>
        </div>
      </ul>
    </nav>
  </div>
</header>
<script src="../assets/js/responsive-option.js"></script>
