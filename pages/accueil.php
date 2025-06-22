<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
if (!isset($_SESSION['user_id'])) {
    header("Location: ../index.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <?php include"../includes/link.php"?>
    <title>Document</title>
  </head>
  <body>
    <?php include"../includes/header.php"?>

    <div class="hero-background">
      <img
        src="../assets/img/vue-du-monument-mondial-pour-celebrer-la-journee-du-patrimoine-mondial.jpg"
        alt=""
        class="hero-img"
      />
      <div class="hero-overlay"></div>
    </div>

    <main class="principal-container">
      <div class="hero-content">
        <div class="hero-left">
          <span class="badge">HOT NOW</span>
          <h1 class="hero-title">Bienvenue sur Archéo-IT</h1>
          <p class="hero-description">
            Découvrez les dernières avancées en archéologie et technologies de
            l'information. Explorez nos chantiers de fouilles, participez à nos
            événements et rejoignez notre communauté passionnée.
          </p>

          <section class="trending-section">
            <div class="trending-header">
              <span class="trending-icon"></span>
              <h2 class="trending-title">Trending Now</h2>
            </div>

            <div class="trending-cards">
              <div class="trending-card">
                <img
                  src="https://www.flyingeye.fr/wp-content/uploads/2021/07/dji-Zenmuse-L1-LIDAR.jpg"
                  alt="Scanner LiDAR en action"
                />
                <h3>
                  Le LiDAR révolutionne la détection de sites archéologiques
                </h3>
              </div>

              <div class="trending-card">
                <img
                  src="https://static.nationalgeographic.fr/files/styles/image_3200/public/archaide.webp?w=760&h=573"
                  alt="IA analysant des artefacts"
                />
                <h3>L'IA déchiffre des textes antiques endommagés</h3>
              </div>

              <div class="trending-card">
                <img
                  src="https://i.all3dp.com/wp-content/uploads/2022/09/18163135/Epic-Games-Capturing-Reality-scaled.jpg"
                  alt="Reconstruction 3D d'un temple"
                />
                <h3>Photogrammétrie 3D : reconstitutions millimétriques</h3>
              </div>
            </div>
          </section>
        </div>

        <div class="hero-right">
          <h3 class="breaking-title">Breaking News</h3>

          <div class="breaking-item">
            <img src="/assets/img/img-card.png" alt="" />
            <div class="breaking-text">
              <h4>Carte 1</h4>
              <p>NOV 18, 2023</p>
            </div>
          </div>

          <div class="breaking-item">
            <img src="/assets/img/img-card.png" alt="" />
            <div class="breaking-text">
              <h4>Carte 2</h4>
              <p>NOV 17, 2023</p>
            </div>
          </div>

          <div class="breaking-item">
            <img src="../assets/img/img-card.png" alt="" />
            <div class="breaking-text">
              <h4>Le Colisée ouvre ses portes gratuitement</h4>
              <p>Rome célèbre le patrimoine à bras ouverts.</p>
            </div>
          </div>

          <div class="breaking-item">
            <img src="../assets/img/img-card.png" alt="" />
            <div class="breaking-text">
              <h4>Des visites nocturnes inédites à Angkor</h4>
              <p>Une première pour les temples cambodgiens.</p>
            </div>
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
            <div class="popular-card">
              <img src="/assets/img/register.jpg" />
              <div class="badges">
                <span class="badge black">ECONOMY</span>
              </div>
              <h4>Minulla Posuere Sollicitudin Aliquam Ultrices</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            </div>
            <div class="popular-card">
              <img src="/assets/img/register.jpg" />
              <div class="badges">
                <span class="badge black">ECONOMY</span>
              </div>
              <h4>Scelerisque Varius Morbi Enim Nunc Faucibus</h4>
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

        <!-- RIGHT COLUMN (Hot Videos) -->
        <div class="hot-videos">
          <h3>Vidéos populaires</h3>
          <div class="video-item">
            <div class="video-frame">
              <iframe
                src="https://www.youtube.com/embed/7MFKy7DJsCY"
                title="Découverte de la tombe de Toutânkhamon"
                frameborder="0"
                allowfullscreen
              ></iframe>
            </div>
            <h4>Les secrets de la tombe de Toutânkhamon</h4>
            <p class="date">Mai 28, 2025</p>
          </div>

          <div class="video-item">
            <div class="video-frame">
              <iframe
                src="https://www.youtube.com/embed/7YGLTXE4mQ0"
                title="Découverte archéologique"
                frameborder="0"
                allowfullscreen
              ></iframe>
            </div>
            <h4>Les 10 découvertes incroyable de l'archéologie</h4>
            <p class="date">Dec, 2024</p>
          </div>
        </div>
      </div>
    </main>
    <?php include"../includes/footer.php"?>
  </body>
</html>
