<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery-js/1.4.0/css/lightgallery.min.css">

   <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

   <script src="../public/js/Carousel.js"></script>

<link rel="stylesheet" href="../public/css/Acceuil.css">

    <title><?= App::getInstance()->title; ?></title>
</head>
<body>

<header class="header" data-header>
    <div class="container">

      <a href="#" class="logo">
        <img src="../public/images/logo-light.svg" width="74" height="24" alt="Emilio home" class="logo-light">

        <img src="../public/images/logo-dark.svg" width="74" height="24" alt="Emilio home" class="logo-dark">
      </a>

      <nav class="navbar" data-navbar>

        <div class="navbar-top">
          <a href="#" class="logo">
            <img src="../public/images/logo-light.svg" width="74" height="24" alt="Emilio home">
          </a>

          <button class="nav-close-btn" aria-label="close menu" data-nav-toggler>
            <ion-icon name="close-outline" aria-hidden="true"></ion-icon>
          </button>
        </div>

        <ul class="navbar-list">

          <li>
            <a href="#" class="navbar-link">Acceuil</a>
          </li>

          <li>
            <a href="index.php?=" class="navbar-link">A propos</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Produits</a>
          </li>

          <li>
            <a href="#" class="navbar-link">Se connecter</a>
          </li>

        </ul>

        <div class="wrapper">
          <a href="mailto:info@email.com" class="contact-link">info@email.com</a>

          <a href="tel:001234567890" class="contact-link">00 (123) 456 78 90</a>
        </div>

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-dribbble"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

      </nav>

      <a href="#" class="btn btn-primary">S'inscrire</a>

      <button class="nav-open-btn" aria-label="open menu" data-nav-toggler>
        <ion-icon name="menu-outline" aria-hidden="true"></ion-icon>
      </button>

      <div class="overlay" data-nav-toggler data-overlay></div>

    </div>
</header>

<section class="hero has-bg-image" aria-label="home" style="background-image: url('../public/images/hero-bg.jpg')">
        <div class="container">

          <div class="hero-content">

            <h1 class="h1 hero-title">Nous vous servons le meuble de vos reves.</h1>

            <p class="hero-text">
              Nous vous fournissons des meubles de bonnes qualité à des prix abordables.
            </p>

            <div class="btn-wrapper">

              <a href="#collections" class="btn btn-primary">Explorez maintenant</a>

              <a href="#" class="btn btn-outline">Contactez Nous</a>

            </div>

          </div>

          <div class="hero-slider" data-slider>

            <div class="slider-inner">
              <ul class="slider-container" data-slider-container>

                <li class="slider-item">

                  <figure class="img-holder" style="--width: 575; --height: 550;">
                    <img src="../public/images/canapé1.jpg" width="575" height="550" alt="" class="img-cover">
                  </figure>

                </li>

                <li class="slider-item">

                  <div class="hero-card">
                    <figure class="img-holder" style="--width: 575; --height: 550;">
                      <img src="../public/images/canapé2.jpg" width="575" height="550" alt="hero banner"
                        class="img-cover">
                    </figure>

                    <button class="play-btn" aria-label="play adex intro">
                      <ion-icon name="play" aria-hidden="true"></ion-icon>
                    </button>
                  </div>

                </li>

                <li class="slider-item">

                  <figure class="img-holder" style="--width: 575; --height: 550;">
                    <img src="../public/images/canapé1.jpg" width="575" height="550" alt="" class="img-cover">
                  </figure>

                </li>

              </ul>
            </div>

            <button class="slider-btn prev" aria-label="slide to previous" data-slider-prev>
              <ion-icon name="arrow-back"></ion-icon>
            </button>

            <button class="slider-btn next" aria-label="slide to next" data-slider-next>
              <ion-icon name="arrow-forward"></ion-icon>
            </button>

          </div>

        </div>
</section>

