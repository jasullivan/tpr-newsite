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
                <h1 class="tpr-blue-bar__title">Busy week at tpr</h1>
            </div>
        </header>
        <!-- blue header bar -->

        <!-- next and prev buttons -->
        <div class="container">
            <div class="row">
                <div class="col-11 col-lg-9 mx-auto">
                    <div class="next-prev-buttons pt-4">
                        <a href="the-baftas-in-the-best-possible-taste" class="next-prev-buttons__prev">
                            <span class="icon-arrowLeft"></span>previous
                        </a>
                        <a href="this-week-at-tpr" class="next-prev-buttons__next">
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

                        <p class="tpr-article-content__paragraph">It's been a great summer for drama at tpr – The Mill's final episode hit the nation's screens. The serial was met with fantastic, if not record-breaking viewing figures. This success was followed by more success as we saw the return of Top Boy this week, although we were able to see a sneak peak at the BFI's preview screening, which had such an overwhelming turn out and positive feedback!</p>

                        <p class="tpr-article-content__paragraph">There has been a huge build up to The Mill, and we could hardly wait to see what everyone thought. It was great to see that people loved it as much as we did – with a consolidated figure of 3.8 million viewers for episode one, the highest rated drama opening on Channel 4 since This Is England three years ago. The weekend's papers were full of fantastic previews, features, even a style piece suggesting home and fashion pieces inspired by the show.</p>

                        <p class="tpr-article-content__paragraph">This has been such a rich project, we are sad to see it go, with the historic archive at Quarry Bank providing this depth and the inspirational stories of the apprentices.</p>

                        <p class="tpr-article-content__paragraph">On Tuesday Top Boy returned to our screens with the start of the second series – although we had a sneak peak when it hit the big screen and BFI's TV preview; where we were joined by its stars Ashley Walters, Kane Robinson, Lorraine Burroughs and director Jonathan van Tulleken. Following the success of series one there was such an overwhelming turnout, including Top Boy's biggest fan Gemma Cairney (BBC Radio 1 DJ), who hosted an excellent and insightful Q&A with Ashley, Kane and Jonathan. Top Boy series one was compared to the US hit series the Wire – and this continues with series 2 as seen on the front cover of <a class="tpr-article-content__link" href="http://www.thetimes.co.uk/tto/arts/tv-radio/article3841905.ece" target="_blank" rel="noopener">The Times</a> – providing a "slice of life" drama of the reality of Hackney.</p>

                        <p class="tpr-article-content__paragraph">Top Boy filled the big screen, with series two's huge cinematic shots, doing the amazing panoramic views of London justice. The press that joined us were from such a variety of outlets, it was great to see that so many shared the same passion and loyalty to Top Boy as we do. It is fascinating to see the progression of each characters and the storyline, in a way that stayed true to reality – not without the extensive research of the writer Ronan Bennett and director Jonathan van Tulleken and the input of the cast. In the week building up to the start of Top Boy there have been some fantastic features, not only focusing on the adults but the younger cast in <a class="tpr-article-content__link" href="http://www.theguardian.com/tv-and-radio/2013/aug/18/top-boy-second-series" target="_blank" rel="noopener">The Observer</a> on Sunday.  Top Boy series 2 has begun on Channel 4, we hope you all enjoy it!</p>

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