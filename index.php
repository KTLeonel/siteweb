<?php

require("config/commandes.php");

  $Produits=afficher();

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.80.0">
    <title>Album example · Bootstrap v5.0</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


<style>
  .bd-placeholder-img {
    font-size: 1.125rem;
    text-anchor: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    user-select: none;
  }

  @media (min-width: 768px) {
    .bd-placeholder-img-lg {
      font-size: 3.5rem;
    }
  }
</style>

    
  </head>
  <body>
    
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">À propos</h4>
          <p class="text-muted">Nous sommes une agence matrimoniale basée à Ngaoundéré, au Cameroun, spécialisée dans les rencontres internationales. Depuis notre création, nous avons aidé plus de 400 femmes africaines à trouver l'amour avec des hommes européens, Des hommes blancs souvent désespérés par leur quête de l'amour dans leurs pays. En 2025, plus de 300 Canadiens se sont inscrits chez nous, à la recherche d’une relation sérieuse et durable avec des femmes africaines.

Nous proposons différents services d'inscription : le service classique qui permet de se mettre en contact avec trois partenaires, le service professionnel pour des mises en relation approfondies, et le service VIP pour un accompagnement complet jusqu’au mariage. Notre objectif est de vous aider à rencontrer l’amour, même à distance, et de rendre votre rêve amoureux réel.

Rejoignez-nous pour trouver l’amour et construire une histoire à deux, accompagnée de notre expertise et de notre soutien à chaque étape.</p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
        <li><a href="bb.html"><i class="text-white"></i>Plus d'info</a></li>
        </div>
        <div class="col-md-4">
        <h5>Réseaux sociaux</h5>
        <ul>
          <li><a href="https://www.facebook.com/profile.php?id=61564575497482"><i class="bi bi-facebook"></i> Facebook</a></li>
          <li><a href="#"><i class="bi bi-twitter"></i> Twitter</a></li>
          <li><a href="#"><i class="bi bi-instagram"></i> Instagram</a></li>
        </ul>
      </div>
      </div>
    </div>
  </div>
  <div class="navbar navbar-dark bg-dark shadow-sm">
    <div class="container">
      <a href="#" class="navbar-brand d-flex align-items-center">
      <i class="bi-search-heart" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></i>
        <strong>Mariage Matrimonial</strong>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
  </div>

  <div class="overlay-black w-100 slider-banner1 position-relative" style="background-image: url('bb.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-lg-12">
                        <div class="text-white">
                            <h1 class="mb-4"><span class="text-success">Laisser nous vous guider</span><br>
                            Jusqu'au Mariage</h1><br><br><br>
                            </div>
                            </div>
                            </div>
                            </div>
                            
</header>

<main>

  <div class="album py-5 bg-dark ">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      <?php foreach($Produits as $produit): ?> 
        <div class="col">
          <div class="card shadow-sm">
            <h3><?= $produit->nom ?></h3>
            <img src="<?= $produit->image ?>" style="width: 24%">
            <div class="card-body">
              <p class="card-text"><?= substr($produit->description, 0, 160); ?>...</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a href="produit.php?pdt=<?= $produit->id ?>"><button type="button" class= "bi bi-person-lines-fill btn btn-sm btn-success">  Voir plus</button></a>
                </div>
                <small class="bi bi-heartbreak-fill" style="font-weight: bold;">  <?= $produit->prix ?> Age</small>
                
              </div>
            </div>
          </div>
        </div>
  <?php endforeach; ?>


      </div>
    </div>
  </div>

  <div class="full-row living bg-one overlay-secondary-half" style="background-image: url('bb1.jpg'); background-size: cover; background-position: center center; background-repeat: no-repeat;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                        <div class="living-list pr-4">
                            <h4 class="pb-4 mb-3 text-white">Why Choose Us</h4>
                            <ul>
                                <li class="mb-4 text-white d-flex"> 
									<i class="bi-house-heart-fill fs-3 text-success"></i>
									<div class="pl-2">
										<h5 class="mb-3">Top Rated</h5>
										<p>This is a dummy text for filling out spaces. This is just a dummy text for filling out blank spaces.</p>
									</div>
                                </li>
                                <li class="mb-4 text-white d-flex"> 
									<i class="bi-heart-pulse-fill fs-3 text-success"></i>
									<div class="pl-2">
										<h5 class="mb-3">Experience Quality</h5>
										<p>This is a dummy text for filling out spaces. This is just a dummy text for filling out blank spaces.</p>
									</div>
                                </li>
                                <li class="mb-4 text-white d-flex"> 
									<i class="bi-airplane-engines-fill fs-3 text-success"></i>
									<div class="pl-2">
										<h5 class="mb-3">Experienced Agents</h5>
										<p>This is a dummy text for filling out spaces. This is just a dummy text for filling out blank spaces.</p>
									</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</main>
<footer class="bg-dark text-white p-4">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <h5>À propos</h5>
        <p>"Rencontrez l'amour de votre vie sur notre site de rencontre ! Rejoignez notre communauté de célibataires 
          africains et internationaux, et découvrez des profils authentiques et compatibles. Inscrivez-vous maintenant
           et laissez l'amour vous trouver !"</p>
      </div>
      <div class="col-md-4">
        <h5>Liens utiles</h5>
        <ul>
          <li><a href="bb.html">À propos</a></li>
          <li><a href="bb1.html">Contact</a></li>
        </ul>
      </div>
      <div class="col-md-4">
        <h5>Réseaux sociaux</h5>
        <ul>
          <li><a href="https://www.facebook.com/profile.php?id=61564575497482"><i class="bi bi-facebook"></i> Facebook</a></li>
          <li><a href="#"><i class="bi bi-twitter"></i> Twitter</a></li>
          <li><a href="#"><i class="bi bi-instagram"></i> Instagram</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
  </body>
</html>
