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
                <h1 class="tpr-blue-bar__title">Case Study: Last Whites of the East End</h1>
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
                                ../assets/images/projects/last-whites-of-the-east-end-med.jpg 800w, 
                                ../assets/images/projects/last-whites-of-the-east-end-lrg.jpg"
                            data-src="../assets/images/projects/last-whites-of-the-east-end-med.jpg"
                            src="../assets/images/projects/last-whites-of-the-east-end-preview.jpg" 
                            alt="Close-up of Peter Bell, Manager of East Ham Working Men’s Club" class="lazyload tpr-article-content__image"
                        >

                        <h2 class="tpr-article-content__subtitle">Project: </h2>
                        <h3 class="tpr-article-content__details">Production Company: Lambent Productions</h3>
                        <h3 class="tpr-article-content__details">Channel: BBC One</h3>
                        <h3 class="tpr-article-content__details">Date: May 2016</h3>
                        
                        <p class="tpr-article-content__paragraph">In the usual heady rush of TV scheduling, we were contacted at the last minute – just two weeks before transmission –
                        to promote the thoughtful and provocative documentary Last Whites of the East End.</p>
                        <p class="tpr-article-content__paragraph">This revealing documentary looked at contemporary Britain and the impact of immigration on one long-standing community
                        – the East End cockneys. With the European referendum looming and immigration at the top of the agenda, the challenge
                        was to create a thoughtful campaign that acknowledged the complexities lying beneath the surface of this story – a
                        portrait of this tight-knit community, and what is driving them to leave.</p>

                        <p class="tpr-article-content__paragraph">Journalists from the Daily Telegraph  and the Daily Mail  invested a lot of time and energy visiting
                        the area and speaking to contributors first-hand resulting in thoughtful features that raised important questions. The
                        debate on radio and TV was similarly open and informed. On BBC London’s Vanessa Feltz Show  callers spoke about
                        sweeping changes taking place across the city – from Bromley to Brixton, not just in Newham. Feltz noted that her own
                        grandparents moved from the East End to the suburbs. Meanwhile contributor Usmaan – whose family has lived in the East
                        London for five generations – spoke on Eddie Nestor’s Drive Time  show about his real concern that the cockney
                        way of life would vanish.</p>
                        
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