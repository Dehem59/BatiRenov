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

    <title>Plombier à <?php echo $ville;?> (<?php echo $codePostal; ?>)</title>
    <meta content="Proxi Rénovation est une entreprise de plomberie à <?php echo $ville;?> pour la rénovation & installation de plomberie."
          name="description">
    <meta content="rénovation batiment, batiment rénovation, construction, rénovation d'intérieur" name="keywords">

    <?php
    include_once "commons/common_css.html";
    ?>
</head>

<body>

<?php

include_once "commons/header.html";
?>



<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">

            <ol>
                <li><a href="/">Accueil</a></li>
                <li>Plombier à <?php echo $ville;?></li>
            </ol>
            <h1>Plombier à <?php echo $ville;?>: Rénovation & Installation de Plomberie</h1>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <h2 class="text-center pb-3">Votre artisan plombier à <?php echo $ville;?></h2>
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
                                Votre plombier à <?php echo $ville;?> intervient à votre convenance pour tous dépannages
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
                                Service de débouchage d'urgence à <?php echo "$ville ($codePostal)";?>
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