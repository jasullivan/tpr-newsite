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
    <?php include '../sub-navigation.php'; ?>
    <!-- navbar -->

    <article role="article">
        <!-- blue header bar -->
        <header class="container-fluid pt-4">
            <div class="tpr-blue-bar">
                <h1 class="tpr-blue-bar__title">Raindance</h1>
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
                                ../assets/images/projects/raindance-film-festival-med.jpg 800w, 
                                ../assets/images/projects/raindance-film-festival-lrg.jpg"
                            data-src="../assets/images/projects/raindance-film-festival-med.jpg"
                            src="../assets/images/projects/raindance-film-festival-preview.jpg" 
                            alt="Poster of woman holding a camera for Raindance Film Festival" class="lazyload tpr-article-content__image"
                        >
                        <h2 class="tpr-article-content__subtitle">About:</h2>  
                        <h3 class="tpr-article-content__details">Client: Raindance Film Festival</h3>
                        <h3 class="tpr-article-content__details">Date: 2011</h3>

                        
                        
                        <p class="tpr-article-content__paragraph">Raindance is Europe’s leading independent film festival.</p>
                        <h2 class="tpr-article-content__subtitle">Project: </h2>
                        <p class="tpr-article-content__paragraph">tpr media promoted a programme of feature length films, shorts and documentaries in what was a sell-out festival. We positioned Raindance as genuinely offering an alternative film programme through coverage online, in print and TV and radio. We also managed talent, arranged photo-calls and liaised with film companies. Coverage ranged from a G2 front cover and Little White Lies to the Evening Standard and Time Out.</p>
                        
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