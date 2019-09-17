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
                <h1 class="tpr-blue-bar__title">ITV4's new signing Warren United, takes to the big screen for his debut with help from tpr</h1>
            </div>
        </header>
        <!-- blue header bar -->

        <!-- next and prev buttons -->
        <div class="container">
            <div class="row">
                <div class="col-11 col-lg-9 mx-auto">
                    <div class="next-prev-buttons pt-4">
                        <a href="chosen" class="next-prev-buttons__prev">
                            <span class="icon-arrowLeft"></span>previous
                        </a>
                        <a href="spring-is-the-season-for-documentaries-at-tpr" class="next-prev-buttons__next">
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

                        <p class="tpr-article-content__paragraph">Yesterday Warren and his family came to life on Prince Charles Cinema's big screen. Warren United, Baby Cow's latest animated series, about football and family was screened to cast and press for a football themed preview complete with match-side snacks.</p>

                        <img 
                            data-sizes="auto" 
                            data-srcset="
                                ../assets/images/news/warren-snacks-news_400w.jpg 400w, 
                                ../assets/images/news/warren-snacks-news.jpg"
                            data-src="../assets/images/news/warren-snacks-news.jpg" 
                            src="../assets/images/news/warren-snacks-news-preview.jpg"
                            alt="Hyper Japan" class="lazyload tpr-article-content__image"
                        >

                        <p class="tpr-article-content__paragraph">Warren United is set to broadcast to the 22 April to kick off with the UEFA Champions League semi-finals. The six parts series follows the fortunes of Warren Kingsley, an overweight kitchen salesman and fervent football fan, as he stumbles through life trying to juggle his two passions – football and family. Warren is a bloke of two halves: both a devoted husband and dad and a diehard fan of Brainsford United, a chronically struggling club, known to its long-suffering fans as "The Meringues."</p>

                        <p class="tpr-article-content__paragraph">"It's about the two most important f's in life – family and football," says executive producer Bill Freedman, Warren has been his brainchild for over eight years. "This show is also about the passion of being a fan. Yes, supporting Brainsford United often brings Warren more pain than joy but that's what makes him a true fan."</p>

                        <p class="tpr-article-content__paragraph"><a class="tpr-article-content__link" href="http://www.warrenunited.net/" target="_blank" rel="noopener">http://www.warrenunited.net/</a></p>

                        

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