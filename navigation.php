<!-- navbar -->
    <nav role="navigation" aria-label="Main navigation" class="navbar navbar-expand-lg navbar-light bg-white p-4 tpr-nav">
        <a class="navbar-brand" href="index">
            <img src="./assets/images/logos/logo.png" alt="tpr media logo">
        </a>
        <div class="tpr-nav__social-icons pt-5">
            <a href="https://issuu.com/tpr-media"><span class="icon icon__twitter icon-issuu" aria-hidden="true"></span></a>
            <a href="https://twitter.com/tpr_media_PR"><span class="icon icon__twitter icon-Twitter-black" aria-hidden="true"></span></a>
            <a href="https://www.linkedin.com/in/stoumazis"><span class="icon icon__linkedin icon-LinkedIn-black" aria-hidden="true"></span></a>
        </div>
        <button class="navbar-toggler mt-5 mr-3" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon icon__hamburger icon-hamburger show" aria-hidden="true"></span>
            <span class="icon icon__cross icon-cross hide" aria-hidden="true"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <hr>
            <ul class="navbar-nav mr-auto pt-lg-5 <?= $nav_class; ?>">
                <li class="nav-item text-center">
                    <a class="pr-lg-5 pl-lg-5 tpr-nav__link nav-about" href="about">About</a>
                </li>
                <li class="nav-item text-center nav-projects">
                    <a class="pr-lg-5 tpr-nav__link nav-projects" href="projects">Projects</a>
                </li>
                <li class="nav-item text-center nav-clients">
                    <a class="pr-lg-5 tpr-nav__link nav-clients" href="clients">Clients</a>
                </li>
                <li class="nav-item text-center nav-approach">
                    <a class="pr-lg-5 tpr-nav__link nav-approach" href="approach">Approach</a>
                </li>
                <li class="nav-item text-center nav-news">
                    <a class="pr-lg-5 tpr-nav__link nav-news" href="news">News</a>
                </li>
                <li class="nav-item text-center nav-contact">
                    <a class="tpr-nav__link nav-contact" href="contact">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <!-- navbar -->