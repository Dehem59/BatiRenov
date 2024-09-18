<?php
if (empty($ville)){
    $ville = "Lille";
}
if (empty($codePostal)){
    $codePostal = "59000";
}

if ($ville == "Nord"){
    $ville = "dans le Nord";
} else {
    $ville = "à ". $ville;
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Proxi Rénovation: Entreprise de peinture <?php echo $ville;?></title>
    <meta content="Vous souhaitez repeindre votre maison ou votre appartement <?php echo $ville;?> ? Proxi Rénovation est l'entreprise de peinture qu'il vous faut.
     Nous vous proposons un service de peinture complet, de la conception à la réalisation. 
     Nos peintres professionnels vous accompagnent dans votre projet, de la sélection des couleurs à la pose de la peinture. Contactez-nous dès aujourd'hui pour un devis gratuit !"
          name="description">
    <meta content="peinture, peintre <?php echo $ville;?>" name="keywords">
    <link rel="canonical" href="https://proxi-renovation.fr<?php echo $_SERVER['REQUEST_URI'];?>" />

   <?php
        include_once "commons/common_css.html";
    ?>


<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "address": {
    "@type": "PostalAddress",
    "addressLocality": "<?php echo $ville;?>",
    "addressRegion": "Nord",
    "streetAddress": "1 rue Nationale"
  },
  "description": "Proxi Rénovation <?php echo $ville;?> est une entreprise de peinture <?php echo $ville;?> <?php echo $codePostal;?>.
  Artisan peintre professionnel pour tous travaux de peinture, particulier et industriel.",
  "image": "https://proxi-renovation.fr/public/img/favicon.png",
  "name": "Proxi Rénovation: artisan peintre <?php echo $ville;?>",
  "priceRange": "€",
  "telephone": "+33756951958"
}
</script><script type="application/ld+json">
  {
    "@context": "https://schema.org/",
    "@type": "WebPage",
    "name": "Entreprise de peinture <?php echo $ville;?>",
    "author": {
      "@type": "Person",
      "name": "Dehem Victor"
    },
    "datePublished": "2021-01-02",
    "description": "Trouvez un peintre qualifié <?php echo $ville;?> pour vos travaux de peinture, intérieur ou extérieur et industriel."
  }
  </script>  <script type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "url": "https://proxi-renovation.fr/",
      "potentialAction": {
        "@type": "SearchAction",
        "target": "https://proxi-renovation.fr/search?q={search_term_string}",
        "query-input": "required name=search_term_string"
      }
    }
    </script>
    <script type="application/ld+json">
      {
        "@context": "https://schema.org",
        "@type": "BreadcrumbList",
        "itemListElement": [{
          "@type": "ListItem",
          "position": 1,
          "name": "Proxi Rénovation",
          "item": "https://proxi-renovation.fr/"
        },{
          "@type": "ListItem",
          "position": 2,
          "name": "Peinture",
          "item": "https://proxi-renovation.fr/peinture/"
        },{
          "@type": "ListItem",
          "position": 3,
          "name": "Artisan Peintre <?php echo $ville;?>",
          "item":"https://proxi-renovation.fr<?php echo $_SERVER['REQUEST_URI'];?>"
        }]
      }
      </script> 

      <script type="application/ld+json">{
    "@context": "https://schema.org/",
    "@type": "LocalBusiness",
    "name": "Entreprise peinture <?php echo $ville;?>",
    "aggregateRating": {
        "@type": "AggregateRating",
        "ratingValue": "4.9",
        "bestRating": "5",
        "ratingCount": "227"
    }
}</script>
</head>

<body>

<?php

    include_once "commons/header.html";
?>


<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1>Proxi Rénovation: Votre Artisan peintre <?php echo $ville . " (". $codePostal . ")";?></h1>
                <h2>Une équipe d'expert de la peinture bâtiment</h2>
                <div>
                    <div class="text-center text-lg-start">
                        <a href="tel:+33756951958" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Prendre rendez-vous</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img">
                <img src="/public/img/peinture_batiment.jpg" class="img-fluid" alt="peintre batiment <?php echo $ville;?>">
            </div>
        </div>
    </div>

</section><!-- End Hero -->

