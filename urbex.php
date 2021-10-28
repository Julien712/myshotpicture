<!DOCTYPE html>
<html lang="fr">

<?php include('include/head.php'); ?>

<body id="parallax">
    <?php include('include/nav.php'); ?>

    <section class="content-section text-center" id="Portfolio">
        <div class="container">
            <div class="block-heading">
                <h2>Urbex</h2>
                <p style="font-style: italic;">Quand la nature reprend ses droits</p>
            </div>
            <div class="portfolio-wrapper clearfix">
                <?php
                $x = 1;
                $ferme = 3;
                while ($x <= $ferme) {
                    echo '<a class="each-portfolio" data-fancybox="gallery" href="images/urbex/ferme' . $x . '.jpg">
                            <div class="content hover-cont-wrap">
                                <div class="content-overlay"></div>
                                <img class="content-image" src="images/urbex/ferme' . $x . '.jpg">
                                <div class="content-details fadeIn-bottom">
                                    <!-- <h5 class="p-title">Title</h5> -->
                                    <p class="p-desc">Cliquez pour agrandir</p>
                                    <span class="zoom">&#128269;</span>
                                </div>
                            </div>
                        </a>';
                    $x++;
                }
                ?>
            </div>
            <hr class="separateur-urbex">
            <div class="portfolio-wrapper clearfix">
                <?php
                $x = 1;
                $chartseuse = 6;
                while ($x <= $chartseuse) {
                    echo '<a class="each-portfolio" data-fancybox="gallery" href="images/urbex/chartseuse/chartseuse' . $x . '.jpg">
                            <div class="content hover-cont-wrap">
                                <div class="content-overlay"></div>
                                <img class="content-image" src="images/urbex/chartseuse/chartseuse' . $x . '.jpg">
                                <div class="content-details fadeIn-bottom">
                                    <!-- <h5 class="p-title">Title</h5> -->
                                    <p class="p-desc">Cliquez pour agrandir</p>
                                    <span class="zoom">&#128269;</span>
                                </div>
                            </div>
                        </a>';
                    $x++;
                }
                ?>
            </div>
            <hr class="separateur-urbex">
            <div class="portfolio-wrapper clearfix">
                <?php
                $x = 1;
                $cimenterie = 11;
                while ($x <= $cimenterie) {
                    echo '<a class="each-portfolio" data-fancybox="gallery" href="images/urbex/cimenterie/cimenterie' . $x . '.jpg">
                            <div class="content hover-cont-wrap">
                                <div class="content-overlay"></div>
                                <img class="content-image" src="images/urbex/cimenterie/cimenterie' . $x . '.jpg">
                                <div class="content-details fadeIn-bottom">
                                    <!-- <h5 class="p-title">Title</h5> -->
                                    <p class="p-desc">Cliquez pour agrandir</p>
                                    <span class="zoom">&#128269;</span>
                                </div>
                            </div>
                        </a>';
                    $x++;
                }
                ?>
            </div>

            <button onclick="voirplus()" id="buttonvoirplus">Voir plus</button>
            
            <div id="voirplus">
                <hr class="separateur-urbex">
                <div class="portfolio-wrapper clearfix">
                    <?php
                    $x = 1;
                    $domaine = 11;
                    while ($x <= $domaine) {
                        echo '<a class="each-portfolio" data-fancybox="gallery" href="images/urbex/domaine/domaine' . $x . '.jpg">
                            <div class="content hover-cont-wrap">
                                <div class="content-overlay"></div>
                                <img class="content-image" src="images/urbex/domaine/domaine' . $x . '.jpg">
                                <div class="content-details fadeIn-bottom">
                                    <!-- <h5 class="p-title">Title</h5> -->
                                    <p class="p-desc">Cliquez pour agrandir</p>
                                    <span class="zoom">&#128269;</span>
                                </div>
                            </div>
                        </a>';
                        $x++;
                    }
                    ?>
                </div>
                <hr class="separateur-urbex">
                <div class="portfolio-wrapper clearfix">
                    <?php
                    $x = 1;
                    $maisondulac = 9;
                    while ($x <= $maisondulac) {
                        echo '<a class="each-portfolio" data-fancybox="gallery" href="images/urbex/maisondulac/maisondulac' . $x . '.jpg">
                            <div class="content hover-cont-wrap">
                                <div class="content-overlay"></div>
                                <img class="content-image" src="images/urbex/maisondulac/maisondulac' . $x . '.jpg">
                                <div class="content-details fadeIn-bottom">
                                    <!-- <h5 class="p-title">Title</h5> -->
                                    <p class="p-desc">Cliquez pour agrandir</p>
                                    <span class="zoom">&#128269;</span>
                                </div>
                            </div>
                        </a>';
                        $x++;
                    }
                    ?>
                </div>
                <hr class="separateur-urbex">
                <div class="portfolio-wrapper clearfix">
                    <?php
                    $x = 1;
                    $soferti = 14;
                    while ($x <= $soferti) {
                        echo '<a class="each-portfolio" data-fancybox="gallery" href="images/urbex/soferti/soferti' . $x . '.jpg">
                            <div class="content hover-cont-wrap">
                                <div class="content-overlay"></div>
                                <img class="content-image" src="images/urbex/soferti/soferti' . $x . '.jpg">
                                <div class="content-details fadeIn-bottom">
                                    <!-- <h5 class="p-title">Title</h5> -->
                                    <p class="p-desc">Cliquez pour agrandir</p>
                                    <span class="zoom">&#128269;</span>
                                </div>
                            </div>
                        </a>';
                        $x++;
                    }
                    ?>
                </div>
            </div>
        </div>
    </section>

    <?php include('include/footer.php');?>

</body>

</html>