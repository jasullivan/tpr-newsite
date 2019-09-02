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
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>
<body>

    <!-- navbar -->
    <?php include 'navigation.php'; ?>
    <!-- navbar -->
   

    <!-- blue header bar -->
    <div class="container-fluid pt-4">
        <div class="tpr-blue-bar">
            <h1 class="tpr-blue-bar__title">We’re always working on something exciting – here’s a glimpse of what we’ve been up to lately.</h1>
        </div>  
    </div>
    <!-- blue header bar -->
    <div class="fadeLoad">
    <!-- news section -->
    <div class="container">
        <div class="row tpr-news-row pt-5 pb-3 no-gutters">
            <div class="col-xl-8 pr-xl-3">
                <img data-src="./assets/images/news/andre-simon-2018-news.jpg" src="./assets/images/news/andre-simon-2018-news-preview.jpg" alt="Diana Henry and Meera Sodha at the André Simon Food and Drink book awards for 2018" class="tpr-news-row__image lazyload">
            </div>
            <div class="col-xl-4">
                <section class="tpr-news-row__content tpr-news-row__content--grey px-5 py-5">
                    <h2 class="tpr-news-row__title">Leading food writer Diana Henry and West London community recognised at the André Simon Food & Drink Book Awards</h2>
                    <p class="tpr-news-row__paragraph">The Hubb Community Kitchen, a group of West London women whose community was affected by the Grenfell Tower fire, won a
                    prestigious award for their book Together: Our Community Cookbook on 40th anniversary of awards in a celebration of
                    home cooking.</p>
                    <a href="news-articles/diana-henry-at-andre-simon-awards" class="btn tpr-button mt-3">Read More</a>
                </section>
            </div>
        </div>

        <div class="row tpr-news-row pb-3 no-gutters">
            <div class="col-xl-4 order-2 order-xl-1 pr-xl-3">
                <section class="tpr-news-row__content px-5 py-5">
                    <h2 class="tpr-news-row__title">VR is for everyone - and it's coming soon to an arts venue near you</h2>
                    <p class="tpr-news-row__paragraph">It was great to be contacted last week by Catherine Allen, a BAFTA-winning immersive media specialist and founder of
                    Limina Immersive. She approached tpr media to promote an exciting VR-only arts festival, Limina VR Weekender, which is taking place at Picturehouse Central this weekend (1&2 December 2018).</p>
                    <a href="news-articles/vr-is-for-everyone" class="btn tpr-button mt-3">Read More</a>
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
                    <a href="news-articles/dartmouth-films-new-documentary" class="btn tpr-button mt-3">Read More</a>
                </section>
            </div>
        </div>

        <div class="row tpr-news-row pb-3 no-gutters">
            <div class="col-xl-4 order-2 order-xl-1 pr-xl-3">
                <section class="tpr-news-row__content px-5 py-5">
                    <h2 class="tpr-news-row__title">tpr media consultants appointed to promote two Storyville documentaries this summer</h2>
                    <p class="tpr-news-row__paragraph">We’re thrilled to be promoting two BBC Storyville documentaries this summer Accidental Anarchist (Hopscotch Films) and
                    Out Of Thin Air (Mosaic Films).</p>
                    <a href="news-articles/storyville-docs" class="btn tpr-button mt-3">Read More</a>
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
                    <a href="news-articles/inside-dior" class="btn tpr-button mt-3">Read More</a>
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
                    <a href="news-articles/remember-baghdad" class="btn tpr-button mt-3">Read More</a>
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
                    <a href="news-articles/aljazeera-launches-web-app" class="btn tpr-button mt-3">Read More</a>
                </section>
            </div>
        </div>

        <div class="row tpr-news-row pb-3 no-gutters">
            <div class="col-xl-4 order-2 order-xl-1 pr-xl-3">
                <section class="tpr-news-row__content px-5 py-5">
                    <h2 class="tpr-news-row__title">Our week of colourful cosplay and kawaii celebrations at Hyper Japan with NHK WORLD TV</h2>
                    <p class="tpr-news-row__paragraph">Last week, the team tpr had great fun at Hyper Japan, the festival celebrating all things Japanese at Olympia, where we
                    enjoyed learning lots about Japanese culture. We were working with NHK, Japan’s English-language broadcaster.</p>
                    <a href="news-articles/nhk-world-tv" class="btn tpr-button mt-3">Read More</a>
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
                    <a href="news-articles/tpr-loves-docs" class="btn tpr-button mt-3">Read More</a>
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
                    <a href="news-articles/last-whites-of-east-end" class="btn tpr-button mt-3">Read More</a>
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
                    <a href="news-articles/jamie-oliver-at-andre-simon-awards" class="btn tpr-button mt-3">Read More</a>
                </section>
            </div>
        </div>

        <div class="row tpr-news-row pb-3 no-gutters">
            <div class="col-xl-4 order-2 order-xl-1 pr-xl-3">
                <section class="tpr-news-row__content px-5 py-5">
                    <h2 class="tpr-news-row__title">Artists Against TTIP and the social importance of PR</h2>
                    <p class="tpr-news-row__paragraph">At tpr, it’s really important for us to work on projects that make a difference and we feel very lucky when we have the
                    opportunity to share powerful messages that help to influence real political change.</p>
                    <a href="news-articles/artists-against-ttip" class="btn tpr-button mt-3">Read More</a>
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
                    <a href="news-articles/millenials-and-mobiles" class="btn tpr-button mt-3">Read More</a>
                </section>
            </div>
        </div>

    </div>
    <!-- news section -->

    <!-- archive -->
    <div class="container mb-5">
        <div class="row">
            <div class="col-12">
                <h2 class="archive-button">Archive</h2>
                
                <ul class="archive-projects">
                    <li class="archive-projects__link"><a href="news-articles/happy-anniversary-tima">Happy anniversary TIMA, marking three years in Washington DC</a></li>
                    <li class="archive-projects__link"><a href="news-articles/tpr-at-hyper-japan">tpr media at Hyper Japan 2015</a></li>
                    <li class="archive-projects__link"><a href="news-articles/reuters-tima-launch">Reuters-TIMA Penthouse Launch Party</a></li>
                    <li class="archive-projects__link"><a href="news-articles/andre-simon-award-winners">Congratulations to the André Simon Food and Drink Award Winners</a></li>
                    <li class="archive-projects__link"><a href="news-articles/no-fire-zone-released-sinhala">No Fire Zone released in Sinhala</a></li>
                    <li class="archive-projects__link"><a href="news-articles/laura-poitras-citizenfour-awarded-oscar">Laura Poitras’ CITIZENFOUR Awarded Oscar for Best Documentary in 2014</a></li>
                    <li class="archive-projects__link"><a href="news-articles/100th-dragon-cafe">100th Dragon Cafe</a></li>
                    <li class="archive-projects__link"><a href="news-articles/holocaust-night-will-fall">Holocaust: Night Will Fall</a></li>
                    <li class="archive-projects__link"><a href="news-articles/londons-magnificent-musical-warehouse">London’s Magnificent Musical Warehouse</a></li>
                    <li class="archive-projects__link"><a href="news-articles/my-big-fat-greek-north-london-premiere">My Big Fat Greek North London Premiere</a></li>
                    <li class="archive-projects__link"><a href="news-articles/magical-therapy-leads-to-new-tricks-for-children-with-partial-paralysis">Magical therapy leads to new tricks for children with partial paralysis</a></li>
                    <li class="archive-projects__link"><a href="news-articles/tima-hosts-the-launch-of-aib-2014-awards">TIMA hosts the launch of AIB 2014 Awards in style with penthouse views of London’s landmarks</a></li>
                    <li class="archive-projects__link"><a href="news-articles/spring-is-the-season-for-documentaries-at-tpr">Spring is the season for documentaries at tpr with three thought-provoking programmes hitting screens in one week</a></li>
                    <li class="archive-projects__link"><a href="news-articles/itv4s-new-signing-warren-united-takes-to-the-big-screen-for-debut">ITV4’s new signing Warren United, takes to the big screen for his debut with help from tpr</a></li>
                    <li class="archive-projects__link"><a href="news-articles/happy-anniversary-tima">Chosen</a></li>
                    <li class="archive-projects__link"><a href="news-articles/robotics-evening-at-artem">Robotics evening at Artem</a></li>
                    <li class="archive-projects__link"><a href="news-articles/build-up-to-idfa">Build up to IDFA</a></li>
                    <li class="archive-projects__link"><a href="news-articles/dont-miss-bedlam">Don’t miss Bedlam</a></li>
                    <li class="archive-projects__link"><a href="news-articles/grierson-awards-2013">Grierson Awards 2013</a></li>
                    <li class="archive-projects__link"><a href="news-articles/ars-est-celare-artem-the-art-is-to-conceal-the-art">"Ars est celare artem" the art is to conceal the art</a></li>
                    <li class="archive-projects__link"><a href="news-articles/this-week-at-tpr">This week at tpr...</a></li>
                    <li class="archive-projects__link"><a href="news-articles/busy-week-at-tpr">Busy week at tpr</a></li>
                    <li class="archive-projects__link"><a href="news-articles/the-baftas-in-the-best-possible-taste">The BAFTAS – in the Best Possible Taste</a></li>
                    <li class="archive-projects__link"><a href="news-articles/the-mill">The Mill</a></li>
                    <li class="archive-projects__link"><a href="news-articles/one-mile-away">One Mile Away</a></li>
                    <li class="archive-projects__link"><a href="news-articles/happy-anniversary-tima">The Kogi</a></li>
                    <li class="archive-projects__link"><a href="news-articles/happy-anniversary-tima">We’re off to sunny Sheffield for Doc/Fest</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!-- archive -->

    <!-- testimonials -->
    <?php include 'testimonials.php'; ?>
    <!-- testimonials -->

    <!-- footer -->
    <?php include 'footer.php'; ?>
    <!-- footer -->
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="./assets/js/archive-dropdown.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/carousels.js"></script>

</body>
</html>