<main id="main">
    <!-- ======= About Section ======= -->
    <section id="about" class="about">

        <div class="container">
            <div class="row gx-0">

                <div class="col-lg-6 d-flex flex-column justify-content-center">
                    <div class="content">
                        <h2>Proxi Rénovation: Qui sommes-nous ?</h2>
                        <h3>Entreprise spécialisée dans la peinture en bâtiment <?php echo $ville;?>.</h3>
                        <p>
                        Bienvenue chez Proxi Rénovation, votre partenaire de confiance en peinture de bâtiment.
                         Avec une expérience considérable dans l'industrie de la construction, nous sommes fiers de notre réputation en tant que
                          professionnels de la peinture hautement qualifiés. Notre dévouement à la qualité, à la précision et à la satisfaction 
                          du client fait de nous le choix idéal pour tous vos besoins en peinture de bâtiment
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center">
                    <img src="/public/img/peintre_batiment.jpg" class="img-fluid" alt="Entreprise peinture Nord">
                </div>

            </div>
        </div>

    </section><!-- End About Section -->


        <!-- ======= Counts Section ======= -->
        <section id="counts" class="counts">
        <div class="container bg-sectioned">

            <div class="row p-4">

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="125" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Clients Satisfait</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="145" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Chantiers terminés</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-gear" style="color: #15be56;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="6" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Corps de métier</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-people" style="color: #bb0852;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="9" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Experts à votre service</p>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section><!-- End Counts Section -->
    <!-- ======= Features Section ======= -->
    <section id="features" class="features">

        <div class="container">

            <header class="section-header">
                <h2>Nos compétences de peintre en bâtiment <?php echo $ville;?></h2>
                <p><i>"Vos murs, Notre Signature"</i></p>
            </header>

            <div class="row">

                <div class="col-lg-6">
                    <img src="/public/img/peintre_interieur.jpg" class="img-fluid" alt="Peinture intérieur <?php echo $ville;?>">
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                    <div class="row align-self-center gy-4">

                        <div class="col-md-6">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Excellence en Peinture</h3>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Matériaux de qualité</h3>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>SAV réactif</h3>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Respect des Délais</h3>
                            </div>
                        </div>

                    </div>
                </div>

            </div> <!-- / row -->

            <!-- Feature Tabs -->
            <div class="row feture-tabs">
                <div class="col-lg-6">
                    <h3>Pourquoi faire appel à nos artisans carreleurs experts <?php echo $ville;?> ?</h3>

                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3">
                        <li>
                            <a class="nav-link active" data-bs-toggle="pill" href="#peinture_interieur">Peinture Intérieure</a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#peinture_exterieur">Peinture Extérieure</a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#revetement_sol">Revêtements de Sol</a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#renovation">Travaux de Rénovation</a>
                        </li>
                    </ul><!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="peinture_interieur">
                            <p>Nous transformons l'intérieur de votre bâtiment en un espace accueillant et élégant. De la préparation des surfaces à la finition impeccable, nous vous offrons une palette de couleurs infinie pour créer l'ambiance que vous recherchez.</p>
                        </div><!-- End Tab 1 Content -->

                        <div class="tab-pane fade show" id="peinture_exterieur">
                            <p>Protégez et embelli l'extérieur de votre bâtiment avec notre expertise en peinture extérieure. Nous utilisons des peintures résistantes aux intempéries pour garantir une durabilité exceptionnelle.</p>
                        </div><!-- End Tab 2 Content -->

                        <div class="tab-pane fade show" id="revetement_sol">
                            <p>Nous proposons également des services de revêtements de sol pour une transformation complète de vos espaces. Des sols en béton poli aux revêtements époxy, nous couvrons tous les besoins.</p>
                        </div><!-- End Tab 3 Content -->

                        <div class="tab-pane fade show" id="renovation">
                            <p>Besoin de rafraîchir l'apparence de votre bâtiment ? Nous sommes là pour des travaux de rénovation intérieure et extérieure, y compris la réparation des murs et la préparation des surfaces.</p>
                        </div><!-- End Tab 3 Content -->

                    </div>

                </div>

                <div class="col-lg-6">
                    <img src="/public/img/peinture_interieur_exterieur.jpg" class="img-fluid" alt="peintre intérieur extérieur <?php echo $ville;?>">
                </div>

            </div><!-- End Feature Tabs -->


    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq" aria-label="breadcrumb">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>F.A.Q</h2>
                <p>Nous répondons à toute vos questions</p>
            </header>

            <div class="row">
                <div class="col-lg-6">
                    <!-- F.A.Q List 1-->
                    <div class="accordion accordion-flush" id="faqlist1">
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                Quels types de projets de peinture réalisez-vous ?
                                </button>
                            </h3>
                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                Notre équipe expérimentée effectue une variété de projets de peinture, notamment la peinture intérieure, la peinture extérieure, la rénovation de façades, la peinture de murs, de plafonds, et bien plus encore. Qu'il s'agisse de résidentiel ou commercial, nous sommes là pour vous.                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                Utilisez-vous des peintures respectueuses de l'environnement ?
                                </button>
                            </h3>
                            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                Oui, nous sommes engagés dans l'utilisation de produits respectueux de l'environnement. Nous proposons des options de peinture écologique à nos clients qui souhaitent réduire leur empreinte environnementale.                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                Combien coûte en moyenne un peintre en bâtiment <?php echo $ville;?> ?
                                </button>
                            </h3>
                            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                La région géographique : Le coût de la main-d'œuvre varie d'une région à l'autre en raison des différences de coût de la vie et de la demande locale. Les grandes villes peuvent avoir des tarifs plus élevés que les zones rurales.