<section class="section service" aria-labelledby="service-label">
        <div class="container">

          <p class="section-subtitle" id="service-label">Que faisons-nous?</p>

          <h2 class="h2 section-title">
            Le service que nous offrons est spécifiquement fait pour couvrir vous besoins.
          </h2>

          <ul class="grid-list">

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="call-outline" aria-hidden="true"></ion-icon>
                </div>

                <h3 class="h4 card-title">24/7 Support</h3>

                <p class="card-text">
                  Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras
                  justo.
                </p>
              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="shield-checkmark-outline" aria-hidden="true"></ion-icon>
                </div>

                <h3 class="h4 card-title">Payements Sécurisé</h3>

                <p class="card-text">
                  Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras
                  justo.
                </p>
              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="cloud-download-outline" aria-hidden="true"></ion-icon>
                </div>

                <h3 class="h4 card-title">Mise à jour continue</h3>

                <p class="card-text">
                  Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras
                  justo.
                </p>              
              </div>
            </li>

            <li>
              <div class="service-card">

                <div class="card-icon">
                  <ion-icon name="pie-chart-outline" aria-hidden="true"></ion-icon>
                </div>

                <h3 class="h4 card-title">Recherche facile</h3>

                <p class="card-text">
                  Nulla vitae elit libero, a pharetra augue. Donec id elit non mi porta gravida at eget metus cras
                  justo.
                </p>
              </div>
            </li>

          </ul>

        </div>
</section>

<section class="about" aria-labelledby="about-label">
        <div class="container">

          <figure class="about-banner">
            <img src="../public/images/about-banner.png" width="800" height="580" loading="lazy" alt="about banner"
              class="w-100">
          </figure>

          <div class="about-content">

            <p class="section-subtitle" id="about-label">pourquoi nous choisir?</p>

            <h2 class="h2 section-title">
              Nous vous proposons des décores, adaptés à vos besoins.
            </h2>

            <ul>

              <li class="about-item">
                <div class="accordion-card expanded" data-accordion>

                  <h3 class="card-title">
                    <button class="accordion-btn" data-accordion-btn>
                      <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>

                      <spna class="span h5">Chois de couleurs</spna>
                    </button>
                  </h3>

                  <p class="accordion-content">
                    Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                    sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna,
                    vel.
                  </p>

                </div>
              </li>

              <li class="about-item">
                <div class="accordion-card" data-accordion>

                  <h3 class="card-title">
                    <button class="accordion-btn" data-accordion-btn>
                      <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>

                      <spna class="span h5">Emplacement et design</spna>
                    </button>
                  </h3>

                  <p class="accordion-content">
                    Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                    sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna,
                    vel.
                  </p>

                </div>
              </li>

              <li class="about-item">
                <div class="accordion-card" data-accordion>

                  <h3 class="card-title">
                    <button class="accordion-btn" data-accordion-btn>
                      <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>

                      <spna class="span h5">Catégories et qualité</spna>
                    </button>
                  </h3>

                  <p class="accordion-content">
                    Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                    sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna,
                    vel.
                  </p>

                </div>
              </li>

            </ul>

          </div>

        </div>
</section>

<div class="title__collections">
    <h1>Explorez nos collections</h1>
    <p>Découvrez nos collections de canapés et chaises par catégories et par matière, <br> voyagez à travers le conford de nos produits.</p>
</div>

