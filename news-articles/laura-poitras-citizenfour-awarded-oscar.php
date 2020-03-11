<?php
	
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

    <article>
        <!-- blue header bar -->
        <header class="container-fluid pt-4">
            <div class="tpr-blue-bar">
                <h1 class="tpr-blue-bar__title">Laura Poitras' CITIZENFOUR Awarded Oscar for Best Documentary in 2014</h1>
            </div>
        </header>
        <!-- blue header bar -->

        <!-- next and prev buttons -->
        <div class="container">
            <div class="row">
                <div class="col-11 col-lg-9 mx-auto">
                    <div class="next-prev-buttons pt-4">
                        <a href="100th-dragon-cafe" class="next-prev-buttons__prev">
                            <span class="icon-arrowLeft"></span>previous
                        </a>
                        <a href="no-fire-zone-released-sinhala" class="next-prev-buttons__next">
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
                                ../assets/images/news/citizenfour-news_400w.jpg 400w, 
                                ../assets/images/news/citizenfour-news.jpg"
                            data-src="../assets/images/news/citizenfour-news.jpg" 
                            src="../assets/images/news/citizenfour-news-preview.jpg"
                            alt="Edward Snowdon in front of a house" class="lazyload tpr-article-content__image"
                        >

                        <p class="tpr-article-content__paragraph">It’s been a privilege to work on <a class="tpr-article-content__link" href="https://citizenfourfilm.com/" target="_blank" rel="noopener">CITIZENFOUR</a>, Laura Poitras' riveting documentary about Edward Snowden.</p>

                        <p class="tpr-article-content__paragraph">An eye-opening exposé of the dangers of government surveillance, <a class="tpr-article-content__link" href="https://citizenfourfilm.com/" target="_blank" rel="noopener">CITIZENFOUR</a> tells the inside story of Edward Snowden and of the NSA’s mass illegal invasions of privacy. It’s a real-life thriller, following Poitras and journalist Glenn Greenwald’s encounters with Snowden in Hong Kong as he hands over classified documents and prepares to pay a personal price to reveal the truth.</p>

                        <p class="tpr-article-content__paragraph">After seeing the film, you'll never think the same way about your phone, email, credit card, web browser, or profile, ever again. You'll also feel inspired by Snowden's bravery. "One person can make a difference," he says at one point, "...and everyone should try."</p>

                        <p class="tpr-article-content__paragraph">Snowden's allegations brought to light violations committed by GCHQ (ruled as unlawful last month), who shared vast streams of sensitive personal information (including international phone calls and internet traffic) with the NSA, and countless other violations of personal privacy.</p>

                        <p class="tpr-article-content__paragraph">It’s a striking piece of investigative work so we absolutely thrilled when the film won <a class="tpr-article-content__link" href="http://oscar.go.com/nominees" target="_blank" rel="noopener">Best Documentary Feature at the Oscars last Sunday</a>. The win not only recognises Poitras' skilful cinematography, but also her daring work with a high-stakes whistleblower and the journalism that kick-started a worldwide debate.</p>

                        <img 
                            data-sizes="auto" 
                            data-srcset="
                                ../assets/images/news/citizenfour-group-news_400w.jpg 400w, 
                                ../assets/images/news/citizenfour-group-news.jpg"
                            data-src="../assets/images/news/citizenfour-group-news.jpg" 
                            src="../assets/images/news/citizenfour-group-news-preview.jpg"
                            alt="Citizen Four being awarded Oscar for best documentary" class="lazyload tpr-article-content__image"
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