La taille du projet : Le coût total dépendra de la taille de la zone à peindre. Plus la surface est grande, plus le coût sera élevé. Les peintres facturent généralement au mètre carré ou au pied carré.
Le type de peinture : Les peintures de qualité supérieure coûtent généralement plus cher, mais elles peuvent offrir une meilleure durabilité et une meilleure apparence à long terme. Le choix de la peinture peut influencer le coût total.
L'état des surfaces : Si les surfaces nécessitent des préparations spéciales, telles que le décapage, le ponçage, le rebouchage de trous ou la réparation de fissures, cela peut entraîner des coûts supplémentaires.
La compétence du peintre : Les peintres hautement qualifiés avec une expérience considérable peuvent facturer des tarifs plus élevés que les peintres moins expérimentés.
La complexité du projet : Des projets plus complexes, tels que la peinture de surfaces texturées, la création de motifs ou la coordination de plusieurs couleurs, peuvent nécessiter plus de temps et de compétences, ce qui peut augmenter le coût.
Les coûts accessoires : N'oubliez pas de prendre en compte d'autres coûts liés au projet, tels que les fournitures de peinture, les outils, les échafaudages (si nécessaires), et les frais de nettoyage.        
                     </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- End F.A.Q Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h2>Avis Clients</h2>
                <p>Ce que nos clients pensent de notre entreprise de carrelage</p>
            </header>

            <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="50">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Merci à Proxi Rénovation pour la rénovation de ma maison, je recommande !
                            </p>
                            <div class="profile mt-auto">
                                <p>Marie</p>
                                <p>Lille (59000)</p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Les plombiers d'Proxi Rénovation sont de vrais professionnels de la plomberie, merci
                                à l'entreprise
                            </p>
                            <div class="profile mt-auto">
                                <p>Jacques</p>
                                <p>Roubaix (59100)</p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Super entreprise de carreleur à Lambersart ! je recommande fortement
                            </p>
                            <div class="profile mt-auto">
                                <p>Fanny</p>
                                <p>Lambersart (59130)</p>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                    <div class="swiper-slide">
                        <div class="testimonial-item">
                            <div class="stars">
                                <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                            </div>
                            <p>
                                Des ouvriers du bâtiment qui font au mieux sur le chantier, je recommande sincèrement cette
                                entreprise du bâtiment très sérieuse.
                            </p>
                            <div class="profile mt-auto">
                                <p>Pierre</p>
                                <h4>Wasquehal (59290)</h4>
                            </div>
                        </div>
                    </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>

    </section><!-- End Testimonials Section -->


    <?php
        include_once "commons/base_contact.html";
    ?>

</main><!-- End #main -->

<?php

    include_once "commons/footer.html";
?>

</body>

</html>