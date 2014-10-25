<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta charset=iso-8859-1>
        <meta name=description content="">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>Technology and specifications</title>
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
                    <div id="path"><a href="index.php">Home</a> <img src="img/next.png" alt=""><a href="technology.php"><span> Technology</span></a>
                    </div>
                        <div id="technology-container">
                            <div id="technology-title">
                                <span>Swiss movement</span>
                                <p>Model and specifications.</p>
                            </div>
                            <div id="technology-content">
                                    Ronda-startech quartz 5030.D is a chronograph with date-work. The last technical modifications to the movement were made on the 11/06/2012. <br> 
                                    Thanks to this hi-tech movement and its negligible power consumption, the battery has a life-span of about three years.<br>When replacing the battery, non conducting tweezers must always be used in order to eliminate the risk of short-circuiting the power-source.
                            </div>
                            <div id="contact-separator"></div>
                            <div id="operating-manual-title">
                                <span>Chronograph and time operating manual</span>
                                <p>User's Manual Caliber 5030.D</p>
                            </div>
                            <div id="operating-manual-content">
                                <OBJECT classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=6,0,0,0" WIDTH="701" HEIGHT="480" id="Ronda-5030.D" ALIGN="">
                                    <param name="FlashVars" value="sprache=e&caliber=5030.D">
                                    <PARAM NAME=movie VALUE="ronda-interactive.swf">
                                    <PARAM NAME=quality VALUE=high>
                                    <PARAM NAME=bgcolor VALUE=#FFFFFF>
                                    <EMBED src="ronda-interactive.swf" FlashVars="sprache=e&caliber=5030.D" quality=high bgcolor=#FFFFFF  WIDTH="701" HEIGHT="480" NAME="Ronda-5030.D" ALIGN="" TYPE="application/x-shockwave-flash" PLUGINSPAGE="http://www.macromedia.com/go/getflashplayer" uhrtyp="Musteruhr"></EMBED>
                                </OBJECT>
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