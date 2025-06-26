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
            <img src="https://www.sciencesetavenir.fr/assets/inline-img/2025/06/04/w453-171429-christophe-fouquin-inrap-2505-inrap-auxerre-85-2.jpg" alt="Villa romaine à Auxerre" />
            <div class="breaking-text">
              <h4>Villa gallo-romaine géante à Auxerre</h4>
              <p>Juin 2025 — Découverte majeure dans l'Yonne.</p>
            </div>
          </div>

          <div class="breaking-item">
            <img src="https://www.connaissancedesarts.com/wp-content/thumbnails/uploads/2021/09/sans-titre-2021-09-03t150656-798-tt-width-1200-height-900-fill-0-crop-1-bgcolor-ffffff.jpg" alt="Mosaïque à Alès" />
            <div class="breaking-text">
              <h4>Fresque romaine intacte retrouvée à Alès</h4>
              <p>Juin 2025 — Mosaïque polychrome exceptionnelle.</p>
            </div>
          </div>

          <div class="breaking-item">
            <img src="https://media.ouest-france.fr/v1/pictures/MjAyMjAyYTdiYmVhZTcwYjZhYTU1OWM1ODI2YjkzNWE0M2QxMDc?width=1260&height=708&focuspoint=50%2C25&cropresize=1&client_id=bpeditorial&sign=fa713750339237ea1d57511ca79d1e27bf21141ea70eb73da40c7a5badf1483c" alt="Chambre néolithique Groix" />
            <div class="breaking-text">
              <h4>Chambre funéraire néolithique à Groix</h4>
              <p>Juin 2025 — Nouvelle fenêtre sur le passé breton.</p>
            </div>
          </div>

          <div class="breaking-item">
            <img src="https://i.la-croix.com/836x/smart/2025/06/26/2122910-ensemble-de-pieces-provenant-de-la-collecte-rabut-.jpg" alt="Expo Âge du Bronze" />
            <div class="breaking-text">
              <h4>Expo “Les Maîtres du Feu” à St-Germain</h4>
              <p>Juin 2025 — Un voyage au cœur du Bronze.</p>
            </div>
          </div>
        </div>

      </div>

      <div class="news-section">
        <div class="breaking-news">
          <h2>Breaking News</h2>
          <div class="main-article">
            <img src="https://www.inrap.fr/sites/inrap.fr/files/thumbnails/image/christophe_fouquin_inrap_2505-inrap-auxerre-depliant_1_result.jpg" alt="Villa romaine à Auxerre" />
            <div class="breaking-overlay">
              <span class="badge">BREAKING</span>
              <span class="category">ARCHÉOLOGIE</span>
              <h2>Une villa romaine géante découverte à Auxerre</h2>
              <p class="date">Juin 2025</p>
            </div>
          </div>
        </div>

        <div class="popular-now">
          <h2>Popular Now</h2>
          <div class="popular-grid">
            <div class="popular-card">
              <img src="https://s3.hosteur.io/gazette-prod-public/gazetteWeb/662f4295514c09a4288b5117/articles/685962eadef071f3f286101d/files/1202578/ouilles-archologiques-par-lA-dun-site-du-e-avant-notre-re-au-e-haudebois-Ales-ues-de-cabanes-protohistoriques-et-de-constructions-antiques-comportant.webp" />
              <div class="badges">
                <span class="badge black">PATRIMOINE</span>
                <span class="badge black">OCCITANIE</span>
              </div>
              <h4>Mosaïque romaine intacte retrouvée à Alès</h4>
              <p>Une fresque polychrome d’époque romaine mise au jour lors de fouilles préventives.</p>
            </div>
            <div class="popular-card">
              <img src="https://media.ouest-france.fr/v1/pictures/MjAyNTA2NjliMjg5MDI5ZWJlNjE5ZGNkYWEwMDVhZjAzNTlhNmU?width=1260&height=708&focuspoint=50%2C25&cropresize=1&client_id=bpeditorial&sign=7fce1011c6aa292c012db5f2d0cb5396d2f051bf6afda694d4f613adcc505e4d" />
              <div class="badges">
                <span class="badge black">PRÉHISTOIRE</span>
                <span class="badge black">BRETAGNE</span>
              </div>
              <h4>Chambre funéraire néolithique redécouverte à Groix</h4>
              <p>Les fouilles de la Pointe des Chats révèlent une sépulture du Néolithique impressionnante.</p>
            </div>
            <div class="popular-card">
              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/96/F07_0017.Mz.JPG/1200px-F07_0017.Mz.JPG" />
              <div class="badges">
                <span class="badge black">MÉDIÉVAL</span>
                <span class="badge black">VENDÉE</span>
              </div>
              <h4>Abbaye de Maillezais : reconstitution 3D inédite</h4>
              <p>Une nouvelle campagne numérique révèle les secrets architecturaux de cette abbaye médiévale.</p>
            </div>
            <div class="popular-card">
              <img src="https://www.connaissancedesarts.com/wp-content/thumbnails/uploads/2025/06/cda-bronze-man-main1-tt-width-1200-height-630-fill-0-crop-1-bgcolor-ffffff.jpg" />
              <div class="badges">
                <span class="badge black">EXPOSITION</span>
                <span class="badge black">ÂGE DU BRONZE</span>
              </div>
              <h4>“Les Maîtres du Feu” au musée de St-Germain</h4>
              <p>Une exposition exceptionnelle sur l’Âge du Bronze ouverte jusqu’en mars 2026.</p>
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
