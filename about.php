<?php
	// CHANGE THE $NAV_CLASS VARIABLE TO HOME OR ABOUT AND SEE THAT IT CHANGES WHICH LI IS ACTIVE
	$nav_class = 'nav-about';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><link rel="shortcut icon" type="image/png" href="assets/images/tpr-favicon.png">
    <title>tpr media &#124; About</title>
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
            <h1 class="tpr-blue-bar__title">Media relations, event management and strategic consultancy to branding.</h1> <p class="tpr-blue-bar__content">tpr media is a London-based communications agency committed to creating intelligent campaigns for the creative industries and projects with a social impact. We are passionate about compelling story telling and love to stimulate conversation and debate, offering profile and positioning that sets our clients apart from the crowd.</p>
        </div>
    </div>
    <!-- blue header bar -->

    <!-- team gallery section -->
    <main class="container" role="main">
        <div class="row px-5 pt-5">
            <div class="col-md-4 px-2">
                <div class="tpr-team-member" data-toggle="modal" data-target="#teammember-sophie">
                    <div class="tpr-team-member__overlay"></div>
                    <h2 class="tpr-team-member__name">Sophie Toumazis</h2>
                    <h3 class="tpr-team-member__title">Director</h3>
                    <img src="./assets/images/team/portrait_sophie.jpg" alt="" class="tpr-team-member__picture">
                </div>
            </div>
            <div class="col-md-4 px-2">
                <div class="tpr-team-member" data-toggle="modal" data-target="#teammember-eleanor">
                    <div class="tpr-team-member__overlay"></div>
                    <h2 class="tpr-team-member__name">Eleanor Robertson</h2>
                    <h3 class="tpr-team-member__title">Senior Account Manager</h3>
                    <img src="./assets/images/team/portrait_eleanor.jpg" alt="" class="tpr-team-member__picture">
                </div>
            </div>
            <div class="col-md-4 px-2">
                <div class="tpr-team-member" data-toggle="modal" data-target="#teammember-hannah">
                    <div class="tpr-team-member__overlay"></div>
                    <h2 class="tpr-team-member__name">Hannah Maule-Finch</h2>
                    <h3 class="tpr-team-member__title">Photographer</h3>
                    <img src="./assets/images/team/portrait_hannah.jpg" alt="" class="tpr-team-member__picture">
                </div>
            </div>
        </div>
        <!-- <div class="row tpr-team px-5 pb-3">
            <div class="col-md-4 mr-auto px-2">
                <div class="tpr-team-member" data-toggle="modal" data-target="#teammember-hannah">
                    <div class="tpr-team-member__overlay"></div>
                    <h2 class="tpr-team-member__name">Hannah Maule-Finch</h2>
                    <h3 class="tpr-team-member__title">Photographer</h3>
                    <img src="./assets/images/team/portrait_hannah.jpg" alt="" class="tpr-team-member__picture">
                </div>
            </div>
        </div> -->
    </main>

    <!-- modals -->
    <div class="modal fade tpr-team-modal" id="teammember-sophie" tabindex="-1" role="dialog" aria-labelledby="tprTeamMemberModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <section class="modal-content">
                <div class="modal-header tpr-team-modal__header">
                    <h2 class="modal-title tpr-team-modal__title">Sophie Toumazis</h2>
                    <button type="button" class="close tpr-team-modal__close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <img src="./assets/images/team/portrait_sophie.jpg" alt="" class="tpr-team-modal__picture mt-4">
                <div class="modal-body text-center">
                    <p class="text-center px-5 py-4">Founder and Director, Sophie Toumazis, has over 25 years PR experience. Career highlights before include launching BBC
                    Radio 5 and running the press office at the BBC World Service where she coordinated international campaigns in Russia
                    and across Eastern Europe. Since setting up tpr, Sophie's client list has included Channel 4 and the BBC, More 4,
                    Associated Press, Reuters, RSA, BRITDOC, dozens of production companies and Raindance, Europe’s foremost independent
                    film festival. tpr has a strong track-record in running campaigns that engage in the cultural and news agenda.</p>
                </div>
            </section>
        </div>
    </div>
    <div class="modal fade tpr-team-modal" id="teammember-eleanor" tabindex="-1" role="dialog" aria-labelledby="tprTeamMemberModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <section class="modal-content">
                <div class="modal-header tpr-team-modal__header">
                    <h2 class="modal-title tpr-team-modal__title">Eleanor Robertson</h2>
                    <button type="button" class="close tpr-team-modal__close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <img src="./assets/images/team/portrait_eleanor.jpg" alt="" class="tpr-team-modal__picture mt-4">
                <div class="modal-body text-center">
                    <p class="text-center px-5 py-4">Senior Account manager, Eleanor Robertson, is a multi-media professional who has been working with tpr media for four
                    years. Having cut her teeth in fashion and food and drink PR, since joining tpr she has worked on dozens of
                    documentaries including Nick Broomfield's Tales of the Grim Sleeper, she has run a number of campaigns for Japan's
                    Public Service broadcaster NHK WORLD TV who are seeking to raise the profile of their documentaries in the UK. She is a
                    talented writer and passionate communications expert.</p>
                </div>
            </section>
        </div>
    </div>
    <!-- <div class="modal fade tpr-team-modal" id="teammember-frankie" tabindex="-1" role="dialog" aria-labelledby="tprTeamMemberModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <section class="modal-content">
                <div class="modal-header tpr-team-modal__header">
                    <h2 class="modal-title tpr-team-modal__title">Francesca Chater</h2>
                    <button type="button" class="close tpr-team-modal__close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <img src="./assets/images/team/portrait_frankie.jpg" alt="" class="tpr-team-modal__picture mt-4">
                <div class="modal-body text-center">
                    <p class="text-center px-5 py-4">Francesca Chater has been an Account Manager at tpr media since July 2015 and has helped to coordinate a range of
                    event-based projects, including a screening at the Curzon Bloomsbury and an interactive workshop at Hyper Japan for
                    Japan’s NHK World TV. She is passionate about documentaries and projects with a social impact and took a hands-on
                    approach to creating conversation around the launch of a ground-breaking peer-to-peer community dementia scheme backed
                    by the NHS. Francesca also helped to coordinate media relations for Justice for Health, a campaign run by five junior
                    doctors which challenged Jeremy Hunt’s imposition of a contract on junior doctors through a judicial review. Francesca
                    studied at Sussex University and has an MA in Human Rights.</p>
                </div>
            </section>
        </div>
    </div> -->
    <div class="modal fade tpr-team-modal" id="teammember-hannah" tabindex="-1" role="dialog" aria-labelledby="tprTeamMemberModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <section class="modal-content">
                <div class="modal-header tpr-team-modal__header">
                    <h2 class="modal-title tpr-team-modal__title">Hannah Maule-Finch</h2>
                    <button type="button" class="close tpr-team-modal__close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <img src="./assets/images/team/portrait_hannah.jpg" alt="" class="tpr-team-modal__picture mt-4">
                <div class="modal-body text-center">
                    <p class="text-center px-5 py-4">Hannah Maule-Finch is an award-winning freelance photographer. Her varied career began in graphic design before an expedition to Colombia inspired her to pursue photography. She later trained as a photojournalist and having become established as an experienced and versatile photographer, she executed a wide range of commissions; her work has taken her from tiny Liberian villages to celebrity photo shoots where she has photographed the likes of Sir Bob Geldof, Rhys Ifans, and Kevin Bacon. Hannah exhibits her work in both London and New York.</p>
                </div>
            </section>
        </div>
    </div>
    <!-- modals -->
    <!-- team gallery section -->

    <!-- team info -->
    <div class="container">
        <div class="row">
            <div class="col-11 mx-auto mt-3">
                <p class="text-center">Our contacts book is our strongest asset. We have extensive knowledge of the media industries and strong, meaningful
                relationships with influential journalists across consumer print, TV and radio, trade press and online. We've spent
                nearly two decades identifying and building connections with the most talented and trusted writers and broadcasters in
                the UK and overseas and the high quality of the work we promote means that journalists are highly receptive to our
                projects.</p>
                <p class="text-center pt-3">Alongside media relations, our team has the experience and expertise to support your project with a wide range of
                marketing tools:</p>
            </div>
        </div>
        <div class="row pb-5">
            <div class="col-md-4 ml-auto">
                <ul class="text-center py-3">
                    <li>PR consulting</li>
                    <li>Marketing strategy</li>
                    <li>Marketing communication</li>
                    <li>Profile building</li>
                    <li>Issue &amp; crisis management</li>
                    <li>Media training</li>
                    <li>Event planning and management</li>
                    <li>Client representation</li>
                    <li>Internal communications</li>
                </ul>
            </div>
            <div class="col-md-4 mr-auto">
                <ul class="text-center py-3">
                    <li>PR consulting</li>
                    <li>Marketing strategy</li>
                    <li>Marketing communication</li>
                    <li>Profile building</li>
                    <li>Issue &amp; crisis management</li>
                    <li>Media training</li>
                    <li>Event planning and management</li>
                    <li>Client representation</li>
                    <li>Internal communications</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- team info -->

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