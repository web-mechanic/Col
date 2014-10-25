<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta charset=iso-8859-1>
        <meta name=description content="">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>Contact Col&amp;MacArthur</title>
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
         <?php
    if(isset($_GET['email'])) // On vérifie que la variable $_GET['email'] existe.
    {
        if( !empty($_POST['NewsletterMail']) AND $_GET['email']==1) /* On vérifie que la variable $_POST['email'] contient bien quelque chose, que la variable $_GET['email'] est égale à 1 et que la variable $_POST['new'] existe. */
        {
            if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['NewsletterMail'])) // On vérifie qu'on a bien rentré une adresse e-mail valide.
            {
                // On définit les paramètres de l'e-mail.
                $email = $_POST['NewsletterMail'];
                $message = 'To validate your subscription to the Col&MacArthur\'s newsletter, please <a href="http://www.colandmacarthur.com/inscription.php?tru=1&amp;email='.$email.'">click here</a>.';
                $destinataire = $email;
                $objet = "Subscription to Col&MacArthur's newsletter" ;
    
                $headers  = 'MIME-Version: 1.0' . "\r\n";
                $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
                $headers .= 'From: newsletter@colandmacarthur.com' . "\r\n";
                // Est-ce que l'email existe déjà ?
                    $db = mysql_connect("colandmacarthur.com.mysql", "colandmacarthur", "wjzcQiSM"); // on se connecte à la DB
                    mysql_select_db("colandmacarthur",$db); // on sélectionne la DB
                    $mailcheck = $_POST['NewsletterMail']; // on récupère l'email entré par l'utilisateur
                    $exist = mysql_real_escape_string($_POST['NewsletterMail']);
                    $query = "SELECT * FROM news WHERE email='$mailcheck';"; // on sélectionne dabns la DB les valeurs identiques à l'email
                    $res = mysql_query($query); // on sort le résultat de la sélection 
                    if (mysql_num_rows($res) > 0) // si l'email existe déjà dans la base de donnée
                        {
                            echo "<script>alert('This email address is already registered.')</script>";
                            print("<script type=\"text/javascript\">setTimeout('location=(\"contact.php\")' ,10);</script>");
                            exit;       
                        }
                    else // si l'email n'existe pas encore dans la base de données
                        {
                            if ( mail($destinataire, $objet, $message, $headers) ) {// On envoie l'e-mail.
                                echo "<script>alert('To validate your registration, please click on the link in the email we just sent you.')</script>";
                                print("<script type=\"text/javascript\">setTimeout('location=(\"contact.php\")' ,10);</script>");
                            }
                            else {
                                echo "<script>alert('There was an error when sending the email for your registration.')</script>";
                                print("<script type=\"text/javascript\">setTimeout('location=(\"contact.php\")' ,10);</script>");
                            }
                        }
            
            }
            else  {
                echo "<script>alert(\"The email address seems to be invalid. Please check it.\")</script>";
                echo "<script>window.location.replace('Javascript:history.go(-1)')</script>";
            }
        }
        else {
            echo "<script>alert(\"There was an error ! Please contact the administrator.\")</script>";
            print("<script type=\"text/javascript\">setTimeout('location=(\"contact.php\")' ,10);</script>");
            exit;
        }
    }
    else // Si les champs n'ont pas été remplis, on affiche le formulaire.
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
        			<?php
                    include "menu.php";
                    ?>


                        <?php
                    include "menu2.php";
                    ?>
                <div id="content"> <!-- Contenu quelconque -->
                    <div id="path"><a href="index.php">Home</a> <img src="img/next.png" alt=""> <a href="contact.php"><span>Contact</span></a></div>

                    <div id="contact-container">
                    <div id="contact-title">
                        <span>Write to Col &amp; MacArthur</span> <br>
                        <p>If you have any questions, comments, or requests, please feel free to fill in the following form.</p>
                    </div>
                    
                    <div id="contact-form">
                        <form action="send.php" id="ContactIndexForm" method="post" accept-charset="iso-8859-1">
                    </br>
                        <div>
                            <input maxlength="30" type="text" name="ContactFirstname" id="ContactFirstname" placeholder=" Your first name">
                            <input maxlength="30" type="text" name="ContactLastname" id="ContactLastname" placeholder=" Your last name">
                        </div>  
                    </br>
                        <div class="required">
                            <input maxlength="50" type="email" name="ContactMail" id="ContactMail" placeholder=" Your email address" required>
                        </div>
                    </br>
                        <div>
                            <select name="ContactRegiment" id="ContactRegiment">
                                <option>Your regiment...</option>
                                <option>The Life Guards</option>
                                <option>The Blues and Royals</option>
                                <option>The Grenadier Guards</option>
                                <option>The Scots Guards</option>
                                <option>The Welsh Guards</option>
                                <option>The Irish Guards</option>
                                <option>The Coldstream Guards</option>
                                <option>Not from Guards division</option>
                             </select>
                        </div>
                    </br>
                        <div class="required">
                            <textarea cols="30" rows="6" name="ContactContent" id="ContactContent" placeholder=" Your request" required></textarea>
                        </div>
                    </br>
                        <div class="submit">
                            <input type="submit" id="ContactSubmit" value="Submit" class="button"/>
                        </div>
                    </form>
                    </div>
                    
                    <div id="contact-img"><img src="img/septum-contact.png" alt=""></div>
                    
                    <div id="contact-separator"><!-- --></div>
                    
                    <div id="newsletter-title-container">
                        <div id="newsletter-title"><span>Connect with Col &amp; MacArthur</span>
                        <p>Subscribe to our newsletter.</p></div>
                    </div>
                    
                    <div id="socialnetwork-title-container">
                        <div id="socialnetwork-title"><span>Follow us</span><p>Latest news directly from your favourite social network.</p></div>
                    </div>
                    
                    <div id="newsletter-form">
                        <form action="contact.php?email=1" id="NewsletterIndexForm" method="post" accept-charset="iso-8859-1">
                    </br>
                        <div class="required">
                            <input maxlength="50" type="email" id="NewsletterMail" name="NewsletterMail" placeholder=" Your-email@domain.com" required></br>
                        </div>
                    </br>
                        <div class="submit">
                            <input type="submit" id="NewsletterSubmit" value="Submit" class="button"/>
                        </div>
                    </form>
                    </div>
                    
                    <div id="socialnetwork-img">
                        <div id="socialnetwork-img-container">
                            <a href="https://www.facebook.com/scotsguards.watch"><img src="img/contact-facebook.gif" alt="Facebook" title="Facebook" onmouseover="this.src='img/contact-facebook-hover.gif'" onmouseout="this.src='img/contact-facebook.gif'"></a>
                            <a href="http://www.linkedin.com/company/3197111"><img src="img/contact-linkedin.gif" alt="LinkedIn" title="LinkedIn" onmouseover="this.src='img/contact-linkedin-hover.gif'" onmouseout="this.src='img/contact-linkedin.gif'"></a>
                            <a href="https://twitter.com/colandmacarthur"><img src="img/contact-twitter.gif" alt="Twitter" title="Twitter" onmouseover="this.src='img/contact-twitter-hover.gif'" onmouseout="this.src='img/contact-twitter.gif'"></a>
                            <!-- <a href="#"><img src="img/contact-youtube.gif" alt="Youtube" title="Youtube" onmouseover="this.src='img/contact-youtube-hover.gif'" onmouseout="this.src='img/contact-youtube.gif'"></a> -->
                            <a href="https://plus.google.com/106205307012829298222"><img src="img/contact-googleplus.gif" alt="Google+" title="Google+" onmouseover="this.src='img/contact-googleplus-hover.gif'" onmouseout="this.src='img/contact-googleplus.gif'"></a>
                            <a href="http://pinterest.com/colandmacarthur/"><img src="img/contact-pinterest.gif" alt="Pinterest" title="Pinterest" onmouseover="this.src='img/contact-pinterest-hover.gif'" onmouseout="this.src='img/contact-pinterest.gif'"></a>
                        </div>
                        <div id="contact-compulsory"><img src="img/asterisk.png" alt="">Compulsory fields</div>
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
        <?php
    }
?>
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