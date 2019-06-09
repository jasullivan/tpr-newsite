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
                <h1 class="tpr-blue-bar__title">Case Study: Newstag</h1>
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
                                ../assets/images/projects/newstag-lady-med.jpg 800w, 
                                ../assets/images/projects/newstag-lady-lrg.jpg"
                            data-src="../assets/images/projects/newstag-lady-med.jpg"
                            src="../assets/images/projects/newstag-lady-preview.jpg" 
                            alt="Graphic illustration in silhouette of a woman" class="lazyload tpr-article-content__image"
                        >
                        <h2 class="tpr-article-content__subtitle">About:</h2>  
                        
                        <h3 class="tpr-article-content__details">Date: 2012</h3>

                        
                        
                        <p class="tpr-article-content__paragraph">Newstag is a crowd-curated video news service that gives users the opportunity to watch professionally-produced international news stories, create their own news agenda and share stories on social media platforms. By watching and sharing the news, users earn points which they can use to make a real change in the world by supporting causes and research. tpr media has been managing an ongoing publicity campaign for Newstag since 2012.</p>

                        <p class="tpr-article-content__paragraph">Due to the new and innovative nature of Newstag, from the start we’ve invested in building relationships with targeted key contacts, focusing on TV, technical trade and relevant consumer media.</p>

                        <p class="tpr-article-content__paragraph">Where possible, we’ve briefed journalists face-to-face in order to personalise, demystify and demonstrate the platform. This process has been time-intense, but effective, as a June 2014 press trip to Sweden with Holly Ashford (TVB Europe) and Juliana Koranteng (freelance, TechMutiny & MediaTainment) demonstrated. The trip generated a number of nuanced pieces with an in-depth understanding of the platform, providing a strong foundation from which to build publicity in the run-up to launch.</p>

                        <p class="tpr-article-content__paragraph">Publicity highlights have included an article for the Telegraph by mobile, digital and technology expert Monty Munford about disruptive changes for news publishing and content; a large online feature on Journalism.com, the premiere outlet for working journalists in the UK, which described Newstag as “a new model for hyper-personalised video”; and a Cannes Lions feature about innovators in advertising.</p>

                        <p class="tpr-article-content__paragraph">Alongside traditional publicity activities, we have acted as media supporter, arranging meetings with like-minded companies and prospective partners, helping Henrik and Camilla to build relationships as the Newstag platform has grown.</p>

                        <p class="tpr-article-content__paragraph">This strand of our work has included outreach to influential writers and commentators at academic institutions too, such as Nic Newman, Digital Media Product Strategist at the Reuters Institute.</p>
                        
                        
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