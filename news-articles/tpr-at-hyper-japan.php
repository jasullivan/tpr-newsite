<?php
	// CHANGE THE $NAV_CLASS VARIABLE TO HOME OR ABOUT AND SEE THAT IT CHANGES WHICH LI IS ACTIVE
	$nav_class = 'nav-news';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><link rel="shortcut icon" type="image/png" href="../assets/images/tpr-favicon.png">
    <title>tpr media | News</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="../assets/styles/css/style.css" />
    <script>
        // Picture element HTML5 shiv
        document.createElement("picture");
    </script>
    <script src="../assets/js/picturefill.min.js" async></script>
    <script src="../assets/js/lazysizes.min.js"></script>
</head>

<body>
    <!-- navbar -->
    <?php include '../sub-navigation.php'; ?>
    <!-- navbar -->

    <article role="article">
        <!-- blue header bar -->
        <header class="container-fluid pt-4">
            <div class="tpr-blue-bar">
                <h1 class="tpr-blue-bar__title">tpr media at Hyper Japan 2015</h1>
            </div>
        </header>
        <!-- blue header bar -->

        <!-- next and prev buttons -->
        <div class="container">
            <div class="row">
                <div class="col-11 col-lg-9 mx-auto">
                    <div class="next-prev-buttons pt-4">
                        <a href="reuters-tima-launch" class="next-prev-buttons__prev">
                            <span class="icon-arrowLeft"></span>previous
                        </a>
                        <a href="happy-anniversary-tima" class="next-prev-buttons__next">
                            next<span class="icon-arrowRight"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- next and prev buttons -->

        <!-- article content -->
        <div class="container">
            <div class="row">
                <div class="col-11 col-lg-9 mx-auto">
                    <div class="tpr-article-content">
                        <p class="tpr-article-content__paragraph">Last weekend we entered the weird and wonderful world of Hyper Japan at London’s 02. The annual festival celebrates all things Japanese, from J-pop and anime, to authentic food and amazing martial arts demonstrations. We were invited to attend this festival to help promote and drive one of the event’s core sponsors, NHK World, Japan’s leading public service broadcaster.</p>

                        <p class="tpr-article-content__paragraph">It was great to meet some of the star presenters from NHK World TV. Visitors had the chance to enjoy live performances by J-pop superstar and host of J-MELO, May J, who sang ‘Let it Go’ for the Japanese release of Disney’s Frozen, cooking demonstrations with celebrity chef Rika Yukimasa and a fascinating Q&A session with award-winning food writer Michael Booth.</p>

                        <img 
                            data-sizes="auto" 
                            data-srcset="
                                ../assets/images/news/hyper-japan-news_400w.jpg 400w, 
                                ../assets/images/news/hyper-japan-news.jpg"
                            data-src="../assets/images/news/hyper-japan-news.jpg" 
                            src="../assets/images/news/hyper-japan-news-preview.jpg"
                            alt="Hyper Japan" class="lazyload tpr-article-content__image"
                        >

                        <p class="tpr-article-content__paragraph">Rika hosts NHK World TV’s Dining with the Chef, a cookery series showcasing delicious yet simple Japanese dishes, such as Oyakodon, Japan’s most popular Donburi, (‘rice bowl dish’) that can be made in the comfort of your own home. She also specialises in translating complex Japanese recipes into easily digestible chunks.</p>

                        <img 
                            data-sizes="auto" 
                            data-srcset="
                                ../assets/images/news/hyper-japan-news-2_400w.jpg 400w, 
                                ../assets/images/news/hyper-japan-news-2.jpg"
                            data-src="../assets/images/news/hyper-japan-news-2.jpg" 
                            src="../assets/images/news/hyper-japan-news-2-preview.jpg"
                            alt="Hyper Japan" class="lazyload tpr-article-content__image"
                        >

                        <p class="tpr-article-content__paragraph">Rika was also joined by acclaimed British food writer and star of his very own anime series (Sushi and Beyond) Michael Booth, in an 'East meets West' talk – it is fair to say, following all the talk of food our taste buds went into overdrive!</p>

                        <p class="tpr-article-content__paragraph">NHK’s famous mascot and internet sensation, Domo, was also on hand to meet and greet fans – some of them really taking the photo opportunities to show why he’s so popular outside of Japan!</p>

                        <p class="tpr-article-content__paragraph">Finally it was great to see the 80,000-strong attendees really embrace the festival and dress up for the occasion. The assortment of fashion-styles and cosplay costumes really help champion Japan’s colourful and distinctive culture.</p>

                        <img 
                            data-sizes="auto" 
                            data-srcset="
                                ../assets/images/news/hyper-japan-news-3_400w.jpg 400w, 
                                ../assets/images/news/hyper-japan-news-3.jpg"
                            data-src="../assets/images/news/hyper-japan-news-3.jpg" 
                            src="../assets/images/news/hyper-japan-news-3-preview.jpg"
                            alt="Hyper Japan" class="lazyload tpr-article-content__image"
                        >
                        
                    </div>
                </div>
            </div>
            
        </div>
        <!-- article content -->
    </article>

    <!-- footer -->
    <?php include '../sub-footer.php'; ?>
    <!-- footer -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
    <script src="../assets/js/script.js"></script>

</body>

</html>