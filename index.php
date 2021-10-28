<!DOCTYPE html>
<html lang="fr">

<?php include('include/head.php'); ?>

<body id="parallax">
    <?php include('include/nav.php'); ?>

    <section class="content-section text-center" id="Portfolio">
        <div class="container">
            <div class="block-heading">
                <h2>Drone</h2>
                <p style="font-style: italic;">Le paysage vu du ciel</p>
            </div>
            <div class="portfolio-wrapper clearfix">
                <?php
                $x = 1;
                $y = 30;
                while ($x <= $y) {
                    echo '<a class="each-portfolio" data-fancybox="gallery" href="images/drone/drone' . $x . '.jpg">
                            <div class="content hover-cont-wrap">
                                <div class="content-overlay"></div>
                                <img class="content-image" src="images/drone/drone' . $x . '.jpg">
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
    </section>

    <?php include('include/footer.php');?>
    
</body>

</html>