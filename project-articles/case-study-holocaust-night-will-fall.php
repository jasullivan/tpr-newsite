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
                <h1 class="tpr-blue-bar__content">Case Study: Holocaust – Night Will Fall</h1>
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
                                ../assets/images/projects/holocaust-night-will-fall-med.jpg 800w, 
                                ../assets/images/projects/holocaust-night-will-fall-lrg.jpg"
                            data-src="../assets/images/projects/holocaust-night-will-fall-med.jpg"
                            src="../assets/images/projects/holocaust-night-will-fall-preview.jpg" 
                            alt="Close-up black and white picture of a soldier holding a film-camera from the 1940s" class="lazyload tpr-article-content__image"
                        >
                        <h2 class="tpr-article-content__subtitle">About:</h2>  
                        <h3 class="tpr-article-content__details">Client: Spring Films & Angel TV</h3>
                        <h3 class="tpr-article-content__details">Channel: Channel 4</h3>
                        <h3 class="tpr-article-content__details">Date: January 2015</h3>
                        <p class="tpr-article-content__paragraph">Holocaust: Night Will Fall is André Singer’s powerful documentary about the liberation of the Nazi concentration camps and how combat and newsreel cameramen filmed the almost unbelievable scenes encountered there. Acclaimed by the 2014 Sheffield Doc/Fest jury, this deeply moving film ‘reveals the power of documentary and why it matters.</p>
                        <p class="tpr-article-content__paragraph">When Allied forces liberated the Nazi concentration camps in 1944-45, their terrible discoveries revealed for the first time the full horror of what had happened. Making use of British, Soviet and American footage, the Ministry of Information’s Sidney Bernstein (later founder of Granada Television) aimed to create a documentary that would provide lasting, undeniable evidence of the Nazis’ unspeakable crimes. He commissioned a wealth of British talent, including writer and future cabinet minister Richard Crossman – and, as treatment advisor, his friend Alfred Hitchcock.</p>
                        <p class="tpr-article-content__paragraph">Yet, despite initial support from the British and US Governments, the film was shelved before it could be completed. It was considered too sensitive for the rapidly changing political climate as reconciliation with Germany was now imperative and the Soviet Union was emerging as a new post-war enemy.</p>
                        <p class="tpr-article-content__paragraph">70 years later, on the anniversary of the liberation of the concentration camps, tpr media were commissioned to coordinate a publicity campaign around Channel 4’s broadcast, part of a coordinated screening of the feature-length documentary across Europe and around the world, including the US, Israel and Japan, with 15 other broadcasters.</p>
                        <p class="tpr-article-content__paragraph">Our coverage included a feature in the Guardian on the impact of the images in Holocaust: Night Will Fall, an article in the Jewish Chronicle and an interview with André Singer on BBC’s World Service’s Weekend programme. Channel 4’s consolidated viewing figures reached 2 million.</p>

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