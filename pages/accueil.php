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
                <img src="/assets/img/register.jpg" alt="" />
                <h3>Scelerisque Varius Morbi Enim Nunc Faucibus</h3>
              </div>

              <div class="trending-card">
                <img src="/assets/img/register.jpg" alt="" />
                <h3>Bulvinar Neque Laoreet Suspendisse Interdum</h3>
              </div>

              <div class="trending-card">
                <img src="/assets/img/register.jpg" alt="" />
                <h3>Accumsan Tortor Posuere Acut Consequat Semper</h3>
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
          <h1>Risus Pretium Quam Vulputate Dignissim Suspendisse</h1>
          <p class="date">Nov 16, 2023</p>
          <p class="description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
            eiusmod tempor incididunt ut labore et dolore magna aliqua.
            Tincidunt praesent semper feugiat nibh. Nullam non nisi est sit amet
            facilisis magna. Pellentesque pulvinar pellentesque habitant…
          </p>

          <div class="more-world-category">
            <h3>More from World Category</h3>
            <div class="article-grid">
              <div class="article-item">
                <h4>Dolor Purus Non Enim Praesent Elementum Facilisis</h4>
                <p class="date">Nov 16, 2023</p>
              </div>
              <div class="article-item">
                <h4>Dignissim Suspendisse Inest Ante Inibh Mauris</h4>
                <p class="date">Nov 16, 2023</p>
              </div>
              <div class="article-item">
                <h4>Scelerisque Eultrices Vitae Auctor Pellentesque</h4>
                <p class="date">Nov 16, 2023</p>
              </div>
              <div class="article-item">
                <h4>Lacus Sedturpis Tincidunt Odaliquet Risus</h4>
                <p class="date">Nov 14, 2023</p>
              </div>
              <div class="article-item">
                <h4>Phasellus Vestibulum Lorem Sed Risus Ultricies Natoque</h4>
                <p class="date">Nov 14, 2023</p>
              </div>
              <div class="article-item">
                <h4>Pellentesque Eliteget Bravida Cumsociis Natoque</h4>
                <p class="date">Nov 10, 2023</p>
              </div>
            </div>
          </div>
        </div>

        <!-- RIGHT COLUMN (Hot Videos) -->
        <div class="hot-videos">
          <h3>Hot Videos</h3>
          <div class="video-item">
            <div class="video-frame">
              <iframe
                src="https://www.youtube.com/embed/VIDEO_ID_1"
                title="YouTube video"
                frameborder="0"
                allowfullscreen
              ></iframe>
            </div>
            <h4>Pellentesque Pulvinar Pellentesque Habitant Morbi</h4>
            <p class="date">Nov 17, 2023</p>
          </div>

          <div class="video-item">
            <div class="video-frame">
              <iframe
                src="https://www.youtube.com/embed/VIDEO_ID_2"
                title="YouTube video"
                frameborder="0"
                allowfullscreen
              ></iframe>
            </div>
            <h4>Dignissim Suspendisse Inest Ante Inibh Mauris</h4>
            <p class="date">Nov 16, 2023</p>
          </div>
        </div>
      </div>
    </main>
    <?php include"../includes/footer.php"?>
  </body>
</html>
