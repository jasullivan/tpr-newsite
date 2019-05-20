<?php
	// CHANGE THE $NAV_CLASS VARIABLE TO HOME OR ABOUT AND SEE THAT IT CHANGES WHICH LI IS ACTIVE
	$nav_class = 'nav-news';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><link rel="shortcut icon" type="image/png" href="assets/images/tpr-favicon.png">
    <title>tpr media | News</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="./assets/styles/css/style.css" />
    <script src="./assets/js/lazysizes.min.js"></script>
</head>
<body>
    <!-- navbar -->
    <?php include 'navigation.php'; ?>
    <!-- <nav role="navigation" aria-label="Main navigation" class="navbar navbar-expand-lg navbar-light bg-white p-4 tpr-nav">
        <a class="navbar-brand" href="index.html">
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
                    <a class="pr-lg-5 pl-lg-5 tpr-nav__link" href="about.html">About</a>
                </li>
                <li class="nav-item text-center">
                    <a class="pr-lg-5 tpr-nav__link" href="projects.html">Projects</a>
                </li>
                <li class="nav-item text-center">
                    <a class="pr-lg-5 tpr-nav__link" href="clients.html">Clients</a>
                </li>
                <li class="nav-item text-center">
                    <a class="pr-lg-5 tpr-nav__link" href="approach.html">Approach</a>
                </li>
                <li class="nav-item text-center">
                    <a class="pr-lg-5 tpr-nav__link active" href="news.html">News</a>
                </li>
                <li class="nav-item text-center">
                    <a class="tpr-nav__link" href="contact.html">Contact</a>
                </li>
            </ul>
        </div>
    </nav> -->
    <!-- navbar -->
   

    <!-- blue header bar -->
    <div class="container-fluid pt-4">
        <div class="tpr-blue-bar">
            <h1 class="tpr-blue-bar__title">We’re always working on something exciting – here’s a glimpse of what we’ve been up to lately.</h1>
        </div>  
    </div>
    <!-- blue header bar -->

    <!-- news section -->
    <div class="container">
        <div class="row tpr-news-row pt-5 pb-3 no-gutters">
            <div class="col-xl-8 pr-xl-3">
                <!-- <img src="./assets/images/news/andre-simon-2018-news.jpg" class="tpr-news-row__image" alt="Diana Henry and Meera Sodha at the André Simon Food and Drink book awards for 2018" /> -->
                <img data-src="./assets/images/news/andre-simon-2018-news.jpg" src="./assets/images/news/andre-simon-2018-news-preview.jpg" alt="Diana Henry and Meera Sodha at the André Simon Food and Drink book awards for 2018" class="tpr-news-row__image lazyload">
                <!-- <picture data-href="./assets/images/news/andre-simon-2018-news.jpg" class="progressive replace tpr-news-row__image">
                    <img src="./assets/images/news/andre-simon-2018-news-preview.jpg" class="preview" alt="Diana Henry and Meera Sodha at the André Simon Food and Drink book awards for 2018" />
                </picture>  -->
            </div>
            <div class="col-xl-4">
                <section class="tpr-news-row__content tpr-news-row__content--grey px-5 py-5">
                    <h2 class="tpr-news-row__title">Leading food writer Diana Henry and West London community recognised at the André Simon Food & Drink Book Awards</h2>
                    <p class="tpr-news-row__paragraph">The Hubb Community Kitchen, a group of West London women whose community was affected by the Grenfell Tower fire, won a
                    prestigious award for their book Together: Our Community Cookbook on 40th anniversary of awards in a celebration of
                    home cooking.</p>
                    <a href="news/diana-henry-at-andre-simon-awards.html" class="btn tpr-button mt-3">Read More</a>
                </section>
            </div>
        </div>

        <div class="row tpr-news-row pb-3 no-gutters">
            <div class="col-xl-4 order-2 order-xl-1 pr-xl-3">
                <section class="tpr-news-row__content px-5 py-5">
                    <h2 class="tpr-news-row__title">VR is for everyone - and it's coming soon to an arts venue near you</h2>
                    <p class="tpr-news-row__paragraph">It was great to be contacted last week by Catherine Allen, a BAFTA-winning immersive media specialist and founder of
                    Limina Immersive. She approached tpr media to promote an exciting VR-only arts festival, Limina VR Weekender, which is taking place at Picturehouse Central this weekend (1&2 December 2018).</p>
                    <a href="news/vr-is-for-everyone.html" class="btn tpr-button mt-3">Read More</a>
                </section>
            </div>
            <div class="col-xl-8 order-1 order-xl-2">
                <img data-src="./assets/images/news/grenfell-our-home-news.jpg" src="./assets/images/news/grenfell-our-home-news-preview.jpg"
                    alt="Credit Grenfell Our Home by Channel 4, Parable and 59 Productions." class="tpr-news-row__image lazyload">
            </div>
        </div>

        <div class="row tpr-news-row pb-3 no-gutters">
            <div class="col-xl-8 pr-xl-3">
                <img data-src="./assets/images/news/ballymurphy-news.jpg" src="./assets/images/news/ballymurphy-news-preview.jpg"
                    alt="View over Ballymurphy." class="tpr-news-row__image lazyload">
            </div>
            <div class="col-xl-4">
                <section class="tpr-news-row__content tpr-news-row__content--grey px-5 py-5">
                    <h2 class="tpr-news-row__title">Dartmouth Films’ new documentary The Ballymurphy Precedent</h2>
                    <p class="tpr-news-row__paragraph">We were privileged to have been involved in the release of Dartmouth Films’ new documentary The Ballymurphy Precedent
                    in UK and Irish cinemas and Channel 4 this Sunday (9 September), directed by Callum Macrae.</p>
                    <a href="news/dartmouth-films-new-documentary.html" class="btn tpr-button mt-3">Read More</a>
                </section>
            </div>
        </div>

        <div class="row tpr-news-row pb-3 no-gutters">
            <div class="col-xl-4 order-2 order-xl-1 pr-xl-3">
                <section class="tpr-news-row__content px-5 py-5">
                    <h2 class="tpr-news-row__title">tpr media consultants appointed to promote two Storyville documentaries this summer</h2>
                    <p class="tpr-news-row__paragraph">We’re thrilled to be promoting two BBC Storyville documentaries this summer Accidental Anarchist (Hopscotch Films) and
                    Out Of Thin Air (Mosaic Films).</p>
                    <a href="news/storyville-docs.html" class="btn tpr-button mt-3">Read More</a>
                </section>
            </div>
            <div class="col-xl-8 order-1 order-xl-2">
                <img data-src="./assets/images/news/accidental-anarchist-news.jpg" src="./assets/images/news/accidental-anarchist-news-preview.jpg" alt="Presenter Carne Ross standing in front of an anarchist mural" class="tpr-news-row__image lazyload">
            </div>
        </div>

        <div class="row tpr-news-row pb-3 no-gutters">
            <div class="col-xl-8 pr-xl-3">
                <img data-src="./assets/images/news/inside-dior-news.jpg" src="./assets/images/news/inside-dior-news-preview.jpg"
                    alt="Supermodel Bella Hadid on catwalk with other models" class="tpr-news-row__image lazyload">
            </div>
            <div class="col-xl-4">
                <section class="tpr-news-row__content tpr-news-row__content--grey px-5 py-5">
                    <h2 class="tpr-news-row__title">Inside Dior: A new two-part observational documentary series</h2>
                    <p class="tpr-news-row__paragraph">In the run-up to London Fashion Week (17-21 February 2017), this two-part observational documentary series from
                    Finestripe Productions takes an exclusive behind-the-scenes look at Dior’s billion-dollar brand on its 70th birthday,
                    providing a talking point for discussions about fashion and female identity.</p>
                    <a href="news/inside-dior.html" class="btn tpr-button mt-3">Read More</a>
                </section>
            </div>
        </div>

        <div class="row tpr-news-row pb-3 no-gutters">
            <div class="col-xl-4 order-2 order-xl-1 pr-xl-3">
                <section class="tpr-news-row__content px-5 py-5">
                    <h2 class="tpr-news-row__title">Remember Baghdad</h2>
                    <p class="tpr-news-row__paragraph">Last Tuesday evening the tpr team were involved in the screening of Fiona Murphy’s new documentary-film, Remember
                    Baghdad. This fascinating film tells the story of Iraq through the eyes of the last Jews of Baghdad, who lived there
                    for 2,600 years until only a generation ago. With vivid home movies and footage from Iraq today, eight characters tell
                    their remarkable story. We held the event at the impressive Jewish community centre, JW3, where almost 300 people
                    attended.</p>
                    <a href="news/remember-baghdad.html" class="btn tpr-button mt-3">Read More</a>
                </section>
            </div>
            <div class="col-xl-8 order-1 order-xl-2">
                <img data-src="./assets/images/news/remember-baghdad-news.jpg" src="./assets/images/news/remember-baghdad-news-preview.jpg" alt="Remember Baghdad"
                    class="tpr-news-row__image lazyload">
            </div>
        </div>

        <div class="row tpr-news-row pb-3 no-gutters">
            <div class="col-xl-8 pr-xl-3">
                <img data-src="./assets/images/news/aljezeera1-news.jpg" src="./assets/images/news/aljezeera1-news-preview.jpg"
                    alt="Journalist and cameraman on rooftop conducting interview" class="tpr-news-row__image lazyload">
            </div>
            <div class="col-xl-4">
                <section class="tpr-news-row__content tpr-news-row__content--grey px-5 py-5">
                    <h2 class="tpr-news-row__title">Al Jazeera launches investigative journalism in game format</h2>
                    <p class="tpr-news-row__paragraph">In the lead up to Al Jazeera English’s 10th anniversary, we’ve been involved in the exciting launch of their new
                    web-based app #HACKED: Syria’s Electronic Armies. It’s a ground-breaking project where investigative journalism is
                    presented in a game format.</p>
                    <a href="news/aljazeera-launches-web-app.html" class="btn tpr-button mt-3">Read More</a>
                </section>
            </div>
        </div>

        <div class="row tpr-news-row pb-3 no-gutters">
            <div class="col-xl-4 order-2 order-xl-1 pr-xl-3">
                <section class="tpr-news-row__content px-5 py-5">
                    <h2 class="tpr-news-row__title">Our week of colourful cosplay and kawaii celebrations at Hyper Japan with NHK WORLD TV</h2>
                    <p class="tpr-news-row__paragraph">Last week, the team tpr had great fun at Hyper Japan, the festival celebrating all things Japanese at Olympia, where we
                    enjoyed learning lots about Japanese culture. We were working with NHK, Japan’s English-language broadcaster.</p>
                    <a href="news/nhk-world-tv.html" class="btn tpr-button mt-3">Read More</a>
                </section>
            </div>
            <div class="col-xl-8 order-1 order-xl-2">
                <img data-src="./assets/images/news/nhk1-news.jpg" src="./assets/images/news/nhk1-news-preview.jpg" alt="Large group of fans at Hyper Japan"
                    class="tpr-news-row__image lazyload">
            </div>
        </div>

        <div class="row tpr-news-row pb-3 no-gutters">
            <div class="col-xl-8 pr-xl-3">
                <img data-src="./assets/images/news/holocaust-night-news.jpg" src="./assets/images/news/holocaust-night-news-preview.jpg" alt="Close-up black and white picture of a soldier holding a film-camera from the 1940s" class="tpr-news-row__image lazyload">
            </div>
            <div class="col-xl-4">
                <section class="tpr-news-row__content tpr-news-row__content--grey px-5 py-5">
                    <h2 class="tpr-news-row__title">tpr loves docs</h2>
                    <p class="tpr-news-row__paragraph">We’ve just returned from Sheffield Doc/Fest where we saw some inspiring films. tpr media is fiercely dedicated to
                    documentary as art form and in the spirit of documentary filmmaking, we aim to create campaigns that open conversations
                    and debate, working with talented and trusted journalists across print, broadcast and online to stimulate discussion.</p>
                    <a href="news/tpr-loves-docs.html" class="btn tpr-button mt-3">Read More</a>
                </section>
            </div>
        </div>

        <div class="row tpr-news-row pb-3 no-gutters">
            <div class="col-xl-4 order-2 order-xl-1 pr-xl-3">
                <section class="tpr-news-row__content px-5 py-5">
                    <h2 class="tpr-news-row__title">Last Whites of the East End</h2>
                    <p class="tpr-news-row__paragraph">In the usual heady rush of TV scheduling, we were contacted at the last minute a few weeks ago – just two weeks before
                    transmission – to promote the thoughtful and provocative documentary Last Whites of the East End (Lambent Productions,
                    BBC One, Tuesday 24 May).</p>
                    <a href="news/last-whites-of-east-end.html" class="btn tpr-button mt-3">Read More</a>
                </section>
            </div>
            <div class="col-xl-8 order-1 order-xl-2">
                <img data-src="./assets/images/news/last-whites-of-eastend-news.jpg" src="./assets/images/news/last-whites-of-eastend-news-preview.jpg"
                    alt="Close-up of Peter Bell, Manager of East Ham Working Men’s Club" class="tpr-news-row__image lazyload">
            </div>
        </div>

        <div class="row tpr-news-row pb-3 no-gutters">
            <div class="col-xl-8 pr-xl-3">
                <img data-src="./assets/images/news/andre-simon-awards-news.jpg" src="./assets/images/news/andre-simon-awards-news-preview.jpg"
                    alt="Celebrity Chef Jamie Oliver mingles with guests at the annual André Simon Awards" class="tpr-news-row__image lazyload">
            </div>
            <div class="col-xl-4">
                <section class="tpr-news-row__content tpr-news-row__content--grey px-5 py-5">
                    <h2 class="tpr-news-row__title">Jamie Oliver says no reason why PM can’t do right thing on childhood obesity at André Simon Awards</h2>
                    <p class="tpr-news-row__paragraph">Last Thursday night we had a great evening at the Goring Hotel celebrating the André Simon Food & Drink Book Awards,
                    which showcase the best of contemporary food and drink writing.</p>
                    <a href="news/jamie-oliver-at-andre-simon-awards.html" class="btn tpr-button mt-3">Read More</a>
                </section>
            </div>
        </div>

        <div class="row tpr-news-row pb-3 no-gutters">
            <div class="col-xl-4 order-2 order-xl-1 pr-xl-3">
                <section class="tpr-news-row__content px-5 py-5">
                    <h2 class="tpr-news-row__title">Artists Against TTIP and the social importance of PR</h2>
                    <p class="tpr-news-row__paragraph">At tpr, it’s really important for us to work on projects that make a difference and we feel very lucky when we have the
                    opportunity to share powerful messages that help to influence real political change.</p>
                    <a href="news/artists-against-ttip.html" class="btn tpr-button mt-3">Read More</a>
                </section>
            </div>
            <div class="col-xl-8 order-1 order-xl-2">
                <img data-src="./assets/images/news/artists-against-ttip-news.jpg" src="./assets/images/news/artists-against-ttip-news-preview.jpg"
                    alt="Artists against TTIP" class="tpr-news-row__image lazyload">
            </div>
        </div>

        <div class="row tpr-news-row pb-3 no-gutters">
            <div class="col-xl-8 pr-xl-3">
                <img data-src="./assets/images/news/millenials-news.jpg" src="./assets/images/news/millenials-news-preview.jpg"
                    alt="Newstag: News website" class="tpr-news-row__image lazyload">
            </div>
            <div class="col-xl-4">
                <section class="tpr-news-row__content tpr-news-row__content--grey px-5 py-5">
                    <h2 class="tpr-news-row__title">Millennials and mobiles</h2>
                    <p class="tpr-news-row__paragraph">This week we’re celebrating our client Newstag’s success at the 2015 Asian Digital Media Awards in Hong Kong. The video
                    news platform clinched an award for ‘Best News Website’, and we couldn’t be prouder.</p>
                    <a href="news/millenials-and-mobiles.html" class="btn tpr-button mt-3">Read More</a>
                </section>
            </div>
        </div>

    </div>
    <!-- news section -->

    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                <h2 class="archive-button">Archive</h2>
                
                <ul class="archive-projects">
                    <li class="archive-projects__link"><a href="#">Happy anniversary TIMA, marking three years in Washington DC</a></li>
                    <li class="archive-projects__link"><a href="#">tpr media at Hyper Japan 2015</a></li>
                    <li class="archive-projects__link"><a href="#">Reuters-TIMA Penthouse Launch Party</a></li>
                    <li class="archive-projects__link"><a href="#">Congratulations to the André Simon Food and Drink Award Winners</a></li>
                    <li class="archive-projects__link"><a href="#">No Fire Zone released in Sinhala</a></li>
                    <li class="archive-projects__link"><a href="#">Laura Poitras’ CITIZENFOUR Awarded Oscar for Best Documentary in 2014</a></li>
                    <li class="archive-projects__link"><a href="#">100th Dragon Cafe</a></li>
                    <li class="archive-projects__link"><a href="#">Holocaust: Night Will Fall</a></li>
                    <li class="archive-projects__link"><a href="#">London’s Magnificent Musical Warehouse</a></li>
                    <li class="archive-projects__link"><a href="#">My Big Fat Greek North London Premiere</a></li>
                    <li class="archive-projects__link"><a href="#">Magical therapy leads to new tricks for children with partial paralysis</a></li>
                    <li class="archive-projects__link"><a href="#">TIMA hosts the launch of AIB 2014 Awards in style with penthouse views of London’s landmarks</a></li>
                    <li class="archive-projects__link"><a href="#">Spring is the season for documentaries at tpr with three thought-provoking programmes hitting screens in one week</a></li>
                    <li class="archive-projects__link"><a href="#">ITV4’s new signing Warren United, takes to the big screen for his debut with help from tpr</a></li>
                    <li class="archive-projects__link"><a href="#">Chosen</a></li>
                    <li class="archive-projects__link"><a href="#">No Fire Zone</a></li>
                    <li class="archive-projects__link"><a href="#">Robotics evening at Artem</a></li>
                    <li class="archive-projects__link"><a href="#">Build up to IDFA</a></li>
                    <li class="archive-projects__link"><a href="#">Don’t miss Bedlam</a></li>
                    <li class="archive-projects__link"><a href="#">Grierson Awards 2013</a></li>
                    <li class="archive-projects__link"><a href="#">"Ars est celare artem" the art is to conceal the art</a></li>
                    <li class="archive-projects__link"><a href="#">This week at tpr...</a></li>
                    <li class="archive-projects__link"><a href="#">Busy week at tpr</a></li>
                    <li class="archive-projects__link"><a href="#">The BAFTAS – in the Best Possible Taste</a></li>
                    <li class="archive-projects__link"><a href="#">The Mill</a></li>
                    <li class="archive-projects__link"><a href="#">One Mile Away</a></li>
                    <li class="archive-projects__link"><a href="#">The Kogi</a></li>
                    <li class="archive-projects__link"><a href="#">We’re off to sunny Sheffield for Doc/Fest</a></li>
                </ul>
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
    <footer class="container-fluid px-0">
        <div class="row bg-dark m-0">
            <div class="container">
                <div class="row">
                    <div class="order-md-2 col-12 col-md-6 col-lg-4">
                        <div class="tpr-footer p-5 text-center">
                            <div class="tpr-footer__content">
                                <img src="./assets/images/logos/logo_white.png" alt="" class="tpr-footer__logo-main">
                                <p class="text-center px-5 pt-3">Highgate, London</p>
                                <a href="tel:4402083477020" class="text-center tpr-footer__tel-link">+44 0208 347 7020</a>
                                <h4 class="pt-5">tpr media consultants</h4>
                            </div>
                        </div>
                    </div>
                    <div class="order-md-1 col-12 col-md-3 col-lg-4">
                        <div class="tpr-footer p-5">
                            <div class="tpr-footer__content--left">
                                <img src="./assets/images/logos/cipr_small.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>

    <script src="./assets/js/archive-dropdown.js"></script>
    <script src="./assets/js/script.js"></script>

</body>
</html>