<?php
	// CHANGE THE $NAV_CLASS VARIABLE TO HOME OR ABOUT AND SEE THAT IT CHANGES WHICH LI IS ACTIVE
	$nav_class = 'nav-projects';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><link rel="shortcut icon" type="image/png" href="../assets/images/tpr-favicon.png">
    <title>tpr media | Projects</title>
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
    <?php include 'sub-navigation.php'; ?>
    <!-- navbar -->

    <article role="article">
        <!-- blue header bar -->
        <header class="container-fluid pt-4">
            <div class="tpr-blue-bar">
                <h1 class="tpr-blue-bar__content">Case Study: Justice for Health</h1>
            </div>
        </header>
        <!-- blue header bar -->

        <!-- article content -->
        <div class="container">
            <div class="row">
                <div class="col-9 mx-auto">
                    <div class="tpr-article-content">
                        <img 
                            data-sizes="auto"
                            data-srcset="
                                ../assets/images/projects/justice-for-health-med.jpg 800w, 
                                ../assets/images/projects/justice-for-health-lrg.jpg"
                            data-src="../assets/images/projects/justice-for-health-med.jpg"
                            src="../assets/images/projects/justice-for-health-preview.jpg" 
                            alt="Five Junior Doctors standing in a row in front of the Royal Courts of Justice" class="lazyload tpr-article-content__image"
                        >
                        <h2 class="tpr-article-content__subtitle">About: </h2>
                        <h3 class="tpr-article-content__details">Date: From March – July 2015</h3>
                        
                        <p class="tpr-article-content__paragraph">Justice for Health is led by an independent group of five NHS doctors, speaking out on behalf of the public and brought
                        together by their passion for a safer and better NHS. Dr Ben White, Dr Marie-Estella McVeigh, Dr Amar Mashru, Dr Fran
                        Silman and Dr Nadia Masood all believe that the imposition of an unsafe contract for junior doctors must be stopped as
                        it will endanger patient safety and affect the future of the NHS.</p>
                        <p class="tpr-article-content__paragraph">tpr media were appointed by Justice for Heath, to lead a press campaign to support a legal challenge against the new
                        junior doctors' contracts. This judicial review process formed part of the ongoing challenge by junior doctors
                        nationwide.</p>
                        <p class="tpr-article-content__paragraph">tpr's far reaching campaign began with the resignation of Dr Ben White live on Good Morning Britain on Monday
                        25 April, the day before the first-ever all-out strike by junior doctors. Ben resigned in protest over the new junior
                        doctor contracts and the impact they would have on patient care and the future of the NHS. His resignation became the
                        key human-interest story of the week. He appeared again twice on Good Morning Britain. Other broadcast
                        interviews included ITN, BBC London Lunchtime News, London Live, ITV National News, the Jeremy
                            Vine Show and LBC.</p>
                        <p class="tpr-article-content__paragraph">Ben's resignation was covered by most national titles as part of the wider junior doctor strike coverage, as well as
                        the Standard and several online outlets including The Huffington Post, Buzzfeed and Vice.
                        Open letters by the Justice for Health team ran in The Telegraph, The Mirror and the Standard. tpr
                        media's longer-term aim was to help the Justice for Health team identify key stories that tie into wider issues about
                        the NHS.</p>
                        
                    </div>
                </div>
            </div>
            
        </div>
        <!-- article content -->
    </article>

    <!-- footer -->
    <?php include 'sub-footer.php'; ?>
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