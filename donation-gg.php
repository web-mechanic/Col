<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta charset=iso-8859-1>
        <meta name=description content="">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>Make a donation to the Grenadier Guards</title>
        <link href='http://fonts.googleapis.com/css?family=Noto+Serif:400italic,700,700italic,400' rel='stylesheet' type='text/css'>
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
                    <div id="path"><a href="index.php">Home</a> <img src="img/next.png" alt=""><a href="donations.php"> Donations</a> <img src="img/next.png" alt=""><a href=""><span> Grenadier Guards</span></a></div>                   
                        
                        <div id="donation-gg-container">
                            <div id="donations-title">
                                <span>Grenadier Guards Charitable Donations</span>
                                <p>There are 3 different ways to make donations to the regiment.</p>
                            </div>
                            <div id="donations-regiment-content">
                                <ul>
                                    <li>By purchasing a Grenadier Guards watch, you will automatically be donating to the Grenadier Guards charity fund of RHQ in London.<br>
                                   Following <a href="purchase.php">the purchase</a>, Col&amp;MacArthur will present 5% of its profits to the regiment.</li>
                                    <br>
                                    <li>As a friend, if you wish to donate to the regiment via <a href="http://www.grengds.com/">the regiment's website charity page</a>.</li>
                                    <br>
                                    <li>As a fundraiser, by using for example <a href="http://www.charitychoice.co.uk/fundraising">this website</a>, you can easily set up fundraising events while enjoying the ambiance plus the satisfaction that your efforts will go towards the wounded and their family from the recent conflicts abroad.</li>
                                </ul>
                            </div>
                    </div>
                </div> <!-- On ferme le contenu quelconque -->
            </div> <!-- On ferme le top -->
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