<section class="collections__item" id="collections" aria-labelledby="collections">
    <div class="collections">
        <div role="tablist" aria-label="tabs component" class="tabs-btn-container">
            <button role="tab" aria-controls="panel-1" id="tab-1" type="button" aria-selected="true" tabindex="0" class="tab active-tab">Bancs</button>
            <button role="tab" aria-controls="panel-2" id="tab-2" type="button" aria-selected="false" tabindex="-1" class="tab">Tables</button>
            <button role="tab" aria-controls="panel-3" id="tab-3" type="button" aria-selected="false" tabindex="-1" class="tab">Miroirs</button>
            <button role="tab" aria-controls="panel-4" id="tab-4" type="button" aria-selected="false" tabindex="-1" class="tab">Sofa</button>
            <button role="tab" aria-controls="panel-4" id="tab-4" type="button" aria-selected="false" tabindex="-1" class="tab">chaises</button>
        </div>

        <div id="panel-1" role="tabpanel" tabindex="0" aria-labelledby="tab-1" class="tab-content active-tab-content">
            <h3>Decouvrez nos collections de bancs</h3>    
            <div class="images">
                <img src="../public/images/garden bench.jpg" alt="">
                <img src="../public/images/park-bench.jpg" alt="">
                <img src="../public/images/wooden bench.jfif" alt="" class="tab-conten__hidden">
                <img src="../public/images/patio bench.jfif" alt="" class="tab-conten__hidden2">
                <img src="../public/images/modern bench.jfif" alt="">
            </div>
            <div class="prix">
                <p>50$</p>
                <p>50$</p>
                <p>50$</p>
                <p class="tab-conten__hidden2">50$</p>
                <p class="tab-conten__hidden">50$</p>
            </div>
            <div class="description">
            
                    <p>
                        <?php foreach(App::getInstance()->getTable('Post')->banc() as $post): ?>

                            <p><?= $post->ExtraitOther; ?></p>

                        <?php endforeach; ?>
                    </p>
            </div>
            <div class="description__resize">
            
                    <p>
                        <?php foreach(App::getInstance()->getTable('Post')->meuble() as $post): ?>

                            <p>
                            <?= $post->ExtraitOther; ?>
                            </p>

                        <?php endforeach; ?>
                    </p>
                    <p>
                        <?php foreach(App::getInstance()->getTable('Post')->meuble() as $post): ?>

                            <p><?= $post->ExtraitOther; ?></p>

                        <?php endforeach; ?>
                    </p>
                    <p>
                        <?php foreach(App::getInstance()->getTable('Post')->meuble() as $post): ?>

                            <p><?= $post->ExtraitOther; ?></p>

                        <?php endforeach; ?>
                    </p>
                
            </div>
            <p class="voir__plus"><a href="index.php?p=posts.category&id=1">Voir +</a></p>
        </div>

        <div id="panel-2" role="tabpanel" tabindex="0" aria-labelledby="tab-2" class="tab-content">
            <h3>Découvrez nos collections de tables</h3>
            <div class="images">
                <img src="../public/images/dinner table.webp" alt="dinner table">
                <img src="../public/images/computer table.jpg" alt="computer table">
                <img src="../public/images/home table.webp" alt="home table">
                <img src="../public/images/office table.jpg" alt="office table" class="tab-conten__hidden2">
                <img src="../public/images/wood coffee table.jfif" alt="wood coffee table" class="tab-conten__hidden">
            </div>
            <div class="prix">
                <p>50$</p>
                <p>50$</p>
                <p>50$</p>
                <p class="tab-conten__hidden2">50$</p>
                <p class="tab-conten__hidden">50$</p>
            </div>
            <div class="description">
                <p>
                    <?php foreach(App::getInstance()->getTable('Post')->economie() as $post): ?>

                        <?= $post->ExtraitOther; ?>

                    <?php endforeach; ?>
                </p>
            </div>
            <div class="description__resize">
                    <p>
                        <?php foreach(App::getInstance()->getTable('Post')->meuble() as $post): ?>

                            <p>
                            <?= $post->ExtraitOther; ?>
                            </p>

                        <?php endforeach; ?>
                    </p>
                    <p>
                        <?php foreach(App::getInstance()->getTable('Post')->meuble() as $post): ?>

                            <p><?= $post->ExtraitOther; ?></p>

                        <?php endforeach; ?>
                    </p>
                    <p>
                        <?php foreach(App::getInstance()->getTable('Post')->meuble() as $post): ?>

                            <p><?= $post->ExtraitOther; ?></p>

                        <?php endforeach; ?>
                    </p>
            </div>
            <p class="voir__plus"><a href="index.php?p=posts.category&id=2">Voir +</a></p>
        </div>

        <div id="panel-3" role="tabpanel" tabindex="0" aria-labelledby="tab-3" class="tab-content">
            <h3>Découvrez nos collections de miroirs</h3>
            <div class="images">
                <img src="../public/images/3.png" alt="">
                <img src="../public/images/8.png" alt="">
                <img src="../public/images/6.png" alt="">
                <img src="../public/images/4.png" alt="" class="tab-conten__hidden2">
                <img src="../public/images/2.png" alt="" class="tab-conten__hidden">
            </div>
            <div class="prix">
                <p>50$</p>
                <p>50$</p>
                <p>50$</p>
                <p class="tab-conten__hidden2">50$</p>
                <p class="tab-conten__hidden">50$</p>
            </div>
            <div class="description">
                <p>
                    <?php foreach(App::getInstance()->getTable('Post')->sante() as $post): ?>

                        <?= $post->ExtraitOther; ?>

                    <?php endforeach; ?>
                </p>
            </div>
            <div class="description__resize">
                    <p>
                        <?php foreach(App::getInstance()->getTable('Post')->meuble() as $post): ?>

                            <p>
                            <?= $post->ExtraitOther; ?>
                            </p>

                        <?php endforeach; ?>
                    </p>
                    <p>
                        <?php foreach(App::getInstance()->getTable('Post')->meuble() as $post): ?>

                            <p><?= $post->ExtraitOther; ?></p>

                        <?php endforeach; ?>
                    </p>
                    <p>
                        <?php foreach(App::getInstance()->getTable('Post')->meuble() as $post): ?>

                            <p><?= $post->ExtraitOther; ?></p>

                        <?php endforeach; ?>
                    </p>
            </div>
            <p class="voir__plus"><a href="index.php?p=posts.category&id=3">Voir +</a></p>
        </div>

        <div id="panel-4" role="tabpanel" tabindex="0" aria-labelledby="tab-4" class="tab-content">
            <h3>Découvrez nos collections de Sofa</h3>
            <div class="images">
                <img src="../public/images/sofa1.jfif" alt="">
                <img src="../public/images/fixed sofa.jfif" alt="fixed sofa">
                <img src="../public/images/Nordic modern sofa.jfif" alt="Nordic modern sofa">
                <img src="../public/images/microfiber sofa.jpg" alt="microfiber sofa" class="tab-conten__hidden2">
                <img src="../public/images/leather sofa.jpg" alt="leather sofa" class="tab-conten__hidden">
            </div>
            <div class="prix">
                <p>50$</p>
                <p>50$</p>
                <p>50$</p>
                <p class="tab-conten__hidden2">50$</p>
                <p class="tab-conten__hidden">50$</p>
            </div>
            <div class="description">
                <p>
                    <?php foreach(App::getInstance()->getTable('Post')->culture() as $post): ?>

                        <?= $post->ExtraitOther; ?>

                    <?php endforeach; ?>
                </p>
            </div>
            <div class="description__resize">
                    <p>
                        <?php foreach(App::getInstance()->getTable('Post')->meuble() as $post): ?>

                            <p>
                            <?= $post->ExtraitOther; ?>
                            </p>

                        <?php endforeach; ?>
                    </p>
                    <p>
                        <?php foreach(App::getInstance()->getTable('Post')->meuble() as $post): ?>

                            <p><?= $post->ExtraitOther; ?></p>

                        <?php endforeach; ?>
                    </p>
                    <p>
                        <?php foreach(App::getInstance()->getTable('Post')->meuble() as $post): ?>

                            <p><?= $post->ExtraitOther; ?></p>

                        <?php endforeach; ?>
                    </p>
            </div>
            <p class="voir__plus"><a href="index.php?p=posts.category&id=4">Voir +</a></p>
        </div>

        <div id="panel-5" role="tabpanel" tabindex="0" aria-labelledby="tab-4" class="tab-content">
            <h3>Découvrez nos collections de chaises</h3>
            <div class="images">
                <img src="../public/images/accacia wood chair.webp" alt="accacia wood chair">
                <img src="../public/images/elegent wood chair.jpg" alt="elegent wood chair">
                <img src="../public/images/iconic chair.webp" alt="iconic chair">
                <img src="../public/images/minimal lcd chair.png" alt="minimal lcd chair" class="tab-conten__hidden2">
                <img src="../public/images/plastic dinning chair.webp" alt="plastic dinner chair" class="tab-conten__hidden">
            </div>
            <div class="prix">
                <p>50$</p>
                <p>50$</p>
                <p>50$</p>
                <p class="tab-conten__hidden2">50$</p>
                <p class="tab-conten__hidden">50$</p>
            </div>
            <div class="description">
                <p>
                    <?php foreach(App::getInstance()->getTable('Post')->culture() as $post): ?>

                        <?= $post->ExtraitOther; ?>

                    <?php endforeach; ?>
                </p>
            </div>
            <div class="description__resize">
                    <p>
                        <?php foreach(App::getInstance()->getTable('Post')->meuble() as $post): ?>

                            <p>
                            <?= $post->ExtraitOther; ?>
                            </p>

                        <?php endforeach; ?>
                    </p>
                    <p>
                        <?php foreach(App::getInstance()->getTable('Post')->meuble() as $post): ?>

                            <p><?= $post->ExtraitOther; ?></p>

                        <?php endforeach; ?>
                    </p>
                    <p>
                        <?php foreach(App::getInstance()->getTable('Post')->meuble() as $post): ?>

                            <p><?= $post->ExtraitOther; ?></p>

                        <?php endforeach; ?>
                    </p>
            </div>
            <p class="voir__plus"><a href="index.php?p=posts.category&id=4">Voir +</a></p>
        </div>
    </div>
