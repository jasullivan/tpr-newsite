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
                <h1 class="tpr-blue-bar__title">The BAFTAS – in the Best Possible Taste.</h1>
            </div>
        </header>
        <!-- blue header bar -->

        <!-- next and prev buttons -->
        <div class="container">
            <div class="row">
                <div class="col-11 col-lg-9 mx-auto">
                    <div class="next-prev-buttons pt-4">
                        <a href="the-mill" class="next-prev-buttons__prev">
                            <span class="icon-arrowLeft"></span>previous
                        </a>
                        <a href="busy-week-at-tpr" class="next-prev-buttons__next">
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

                        <p class="tpr-article-content__paragraph">The BAFTA TV awards took place a short while ago. We were lucky enough to work on two of the winning shows – All in the Best Possible Taste with Grayson Perry which won Specialist Factual, and Murder, which won Single Drama.</p>

                        <p class="tpr-article-content__paragraph">Working on Murder was a fantastic chance to see what the combination of powerful writing, strong direction and a talented cast can achieve. Directed by The Killing’s Birger Larsen, it subverted the usual television detective dramas, with the suspects speaking directly to camera, creating a sense of involvement and immediacy rarely seen in TV. It was fantastic news to hear that a series had been commissioned, and that it would return to the BBC in 2014/5.</p>

                        <p class="tpr-article-content__paragraph">Having worked on documentaries for almost 20 years, All in the Best Possible Taste with Grayson Perry stands out as one of the most interesting that tpr media has been involved in. The three-part series followed Turner Prize-winning artist Grayson Perry as he looked at the relationship between class and taste in England: working class, middle class and upper class. It was truly eye-opening, and well deserved its BAFTA win.</p>

                        <p class="tpr-article-content__paragraph">The biggest story of the night, however, was Olivia Colman's double win – best female in a comedy programme for Twenty Twelve, and best supporting actress for Accused. As with many industries, women are still under-represented in television, but they were out in force at the BAFTAs, with Girls winning best international programme.</p>

                        <p class="tpr-article-content__paragraph">As always, the BAFTA awards were a reminder of the power that television still has to entertain and move. As more and more people gravitate towards the internet to watch films, programmes and digest the news, it was heartening to see an evening that celebrates the role that television still plays.</p>

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