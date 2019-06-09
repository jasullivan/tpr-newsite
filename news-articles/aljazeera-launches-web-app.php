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
                <h1 class="tpr-blue-bar__title">Al Jazeera launches investigative journalism in game format.</h1>
            </div>
        </header>
        <!-- blue header bar -->

        <!-- article content -->
        <div class="container">
            <div class="row">
                <div class="col-9 mx-auto">
                    <div class="tpr-article-content">
                        <p class="tpr-article-content__paragraph">In the lead up to Al Jazeera English's 10th anniversary, we've been involved in the exciting launch of their new web-based app #HACKED: Syria's Electronic Armies.</p>

                        <p class="tpr-article-content__paragraph">The app takes the user deep inside the Syria's cyber war, a conflict that has proven technology can be just as deadly as ground warfare. It's a ground-breaking project where investigative journalis is presented in a game format.</p>

                        <img 
                            data-sizes="auto" 
                            data-srcset="
                                ../assets/images/news/aljezeera1-news_400w.jpg 400w, 
                                ../assets/images/news/aljezeera1-news.jpg"
                            data-src="../assets/images/news/aljezeera1-news.jpg" 
                            src="../assets/images/news/aljezeera1-news-preview.jpg"
                            alt="Journalist and cameraman on rooftop conducting interview" class="lazyload tpr-article-content__image">

                        
                        <p class="tpr-article-content__paragraph">Just like the journalists who covered this story for Al Jazeera, the user is tasked with collecting as much information as possible in a limited amount of time by contacting activists, hackers an coders. In doing so, they face a number of decisions, including whether or not they should pay hackers for vital information, when they should go undercover online and whether they will allow interviewees to disguise thei identity to keep them safe. Most crucially, the players must avoid being hacked themselves. All hacks in the app, whether they involve avatars or blackmailers, are based on real hacks that have actually taken place during Syria's cyber war.</p>

                        <p class="tpr-article-content__paragraph">We've had an amazing time working alongside the creator of the app, award-winning senior Al Jazeera correspondent, Juliana Ruhfus. The project is based on a People &amp; Power documentary of the same name and is the follow-up to Ruhfus' ground-breaking and award-winning interactive investigation, Pirate Fishing. This innovative new project continues Al Jazeera English's quest to present its programming content in innovative ways to reaches new audiences.</p>
                        
                        <img 
                            data-sizes="auto" 
                            data-srcset="
                                ../assets/images/news/aljezeera2-news_400w.jpg 400w, 
                                ../assets/images/news/aljezeera2-news.jpg"
                            data-src="../assets/images/news/aljezeera2-news.jpg" 
                            src="../assets/images/news/aljezeera2-news-preview.jpg"
                            alt="Reporter standing with a cameraman" class="lazyload tpr-article-content__image">

                         <p class="tpr-article-content__paragraph">#HACKED: Syria's Electronic Armies is a web app scaled for use on mobile phones but can be played on all devices with an internet connection.</p>

                         <p class="tpr-article-content__paragraph">Visit: <a class="tpr-article-content__link" href="http://www.syhacked.com/" target="_blank" rel="nofollow noopener">www.syhacked.com</a></p>
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