</section>

<section class="avis">
    <div href="" class="up">
        <p>Ils parlent de nous</p>
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
        </svg>
    </div>
    <div class="vecteur">
        <img src="../public/images/communication1.png" alt="">
    </div>

    <div class="carousel1">
            <div class="item">
                <div class="item__image">
                    <span class="material-symbols-outlined">
                        format_quote
                    </span>
                </div>
                <div class="item__body">
                    <div class="item__title">
                        Mon titre 1
                    </div>
                    <div class="item__description">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam ab, vel doloremque.
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item__image">
                    <span class="material-symbols-outlined">
                        format_quote
                    </span>
                </div>
                <div class="item__body">
                    <div class="item__title">
                        Mon titre 2
                    </div>
                    <div class="item__description">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam ab, vel doloremque.                    
                </div>
                </div>
            </div>

            <div class="item">
                <div class="item__image">
                    <span class="material-symbols-outlined">
                        format_quote
                    </span>
                </div>
                <div class="item__body">
                    <div class="item__title">
                        Mon titre 3
                    </div>
                    <div class="item__description">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam ab, vel doloremque.
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item__image">
                    <span class="material-symbols-outlined">
                        format_quote
                    </span>
                </div>
                <div class="item__body">
                    <div class="item__title">
                        Mon titre 4
                    </div>
                    <div class="item__description">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam ab, vel doloremque.
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item__image">
                    <span class="material-symbols-outlined">
                        format_quote
                    </span>
                </div>
                <div class="item__body">
                    <div class="item__title">
                        Mon titre 5
                    </div>
                    <div class="item__description">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam ab, vel doloremque.
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item__image">
                    <span class="material-symbols-outlined">
                        format_quote
                    </span>
                </div>
                <div class="item__body">
                    <div class="item__title">
                        Mon titre 6
                    </div>
                    <div class="item__description">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam ab, vel doloremque.
                    </div>
                </div>
            </div>
            
            <div class="item">
                <div class="item__image">
                    <span class="material-symbols-outlined">
                        format_quote
                    </span>
                </div>
                <div class="item__body">
                    <div class="item__title">
                        Mon titre 7
                    </div>
                    <div class="item__description">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam ab, vel doloremque.
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item__image">
                    <span class="material-symbols-outlined">
                        format_quote
                    </span>
                </div>
                <div class="item__body">
                    <div class="item__title">
                        Mon titre 8
                    </div>
                    <div class="item__description">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam ab, vel doloremque.
                    </div>
                </div>
            </div>

            <div class="item">
                <div class="item__image">
                    <span class="material-symbols-outlined">
                        format_quote
                    </span>
                </div>
                <div class="item__body">
                    <div class="item__title">
                        Mon titre 9
                    </div>
                    <div class="item__description">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Aliquam ab, vel doloremque.
                    </div>
                </div>
            </div>
    </div>
