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
                <h1 class="tpr-blue-bar__title">This week at tpr...</h1>
            </div>
        </header>
        <!-- blue header bar -->

        <!-- next and prev buttons -->
        <div class="container">
            <div class="row">
                <div class="col-11 col-lg-9 mx-auto">
                    <div class="next-prev-buttons pt-4">
                        <a href="busy-week-at-tpr" class="next-prev-buttons__prev">
                            <span class="icon-arrowLeft"></span>previous
                        </a>
                        <a href="ars-est-celare-artem-the-art-is-to-conceal-the-art" class="next-prev-buttons__next">
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

                        <p class="tpr-article-content__paragraph">With Top Boy's penultimate episode of the second series tonight, it has been amazing to see it be met with as much excitement and enthusiasm as the first series – there has been an overwhelming response, with positive reviews continuing over the weekend. It held up its own against TV slot rival – The Great British Bake Off, with albeit little crossover of audience (although Kane Robinson's <a class="tpr-article-content__link" href="https://twitter.com/TheRealKano/status/369925238932250626" target="_blank" rel="noopener">grandmother</a> was seen to enjoy it!)  reaching an impressive consolidated viewing figure of 1.6 million. Delving ever deeper into the lives of Summerhouse's residents, it is a realistic representation of lives in East London.</p>

                        <p class="tpr-article-content__paragraph">Following Top Boy we are now working on two fantastic documentaries. For our latest project we have recently teamed up with the BBC, taking an honest look at families which have been separated through divorce. With a third of British children living with only one biological parent, this simple but revealing film ventures into the heart of British family life to ask young people about their experience of their parents' breakup.</p>

                        <p class="tpr-article-content__paragraph">With Mum and Dad are Splitting Up airing Thursday (5,<sup>th</sup> September) it has been a short but no less rich project based on intimate interviews with both young people and their parents - often sat together and discussing the event for the first time. The director Olly Lambert sensitively draws out the complex feelings and secrets that took root in the family when mum and dad split up. With divided families becoming ever more present than the nuclear family this is a moving and surprisingly uplifting insight into the reality of modern family life, we really recommend you watch it!</p>

                        <p class="tpr-article-content__paragraph">The second documentary we are working on has been revealed at the Edinburgh TV Festival last week. Produced by The Garden Productions who brought us 24 Hours in A&E, The Maudsley takes an in-depth and unprecedented look at mental health in Britain today, with exclusive access to a wide range of services, patients and staff at the South London and Maudsley NHS Foundation Trust (SLaM).  Key to the series, filmed over a year, is giving a voice to those who suffer with mental illness, from people with psychosis or manic depression to those with severe anxiety. For, although a growing number of us will experience mental illness in our lifetime, the stigma remains. The Maudsley looks to challenge this stigma by addressing it head on – it really is a must see and is due to broadcast later this autumn.</p>

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