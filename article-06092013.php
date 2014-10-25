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
        <meta charset=iso-8859-1>
        <meta name=description content="">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>Col&amp;MacArthur</title>
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
        <script>
          $(document).ready(function() {
              $("#share-trigger").tooltip({
                position:'bottom center',
                effect: 'slide',
                relative:true
              });
            });
        </script>
        <script src="js/jquery.tools.min.js"></script>
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
                    <div id="path"><a href="index.php">Home</a> <img src="img/next.png" alt=""> <a href="news.php">News</a> <img src="img/next.png" alt=""> <a href=""><span>09-06-2013</span></a></div>
                    <div id="article-container">

                        <div id="article-content">

                            <div id="article-title">
                                Duo Juncta In Uno 
                            </div>                            
                            <?php

                                $nomdufichier = basename($_SERVER['PHP_SELF']);

                                // RECUPERATION DU CONTENU DE LA DIV article-title POUR L'INJECTER DANS LES LIENS TWITTER, FB, LINKEDIN, ...
                                $doc = new DOMDocument();
                                $pageactuelle = basename($_SERVER['PHP_SELF']);
                                $doc->LoadHTMLFile($pageactuelle);
                                $d = new DOMDocument();
                                $d->appendChild($d->importNode($doc->getElementById('article-title'), true));
                                $html = trim(preg_replace('#(^<[^>]+>|</[^>]+>$)#', '', $d->saveHTML()));
                                // FIN DE LA RECUPERATION DU CONTENU DE LA DIV article-title
                                
                                // RECUPERATION DE L'URL DE L'IMAGE article-img-src
                                $html2 = curl_exec($ch); // assuming CURLOPT_RETURNTRANSFER
                                $dom2 = new DOMDocument;
                                $dom2->LoadHTMLFile($nomdufichier); // load the string from cURL into the DOMDocument object
                                $el = $dom2->getElementById('article-img-src'); // using an ID
                                $src = $el->getAttribute('src');
                                $articleImgSrc = "http://www.colandmacarthur.com/".$src;
                                // FIN DE LA RECUPERATION DE L'URL DE L'IMAGE article-img-src
                            ?>
                            <div id="sg-icons-article"> <!-- ICONES -->
                            <div id="share-article">
                                    <a href="">
                                        <img src="img/separator-icons.gif" class="separator-icons" id="separator-icons-article"><img id="share-trigger" src="img/share-icon.png" alt="Share"></a>
                                    <div id="tooltip-article" class="tooltip">
                                        <span>SHARE</span>
                                        <!--  --><a href="http://twitter.com/home?status=Duo Juncta In Uno+<?php echo curPageURL(); ?>" target="_blank"><div id="share-twitter">Twitter</div></a>
                                        <!--  --><a href="http://www.facebook.com/share.php?u=<?php echo curPageURL(); ?>&title=Duo Juncta In Uno" target="_blank"><div id="share-facebook">Facebook</div></a>
                                        <!--  --><a href="http://pinterest.com/pin/create/bookmarklet/?media=<?php echo $articleImgSrc; ?>&url=<?php echo curPageURL(); ?>&is_video=false&description=Duo Juncta In Uno" target="_blank"><div id="share-pinterest">Pinterest</div></a>
                                        <!--  --><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo curPageURL(); ?>&title=Duo Juncta In Uno&source=Col&MacArthur" target="_blank"><div id="share-linkedin">LinkedIn</div></a>
                                        <!--  --><a href="https://plus.google.com/share?url=<?php echo curPageURL(); ?>" target="_blank"><div id="share-googleplus">Google+</div></a>
                                        <a href="mailto:?subject=The Scots Guards Watch&body=http://www.colandmacarthur.com/wip/scots-guards.php"><div id="share-email">Email</div></a>
                                    </div>
                                    <span>SHARE</span>
                                </div>
                            </div>
                            <div id="clear"></div>
                            <div id="article-writer">
                                By Sebastien Colen posted September 6th, 2013 at 18:35 PM
                            </div>

                            <div id="article-text">
                                The Ministry of Defence and Col&MacArthur are now one... 
                                <br>  
                                In as much as the Wider Markets Integrated Project Team at Army Headquarters have confided in us the obligatory licence needed to promote and develop the Brigade insignia for our regimental watches.  
                                <br><br>
                                As such, we would like to thank them for their confidence in accepting Col&MacArthur as an official wrist watch supplier to the Brigade of Guards and as a civilian company they can trust, to maintain and respect "The British Army Brand Identity Instructions." 
                            </div>

                            <div id="article-img">
                                <img id="article-img-src" src="img/article-060913.jpg" alt="">
                            </div>

                            <!-- <div id="article-back">
                                <a href="">Previous new</a> | <a href="">Next new</a>
                            </div> -->
                            

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
    </div> <!-- FIN DIV NOSCRIPT -->
    </body>
</html>