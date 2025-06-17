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

    <main class="principal-container">
      <img
        src="../assets/img/vue-du-monument-mondial-pour-celebrer-la-journee-du-patrimoine-mondial.jpg"
        alt=""
        class="main-img"
      />
      <div class="main-overlay"></div>
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
              </div>
              <button class="prev" onclick="moveSlide(-1)">&#10094;</button>
              <button class="next" onclick="moveSlide(1)">&#10095;</button>
            </div>
          </div>
          <div class="second-news"></div>
        </div>
      </div>
    </main>
    <?php include"../includes/footer.php"?>
  </body>
</html>
