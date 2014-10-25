<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta charset=utf-8>
        <meta name=description content="">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>Privacy policy</title>
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
                    <div id="path"><a href="index.php">Index</a> <img src="img/next.png" alt=""> <a href="privacy-policy.php"><span>Privacy policy</span></a></div>
                    <div id="privacy-policy-container">
                        <div id="privacy-policy-title">Privacy policy</div>
                        <div id="privacy-policy-content">
                            <p>We commit ourselves to protecting and respecting your privacy when visiting our website. <br>
                            <p>This privacy policy sets out how we will process and use any personal data you may wish to provide. Please read the following information to understand our practices with regards to your data and how we will treat it.</p>
                        </div>
                        <div id="privacy-policy-separator"><!-- --></div>
                        <div id="privacy-information-title">Information collected</div>
                        <div id="privacy-information-content">
                            We will collect and process the following data :
                            <ul>
                                <li>All information that you provide by filling in our forms and surveys.  This includes information at the time of registering to purchase via our website.</li>
                                <li>We may keep a record of any postal correspondence.</li>
                                <li>Details of the resources you access relative to your visits to our site.</li>
                            </ul>
                        </div>
                        <div id="privacy-policy-separator"><!-- --></div>
                        <div id="privacy-management-title">The management of collected information</div>
                        <div id="privacy-management-content">
                            We use the information held about you for the following reasons :
                            <ul>
                                <li>To notify you of any changes to our service.</li>
                                <li>To ensure that the content of our site is presented in the most effective manner for you and your computer.</li>
                                <li>Where <i>you</i> have consented to be contacted : In order to receive information, products and services that would be of interest to you.</li>
                                <li>In allowing ourselves to carry out our obligations concerning any contracts entered into between you and us, plus after sales services.</li>
                            </ul>
                            <br>
                            Concerning the very rare occasion where we may use your data to inform and provide information on goods and services; if by any chance you do not want your data to be used in this way, please email us at <a href="mailto:info@colandmacarthur.com">info@colandmacarthur.com</a> with a subject heading : "No Col&amp;MacArthur material".
                        </div>
                        <div id="privacy-policy-separator"><!-- --></div>
                        <div id="privacy-access-title">Access to information</div>
                        <div id="privacy-access-content">
                            In accordance with the above, you can exercise the right to access the collected information we hold about you.
                        </div>
                        <div id="privacy-policy-separator"><!-- --></div>
                        <div id="privacy-changes-title">Changes to our privacy policy</div>
                        <div id="privacy-changes-content">Any future changes made to our privacy policy will be posted on this web-page.</div>
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