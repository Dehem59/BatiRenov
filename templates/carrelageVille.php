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

    <title>Proxi Rénovation: Entreprise de carrelage <?php echo $ville;?></title>
    <meta content="Vous cherchez un carrelage pour votre maison ou votre appartement <?php echo $ville;?> ? 
    Proxi Rénovation est l'expert du carrelage <?php echo $ville;?>. Nous vous proposons un large choix de carrelages de qualité, au meilleur prix. 
Nos carreleurs professionnels vous accompagnent dans votre projet de rénovation, de la conception à la pose. Contactez-nous dès aujourd'hui pour un devis gratuit !"
          name="description">
    <meta content="carrelage, carreleur <?php echo $ville;?>" name="keywords">
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
  "description": "Proxi Rénovation <?php echo $ville;?> est une entreprise de carrelage <?php echo $ville;?> <?php echo $codePostal;?>.
  Artisan carreleur professionnel pour toute pose de carrelage.",
  "image": "https://proxi-renovation.fr/public/img/favicon.png",
  "name": "Proxi Rénovation: artisan carreleur <?php echo $ville;?>",
  "priceRange": "€",
  "telephone": "+33756951958"
}
</script><script type="application/ld+json">
  {
    "@context": "https://schema.org/",
    "@type": "WebPage",
    "name": "Entreprise de carrelage <?php echo $ville;?>",
    "author": {
      "@type": "Person",
      "name": "Dehem Victor"
    },
    "datePublished": "2021-01-02",
    "description": "Trouvez un carreleur qualifié <?php echo $ville;?> pour vos travaux de carrelage."
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
          "name": "Carrelage",
          "item": "https://proxi-renovation.fr/carrelage/"
        },{
          "@type": "ListItem",
          "position": 3,
          "name": "Carreleur <?php echo $ville;?>",
          "item":"https://proxi-renovation.fr<?php echo $_SERVER['REQUEST_URI'];?>"
        }]
      }
      </script> 

      <script type="application/ld+json">{
    "@context": "https://schema.org/",
    "@type": "LocalBusiness",
    "name": "Entreprise carrelage <?php echo $ville;?>",
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
                <h1>Proxi Rénovation: Votre Artisan carreleur <?php echo $ville . " (". $codePostal . ")";?></h1>
                <h2>Une équipe d'expert du carrelage</h2>
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
                <img src="/public/img/carreleur_nord.jpg" class="img-fluid" alt="carreleur <?php echo $ville;?>">
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
                        <h3>Entreprise spécialisée dans la pose & dépose de carrelage et sol <?php echo $ville;?>.</h3>
                        <p>
                            Soucieux d'apporter le meilleur pour nos clients, nous nous impliquons dans chaque chantier avec
                            une expertise reconnue dans la pose et dépose de sol ainsi que tout carrelage.
                            Confiez-nous votre projet de rénovation pour un résultat assuré et selon vos attentes.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center">
                    <img src="/public/img/carrelage.jpg" class="img-fluid" alt="Entreprise Carrelage Nord">
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
                <h2>Nos compétences de carreleur</h2>
                <p><i>"Revêtements Raffinés : Votre Sol, Notre Signature"</i></p>
            </header>

            <div class="row">

                <div class="col-lg-6">
                    <img src="/public/img/carreleur.jpeg" class="img-fluid" alt="Rénovation maison nord">
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                    <div class="row align-self-center gy-4">

                        <div class="col-md-6">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Excellence artisanale</h3>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Matériaux de haute qualité</h3>
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
                                <h3>Service personnalisé</h3>
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
                            <a class="nav-link active" data-bs-toggle="pill" href="#carreleur">Carrelage de Sols et Murs</a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#carrelage">Mosaïques et Motifs</a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#renov">Rénovations et Réparations</a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#conseil">Conseil et Planification</a>
                        </li>
                    </ul><!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="carreleur">
                            <p>Que ce soit pour une cuisine, une salle de bains, un salon ou un espace commercial, nous avons l'expertise pour créer des surfaces exceptionnelles.</p>
                        </div><!-- End Tab 1 Content -->

                        <div class="tab-pane fade show" id="carrelage">
                            <p>Ajoutez une touche artistique à vos espaces avec nos créations de mosaïques et motifs personnalisés.</p>
                        </div><!-- End Tab 2 Content -->

                        <div class="tab-pane fade show" id="renov">
                            <p> Nous restaurons et rénovons également les anciens carrelages pour leur donner une nouvelle vie.</p>
                        </div><!-- End Tab 3 Content -->

                        <div class="tab-pane fade show" id="conseil">
                            <p>Besoin d'idées ou de conseils ? Notre équipe est là pour vous guider à chaque étape.</p>
                        </div><!-- End Tab 3 Content -->

                    </div>

                </div>

                <div class="col-lg-6">
                    <img src="/public/img/renov_interieur.jpg" class="img-fluid" alt="Plomberie - Chauffage - Carrelage - Peinture">
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
                <div class="col-lg-8 mx-auto">
                    <!-- F.A.Q List 1-->
                    <div class="accordion accordion-flush" id="faqlist1">
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-1">
                                    Quels types de carrelage proposez-vous ?
                                </button>
                            </h3>
                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                Nous proposons une large gamme de carrelages, y compris les carrelages en céramique, en porcelaine, en marbre, en granit, en pierre naturelle, en ardoise, et bien d'autres encore. Notre équipe peut vous guider dans le choix du matériau et du style qui conviennent le mieux à votre projet.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-2">
                                Comment puis-je obtenir un devis pour mon projet ?
                                </button>
                            </h3>
                            <div id="faq-content-2" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                Pour obtenir un devis gratuit, vous pouvez nous contacter en remplissant le formulaire de demande de devis sur notre site web ou en nous appelant au [numéro de téléphone]. Nous vous fournirons rapidement un devis détaillé en fonction de vos besoins.
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-3">
                                Combien coûte en moyenne la pose de carrelage <?php echo $ville;?> ?
                                </button>
                            </h3>
                            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                Le coût de la pose de carrelage peut varier considérablement en fonction de plusieurs facteurs, notamment la région géographique, la complexité du projet, le type de carrelage, la taille de la surface à carreler, l'état du sous-plancher, et le coût de la main-d'œuvre. Cependant, je peux vous donner une estimation générale des coûts moyens de pose de carrelage :
Coût par mètre carré : En règle générale, les carreleurs facturent par mètre carré de carrelage installé. Le coût peut varier de 20 € à 100 € ou plus par mètre carré, en fonction des facteurs mentionnés ci-dessus.
Type de carrelage : Le type de carrelage que vous choisissez peut avoir un impact significatif sur le coût. Les carreaux en céramique sont généralement moins chers que les carreaux en marbre ou en granit, par exemple.
Complexité du projet : Si le projet implique des motifs complexes, des découpes spéciales ou des mosaïques personnalisées, le coût de la main-d'œuvre peut être plus élevé.
Préparation du sous-plancher : Si le sous-plancher nécessite des réparations ou une préparation particulière avant la pose du carrelage, cela peut également ajouter aux coûts.
Main-d'œuvre : Le coût de la main-d'œuvre varie d'une région à l'autre. Les carreleurs professionnels facturent généralement un tarif horaire ou un tarif forfaitaire en fonction de la complexité du projet.
Frais accessoires : N'oubliez pas de prendre en compte d'autres frais liés au projet, tels que les matériaux de colle à carrelage, les coulis, les seuils, les plinthes, et les travaux de finition.                                </div>
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