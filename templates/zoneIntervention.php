<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Proxi Rénovation: Entreprise de bâtiment dans le nord</title>
    <meta content="Proxi Rénovation est une entreprise de construction et rénovation de bâtiment dans le nord."
          name="description">

   <?php
        include_once "commons/common_css.html";
    ?>
</head>

<body>

<?php

    include_once "commons/header.html";
?>
    <!-- ======= F.A.Q Section ======= -->
    <section id="faq" class="faq mt-5" aria-label="breadcrumb">

        <div class="container" data-aos="fade-up">

            <header class="section-header">
                <h1>Entreprise du bâtiment généraliste: Notre zone d'intervention</h1>
                <p>Nous intervenons dans tous les métiers du bâtiment dans les zones suivantes:</p>
            </header>

            <div class="row">
                <div class="col-lg-12 mx-auto">
                    <!-- F.A.Q List 1-->
                    <div class="accordion accordion-flush row" id="faqlist1">
                    <?php 
                        use const Config\VILLES;

                        foreach (VILLES as $city => $info){
                    ?>
                        <div class="accordion-item">
                            <h3 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $city;?>">
                                    <?php echo $info["ville"]. " " . $info["code_postal"];?>
                                </button>
                            </h3>
                            <div id="<?php echo $city;?>" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                                <div class="accordion-body">
                                    <a href="/plomberie/plombier-<?php echo $city;?>">Plombier à <?php echo $info["ville"] . " " . $info["code_postal"];?></a><br/>
                                    <a href="/carrelage/carreleur-<?php echo $city;?>">Carreleur à <?php echo $info["ville"] . " " . $info["code_postal"];?></a><br/>
                                    <a href="/maconnerie/macon-<?php echo $city;?>">Maçon à <?php echo $info["ville"] . " " . $info["code_postal"];?></a><br/>
                                    <a href="/peinture/peintre-<?php echo $city;?>">Peintre à <?php echo $info["ville"] . " " . $info["code_postal"];?></a>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- End F.A.Q Section -->



    <?php
        include_once "commons/base_contact.html";
    ?>

</main><!-- End #main -->

<?php

    include_once "commons/footer.html";
?>

</body>

</html>
