<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta charset=iso-8859-1>
        <meta name=description content="">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>The Ministry of Defence</title>
        <link href='http://fonts.googleapis.com/css?family=Noto+Serif:400italic,700,700italic,400' rel='stylesheet' type='text/css'>
        <!--[if !IE]><!-->
            <script>  
                if (/*@cc_on!@*/false) {  
                    document.documentElement.className+=' ie10';  
                }  
            </script>
        <!--<![endif]-->  
        <link rel=stylesheet href="style.<?php echo filemtime('style.css'); ?>.css" media="screen">
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
                <div id="content"> <!-- Contenu quelconque -->
                    <div id="path"><a href="index.php">Home</a> <img src="img/next.png" alt=""> <a href="ministry-of-defence.php"><span>Ministry of Defence</span></a></div>
                    
                    <div id="mod-container">
                        <div id="mod-title">
                            <span>The Ministry of Defence</span>
                            <!-- <p>Your watch is guaranteed "MoD perfect".</p> -->
                        </div>
                        <div id="mod-content">
                            This product has been officially licensed by the <a href="https://www.gov.uk/government/organisations/ministry-of-defence" target="_blank">Ministry of Defence</a> and has been produced with consultation with each of the Regiments whose insignia we use.
                            <!-- MESSAGE REFUSED START -->
                            <!-- Of course and as you are all well aware, the <a href="https://www.gov.uk/government/organisations/ministry-of-defence" target="_blank">Ministry of Defence</a>'s stringent code-of-conduct in relation<br>to the public use of their branded insignia is inflexible.
                            <br><br>And as such, being granted a licence not only provides the company with the contentment of being <br>officially "MoD-perfect", but also, it provides a certain satisfaction in knowing that our Brigade-Ambassador <br>fulfilled its roll perfectly. -->
                            <!-- MESSAGE REFUSED END -->
                            <!-- <div id="mod-img"><img src="img/mod-logo.png" alt=""></div> -->
                            
                        </div>
                        <div id="contact-separator"></div>
                        <div id="mod-document"><a href="img/mod-licence.jpg" target="_blank"><img src="img/mod-licence-vignette.jpg" alt=""></a></div>
                        <div id="mod-document-legend">
                            To view the official document in its original size, please click on the thumbnail above or click on <a href="img/mod-licence.jpg" target="_blank">this link</a>.
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