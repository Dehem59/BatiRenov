<?php
if (empty($ville)){
    $ville = "Lille";
}
if (empty($codePostal)){
    $codePostal = "59000";
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Proxi Rénovation: Entreprise de maçonnerie à <?php echo $ville;?> (<?php echo $codePostal; ?>) | Maçon à <?php echo $ville;?></title>
    <meta content="Proxi Rénovation est une entreprise de maçonnerie à <?php echo $ville;?>. Maçon professionnel à <?php echo $ville;?>"
          name="description">
    <meta content="rénovation batiment, batiment rénovation, construction, rénovation d'intérieur" name="keywords">

    <?php include_once "commons/common_css.html";?>
</head>

<body>

<?php include_once "commons/header.html";?>


<!-- ======= Hero Section ======= -->
<section id="hero" class="hero d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 d-flex flex-column justify-content-center">
                <h1>Proxi Rénovation: Votre Partenaire de Confiance en Maçonnerie à <?php echo $ville;?></h1>
                <h2>Une équipe de maçon expert</h2>
                <div>
                    <div class="text-center text-lg-start">
                        <a href="tel:+33" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
                            <span>Prendre rendez-vous</span>
                            <i class="bi bi-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 hero-img">
                <img src="/public/img/macon.jpg" class="img-fluid" alt="maçon <?php echo $ville;?>">
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
                        <h3>Entreprise spécialisée en maçonnerie à <?php echo $ville;?>.</h3>
                        <p>
                        Bienvenue chez Proxi Rénovation, votre expert en maçonnerie à <?php echo $ville;?> et dans ses environs.
                         Forts de nombreuses années d'expérience, nous sommes fiers de notre réputation en tant que professionnels de la maçonnerie 
                         de confiance dans la région. Notre engagement envers la qualité, la durabilité et le service exceptionnel fait de nous le choix idéal 
                         pour tous vos projets de construction et de rénovation.
                        </p>
                    </div>
                </div>

                <div class="col-lg-6 d-flex align-items-center">
                    <img src="/public/img/maconnerie.jpg" class="img-fluid" alt="Entreprise Maçonnerie <?php echo $ville;?>">
                </div>

            </div>
        </div>

    </section><!-- End About Section -->


    <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
        <div class="container">

            <div class="row gy-4">

                <div class="col-lg-4 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-emoji-smile"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="145" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Clients Satisfait</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-journal-richtext" style="color: #ee6c20;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="145" data-purecounter-duration="1" class="purecounter"></span>
                            <p>Chantiers terminés</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6">
                    <div class="count-box">
                        <i class="bi bi-people" style="color: #bb0852;"></i>
                        <div>
                            <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
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
                <h2>Nos compétences de maçon</h2>
                <p><i>"Votre Projet, Notre Signature"</i></p>
            </header>

            <div class="row">

                <div class="col-lg-6">
                    <img src="/public/img/maconnerie_nord.jpg" class="img-fluid" alt="Entreprise de maçonnerie Nord">
                </div>

                <div class="col-lg-6 mt-5 mt-lg-0 d-flex">
                    <div class="row align-self-center gy-4">

                        <div class="col-md-6">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Expertise Locale</h3>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="feature-box d-flex align-items-center">
                                <i class="bi bi-check"></i>
                                <h3>Qualité Inégalée</h3>
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
                    <h3>Pourquoi faire appel à nos artisans maçons experts à <?php echo $ville;?> ?</h3>

                    <!-- Tabs -->
                    <ul class="nav nav-pills mb-3">
                        <li>
                            <a class="nav-link active" data-bs-toggle="pill" href="#maconnerie_traditionnelle">Maçonnerie Traditionnelle</a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#renovations">Rénovations</a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#extensions">Extensions</a>
                        </li>
                        <li>
                            <a class="nav-link" data-bs-toggle="pill" href="#revetement">Revêtements</a>
                        </li>
                    </ul><!-- End Tabs -->

                    <!-- Tab Content -->
                    <div class="tab-content">

                        <div class="tab-pane fade show active" id="maconnerie_traditionnelle">
                            <p>Nous sommes spécialisés dans la maçonnerie traditionnelle, de la construction de murs aux fondations, en passant par les cheminées et bien plus encore. Notre équipe de maçons expérimentés assure des résultats solides et durables.</p>
                        </div><!-- End Tab 1 Content -->

                        <div class="tab-pane fade show" id="renovations">
                            <p>Que vous souhaitiez rénover une vieille bâtisse ou moderniser votre espace, nous sommes là pour vous aider à donner vie à votre vision.</p>
                        </div><!-- End Tab 2 Content -->

                        <div class="tab-pane fade show" id="extensions">
                            <p>Besoin d'espace supplémentaire ? Nous concevons et construisons des extensions qui s'intègrent harmonieusement à votre propriété existante.</p>
                        </div><!-- End Tab 3 Content -->

                        <div class="tab-pane fade show" id="revetement">
                            <p>Nos compétences en maçonnerie s'étendent aux revêtements de sol et de mur, y compris les carreaux de céramique, de pierre naturelle et bien d'autres.</p>
                        </div><!-- End Tab 3 Content -->

                    </div>

                </div>

                <div class="col-lg-6">
                    <img src="/public/img/votre_macon.jpg" class="img-fluid" alt="Maçon à <?php echo $ville;?>">
                </div>

            </div><!-- End Feature Tabs -->
    </section>

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
                                Quels types de projets de maçonnerie réalisez-vous ?
                                </button>
                            </h3>
                            <div id="faq-content-1" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                Nous sommes spécialisés dans une large gamme de projets de maçonnerie, notamment la construction de murs, les fondations, les cheminées, les rénovations, les extensions, les revêtements de sol et de mur, les escaliers, et bien plus encore. Notre équipe de maçons qualifiés est prête à répondre à vos besoins.                                </div>
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
                                Utilisez-vous des matériaux respectueux de l'environnement ?
                                </button>
                            </h3>
                            <div id="faq-content-3" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                Nous sommes engagés dans la durabilité et l'utilisation responsable des ressources. Nous pouvons vous conseiller sur les options de matériaux respectueux de l'environnement pour votre projet de maçonnerie, si cela correspond à vos objectifs.
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

include_once "commons/footer.html";
?>


</body>

</html>