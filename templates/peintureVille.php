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

    <title>Peintre à <?php echo $ville;?> (<?php echo $codePostal; ?>)</title>
    <meta content="Proxi Rénovation est une entreprise experte dans la rénovation de bâtiment: carrelage, plomberie, chauffage, peinture dans le nord de la France."
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
                <li>Peintre à <?php echo $ville;?></li>
            </ol>
            <h1>Peintre de bâtiment à <?php echo $ville;?>: Pose & Fourniture de Carrelage</h1>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container">
            <p>
                Example inner page template
            </p>
        </div>
    </section>

</main><!-- End #main -->
