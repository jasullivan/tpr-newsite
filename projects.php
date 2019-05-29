<?php
	// CHANGE THE $NAV_CLASS VARIABLE TO HOME OR ABOUT AND SEE THAT IT CHANGES WHICH LI IS ACTIVE
	$nav_class = 'nav-projects';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><link rel="shortcut icon" type="image/png" href="assets/images/tpr-favicon.png">
    <title>tpr media | Projects</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">

    <!-- for progressive lazy load -->
    <!-- <link rel="stylesheet" href="./assets/styles/css/progressive-image.min.css">
    <script src="./assets/js/progressive-image.min.js"></script> -->
    <!-- for progressive lazy load -->
    <link rel="stylesheet" type="text/css" media="screen" href="./assets/styles/css/style.css" />
    <script src="./assets/js/lazysizes.min.js"></script>
</head>
<body>
    <!-- navbar -->
    <?php include 'navigation.php'; ?>
    <!-- <nav role="navigation" aria-label="Main navigation" class="navbar navbar-expand-lg navbar-light bg-white p-4 tpr-nav">
        <a class="navbar-brand" href="index">
            <img src="./assets/images/logos/logo.png" alt="tpr media logo">
        </a>
        <div class="tpr-nav__social-icons pt-5">
            <span class="icon icon__twitter icon-issuu" aria-hidden="true"></span>
            <span class="icon icon__twitter icon-Twitter-black" aria-hidden="true"></span>
            <span class="icon icon__linkedin icon-LinkedIn-black" aria-hidden="true"></span>
        </div>
        <button class="navbar-toggler mt-5 mr-3" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon icon__hamburger icon-hamburger show" aria-hidden="true"></span>
            <span class="icon icon__cross icon-cross hide" aria-hidden="true"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <hr>
            <ul class="navbar-nav mr-auto pt-lg-5">
                <li class="nav-item text-center">
                    <a class="pr-lg-5 pl-lg-5 tpr-nav__link" href="about">About</a>
                </li>
                <li class="nav-item text-center">
                    <a class="pr-lg-5 tpr-nav__link active" href="projects">Projects</a>
                </li>
                <li class="nav-item text-center">
                    <a class="pr-lg-5 tpr-nav__link" href="clients">Clients</a>
                </li>
                <li class="nav-item text-center">
                    <a class="pr-lg-5 tpr-nav__link" href="approach">Approach</a>
                </li>
                <li class="nav-item text-center">
                    <a class="pr-lg-5 tpr-nav__link" href="news">News</a>
                </li>
                <li class="nav-item text-center">
                    <a class="tpr-nav__link" href="contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav> -->
    <!-- navbar -->

    <!-- blue header bar -->
    <div class="container-fluid pt-4">
        <div class="tpr-blue-bar">
            <h1 class="tpr-blue-bar__title">We believe that every project is special and that’s why we create bespoke, tailored campaigns.</h1>
            <p class="tpr-blue-bar__content"> From targeted publicity for film and programme launches, to corporate retainers from major international brands, we work closely with our clients to deliver the right campaign to support their business goals. Whether it’s driving audience figures or raising reputation and business profile, we provide creative, intelligent and effective communication campaigns that get noticed.</p>
        </div>  
    </div>
    <!-- blue header bar -->
    
    <!-- MAIN (Center website) -->
    <div class="container">
        <div class="row px-md-5 pt-5">
            <div class="col-md-12">
                <div class="gallery-nav gallery-nav-filter">
                    <button class="gallery-nav__button is-checked" data-filter="*">All</button>
                    <button class="gallery-nav__button" data-filter=".casestudies">Case Studies</button>
                    <button class="gallery-nav__button" data-filter=".tvandfilm">TV & Film</button>
                    <button class="gallery-nav__button" data-filter=".artsandculture">Arts & Culture</button>
                    <button class="gallery-nav__button" data-filter=".technology">Technology</button>
                    <button class="gallery-nav__button" data-filter=".awardsandfestivals">Awards & Festivals</button>
                    <button class="gallery-nav__button" data-filter=".socialimpact">Social Impact</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="grid mb-5 mt-3">
            <div class="gallery-item tvandfilm casestudies">
                <a href="project-articles/case-study-out-of-thin-air" class="gallery-item__details">
                    <p>Case Study: Out of Thin Air</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img    
                    data-src="./assets/images/gallery/out-of-thin-air-thumbnail.jpg" 
                    src="./assets/images/gallery/out-of-thin-air-thumbnail-preview.jpg"
                    alt="Black and white reconstruction of Icelandic crime scene" class="lazyload">
            </div>
            <div class="gallery-item socialimpact">
                <a href="project-articles/remember-baghdad" class="gallery-item__details">
                    <p>Remember Baghdad</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/remember-baghdad-thumbnail.jpg" src="./assets/images/gallery/remember-baghdad-thumbnail-preview.jpg"
                    alt="Coloured tinted skyline of Baghdad in the 1950s" class="lazyload">
            </div>
            <div class="gallery-item awardsandfestivals technology">
                <a href="project-articles/accidental-anarchist" class="gallery-item__details">
                    <p>Accidental Anarchist</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/accidental-anarchist-thumbnail.jpg" src="./assets/images/gallery/accidental-anarchist-thumbnail-preview.jpg"
                    alt="Presenter Carne Ross standing in front of an anarchist mural" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm casestudies">
                <a href="project-articles/inside-the-freemasons" class="gallery-item__details">
                    <p>Inside the Freemasons</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/inside-the-freemasons-thumbnail.jpg" src="./assets/images/gallery/inside-the-freemasons-thumbnail-preview.jpg"
                    alt="Five freemasons dressed in full regalia and holding Masonic artefacts" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm">
                <a href="project-articles/dementia-peer-support" class="gallery-item__details">
                    <p>Dementia Peer Support</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/dementia-peer-support-thumbnail.jpg" src="./assets/images/gallery/dementia-peer-support-thumbnail-preview.jpg"
                    alt="Older adult members holding hands and dancing in a circle" class="lazyload">
            </div>
            <div class="gallery-item technology">
                <a href="project-articles/what-you-taught-me-about-my-son" class="gallery-item__details">
                    <p>What You Taught Me About My Son</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/what-you-taught-me-about-my-son-thumbnail.jpg" src="./assets/images/gallery/what-you-taught-me-about-my-son-thumbnail-preview.jpg"
                    alt="What you taught me about my son" class="lazyload">
            </div>
            
            <div class="gallery-item artsandculture">
                <img data-src="./assets/images/gallery/never-ending-man-thumbnail.jpg" src="./assets/images/gallery/never-ending-man-thumbnail-preview.jpg"
                    alt="Responsive Image" class="lazyload">
            </div>
            <div class="gallery-item artsandculture">
                <img data-src="./assets/images/gallery/out-of-thin-air-thumbnail.jpg" src="./assets/images/gallery/out-of-thin-air-thumbnail-preview.jpg"
                    alt="Responsive Image" class="lazyload">
            </div>
            
            
            
            <div class="gallery-item tvandfilm">
                <img data-src="./assets/images/gallery/dementia-peer-support-thumbnail2.jpg" src="./assets/images/gallery/dementia-peer-support-thumbnail2-preview.jpg"
                    alt="Responsive Image" class="lazyload">
            </div>

            <div class="gallery-item tvandfilm casestudies">
                <img data-src="./assets/images/gallery/inside-the-freemasons-thumbnail2.jpg" src="./assets/images/gallery/inside-the-freemasons-thumbnail2-preview.jpg" alt="Responsive Image" class="lazyload">
            </div>
        </div>
    </div>
    
    
    <!-- testimonials -->
    <div class="testimonials p-5">
        <p class="testimonial">
            <span>David Brindley, Head of Popular Factual and Factual Entertainment, BBC</span> <br>"I’ve worked with
            Sophie on
            several big series. She and her team provide attention to detail and you feel your films are very carefully and
            looked
            after in her hands. I’m looking forward to continuing to work with tpr media on many future projects."
        </p>
    </div>
    <!-- testimonials -->


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

    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>

    <script src="./assets/js/script.js"></script>

</body>
</html>