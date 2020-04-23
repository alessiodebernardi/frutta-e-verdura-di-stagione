<?php
require "configs.php";
?>

<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="La frutta e la verdura di stagione, mese per mese">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
        <link rel="stylesheet" href="assets/css/style.css" crossorigin="anonymous">
        <link rel='shortcut icon' type='image/x-icon' href='favicon.ico' />
        <title>Frutta e verdura di stagione, mese per mese</title>
        <?php if($isProd): ?>
            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-121766756-1"></script>
            <script>
                window.dataLayer = window.dataLayer || [];
                function gtag(){dataLayer.push(arguments);}
                gtag('js', new Date());

                gtag('config', '<?= $googleAnalyticsCode ?>');
            </script>
        <?php endif; ?>
    </head>
    <body>
        <div class="minimal-container">
            <div class="page-title-container">
                <div class="container">
                    <div class="row">
                        <div class="page-title">
                            <h1>La frutta e la verdura di stagione, mese per mese</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="month-container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="slider-nav">
                                <ul>
                                    <?php foreach ($months as $index => $month): ?>
                                        <li class="slider-nav-elem" data-monthindex="<?= $index + 1 ?>">
                                            <?=$month?>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="all-container">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col">
                            <div class="slider">
                                <div class="owl-carousel">
                                    <?php foreach($data as $elem): ?>
                                    <div class="slide">
                                        <div class="row">
                                            <div class="col">
                                                <div class="slide-title">
                                                    <h4>
                                                        <?= $elem["name"] ?>
                                                    </h4>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row ">
                                            <div class="col">
                                                <div class="slide-col">
                                                    <div class="slide-col-title text-center">
                                                        <h2>FRUTTA</h2>
                                                    </div>
                                                    <h6>Questo mese</h6>
                                                    <div class="row">
                                                        <?php foreach ($elem["frutta"] as $frutto): ?>
                                                        <div class="col-md-6">
                                                            <?php if(isset($fruits[$frutto])): ?>
                                                                <div class="slide-elem" style="background-image: url(<?= $imageBaseUrl . $fruits[$frutto]["image"] ?>);"></div>
                                                            <?php else: ?>
                                                                <div class="slide-elem" style="background-image: url(https://via.placeholder.com/150x120);"></div>
                                                            <?php endif; ?>
                                                                <div class="slide-elem-text">
                                                                    <h5><?= $frutto ?></h5>
                                                                </div>
                                                        </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                    <h6>Tutto l'anno</h6>
                                                    <div class="row">
                                                        <?php foreach ($fruttaTuttoAnno as $frutto): ?>
                                                            <div class="col-md-6">
                                                                <?php if(isset($fruits[$frutto])): ?>
                                                                    <div class="slide-elem" style="background-image: url(<?= $imageBaseUrl . $fruits[$frutto]["image"] ?>);"></div>
                                                                <?php else: ?>
                                                                    <div class="slide-elem" style="background-image: url(https://via.placeholder.com/150x120);"></div>
                                                                <?php endif; ?>
                                                                <div class="slide-elem-text">
                                                                    <h5><?= $frutto ?></h5>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="slide-col">
                                                    <div class="slide-col-title text-center">
                                                        <h2>VERDURA</h2>
                                                    </div>
                                                    <h6>Questo mese</h6>
                                                    <div class="row">
                                                        <?php foreach ($elem["verdura"] as $verdura): ?>
                                                        <div class="col-md-6">
                                                            <?php if(isset($vegetables[$verdura])): ?>
                                                                <div class="slide-elem" style="background-image: url(<?= $imageBaseUrl . $vegetables[$verdura]["image"] ?>);"></div>
                                                            <?php else: ?>
                                                                <div class="slide-elem" style="background-image: url(https://via.placeholder.com/150x120);"></div>
                                                            <?php endif; ?>
                                                                <div class="slide-elem-text">
                                                                    <h5><?= $verdura ?></h5>
                                                                </div>
                                                        </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                    <h6>Tutto l'anno</h6>
                                                    <div class="row">
                                                        <?php foreach ($verduraTuttoAnno as $verdura): ?>
                                                            <div class="col-md-6">
                                                                <?php if(isset($vegetables[$verdura])): ?>
                                                                    <div class="slide-elem" style="background-image: url(<?= $imageBaseUrl . $vegetables[$verdura]["image"] ?>);"></div>
                                                                <?php else: ?>
                                                                    <div class="slide-elem" style="background-image: url(https://via.placeholder.com/150x120);"></div>
                                                                <?php endif; ?>
                                                                <div class="slide-elem-text">
                                                                    <h5><?= $verdura ?></h5>
                                                                </div>
                                                            </div>
                                                        <?php endforeach; ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <footer>
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="footer-text">Made with <3 by <a href="mailto:info@fruttaeverduradistagione.com?Subject=Informations%20Request" target="_top">Alessio Debernardi Venon</a></div>
                        </div>
                    </div>
                </div>
            </footer>
        </div>

        <script>
            var CURRENT_MONTH = "<?= $currentMonth ?>";
        </script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/scripts.js"></script>
    </body>
</html>