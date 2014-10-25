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
                    <div id="path"><a href="index.php">Home</a> <img src="img/next.png" alt=""> <a href="news.php">News</a> <img src="img/next.png" alt=""> <a href=""><span>15-07-2013</span></a></div>
                    <div id="article-container">

                        <div id="article-content">

                            <div id="article-title">
                                The Col&MacArthur Website is opening
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
                                        <!--  --><a href="http://twitter.com/home?status=The Col And MacArthur Website is opening+<?php echo curPageURL(); ?>" target="_blank"><div id="share-twitter">Twitter</div></a>
                                        <!--  --><a href="http://www.facebook.com/share.php?u=<?php echo curPageURL(); ?>&title=The Col And MacArthur Website is opening" target="_blank"><div id="share-facebook">Facebook</div></a>
                                        <!--  --><a href="http://pinterest.com/pin/create/bookmarklet/?media=<?php echo $articleImgSrc; ?>&url=<?php echo curPageURL(); ?>&is_video=false&description=The Col And MacArthur Website is opening" target="_blank"><div id="share-pinterest">Pinterest</div></a>
                                        <!--  --><a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo curPageURL(); ?>&title=The Col And MacArthur Website is opening&source=Col&MacArthur" target="_blank"><div id="share-linkedin">LinkedIn</div></a>
                                        <!--  --><a href="https://plus.google.com/share?url=<?php echo curPageURL(); ?>" target="_blank"><div id="share-googleplus">Google+</div></a>
                                        <a href="mailto:?subject=The Scots Guards Watch&body=http://www.colandmacarthur.com/wip/scots-guards.php"><div id="share-email">Email</div></a>
                                    </div>
                                    <span>SHARE</span>
                                </div>
                            </div>
                            <div id="clear"></div>
                            <div id="article-writer">
                                By Sebastien Colen posted July 15th, 2013 at 02:00 PM
                            </div>

                            <div id="article-text">
                                With over three years of research, development and negotiations, the inauguration of the Scots Guards Watch would not be complete without its personalized website; and as you can see, the site was developed to reflect the pride of all those past and present who maintain that nostalgic dignity gained only by having served with the Brigade.
                                <br><br>
                                Like the watch itself, our website is an on-going affair to be developed and adapted depending on the needs of the company and the advice streaming from our valued friends and surfers.
                                <br>
                                Today, with the Internet finding itself at the heart of every home, Col&MacArthur can now breathe a sigh of satisfaction while thanking our Webmasters for their great work.
                                <br>
                                In the meantime, we hope you enjoy surfing our site and if you have any comments, please feel free to <a href="contact.php">contact us</a>.
                            </div>

                            <div id="article-img">
                                <img id="article-img-src" src="img/article-150713.jpg" alt="">
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