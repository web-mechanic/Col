<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta charset=iso-8859-1>
        <meta name=description content="">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>Your guarantee at Col&amp;MacArthur</title>
        <link href='http://fonts.googleapis.com/css?family=Noto+Serif:400italic,700,700italic,400' rel='stylesheet' type='text/css'>
        <!--[if !IE]><!-->
            <script>  
                if (/*@cc_on!@*/false) {  
                    document.documentElement.className+=' ie10';  
                }  
            </script>
        <!--<![endif]-->  
                <link rel=stylesheet href="style.css" media="screen">
        <link rel=stylesheet href="media.css" media="screen">
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
                    <div id="path"><a href="index.php">Home</a> <img src="img/next.png" alt=""> <a href="guarantee.php"><span>Guarantee</span></a></div>
                    
                    <div id="guarantee-container">
                        <div id="guarantee-title">
                            <span>Guarantee</span> <br>
                            <p>Your satisfaction is our principal concern.</p>
                        </div>
                        <div id="guarantee-content">
                            Our international 2-year Guarantee applies to all watches bought directly from our <a href="purchase.php">purchase page</a>. In the event of any situation related to the warranty, our company will strive to provide a sensible solution to all claims.
                            <br><br>
                            Details of the guarantee procedures will be explained completely in the documentation accompanying the watch. If by any chance your guarantee has been lost and you wish to continue to benefit from an on-going guarantee, simply send us an e-mail from the <a href="contact.php">contact page</a>.
                            <br><br>
                            <ul>
                                <li>All claims concerning the cover of our guarantee should be done by providing the reference number indicated on the guarantee certificate, issued at the time of sale.</li><br>
                                <li>In case of a problem and if you believe that the defect should be covered by the guarantee, then please contact us by using our e-mail address <a href="mailto:guarantee@colandmacarthur.com">guarantee@colandmacarthur.com</a> informing us about the circumstances. Normally, in the 24 hours following your contact, you will receive a personal reply informing you of the procedures.</li><br>
                                <li>Not covered by the guarantee is general wear and tear, (in particular, the leather bracelet) loss, theft, mishandling, direct heat exposure, condensation related to sudden temperature changes, abusive use or damage resulting from an accident. Nonetheless, despite the fact that under such circumstances the guarantee becomes null and void; please do not hesitate to <a href="contact.php">contact us</a> and we will advise you as to the correct procedures to rectify the predicament and eventually obtain spare parts.</li>
                            </ul>
                            <br><br>
                            At Col&MacArthur, we are proud of our commitment to service, and our principal concern is to ensure the satisfaction of our customers in response to the trust you have placed in us.
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