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

    <title>Plombier <?php echo $ville;?> (<?php echo $codePostal; ?>)</title>
    <meta content="Proxi Rénovation est une entreprise de plomberie <?php echo $ville;?> pour la rénovation & installation de plomberie."
          name="description">
    <meta content="rénovation batiment, batiment rénovation, construction, rénovation d'intérieur" name="keywords">
    <link rel="canonical" href="https://proxi-renovation.fr<?php echo $_SERVER['REQUEST_URI'];?>" />

    <?php
    include_once "commons/common_css.html";
    ?>
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
                <h1>Proxi Rénovation: Votre Artisan Plombier <?php echo $ville . " (". $codePostal . ")";?></h1>
                <h2>Expert en installation et dépannage de plomberie</h2>
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
                <img src="/public/img/conseils-plombier.jpg" class="img-fluid" alt="plombier <?php echo $ville;?>">
            </div>
        </div>
    </div>

</section><!-- End Hero -->


<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <ol>
                <li><a href="/">Accueil</a></li>
                <li>Plombier <?php echo $ville;?></li>
            </ol>
        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <h2 class="text-center pb-3">Votre artisan plombier <?php echo $ville;?></h2>
            <div class="row justify-content-between">
                <div class="col-md-3 mt-2">
                    <div class="card h-100">
                        <div class="card-header">
                            <h3 class="text-center">Dépannage Plomberie</h3>
                        </div>

                        <div class="card-body">
                            <div class="icon-in-box text-center">
                                <i class="ri-home-gear-fill"></i>
                            </div>
                            <p>
                                Votre plombier <?php echo $ville;?> intervient à votre convenance pour tous dépannages
                                de plomberie, comme la réparation et détection de fuite mais aussi réparation
                                d'urgence en plomberie.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-2">
                    <div class="card h-100">
                        <div class="card-header">
                            <h3 class="text-center">Installation Plomberie</h3>
                        </div>

                        <div class="card-body">
                            <div class="icon-in-box text-center">
                                <i class="ri-tools-fill"></i>
                            </div>
                            <p>
                                Notre équipe intervient également pour vos installations de plomberie:
                                toilette, système de chauffage, salle de bain, douche ...
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-2">
                    <div class="card h-100">
                        <div class="card-header">
                            <h3 class="text-center">Débouchage Canalisation</h3>
                        </div>

                        <div class="card-body">
                            <div class="icon-in-box text-center">
                                <i class="ri-drop-fill"></i>
                            </div>
                            <p>
                                Service de débouchage d'urgence <?php echo "$ville ($codePostal)";?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    include_once "commons/base_contact.html";
    ?>

</main><!-- End #main -->


<?php

include_once "commons/footer.html";
?>


</body>

</html>