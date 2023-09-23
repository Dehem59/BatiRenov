<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Devis en ligne</title>
    <meta content="Réalisez un devis en ligne pour la rénovation de votre bâtiment, maison, appartement."
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
                <li>Devis en ligne</li>
            </ol>
            <h2>Devis en Ligne</h2>

        </div>
    </section><!-- End Breadcrumbs -->

    <section class="inner-page">
        <div class="container" id="formEvol">
            <button id="start" class="btn btn-primary">Démarrer</button>
        </div>

        <div class="container text-center mt-5">
            <div class="col-md-4 mx-0">
                <a id="goBack" class="btn btn-secondary" style="display:none">Précédent</a>
            </div>
        </div>
    </section>



</main><!-- End #main -->

<script type="module" src="/public/js/evolutiveForm.js"></script>
</body>