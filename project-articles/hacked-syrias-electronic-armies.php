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
                <h1 class="tpr-blue-bar__title">#HACKED: Syria's Electronic Armies</h1>
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
                                ../assets/images/projects/hacked-med.jpg 800w, 
                                ../assets/images/projects/hacked-lrg.jpg"
                            data-src="../assets/images/projects/hacked-med.jpg"
                            src="../assets/images/projects/hacked-preview.jpg" 
                            alt="Screen grabs of the web-based app #HACKED" class="lazyload tpr-article-content__image"
                        >
                        <h2 class="tpr-article-content__subtitle">About: </h2>
                        <h3 class="tpr-article-content__details">Client: Al Jazeera</h3>
                        <h3 class="tpr-article-content__details">Date: 09/2016–11/2016</p>
                        
                        <p class="tpr-article-content__paragraph">In the run up to its 10th anniversary in November 2016 Al Jazeera English announced the launch of an interactive mobile
                        web-based app #HACKED: Syria’s Electronic Armies, which takes the user deep inside the country’s cyber war, a conflict
                        that has proven it can be just as deadly as the ground war.</p>
                        <h2 class="tpr-article-content__subtitle">Project: </h2>
                        <p class="tpr-article-content__paragraph">#HACKED was based on a People &amp; Power documentary of the same name by senior Al Jazeera correspondent, Juliana
                        Ruhfus, but presents the film’s investigative journalism in a game format, targeting a younger, mobile generation that
                        increasingly shuns traditional news websites. Working with a social media specialist, we targeted tech sites and
                        national technology correspondents as well gaming editors and bloggers. We also joined the debate about engaging young
                        people in the changing media landscape by putting forward Juliana Ruhfus as an expert panellist and media interviewee.</p>
                        
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