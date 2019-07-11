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
                <h1 class="tpr-blue-bar__title">tpr loves docs.</h1>
            </div>
        </header>
        <!-- blue header bar -->

        <!-- next and prev buttons -->
        <div class="container">
            <div class="row">
                <div class="col-11 col-lg-9 mx-auto">
                    <div class="next-prev-buttons pt-4">
                        <a href="last-whites-of-east-end" class="next-prev-buttons__prev">
                            <span class="icon-arrowLeft"></span>previous
                        </a>
                        <a href="nhk-world-tv" class="next-prev-buttons__next">
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

                        <img 
                            data-sizes="auto" 
                            data-srcset="
                                ../assets/images/news/holocaust-night-news_400w.jpg 400w, 
                                ../assets/images/news/holocaust-night-news.jpg"
                            data-src="../assets/images/news/holocaust-night-news.jpg" 
                            src="../assets/images/news/holocaust-night-news-preview.jpg"
                            alt="Close-up black and white picture of a soldier holding a film-camera from the 1940s" class="lazyload tpr-article-content__image">
                    
                        <p class="tpr-article-content__paragraph">We've just returned from Sheffield Doc/Fest where we saw some inspiring films. These
                            included Michael Moore's witty and insightful Where to Invade Next and Kirsten Johnson's Cameraperson, which
                            deservingly won the festival's grand prize.</p>
                        <p class="tpr-article-content__paragraph">We were blown away by Sonita – the moving story of a young, talented female Afghan
                            rapper – and Ants on a Leaf, about the world's most famous restaurant Noma's foray into Japanese flavours.</p>
                        <p class="tpr-article-content__paragraph">It was also thrilling to watch the seminal 1967 documentary Don't Look Back that
                            covered Bob Dylan's 1965 concert tour in England and we especially enjoyed the subsequent Q&amp;A with filmmaker
                            D.A. Pennebaker and Roger Graef.</p>
                        <p class="tpr-article-content__paragraph">tpr media is fiercely dedicated to documentary as art form and in the spirit of
                            documentary filmmaking, we aim to create campaigns that open conversations and debate, working with talented and
                            trusted journalists across print, broadcast and online to stimulate discussion.</p>
                        <p class="tpr-article-content__paragraph">We're lucky enough to have worked with some of the most outstanding international
                            documentary filmmakers over the last two decades, including Nick Broomfield, Morgan Spurlock, Larry Charles, Kim
                            Longinotto, Brian Hill, Roger Graef, Brian Woods, Daisy Asquith, Angus Macqueen and Morgan Matthews.</p>
                        <p class="tpr-article-content__paragraph">If you would like to read more about our recent work, we hope you will enjoy <a class="tpr-article-content__link"
                                href="http://issuu.com/tpr-media/docs/tpr_brochure_june_2016" target="_blank" rel="nofollow noopener">this
                                short portfolio</a> we've put together.</p>

                        
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