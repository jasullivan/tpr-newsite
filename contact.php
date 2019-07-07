<?php
	// CHANGE THE $NAV_CLASS VARIABLE TO HOME OR ABOUT AND SEE THAT IT CHANGES WHICH LI IS ACTIVE
	$nav_class = 'nav-contact';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><link rel="shortcut icon" type="image/png" href="assets/images/tpr-favicon.png">
    <title>tpr media | Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" media="screen" href="./assets/styles/css/style.css" />
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />

    
</head>
<body>
    <!-- navbar -->
    <?php include 'navigation.php'; ?>
    <!-- navbar -->

    <!-- blue header bar -->
    <div class="container-fluid pt-4">
        <div class="tpr-blue-bar">
            <h1 class="tpr-blue-bar__title">We want to help you amplify your message.</h1>
            <p class="tpr-blue-bar__content">So get in touch if you’ve got a project that we could help with. We enjoy meeting new people and we’re always happy to chat ideas through over a coffee.</p>
        </div>  
    </div>
    <!-- blue header bar -->

    <!-- contact details section -->
    <div class="container">
        <div class="row">
            <div class="col-md-5 mx-auto py-5">
                <ul class="tpr-statement-text">
                    <li><span class="tpr-statement-text--highlight">tpr media</span> consultants</li>
                    <li>3 Muswell Hill Road</li>
                    <li>London</li>
                    <li>N6 5FJ</li>
                    <li class="tpr-statement-text__tel"><a href="tel:02083477020">+44 (0) 20 8347 7020</a></li>
                    <li><a href="mailto:sophie@tpr-media.com">sophie@tpr-media.com</a></li>
                </ul>
            </div>
        </div>
    </div>
    <!--  contact details  section -->

    <!-- google map section -->
    <div class="container pb-5">
        <iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2479.4570235687374!2d-0.1499237842274235!3d51.578186779646856!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48761a360290a221%3A0x1a4baafb37a0e7ae!2sMuswell+Hill+Rd%2C+Highgate%2C+London+N6+5FJ!5e0!3m2!1sen!2suk!4v1549378501510" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <!--  google map section -->

    <!-- testimonials -->
    <?php include 'testimonials.php'; ?>
    <!-- testimonials -->

    <!-- footer -->
    <?php include 'footer.php'; ?>
    <!-- footer -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="./assets/js/carousels.js"></script>
    <script src="./assets/js/script.js"></script>

</body>
</html>