<?php
	// CHANGE THE $NAV_CLASS VARIABLE TO HOME OR ABOUT AND SEE THAT IT CHANGES WHICH LI IS ACTIVE
	$nav_class = 'index';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" type="image/png" href="assets/images/tpr-favicon.png">
    <title>tpr media &#124; Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="./assets/styles/css/style.css" />
    <script src="./assets/js/lazysizes.min.js"></script>
</head>
<body>
    <!-- navbar -->
    <?php include 'navigation.php'; ?>
    <!-- navbar -->

    <!-- carousel (bootstrap component)-->
    <div class="tpr-slider pt-4">
        <div id="tpr-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <section class="carousel-item active">
                    <a href="projects/case-study-out-of-thin-air.html"><img src="./assets/images/slider/Artem-sfx-slider.jpg" class="d-block w-100 lazyload" alt="Artem: Two men dressed in Halo Masterchief costumes jumping with London landmarks in background"></a>
                    <div class="carousel-caption">
                        <h2>Artem</h2>
                    </div>
                </section>
                <section class="carousel-item">
                    <a href="projects/case-study-out-of-thin-air.html"><img data-src="./assets/images/slider/Out-of-Thin-Air-slider.jpg" class="d-block w-100 lazyload" alt="Out of Thin Air: Black and white reconstruction of Icelandic crime scene"></a>
                    <div class="carousel-caption">
                        <h2>Out of thin air</h2>
                    </div>
                </section>
                <section class="carousel-item">
                    <a href="projects/case-study-out-of-thin-air.html"><img data-src="./assets/images/slider/andre-simon-awards-slider.jpg" class="d-block w-100 lazyload" alt="Celebrity Chef Jamie Oliver mingles with guests at the annual Andr&#233; Simon Awards"></a>
                    <div class="carousel-caption">
                        <h2>Andr&#233; Simon Awards</h2>
                    </div>
                </section>
                <section class="carousel-item">
                    <a href="projects/case-study-out-of-thin-air.html"><img data-src="./assets/images/slider/Grayson-Perry-slider.jpg" class="d-block w-100 lazyload" alt="Grayson Perry tapestry">
                    <div class="carousel-caption"></a>
                        <h2>All In The Best Possible Taste with Grayson Perry</h2>
                    </div>
                </section>
                <section class="carousel-item">
                    <a href="projects/inside-dior.html"><img data-src="./assets/images/slider/inside-dior-slider.jpg" class="d-block w-100 lazyload" alt="Inside Dior: Supermodel Bella Hadid on catwalk with other models"></a>
                    <div class="carousel-caption">
                        <h2>Inside Dior</h2>
                    </div>
                </section>
                <section class="carousel-item">
                    <a href="projects/case-study-out-of-thin-air.html"><img data-src="./assets/images/slider/My-Brother-The-Terrorist-slider.jpg" class="d-block w-100 lazyload" alt="My Brother the Terrorist: Presenter/director Robb Leech with film camera interviews his brother who became a radical Muslim, both are seated"></a>
                    <div class="carousel-caption">
                        <h2>My Brother the Terrorist</h2>
                    </div>
                </section>
                <section class="carousel-item">
                    <a href="projects/case-study-out-of-thin-air.html"><img data-src="./assets/images/slider/no-fire-zone-slider.jpg" class="d-block w-100 lazyload" alt="The Night Manager: Lead cast members of the Night Manager in luxury setting"></a>
                    <div class="carousel-caption">
                        <h2>No Fire Zone: The Killing Fields of Sri Lanka</h2>
                    </div>
                </section>
                <section class="carousel-item">
                    <a href="projects/case-study-tales-of-grim-sleeper.html"><img data-src="./assets/images/slider/tales-of-grim-sleeper-slider.jpg" class="d-block w-100 lazyload" alt="Tales of the Grim Sleeper: Director Nick Broomfield (left) with headphones and contributor Pam in foreground driving a car"></a>
                    <div class="carousel-caption">
                        <h2>Tales of the Grim Sleeper</h2>
                    </div>
                </section>
                <section class="carousel-item">
                    <a href="projects/case-study-out-of-thin-air.html"><img data-src="./assets/images/slider/the-undatables-slider.jpg" class="d-block w-100 lazyload" alt="Undateables: Eight contributors of Undateables series one"></a>
                    <div class="carousel-caption">
                        <h2>The Undateables</h2>
                    </div>
                </section>
                <section class="carousel-item">
                    <a href="projects/case-study-out-of-thin-air.html"><img data-src="./assets/images/slider/the-year-the-town-hall-shrank-slider.jpg" class="d-block w-100 lazyload" alt="The Year the Town Hall Shrank: Close-up of female resident at old people’s home"></a>
                    <div class="carousel-caption">
                        <h2>The Year the Town Hall Shrank</h2>
                    </div>
                </section>
                <section class="carousel-item">
                    <a href="projects/case-study-out-of-thin-air.html"><img data-src="./assets/images/slider/Top-Boy-slider.jpg" class="d-block w-100 lazyload" alt="Top Boy: Four Top Boy cast members including Ashley Walters and Kane Robinson on an urban rooftop with a dog"></a>
                    <div class="carousel-caption">
                        <h2>Top Boy</h2>
                    </div>
                </section>
            </div>
            <a class="carousel-control-prev" href="#tpr-carousel" role="button" data-slide="prev">
                <span class="icon icon__carousel icon__carousel--left icon-arrowLeft" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#tpr-carousel" role="button" data-slide="next">
                <span class="icon icon__carousel icon__carousel--right icon-arrowRight" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
    <!-- carousel -->

    <!-- tpr company statement -->
    <div class="container py-5">
        <h1 class="tpr-statement-text"><span class="tpr-statement-text--highlight">Intelligent communications</span> campaigns for the creative industries and projects with a social impact</h1>
    </div>
    <!-- tpr company statement -->

    <!-- footer -->
    <?php include 'footer.php'; ?>
    <!-- footer -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="./assets/js/script.js"></script>

</body>
</html>