<?php
    function curPageURL() {
        $pageURL = 'http';
        if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
         $pageURL .= "://";
         if ($_SERVER["SERVER_PORT"] != "80") {
          $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
        }
        else {
  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
 }
 return $pageURL;
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta charset=utf-8>
        <meta name=description content="">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>The Welsh Guards Watch</title>
        <link href='http://fonts.googleapis.com/css?family=Noto+Serif:400italic,700,700italic,400' rel='stylesheet' type='text/css'>
        <link rel=stylesheet href="style-print.css" media="print">
        <link rel=stylesheet href="style.<?php echo filemtime('style.css'); ?>.css" media="screen">
        <!--[if IE 9]>
        <link rel="stylesheet" type="text/css" href="style-ie9.<?php echo filemtime('style-ie9.css'); ?>.css" />
        <![endif]-->
        <!--[if lte IE 8]>
        <link rel="stylesheet" type="text/css" href="style-ie8.<?php echo filemtime('style-ie8.css'); ?>.css" />
        <![endif]-->
        <link href="css/dcmegamenu.css" rel="stylesheet" type="text/css" />
        <link href="lightbox/css/lightbox.css" rel="stylesheet" />
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
        <script src="js/jquery.tools.min.js"></script>
        <script src="lightbox/js/lightbox-2.6.min.js"></script>
        <script>
          $(document).ready(function() {
              $("#share-trigger").tooltip({
                position:'bottom center',
                effect: 'slide',
                relative:true
              });
            });
        </script>
        <script src="js/cloud-zoom.1.0.3.min.js" type="text/javascript"></script>
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
                    <div id="path"><a href="index.php">Home</a> <img src="img/next.png" alt=""> <a href="welsh-guards.php"><span>Welsh Guards Watch</span></a></div>
                    <div id="printed-from">This document was printed from http://www.colandmacarthur.com</div>

                    <div id="sg-watch-container">
                        <div id="sg-watch-img">
                            <div id="zoom-loupe">
                                <img src="img/loupe-zoom.png" alt="">
                            </div>
                            <a href="img/wg-photo-big.jpg" id="zoom01" class="cloud-zoom" rel="position:'right', zoomWidth:448, zoomHeight:422, adjustX:59, adjustY:0, tint:'#050505', softFocus:1, smoothMove:5, tintOpacity:0.5">
                            <img src="img/wg-watch-2.png"></a>
                        </div>
                        <div id="sg-watch-img-print"></div>
                        <div id="cadre-print"></div>
                        <div id="wg-watch-content">
                            <h1>Your Regimental Watch</h1>
                            <h2>THE WELSH GUARDS WATCH</h2>
                            <p>Quartz chronograph with date display <br>and centre second’s stop-counter.</p>
                            <br>
                            <p>Standard price: 299£</p>
                            <div id="sg-icons"> <!-- ICONES -->
                            <a href=""><img id="share-trigger" src="img/share-icon.png" alt="Share"></a>
                            <div id="tooltip" class="tooltip">
                                <div id="tooltip-title">SHARE</div>
                        <!--  --><a href="http://twitter.com/home?status=The Welsh Guards Watch+<?php echo curPageURL(); ?>" target="_blank"><div id="share-twitter">Twitter</div></a>
                        <!--  --><a href="http://www.facebook.com/share.php?u=<?php echo curPageURL(); ?>&title=The Welsh Guards Watch" target="_blank"><div id="share-facebook">Facebook</div></a>
                        <!--  --><a href="http://pinterest.com/pin/create/bookmarklet/?media=http://colandmacarthur.com/img/photo-big.jpg&url=<?php echo curPageURL(); ?>&is_video=false&description=The Welsh Guards Watch" target="_blank"><div id="share-pinterest">Pinterest</div></a>
                        <!--  --><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo curPageURL(); ?>&title=The Welsh Guards Watch&source=Col&MacArthur" target="_blank"><div id="share-linkedin">LinkedIn</div></a>
                        <!--  --><a href="https://plus.google.com/share?url=<?php echo curPageURL(); ?>" target="_blank"><div id="share-googleplus">Google+</div></a>
                        <a href="mailto:?subject=The Welsh Guards Watch&body=http://www.colandmacarthur.com/welsh-guards.php"><div id="share-email">Email</div></a>
                            </div>
                            <span>SHARE</span>
                            <img src="img/separator-icons.gif" class="separator-icons">
                            <a href="#" OnClick="javascript:window.print()"><img id="print-trigger" src="img/print-icon.png" alt="Print" title="Print"></a><span id="print-text">PRINT</span>
                            <img src="img/separator-icons.gif" class="separator-icons" id="print-separator">
                            <a href="purchase.php"><img id="purchase-trigger" src="img/purchase-icon.png" alt="Purchase" title="Purchase"></a><span>PURCHASE</span>
                            </div> <!-- FIN ICONES -->
                            <div id="should-you-wish">SHOULD YOU WISH MORE INFORMATION, PLEASE <a href="contact.php">CONTACT US</a></div>
                        </div>
                            <div id="clear"></div>
                            <div id="gallery">
                                <a href="img/wg-watch-perspective.jpg" data-lightbox="image-1" ><img src="img/wg-watch-perspective-small.jpg" alt="" onmouseover="this.src='img/wg-watch-perspective-small-hover.jpg'" onmouseout="this.src='img/wg-watch-perspective-small.jpg'"></a>
                                <a href="img/wg-watch-front.jpg" data-lightbox="image-1" ><img src="img/wg-watch-front-small.jpg" alt="" onmouseover="this.src='img/wg-watch-front-small-hover.jpg'" onmouseout="this.src='img/wg-watch-front-small.jpg'"></a>
                                <a href="img/wg-watch-back.jpg" data-lightbox="image-1" ><img src="img/sg-watch-back-small.jpg" alt="" onmouseover="this.src='img/sg-watch-back-small-hover.jpg'" onmouseout="this.src='img/sg-watch-back-small.jpg'"></a>
                                <a href="img/sg-watch-winder.jpg" data-lightbox="image-1" ><img src="img/sg-watch-winder-small.jpg" alt="" onmouseover="this.src='img/sg-watch-winder-small-hover.jpg'" onmouseout="this.src='img/sg-watch-winder-small.jpg'"></a>
                                <a href="img/sg-watch-engraving.jpg" data-lightbox="image-1" ><img src="img/sg-watch-engraving-small.jpg" alt="" onmouseover="this.src='img/sg-watch-engraving-small-hover.jpg'" onmouseout="this.src='img/sg-watch-engraving-small.jpg'"></a>
                                <a href="img/sg-watch-bucklesteel.jpg" data-lightbox="image-1" ><img src="img/sg-watch-bucklesteel-small.jpg" alt="" onmouseover="this.src='img/sg-watch-bucklesteel-small-hover.jpg'" onmouseout="this.src='img/sg-watch-bucklesteel-small.jpg'"></a>
                                <a href="img/sg-watch-buckleleather.jpg" data-lightbox="image-1" ><img src="img/sg-watch-buckleleather-small.jpg" alt="" onmouseover="this.src='img/sg-watch-buckleleather-small-hover.jpg'" onmouseout="this.src='img/sg-watch-buckleleather-small.jpg'"></a>
                                <a href="img/wg-watch-case.jpg" data-lightbox="image-1" ><img src="img/wg-watch-case-small.jpg" alt="" onmouseover="this.src='img/wg-watch-case-small-hover.jpg'" onmouseout="this.src='img/wg-watch-case-small.jpg'"></a>
                                
                            </div>
                        <div id="watch-separator"><!--  --></div>
                        <div id="sg-watch-spec-title">SPECIFICATIONS</div>
                        <div id="sg-watch-details-title">DETAILS</div>
                        <div id="sg-watch-spec-content">
                            <div class="sg-watch-spec-content-title">THE SWISS MOVEMENT</div>
                            <div class="sg-watch-spec-content-content" id="sg-watch-spec-content-movement">Ronda-startech quartz 5030D, chronograph with date-work. <br>
                            Thanks to this hi-tech movement and its negligible power consumption, the battery has a life-span of about three years</div>
                            <div class="clear"></div>
                            <div class="sg-watch-spec-content-title">THE CASE</div>
                            <div class="sg-watch-spec-content-content" id="sg-watch-spec-content-case">The case is manufactured using high-quality stainless steel 304.<br>
                                The upper surfaces are satin finished while the back cover with the Brigade emblem is highly polished.</div>
                            <div class="clear"></div>
                            <div class="sg-watch-spec-content-title">THE BRACELET</div>
                            <div class="sg-watch-spec-content-content" id="sg-watch-spec-content-bracelet">The bracelet is genuine leather with a Brigade-personalized buckle.<br>
                            The watch can also be supplied with a more robust stainless steel bracelet and its clasp is also personalized.</div>
                            <div class="clear"></div>
                            <div class="sg-watch-spec-content-title">THE GLASS</div>
                            <div class="sg-watch-spec-content-content" id="sg-watch-spec-content-glass">Hard-wearing sapphire-crystal.</div>
                            <div class="clear"></div>
                            <div class="sg-watch-spec-content-title">THE BACK COVER</div>
                            <div class="sg-watch-spec-content-content" id="sg-watch-spec-content-back">A gentle curve has been added to the back in order for it to adapt comfortably on the wrist.<br>
                            The upper half is reserved for the embossed Brigade insignia, while the lower half can be used to personalize the watch by having it engraved; if need be.</div>
                            <div class="clear"></div>
                            <div class="sg-watch-spec-content-title">THE CROWN</div>
                            <div class="sg-watch-spec-content-content" id="sg-watch-spec-content-crown">The winding button is water resistant and engraved with the Brigade insignia.<br>
                            Please open <a href="technology.php#operating-manual-title">the interactive user manual</a> to understand the 3 positions and the instructions for the use of the chronograph.</div>
                            <div class="clear"></div>
                            <div class="sg-watch-spec-content-title">WATER RESISTANCE</div>
                            <div class="sg-watch-spec-content-content" id="sg-watch-spec-content-water">All our watches are water resistant up to 5 atmospheres.<br>
                            </div>
                            <div class="clear"></div>

                        </div>
                        <div id="sg-watch-details-content">
                            <div id="sg-watch-functions">
                                <div id="sg-watch-functions-title">
                                    FUNCTIONS :
                                </div>
                                <div id="sg-watch-functions-content">
                                    <ul>
                                        <li>Chronograph</li>
                                        <li>Centre stop second</li>
                                        <li>30 minute counter</li>
                                        <li>12 hour counter</li>
                                        <li>ADD and SPLIT functions</li>
                                        <li>Date</li>
                                        <li>Small second</li>
                                    </ul>                                    
                                </div>
                            </div>
                            <div id="sg-watch-specifications-title">
                                TECHNICAL ATTRIBUTES :
                            </div>
                            <div id="sg-watch-specifications-content">
                                <ul>
                                    <li>Analogue quartz movement</li>
                                    <li>Total length : 52.00 mm</li>
                                    <li>Width : 42.00 mm</li>
                                    <li>Height : 12.75 mm</li>
                                    <li>Weight : 86 grams (leather bracelet)</li>
                                    <li>Weight : 170 grams (metal bracelet)</li>
                                    <li>Battery type No. 395</li>
                                    <li>Battery voltage 1.5 V</li>
                                    <li>Battery life 36 months</li>
                                </ul>
                            </div>
                            <div id="sg-watch-details-content-more-info">For more information about the movement,<br>please click on the URL below. <br><a href="technology.php#operating-manual-title">Chronograph and time operating manual</a></div>
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
        <script>jQuery('#zoom01, .cloud-zoom-gallery').CloudZoom();</script>
        <div id="loading">
            <img src="img/logo-bn.png" alt="">
            <img src="img/sg-watch-print.png" alt="">
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