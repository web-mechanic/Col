<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8>
        <meta name=description content="">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>Unsubscribe to the newsletter of Col&amp;MacArthur</title>
<?php
    if($_GET['tru']==2)
        {
?>

<meta http-equiv="refresh" content="3; url=http://www.colandmacarthur.com/" /> <!-- Redirection vers la page d'accueil du site si on a entré son e-mail. -->
     
<?php
        }
    else
        {
?>
 
 
<?php
        }
?>
 
        <link href='http://fonts.googleapis.com/css?family=Noto+Serif:400italic,700,700italic,400' rel='stylesheet' type='text/css'>
        <link rel=stylesheet href="style.css" media="screen">
        <!--[if IE 9]>
        <link rel="stylesheet" type="text/css" href="style-ie9.css" />
        <![endif]-->
        <!--[if lte IE 8]>
        <link rel="stylesheet" type="text/css" href="style-ie8.css" />
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
<?php
    if($_GET['tru']==1) //Si la variable $_GET['tru'] est égale à 1 on affiche le formulaire
        {
?>
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
                    <div id="header"> <!-- Contient : Logo, Search, Menu,  -->
                        <a href="index.php" alt="Home page" title="Home page"><div id="logo"></div></a>
                        <!-- <div id="search">
                            <form action="#">
                                <input type="text" name="result" id="search" placeholder="  Search">
                            </form>
                        </div> -->
                        <!-- <div id="newsletter">
                            <form action="#">
                                <input type="text" name="result" placeholder="  your-email@domain.com">
                            </form>
                        </div> -->
                        <div class="grey">
                        <ul id="mega-menu-3" class="mega-menu">
                            <li class="ourcompany" class="menu"><a href="our-company.php"><span>Learn about</span><p>OUR COMPANY</p></a>
                                <ul id="ourcompany-submenu">
                                    <li id="about-us"><a href="our-company.php">About us</a></li>
                                    <li id="savoir-faire"><a href="our-company.php#savoirfaire-title">Savoir-Faire</a></li>
                                </ul>
                            </li>
                            <div id="separatorvertical"></div>
                            <li class="news" class="menu"><a href="news.php"><span>Latest</span><p>NEWS</p></a></li>
                            <div id="separatorvertical"></div>
                            <li class="guarantee" class="menu"><a href="guarantee.php"><span>Our</span><p>COMMITMENT</p></a>
                                <ul id="guarantee-submenu">
                                    <li id="guaranteeSub"><a href="guarantee.php">Guarantee</a></li>
                                    <li id="modSub"><a href="ministry-of-defence.php">MoD Licensed</a></li>
                                    <li id="testimonySub"><a href="feedback.php">Feedback</a></li>
                                </ul>
                            </li>
                            <div id="separatorvertical"></div>
                            <li class="purchase" class="menu"><a href="purchase.php"><span>How to</span><p>PURCHASE</p></a>
                                <ul id="purchase-submenu">
                                    <li id="how-to-buy"><a href="purchase.php">Ordering</a></li>
                                    <li id="donations"><a href="donations.php">Donations</a></li>
                                </ul>
                            </li>
                            <div id="separatorvertical"></div>
                            <li class="contact" class="menu"><a href="contact.php"><span>Information &amp;</span><p>CONTACT</p></a></li>
                        </ul>
                        </div>
                        <div id="separatormenu"><!-- --></div>
                    </div> <!-- On ferme le header -->
                <div id="content"> <!-- Contenu quelconque -->
                    <div id="path"><a href="index.php">Home</a> <img src="img/next.png" alt=""> <a href=""><span>Unsubscribe to the newsletter</span></a></div>
                    <div id="desinscription-container">
                    <div id="contact-title">
                        <span>Unsubscribe to the newsletter</span> <br>
                        <p>Please, enter your email address to unsubscribe to the newsletter.</p>
                    </div>
                    <div id="desinscription-form">
                        <form method="post" action="desinscription.php?tru=2">
                    </br>
                        <div class="required">
                            <input id="desinscriptionMail" type="email" name="email" placeholder=" Confirm your e-mail address" required><br>
                        </div>
                    <br>
                        <div class="submit">
                            <input id="desinscriptionSubmit" class="button" type="submit" value="Send request" name="submit" />
                        </div>
                    </form>
                    </div>
            </div> <!-- On ferme le contenu quelconque -->
            </div> <!-- On ferme le top -->
        </div> <!-- On ferme le conteneur footer -->
        </div> <!-- On ferme le conteneur principal -->
        <?php
        }
    elseif($_GET['tru']==2) // Sinon, si la variable $_GET['tru'] est égale à 2.
        {
            $db = mysql_connect("colandmacarthur.com.mysql", "colandmacarthur", "wjzcQiSM"); // on se connecte à la DB
            mysql_select_db("colandmacarthur",$db); // on sélectionne la DB
            mysql_query("SET NAMES 'utf8'");
            $email = mysql_real_escape_string($_POST['email']); // on récupère l'email que le visiteur a confirmé dans le formulaire
            if (isset($email))
                {
                    mysql_query("DELETE FROM news WHERE email='".strip_tags($email)."'"); //On supprime l'adresse de la BDD.
                    echo "<script>alert(\"You have been unsubscribed to the Col&MacArthur's newsletter.\")</script>"; // confirmation d'inscription
                    // On définit les paramètres de l'e-mail que le client va recevoir.
                                        $message = 'You have successfully unsubscribed to the Col&MacArthur\'s newsletter.<br><br>If it was an error, you can resubscribe on this page : http://www.colandmacarthur.com/contact.php<br><br>Should you have any question, please contact us at info@colandmacarthur.com. We\'ll be glad to help you<br><br>The Col&MacArthur team.';
                                        $destinataire = ($_POST['email']);
                                        $objet = "Confirmation to your subscription to Col&MacArthur's newsletter" ;
                                        $headers  = 'MIME-Version: 1.0' . "\r\n";
                                        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                                        $headers .= 'From: newsletter@colandmacarthur.com' . "\r\n";
                                        mail($destinataire, $objet, $message, $headers);
                    // Fin de l'envoi du mail au client
                    print("<script type=\"text/javascript\">setTimeout('location=(\"index.php\")' ,10);</script>");
                }
        }
    else
        {
    echo "<script>alert(\"There was an error. Please retry later.\")</script>";
    print("<script type=\"text/javascript\">setTimeout('location=(\"index.php\")' ,10);</script>");
        }
        // CLOSE CONNEXION TO DB
?>
</div> <!-- FIN DIV NOSCRIPT -->
</body>
</html>