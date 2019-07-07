<?php
	// CHANGE THE $NAV_CLASS VARIABLE TO HOME OR ABOUT AND SEE THAT IT CHANGES WHICH LI IS ACTIVE
	$nav_class = 'nav-projects';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"><link rel="shortcut icon" type="image/png" href="assets/images/tpr-favicon.png">
    <title>tpr media | Projects</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
        crossorigin="anonymous">

    <!-- for progressive lazy load -->
    <!-- <link rel="stylesheet" href="./assets/styles/css/progressive-image.min.css">
    <script src="./assets/js/progressive-image.min.js"></script> -->
    <!-- for progressive lazy load -->
    <link rel="stylesheet" type="text/css" media="screen" href="./assets/styles/css/style.css" />
    <script src="./assets/js/lazysizes.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>
<body>
 
    <!-- navbar -->
    <?php include 'navigation.php'; ?>
    <!-- navbar -->

   
    <!-- blue header bar -->
    <div class="container-fluid pt-4">
        <div class="tpr-blue-bar">
            <h1 class="tpr-blue-bar__title">We believe that every project is special and that’s why we create bespoke, tailored campaigns.</h1>
            <p class="tpr-blue-bar__content"> From targeted publicity for film and programme launches, to corporate retainers from major international brands, we work closely with our clients to deliver the right campaign to support their business goals. Whether it’s driving audience figures or raising reputation and business profile, we provide creative, intelligent and effective communication campaigns that get noticed.</p>
        </div>  
    </div>
    <!-- blue header bar -->
    <div class="fadeLoad">
    <!-- MAIN (Center website) -->
    <div class="container">
        <div class="row px-md-5 pt-5">
            <div class="col-md-12">
                <div class="gallery-nav gallery-nav-filter">
                    <button class="gallery-nav__button is-checked" data-filter="*">All</button>
                    <button class="gallery-nav__button" data-filter=".casestudies">Case Studies</button>
                    <button class="gallery-nav__button" data-filter=".tvandfilm">TV &amp; Film</button>
                    <button class="gallery-nav__button" data-filter=".artsandculture">Arts &amp; Culture</button>
                    <button class="gallery-nav__button" data-filter=".technology">Technology</button>
                    <button class="gallery-nav__button" data-filter=".awardsandfestivals">Awards &amp; Festivals</button>
                    <button class="gallery-nav__button" data-filter=".socialimpact">Social Impact</button>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="grid mb-5 mt-3">
            <div class="gallery-item casestudies tvandfilm">
                <a href="project-articles/case-study-out-of-thin-air" class="gallery-item__details">
                    <p>Case Study: Out of Thin Air</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img    
                    data-src="./assets/images/gallery/out-of-thin-air-thumbnail.jpg" 
                    src="./assets/images/gallery/out-of-thin-air-thumbnail-preview.jpg"
                    alt="Black and white reconstruction of Icelandic crime scene" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm">
                <a href="project-articles/remember-baghdad" class="gallery-item__details">
                    <p>Remember Baghdad</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/remember-baghdad-thumbnail.jpg" src="./assets/images/gallery/remember-baghdad-thumbnail-preview.jpg"
                    alt="Coloured tinted skyline of Baghdad in the 1950s" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm">
                <a href="project-articles/accidental-anarchist" class="gallery-item__details">
                    <p>Accidental Anarchist</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/accidental-anarchist-thumbnail.jpg" src="./assets/images/gallery/accidental-anarchist-thumbnail-preview.jpg"
                    alt="Presenter Carne Ross standing in front of an anarchist mural" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm casestudies">
                <a href="project-articles/inside-the-freemasons" class="gallery-item__details">
                    <p>Inside the Freemasons</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/inside-the-freemasons-thumbnail.jpg" src="./assets/images/gallery/inside-the-freemasons-thumbnail-preview.jpg"
                    alt="Five freemasons dressed in full regalia and holding Masonic artefacts" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm socialimpact">
                <a href="project-articles/dementia-peer-support" class="gallery-item__details">
                    <p>Dementia Peer Support</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/dementia-peer-support-thumbnail.jpg" src="./assets/images/gallery/dementia-peer-support-thumbnail-preview.jpg"
                    alt="Older adult members holding hands and dancing in a circle" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm">
                <a href="project-articles/what-you-taught-me-about-my-son" class="gallery-item__details">
                    <p>What You Taught Me About My Son</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/what-you-taught-me-about-my-son-thumbnail.jpg" src="./assets/images/gallery/what-you-taught-me-about-my-son-thumbnail-preview.jpg"
                    alt="Front of the Curzon Bloomsbury cinema in London" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm artsandculture">
                <a href="project-articles/never-ending-man" class="gallery-item__details">
                    <p>Never-Ending Man: Hayao Miyazaki</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/never-ending-man-thumbnail.jpg" src="./assets/images/gallery/never-ending-man-thumbnail-preview.jpg"
                    alt="Animation master, Hayao Miyazaki, drawing by hand in his studio" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm">
                <a href="project-articles/inside-dior" class="gallery-item__details">
                    <p>Inside Dior</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/inside-dior-thumbnail.jpg" src="./assets/images/gallery/inside-dior-thumbnail-preview.jpg"
                    alt="Supermodel Bella Hadid on catwalk with other models" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm technology socialimpact">
                <a href="project-articles/hacked-syrias-electronic-armies" class="gallery-item__details">
                    <p>#HACKED: Syria’s Electronic Armies</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/hacked-thumbnail.jpg" src="./assets/images/gallery/hacked-thumbnail-preview.jpg"
                    alt="Screen grabs of the web-based app #HACKED" class="lazyload">
            </div>
            <div class="gallery-item casestudies tvandfilm">
                <a href="project-articles/case-study-last-whites-of-east-end" class="gallery-item__details">
                    <p>Case Study: Last Whites of the East End</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/last-whites-of-the-east-end-thumbnail.jpg" src="./assets/images/gallery/last-whites-of-the-east-end-thumbnail-preview.jpg"
                    alt="Close-up of Peter Bell, Manager of East Ham Working Men’s Club" class="lazyload">
            </div>
            <div class="gallery-item socialimpact">
                <a href="project-articles/born-to-be-different" class="gallery-item__details">
                    <p>Born To Be Different</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/born-to-be-different-thumbnail.jpg" src="./assets/images/gallery/born-to-be-different-thumbnail-preview.jpg"
                    alt="Five teenage participants photographed together" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm">
                <a href="project-articles/the-night-manager" class="gallery-item__details">
                    <p>The Night Manager</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/the-night-manager-thumbnail.jpg" src="./assets/images/gallery/the-night-manager-thumbnail-preview.jpg"
                    alt="Lead cast members of the Night Manager in luxury setting" class="lazyload">
            </div>
            <div class="gallery-item casestudies tvandfilm socialimpact">
                <a href="project-articles/case-study-no-fire-zone" class="gallery-item__details">
                    <p>Case Study: No Fire Zone - The Killing Fields of Sri Lanka</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/no-fire-zone-thumbnail.jpg" src="./assets/images/gallery/no-fire-zone-thumbnail-preview.jpg"
                    alt="Close-up of three female victims of Sri Lanka’s Civil War in extreme distress" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm">
                <a href="project-articles/building-the-ancient-city" class="gallery-item__details">
                    <p>Building The Ancient City</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/building-the-ancient-city-thumbnail.jpg" src="./assets/images/gallery/building-the-ancient-city-thumbnail-preview.jpg"
                    alt="Ancient Greek building surrounded by trees" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm artsandculture">
                <a href="project-articles/bertha-dochouse" class="gallery-item__details">
                    <p>Bertha DocHouse</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/bertha-dochouse-thumbnail.jpg" src="./assets/images/gallery/bertha-dochouse-thumbnail-preview.jpg"
                    alt="Close-up shot of cow in truck" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm">
                <a href="project-articles/brief-history-of-graffiti" class="gallery-item__details">
                    <p>A Brief History of Graffiti</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/brief-history-of-graffiti-thumbnail.jpg" src="./assets/images/gallery/brief-history-of-graffiti-thumbnail-preview.jpg"
                    alt="Wall covered in brightly coloured graffiti" class="lazyload">
            </div>
            <div class="gallery-item technology">
                <a href="project-articles/reuters-tima" class="gallery-item__details">
                    <p>Reuters TIMA</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/reuters-tima-thumbnail.jpg" src="./assets/images/gallery/reuters-tima-thumbnail-preview.jpg"
                    alt="Two cameramen in foreground filming a presenter at a news event" class="lazyload">
            </div>
            <div class="gallery-item casestudies socialimpact">
                <a href="project-articles/case-study-justice-for-health" class="gallery-item__details">
                    <p>Case Study: Justice for Health</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/justice-for-health-thumbnail.jpg" src="./assets/images/gallery/justice-for-health-thumbnail-preview.jpg"
                    alt="Five Junior Doctors standing in a row in front of the Royal Courts of Justice" class="lazyload">
            </div>
            <div class="gallery-item casestudies tvandfilm">
                <a href="project-articles/case-study-tales-of-grim-sleeper" class="gallery-item__details">
                    <p>Case Study: Tales of the Grim Sleeper</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/tales-of-the-grim-sleeper-thumbnail.jpg" src="./assets/images/gallery/tales-of-the-grim-sleeper-thumbnail-preview.jpg"
                    alt="Director Nick Broomfield and contributor Pam in foreground driving a car" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm">
                <a href="project-articles/citizenfour" class="gallery-item__details">
                    <p>Citizenfour</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/citizenfour-thumbnail.jpg" src="./assets/images/gallery/citizenfour-thumbnail-preview.jpg"
                    alt="Edward Snowdon in front of a house" class="lazyload">
            </div>
            <div class="gallery-item artsandculture socialimpact">
                <a href="project-articles/the-dragon-cafe" class="gallery-item__details">
                    <p>The Dragon Cafe</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/the-dragon-cafe-thumbnail.jpg" src="./assets/images/gallery/the-dragon-cafe-thumbnail-preview.jpg"
                    alt="Female artist demonstrates how to upholster a chair to three onlookers" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm">
                <a href="project-articles/case-study-holocaust-night-will-fall" class="gallery-item__details">
                    <p>Case Study: Holocaust – Night Will Fall</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/holocaust-night-will-fall-thumbnail.jpg" src="./assets/images/gallery/holocaust-night-will-fall-thumbnail-preview.jpg"
                    alt="Close-up black and white picture of a soldier holding a film-camera from the 1940s" class="lazyload">
            </div>
            <div class="gallery-item casestudies tvandfilm socialimpact">
                <a href="project-articles/case-study-james-rhodes" class="gallery-item__details">
                    <p>Case Study: Don’t Stop The Music</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/james-rhodes-thumbnail.jpg" src="./assets/images/gallery/james-rhodes-thumbnail-preview.jpg"
                    alt="Classical pianist James Rhodes sitting at a grand piano" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm">
                <a href="project-articles/my-sweet-canary" class="gallery-item__details">
                    <p>My Sweet Canary</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/my-sweet-canary-thumbnail.jpg" src="./assets/images/gallery/my-sweet-canary-thumbnail-preview.jpg"
                    alt="‘Greek Blues’ singer Roza Eskenazi holding tambourine with two musicians either side" class="lazyload">
            </div>
            <div class="gallery-item awardsandfestivals">
                <a href="project-articles/andre-simon-awards" class="gallery-item__details">
                    <p>Andr&#233; Simon Awards</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/andre-simon-awards-thumbnail.jpg" src="./assets/images/gallery/andre-simon-awards-thumbnail-preview.jpg"
                    alt="Celebrity Chef Jamie Oliver mingles with guests at the annual Andr&#233; Simon Awards" class="lazyload">
            </div>
            <div class="gallery-item artsandculture socialimpact">
                <a href="project-articles/breathe-magic" class="gallery-item__details">
                    <p>Breathe Magic</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/breathe-magic-camp-thumbnail.jpg" src="./assets/images/gallery/breathe-magic-camp-thumbnail-preview.jpg"
                    alt="A large group of children with magicians, including Dynamo, on stage" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm">
                <a href="project-articles/the-mill" class="gallery-item__details">
                    <p>The Mill</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/the-mill-thumbnail.jpg" src="./assets/images/gallery/the-mill-thumbnail-preview.jpg"
                    alt="Lead actors Kerrie Hayes and Matthew McNulty dressed in costume" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm">
                <a href="project-articles/secret-history-of-our-streets" class="gallery-item__details">
                    <p>The Secret History of Our Streets</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/secret-history-of-our-streets-thumbnail.jpg" src="./assets/images/gallery/secret-history-of-our-streets-thumbnail-preview.jpg"
                    alt="Eight participants of Secret History of our Streets sit in front of their homes" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm">
                <a href="project-articles/my-brother-the-terrorist" class="gallery-item__details">
                    <p>My Brother the Terrorist</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/my-brother-the-terrorist-thumbnail.jpg" src="./assets/images/gallery/my-brother-the-terrorist-thumbnail-preview.jpg"
                    alt="Presenter/director Robb Leech interviews his brother who became a radical Muslim" class="lazyload">
            </div>
            <div class="gallery-item casestudies tvandfilm socialimpact">
                <a href="project-articles/case-study-the-undateables" class="gallery-item__details">
                    <p>Case Study: The Undateables</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/the-undateables-thumbnail.jpg" src="./assets/images/gallery/the-undateables-thumbnail-preview.jpg"
                    alt="Eight contributors of Undateables series one" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm socialimpact">
                <a href="project-articles/matt-shepard" class="gallery-item__details">
                    <p>Matt Shepard Is a Friend of Mine</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/matt-shepard-thumbnail.jpg" src="./assets/images/gallery/matt-shepard-thumbnail-preview.jpg"
                    alt="Matt Shepard lying on a beach" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm">
                <a href="project-articles/drones" class="gallery-item__details">
                    <p>Drones</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/drones-thumbnail.jpg" src="./assets/images/gallery/drones-thumbnail-preview.jpg"
                    alt="Father pushing children on swings" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm">
                <a href="project-articles/bedlam" class="gallery-item__details">
                    <p>Bedlam</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/bedlam-thumbnail.jpg" src="./assets/images/gallery/bedlam-thumbnail-preview.jpg"
                    alt="Exterior of the Victorian Maudsley hospital in London" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm">
                <a href="project-articles/mum-and-dad-are-splitting-up" class="gallery-item__details">
                    <p>Mum &amp; Dad Are Splitting Up</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/mum-and-dad-are-splitting-up-thumbnail.jpg" src="./assets/images/gallery/mum-and-dad-are-splitting-up-thumbnail-preview.jpg"
                    alt="Daughter sits in chair in foreground while parents sit on sofa in the background" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm">
                <a href="project-articles/top-boy" class="gallery-item__details">
                    <p>Top Boy</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/top-boy-thumbnail.jpg" src="./assets/images/gallery/top-boy-thumbnail-preview.jpg"
                    alt="Four Top Boy cast members including Ashley Walters and Kane Robinson on an urban rooftop with a dog" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm">
                <a href="project-articles/the-year-the-townhall-shrank" class="gallery-item__details">
                    <p>The Year the Town Hall Shrank</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/the-year-the-townhall-shrank-thumbnail.jpg" src="./assets/images/gallery/the-year-the-townhall-shrank-thumbnail-preview.jpg"
                    alt="Close-up of female resident at old people’s home" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm artsandculture">
                <a href="project-articles/britdoc" class="gallery-item__details">
                    <p>BRITDOC</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/britdoc-thumbnail.jpg" src="./assets/images/gallery/britdoc-thumbnail-preview.jpg"
                    alt="Cameraman shooting documentary" class="lazyload">
            </div>
            <div class="gallery-item casestudies technology socialimpact">
                <a href="project-articles/newstag" class="gallery-item__details">
                    <p>Case Study: Newstag</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/newstag-lady-thumbnail.jpg" src="./assets/images/gallery/newstag-lady-thumbnail-preview.jpg"
                    alt="Graphic illustration in silhouette of a woman" class="lazyload">
            </div>
            <div class="gallery-item casestudies tvandfilm artsandculture">
                <a href="project-articles/case-study-grayson-perry" class="gallery-item__details">
                    <p>Case Study: All in the Best Possible Taste with Grayson Perry</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/grayson-perry-thumbnail.jpg" src="./assets/images/gallery/grayson-perry-thumbnail-preview.jpg"
                    alt="Grayson Perry tapestry" class="lazyload">
            </div>
            <div class="gallery-item casestudies technology">
                <a href="project-articles/case-study-artem-sfx" class="gallery-item__details">
                    <p>Case Study: Artem SFX</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/artem-sfx-thumbnail.jpg" src="./assets/images/gallery/artem-sfx-thumbnail-preview.jpg"
                    alt="Two men dressed in Halo Masterchief costumes jumping with London landmarks in background" class="lazyload">
            </div>
            <div class="gallery-item awardsandfestivals">
                <a href="project-articles/oneworld-media-awards" class="gallery-item__details">
                    <p>One World Media Awards</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/oneworld-media-awards-thumbnail.jpg" src="./assets/images/gallery/oneworld-media-awards-thumbnail-preview.jpg"
                    alt="Close-up of Jon Snow speaking at the One World Media Awards" class="lazyload">
            </div>
            <div class="gallery-item artsandculture awardsandfestivals">
                <a href="project-articles/raindance-film-festival" class="gallery-item__details">
                    <p>Raindance</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/raindance-film-festival-thumbnail.jpg" src="./assets/images/gallery/raindance-film-festival-thumbnail-preview.jpg"
                    alt="Poster of woman holding a camera for Raindance Film Festival" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm">
                <a href="project-articles/hell-and-back-again" class="gallery-item__details">
                    <p>Hell and Back Again</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/hell-and-back-again-thumbnail.jpg" src="./assets/images/gallery/hell-and-back-again-thumbnail-preview.jpg"
                    alt="Soldier shouting orders in the field in Afghanistan" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm artsandculture awardsandfestivals">
                <a href="project-articles/africa-at-the-pictures" class="gallery-item__details">
                    <p>Africa at the Pictures</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/africa-at-the-pictures-thumbnail.jpg" src="./assets/images/gallery/africa-at-the-pictures-thumbnail-preview.jpg"
                    alt="Image of African woman wearing retro sunglasses and smiling" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm">
                <a href="project-articles/children-of-gaza" class="gallery-item__details">
                    <p>Children of Gaza</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/children-of-gaza-thumbnail.jpg" src="./assets/images/gallery/children-of-gaza-thumbnail-preview.jpg"
                    alt="Young child standing among rubble" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm socialimpact">
                <a href="project-articles/chosen" class="gallery-item__details">
                    <p>Chosen</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/chosen-thumbnail.jpg" src="./assets/images/gallery/chosen-thumbnail-preview.jpg"
                    alt="Black and white picture of children playing rugby in the 1970s" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm">
                <a href="project-articles/battle-for-haditha" class="gallery-item__details">
                    <p>Battle for Haditha</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/battle-for-haditha-thumbnail.jpg" src="./assets/images/gallery/battle-for-haditha-thumbnail-preview.jpg"
                    alt="Soldier shouting orders in combat, surrounded by smoke" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm">
                <a href="project-articles/britz" class="gallery-item__details">
                    <p>Britz</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/britz-thumbnail.jpg" src="./assets/images/gallery/britz-thumbnail-preview.jpg"
                    alt="Close-up of male lead Riz Ahmed" class="lazyload">
            </div>
            <div class="gallery-item artsandculture">
                <a href="project-articles/national-youth-theatre" class="gallery-item__details">
                    <p>National Youth Theatre</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/national-youth-theatre-thumbnail.jpg" src="./assets/images/gallery/national-youth-theatre-thumbnail-preview.jpg"
                    alt="Performance at the National Youth Theatre" class="lazyload">
            </div>
            <div class="gallery-item tvandfilm">
                <a href="project-articles/sisters-in-law" class="gallery-item__details">
                    <p>Sisters in Law</p>
                    <div class="gallery-item--overlay"></div>
                </a>
                <img data-src="./assets/images/gallery/sisters-in-law-thumbnail.jpg" src="./assets/images/gallery/sisters-in-law-thumbnail-preview.jpg"
                    alt="Two female lawyers from Cameroon in full legal attire" class="lazyload">
            </div>
        </div>
    </div>
    
    
    <!-- testimonials -->
    <?php include 'testimonials.php'; ?>
    <!-- testimonials -->


    <!-- footer -->
    <?php include 'footer.php'; ?>
    <!-- footer -->
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
    <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
    <script src="./assets/js/testimonials.js"></script>
    <script src="./assets/js/script.js"></script>
    <script src="./assets/js/isotope-script.js"></script>

</body>
</html>