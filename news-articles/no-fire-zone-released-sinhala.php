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
                <h1 class="tpr-blue-bar__title">No Fire Zone released in Sinhala</h1>
            </div>
        </header>
        <!-- blue header bar -->

        <!-- next and prev buttons -->
        <div class="container">
            <div class="row">
                <div class="col-11 col-lg-9 mx-auto">
                    <div class="next-prev-buttons pt-4">
                        <a href="laura-poitras-citizenfour-awarded-oscar" class="next-prev-buttons__prev">
                            <span class="icon-arrowLeft"></span>previous
                        </a>
                        <a href="andre-simon-award-winners" class="next-prev-buttons__next">
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
                        <p class="tpr-article-content__paragraph">tpr’s Sophie and Eleanor attended a press conference in the House of Commons yesterday (Tuesday 10 March). The producers of multi-award-winning, Emmy-nominated feature documentary No Fire Zone: The Killing Fields of Sri Lanka announced the release of a new Sinhala language version of the film in a direct challenge to the new government over its commitment to a free media.</p>

                        <img 
                            data-sizes="auto" 
                            data-srcset="
                                ../assets/images/news/no-fire-zone-news_400w.jpg 400w, 
                                ../assets/images/news/no-fire-zone-news.jpg"
                            data-src="../assets/images/news/no-fire-zone-news.jpg" 
                            src="../assets/images/news/no-fire-zone-news-preview.jpg"
                            alt="Hyper Japan" class="lazyload tpr-article-content__image"
                        >

                        <p class="tpr-article-content__paragraph">This controversial film exposing the war crimes and massacres committed at the end of the civil war in 2009 has been effectively banned in Sri Lanka until now – and anyone helping the film-makers threatened with prosecution.</p>

                        <p class="tpr-article-content__paragraph">This announcement coincides with the visit of new Sri Lankan President Maithripala Sirisena to the UK, taking place the day before he is due to have dinner with the Queen. The release of the film in Sri Lanka will allow the majority Sinhala population to see for the first time the shocking evidence of war crimes and massacres committed at the end of the war by their own government’s forces.</p>

                        <p class="tpr-article-content__paragraph">The film also accuses the Tamil Tigers of committing war crimes – and of preventing civilians from attempting to escape the government shelling of the so-called No Fire Zones,  including, on occasion, shooting at fleeing civilians. The producers announced a number of initiatives which will maximize the political impact of the release in Sri Lanka, revealing new challenges to the current bans on the film in, India, Malaysia and Nepal.</p>

                        <p class="tpr-article-content__paragraph">The launch was attended by No Fire Zone Director Callum Macrae, Labour MP Siobhain McDonagh, Conservative MP Lee Scott and others TBC.  The meeting was also addressed by exiled Sinhalese writer Bashana Abeywardane.</p>

                        <p class="tpr-article-content__paragraph">Noble Peace Prize nominated director, Callum Macrae, featured on this morning’s Today program on BBC Radio 4 <a class="tpr-article-content__link" href="http://www.bbc.co.uk/programmes/b054qc1f" target="_blank" rel="noopener">http://www.bbc.co.uk/programmes/b054qc1f</a>.</p>

                        <p class="tpr-article-content__paragraph">The release of No Fire Zone in Sinhala has been welcomed by a cross section of Sri Lankan civil society.</p>
                        
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