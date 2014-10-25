<?php
header('X-UA-Compatible: IE=edge,chrome=1');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8>
        <meta name=description content="">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>Col&amp;MacArthur - Regimental watches</title>
        <link href='http://fonts.googleapis.com/css?family=Noto+Serif:400italic,700,700italic,400' rel='stylesheet' type='text/css'>
        <link rel=stylesheet href="style-home.css" media="screen">
        <link rel=stylesheet href="media.css" media="screen">
        <!--[if IE 9]>
        <link rel="stylesheet" type="text/css" href="style-home-ie9.<?php echo filemtime('style-home-ie9.css'); ?>.css" />
        <![endif]-->
        <!--[if lte IE 8]>
        <link rel="stylesheet" type="text/css" href="style-home-ie8.<?php echo filemtime('style-home-ie8.css'); ?>.css" />
        <![endif]-->
        <link href="css/dcmegamenu.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
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
        <script type="text/javascript">
        $(document).ready(function($){
            $('#mega-menu-1').dcMegaMenu({
                rowItems: '2',
                speed: 500,
                effect: 'fade'
            });
        });
        </script>
        <script src="js/css_browser_selector.js" type="text/javascript"></script>
        <script type="text/javascript">
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
        <div id="cache-top"></div>
        <div id="cache-bottom"></div>
        <div id="container">
        	<div id="top">
        			<?php
                    include "menu.php";
                    ?>

                        <?php
                    include "menu2.php";
                    ?>
                <div id="content">
                    <div id="welcome">
                        <h1>Welcome,</h1>
                        <h2>to our Brigade of Guards website, official supplier of regimental watches.</h2>
                        <!-- <br>
                        <p>Whether we talk about 1642 or 1656; the Guards have been using watches ever since.<br>
                        At the time and because of their rarity, it would only have been the Commissioned Officers who had      <br>
                        the luxury of telling the time.<br><br>
                        Today, watches are so numerous that just about everyone owns one; if not many. <br>
                        But with their charm being absorbed by their banality; Col&amp;MacArthur has stepped in to revive <br>
                        the "object rare", thanks to this small collection of Swiss movement Regimental watches.</p> -->
                    
                    <div id="separator"></div>
                    <div id="septum"></div>
                    <br>
                        <span id="please-select">To see your Regimental watch simply click on your Regiment.</span>
                        <ul id="badges">
                            <!-- household-cavalry.php
grenadier-guards.php
welsh-guards.php
irish-guards.php
coldstream-guards.php -->
                            <li><div id="hcr-img"><a href="#"><img src="img/hcr_grey_120.png" title="The Household Cavalry" alt="The Household Cavalry" onmouseover="this.src='img/hcr_grey_120_soon.png'" onmouseout="this.src='img/hcr_grey_120.png'"></a></div></li>
                            <li><div id="gg-img"><a href="#"><img src="img/gg_grey_120.png" title="The Grenadier Guards" alt="The Grenadier Guards" onmouseover="this.src='img/gg_grey_120_soon.png'" onmouseout="this.src='img/gg_grey_120.png'"></a></div></li>
                            <li><div id="sg-img"><a href="scots-guards.php"><img src="img/sg_grey_120.png" title="The Scots Guards" alt="The Scots Guards" onmouseover="this.src='img/sg_color_120.png'" onmouseout="this.src='img/sg_grey_120.png'"></a></div></li>
                            <li><div id="wg-img"><a href="#"><img src="img/wg_grey_120.png" title="The Welsh Guards" alt="The Welsh Guards" onmouseover="this.src='img/wg_grey_120_soon.png'" onmouseout="this.src='img/wg_grey_120.png'"></a></div></li>
                            <li><div id="ig-img"><a href="#"><img src="img/ig_grey_120.png" title="The Irish Guards" alt="The Irish Guards" onmouseover="this.src='img/ig_grey_120_soon.png'" onmouseout="this.src='img/ig_grey_120.png'"></a></div></li>
                            <li><div id="cg-img"><a href="#"><img src="img/cg_grey_120.png" title="The Coldstream Guards" alt="The Coldstream Guards" onmouseover="this.src='img/cg_grey_120_soon.png'" onmouseout="this.src='img/cg_grey_120.png'"></a></div></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div id="middle-800"></div>
            <div id="bottom">
                <?php
                include "siteplan.php";
                ?>
            </div>
        <div id="footer-container">
            <?php
            include "footer.php";
            ?>
        </div>
        </div>
        <div id="loading">
            <img src="img/hcr_color_120.png" alt="">
            <img src="img/gg_color_120.png" alt="">
            <img src="img/sg_color_120.png" alt="">
            <img src="img/wg_color_120.png" alt="">
            <img src="img/ig_color_120.png" alt="">
            <img src="img/cg_color_120.png" alt="">
        </div>
        <script>var isIE8 = false;</script>
        <!--[if IE 8]>
            <script type='text/javascript'>
                isIE8 = true;
            </script>
        <![endif]-->
        <script type='text/javascript'>
            if (isIE8) {
                function footerDown() {
                    document.getElementById("middle-800").style.display="block";
                }
                function footerUp() {
                    document.getElementById("middle-800").style.display="none";
                }
            }
        </script>
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