</section>

<section class="faq" aria-labelledby="faq-label">
        <div class="container">
          <div class="faq-content">

                <h2 class="h2 section-title">FAQ</h2>

                <ul>
                    <li class="faq-item">
                        <div class="faq-accordion-card expanded" data-accordion>

                        <h3 class="card-title">
                            <button class="faq-accordion-btn" data-accordion-btn>
                            <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>

                            <spna class="span h5">Professional Design</spna>
                            </button>
                        </h3>

                        <p class="faq-accordion-content">
                            Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                            sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna,
                            vel.
                        </p>

                        </div>
                    </li>

                    <li class="faq-item">
                        <div class="faq-accordion-card" data-accordion>

                        <h3 class="card-title">
                            <button class="faq-accordion-btn" data-accordion-btn>
                            <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>

                            <spna class="span h5">Top-Notch Support</spna>
                            </button>
                        </h3>

                        <p class="faq-accordion-content">
                            Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                            sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna,
                            vel.
                        </p>

                        </div>
                    </li>

                    <li class="faq-item">
                        <div class="faq-accordion-card" data-accordion>

                        <h3 class="card-title">
                            <button class="faq-accordion-btn" data-accordion-btn>
                            <ion-icon name="chevron-down-outline" aria-hidden="true" class="down"></ion-icon>

                            <spna class="span h5">Exclusive Assets</spna>
                            </button>
                        </h3>

                        <p class="faq-accordion-content">
                            Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo
                            sit amet risus. Cras mattis consectetur purus sit amet fermentum. Praesent commodo cursus magna,
                            vel.
                        </p>

                        </div>
                    </li>
                </ul>

          </div>
        </div>
