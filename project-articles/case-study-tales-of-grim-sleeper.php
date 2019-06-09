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
                <h1 class="tpr-blue-bar__content">Case Study: Tales of the Grim Sleeper</h1>
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
                                ../assets/images/projects/tales-of-the-grim-sleeper-med.jpg 800w, 
                                ../assets/images/projects/tales-of-the-grim-sleeper-lrg.jpg"
                            data-src="../assets/images/projects/tales-of-the-grim-sleeper-med.jpg"
                            src="../assets/images/projects/tales-of-the-grim-sleeper-preview.jpg" 
                            alt="Director Nick Broomfield and contributor Pam in foreground driving a car" class="lazyload tpr-article-content__image"
                        >
                        <h2 class="tpr-article-content__subtitle">About: </h2>
                        <h3 class="tpr-article-content__details">Production Company: HBO Documentary Films, in association with Sky Atlantic & Lafayette Films</h3>
                        
                        <h3 class="tpr-article-content__details">Date: February to March 2015</h3>
                        
                        <p class="tpr-article-content__paragraph">Legendary British filmmaker Nick Bromfield’s documentary, Tales of the Grim Sleeper, looks at the arrest of
                        Lonnie Franklin Jr in July 2010 after a 25-year killing spree in which it is thought he could have killed over 100
                        women, potentially making him the most prolific serial killer in history.</p>
                        <p class="tpr-article-content__paragraph">tSignificantly his arrest was not the product of painstaking detective work but completely accidental, the result of a
                        computer DNA match that linked him to a possible 20 victims. Tales of the Grim Sleeper looks into how it was
                        possible for this to happen, investigating the shocking levels of official neglect for African-Americans in the US
                        today.</p>
                        <h2 class="tpr-article-content__subtitle">Project: </h2>
                        <p class="tpr-article-content__paragraph">tpr media were approached to coordinate a publicity campaign around the UK nationwide theatrical release across cities
                        including London, Bristol, Norwich, Liverpool, Oxford, Canterbury, Glasgow and Ipswich at cinemas including Curzon and
                        Picturehouse branches. Our strategy was both national and regional, resulting in features in the Guardian,
                            Telegraph and The Sun, alongside TV and radio interviews with a wide range of regional titles.</p>
                        
                        
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