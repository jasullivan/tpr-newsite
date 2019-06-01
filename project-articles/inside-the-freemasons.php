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

    <article>
        <!-- blue header bar -->
        <header class="container-fluid pt-4">
            <div class="tpr-blue-bar">
                <h1 class="tpr-blue-bar__content">Inside The Freemasons</h1>
            </div>
        </header>
        <!-- blue header bar -->

        <!-- article content -->
        <div class="container">
            <div class="row">
                <div class="col-9 mx-auto">
                    <div class="tpr-article-content">
                        <img data-sizes="auto" data-src="../assets/images/projects/inside-the-freemasons.jpg" src="../assets/images/projects/inside-the-freemasons-preview.jpg"
                            data-srcset="../assets/images/projects/inside-the-freemasons_400w.jpg 400w, ../assets/images/projects/inside-the-freemasons.jpg 800w"
                            alt="Five freemasons dressed in full regalia and holding Masonic artefacts" class="lazyload tpr-article-content__image">

                        <h3 class="tpr-article-content__details">Production Company: Emporium Productions</h3>
                        <h3 class="tpr-article-content__details">Channel: Sky 1</h3>
                        <h3 class="tpr-article-content__details">Date: 10/2016–05/2017</h3>
                        <h2 class="tpr-article-content__subtitle">About: </h2>
                        <p class="tpr-article-content__paragraph">Inside The Freemasons is a five-part documentary for Sky 1 that seeks to discover the truth behind the ancient rituals
                        and closely-guarded practices of the world’s oldest social network, taking viewers exclusively behind the scenes in the
                        run up to its 300th anniversary in 2017.</p>
                        <h2 class="tpr-article-content__subtitle">Project: </h2>
                        <p class="tpr-article-content__paragraph">To raise the profile and drive viewers to this observational documentary series which negotiated unprecedented access
                        to one of the world’s most secretive organisations. To coordinate mainstream campaign with broad-based appeal,
                        achieving coverage on TV sofas and in publications ranging from The Sunday Times to the Telegraph; the Mail to the Sun.</p>
                        
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