</section>

<section class="cta" aria-label="call to action">
        <div class="container">

          <h2 class="h2 section-title">
            Join our community by using our services and grow your business.
          </h2>

          <a href="#" class="btn btn-primary">Try it For Free</a>

        </div>
</section>

<footer class="footer">
    <div class="container grid-list">

      <div class="footer-brand">

        <a href="#" class="logo">
          <img src="../public/images/logo-light.svg" width="74" height="24" alt="emilio home">
        </a>

        <p class="footer-text">
          &copy; 2022 codewithsadee. <br> All rights reserved.
        </p>

        <ul class="social-list">

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-facebook"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-twitter"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-dribbble"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-instagram"></ion-icon>
            </a>
          </li>

          <li>
            <a href="#" class="social-link">
              <ion-icon name="logo-youtube"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

      <ul class="footer-list">

        <li>
          <p class="h4 footer-list-title">Get in Touch</p>
        </li>

        <li>
          <address class="footer-text">
            Moonshine St. 14/05 Light City, London, United Kingdom
          </address>
        </li>

        <li>
          <a href="mailto:info@email.com" class="footer-link">info@email.com</a>
        </li>

        <li>
          <a href="tel:001234567890" class="footer-link">00 (123) 456 78 90</a>
        </li>

      </ul>

      <ul class="footer-list">

        <li>
          <p class="h4 footer-list-title">Learn More</p>
        </li>

        <li>
          <a href="#" class="footer-link">About Us</a>
        </li>

        <li>
          <a href="#" class="footer-link">Our Story</a>
        </li>

        <li>
          <a href="#" class="footer-link">Projects</a>
        </li>

        <li>
          <a href="#" class="footer-link">Terms of Use</a>
        </li>

        <li>
          <a href="#" class="footer-link">Privacy Policy</a>
        </li>

      </ul>

      <div class="footer-list">

        <p class="h4 footer-list-title">Our Newsletter</p>

        <p class="footer-text">
          Subscribe to our newsletter to get our news & deals delivered to you.
        </p>

        <form action="" class="input-wrapper">
          <input type="email" name="email_address" placeholder="Email Address" required class="input-field">

          <button type="submit" class="submit-btn">Join</button>
        </form>

      </div>

    </div>
</footer>

<!-- Lien vers fichier JS -->
<script src="../public/js/script.js"></script>
<script src="../public/js/Code.js"></script>
<script src="../public/js/onglet.js"></script>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>