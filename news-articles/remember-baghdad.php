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
                <h1 class="tpr-blue-bar__title">Remember Baghdad.</h1>
            </div>
        </header>
        <!-- blue header bar -->

        <!-- article content -->
        <div class="container">
            <div class="row">
                <div class="col-9 mx-auto">
                    <div class="tpr-article-content">
                        <p class="tpr-article-content__paragraph">Last Tuesday evening the tpr team were involved in the screening of Fiona Murphy's new documentary-film, Remember Baghdad. This fascinating film tells the story of Iraq through the eyes of the last Jews of Baghdad, who lived there for 2,600 years until only a generation ago. With vivid home movies and footage from Iraq today, eight characters tell their remarkable story.</p>
                        <p class="tpr-article-content__paragraph">We held the event at the impressive Jewish community centre, JW3, where almost 300 people attended, including contributors with their families and friends, alongside representatives from the Iraqi Embassy. Just before the screening, journalists from Al Afaq Iraqi TV interviewed the director and key contributors.</p>
                        
                        <img data-sizes="auto" data-src="../assets/images/news/remember-baghdad-news.jpg" src="../assets/images/news/remember-baghdad-news-preview.jpg"
                            data-srcset="../assets/images/news/remember-baghdad-news_400w.jpg 400w, ../assets/images/news/remember-baghdad-news.jpg 800w"
                            alt="Remember Baghdad" class="lazyload tpr-article-content__image">

                        <p class="tpr-article-content__paragraph">Roxane Farmanfarmaian, Cambridge professor of Political and International Studies and chair of the event, interviewed director Fiona Murphy and contributors David Dangoor and Edwin Shuker on stage. The Q&amp;A was opened up to the floor and everyone expressed how this film told an incredibly important story – including a member of the audience whose feedback was translated from Arabic – as a large proportion of the general public probably don't know that Christians, Muslims and Jews lived harmoniously in Baghdad until a generation ago. As one contributor said, "Jews, Muslims and Christians – we were all Iraqis – it was paradise".</p>
                        <p class="tpr-article-content__paragraph">It was an absolute pleasure to work with everyone involved and the success and vibrancy of the evening couldn't have happened without the moving stories of the contributors. We're very excited to see which TV channels and festivals show Remember Baghdad next year – exactly one 100 years after the British seized Baghdad in 1917. There's been a lot of interest since the screening – watch this space. <a class="tpr-article-content__link" href="http://rememberbaghdad.com/" target="_blank" rel="nofollow noopener">rememberbaghdad.com</a></p>


                        <h2 class="tpr-article-content__subtitle">About the Film</h2>


                        <p class="tpr-article-content__paragraph">Remember Baghdad begins in a happy period for the Jews a hundred years ago. A third of the citizens of Baghdad are Jewish. The descendants of the scholars who wrote the Babylonian Talmud, are now Westernising fast. In 1947 the first Miss Baghdad is Jewish. Jews are parliamentarians. They attend fancy parties and picnics on the Tigris with the elite.</p>
                        <p class="tpr-article-content__paragraph">But after the creation of Israel, they are no longer safe and a mass exodus takes place, though many thousands stay behind, loyal to the country they love. Finally, after 1967, Saddam Hussein mobilises a mass movement against them and they must flee.</p>
                        <p class="tpr-article-content__paragraph">Our characters tell their story with poignant regret and bitter clarity. And just as it seems that the page of history has turned, we follow one Iraqi Jew on a remarkable journey home, back to Baghdad.</p>

                        
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