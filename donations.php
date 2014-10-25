<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta charset=iso-8859-1>
        <meta name=description content="">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>Make a donation to the Guards</title>
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
                    <div id="path"><a href="index.php">Home</a> <img src="img/next.png" alt=""><a href="donations.php"> <span>Donations</span></a>
                    </div>
                        <div id="donations-container">
                            <div id="donations-title">
                                <span>Donations</span>
                                <p>Please select a regiment.</p>
                            </div>
                            <div id="donations-content">
                                    <ul id="badges-donations">
                                        <li><div id="hcr-img"><a href="donation-hc.php"><img src="img/hcr_grey_120.png" title="The Household Cavalry" alt="The Household Cavalry" onmouseover="this.src='img/hcr_color_120.png'" onmouseout="this.src='img/hcr_grey_120.png'"></a></div></li>
                                        <li><div id="gg-img"><a href="donation-gg.php"><img src="img/gg_grey_120.png" title="The Grenadier Guards" alt="The Grenadier Guards" onmouseover="this.src='img/gg_color_120.png'" onmouseout="this.src='img/gg_grey_120.png'"></a></div></li>
                                        <li><div id="sg-img"><a href="donation-sg.php"><img src="img/sg_grey_120.png" title="The Scots Guards" alt="The Scots Guards" onmouseover="this.src='img/sg_color_120.png'" onmouseout="this.src='img/sg_grey_120.png'"></a></div></li>
                                        <li><div id="wg-img"><a href="donation-wg.php"><img src="img/wg_grey_120.png" title="The Welsh Guards" alt="The Welsh Guards" onmouseover="this.src='img/wg_color_120.png'" onmouseout="this.src='img/wg_grey_120.png'"></a></div></li>
                                        <li><div id="ig-img"><a href="donation-ig.php"><img src="img/ig_grey_120.png" title="The Irish Guards" alt="The Irish Guards" onmouseover="this.src='img/ig_color_120.png'" onmouseout="this.src='img/ig_grey_120.png'"></a></div></li>
                                        <li><div id="cg-img"><a href="donation-cg.php"><img src="img/cg_grey_120.png" title="The Coldstream Guards" alt="The Coldstream Guards" onmouseover="this.src='img/cg_color_120.png'" onmouseout="this.src='img/cg_grey_120.png'"></a></div></li>
                                    </ul>
                            </div>
                    </div>
                </div> <!-- On ferme le contenu quelconque -->
            </div> <!-- On ferme le top -->
        </div> <!-- On ferme le conteneur footer -->
        </div> <!-- On ferme le conteneur principal -->
        <div id="loading">
            <img src="img/hcr_color_120.png" alt="">
            <img src="img/gg_color_120.png" alt="">
            <img src="img/sg_color_120.png" alt="">
            <img src="img/wg_color_120.png" alt="">
            <img src="img/ig_color_120.png" alt="">
            <img src="img/cg_color_120.png" alt="">
        </div>
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