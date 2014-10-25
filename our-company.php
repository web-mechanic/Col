<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta charset=iso-8859-1>
        <meta name=description content="">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>Col&amp;MacArthur - The company</title>
        <link href='http://fonts.googleapis.com/css?family=Noto+Serif:400italic,700,700italic,400' rel='stylesheet' type='text/css'>
        <!--[if !IE]><!-->
            <script>  
                if (/*@cc_on!@*/false) {  
                    document.documentElement.className+=' ie10';  
                }  
            </script>
        <!--<![endif]-->  
        <link rel=stylesheet href="style-home.css" media="screen">
        <link rel=stylesheet href="media.css" media="screen">
         <link rel=stylesheet href="style.css" media="screen">
        <!--[if IE 9]>
        <link rel="stylesheet" type="text/css" href="style-ie9.<?php echo filemtime('style-ie9.css'); ?>.css" />
        <![endif]-->
        <!--[if lte IE 8]>
        <link rel="stylesheet" type="text/css" href="style-ie8.<?php echo filemtime('style-ie8.css'); ?>.css" />
        <![endif]-->
        <link href="css/dcmegamenu.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <script type='text/javascript' src='js/jquery.hoverIntent.minified.js'></script>
        <script type='text/javascript' src='js/jquery.dcmegamenu.1.3.3.js'></script>
        <script type="text/javascript">
        $(document).ready(function($){
            $('#mega-menu-3').dcMegaMenu({
                rowItems: '2',
                speed: 500,
                effect: 'fade'
            });
        });
        </script>
        <script src="js/css_browser_selector.js" type="text/javascript"></script>
        <script type="text/javascript" language="javascript">
                        function changeImage(img){
                           document.getElementById('bigImage').src=img;
                         }
        </script>
        <script type='text/javascript' src='js/placeholder.js'></script>
    </head>
    <body>
    <noscript>
    Sorry, your browser does not support JavaScript!
    </noscript>
    <div id="nojs" style="display : none"> <!-- DIV NOSCRIPT -->
    <script>
    document.getElementById("nojs").style.display = "block";
    </script>
        <div id="cache-top"></div><!-- Cache top -->
        <div id="cache-bottom"></div><!-- Cache bottom -->
        <div id="container"> <!-- On ouvre le contener principal -->
        	<div id="top"> <!-- On ouvre le top -->
        			<?php
                    include "menu.php";
                    ?>
                                       <?php
                    include "menu2.php";
                    ?>
                <div id="content"> <!-- Contenu quelconque -->
                    <div id="path"><a href="index.php">Home</a> <img src="img/next.png" alt=""> <a href="our-company.php"><span>Our company</span></a></div>
                    
                    <div id="camac-container">
                        <div id="aboutus-title">
                            <span>About us</span> <br>
                            <p>Learn about Col&MacArthur.</p>
                        </div>
                        <div id="aboutus-content">
                            Following many years of service in the <a href="http://en.wikipedia.org/wiki/Brigade_of_Guards" target="_blank">Brigade of Guards</a> where the devotion to detail and presentation are second to none; the ensuing task of adapting the same proficiencies to the new company Col&MacArthur not only became a necessity for satisfaction, but a precondition in order to work alongside the <a href="ministry-of-defence.php">Ministry of Defence</a>.
                            <br><br>
                            Moreover, and as can be seen from the following pages, the perpetual passion for precision did not just end after "handing-in" a uniform.
                            <div id="aboutus-img"><img src="img/septum-contact.png" alt=""></div>
                        </div>
                        <div id="contact-separator"><!--  --></div>

                        <div id="savoirfaire-title">
                            <span>Savoir-Faire</span>
                            <p>The skills and qualifications of our team.</p>
                        </div>
                        <div id="savoirfaire-content">
                            The Col&MacArthur founders <a href="">S&eacute;bastien Colen</a> and <a href="">Iain Wood</a> (Pipes and Drums, 2SG, 1964 - 1974) created the company in the French speaking south of Belgium, not far from Waterloo.
                            <br><br>
                            S&eacute;bastien, with his knowledge in business management and Iain, having manufactured one-off deluxe watches for celebrities at home and abroad; the consequential accumulation of experience and skills which are unquestionably essential to gain and maintain <a href="guarantee.php">customer satisfaction</a>, can now be regarded as one of their major achievements.
                        </div>
                    </div>
                </div> <!-- On ferme le contenu quelconque -->
            </div> <!-- On ferme le top -->
            <div id="middle"></div> <!-- Middle à 800px "middle-800" ou Middle simple "middle" -->
            <div id="bottom"> <!-- On ouvre le bottom -->
                <?php
                include "siteplan.php";
                ?>
            </div> <!-- On ferme le bottom -->
        <div id="footer-container"> <!-- On ouvre le conteneur footer -->
            <?php
            include "footer.php";
            ?>
        </div> <!-- On ferme le conteneur footer -->
        </div> <!-- On ferme le conteneur principal -->
<!-- DEBUT GOOGLE ANALYTIC -->
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-42465173-1', 'colandmacarthur.com');
ga('send', 'pageview');
</script>
<!-- FIN GOOGLE ANALYTIC -->
    </div> <!-- FIN DIV NOSCRIPT -->

    </body>

</html>