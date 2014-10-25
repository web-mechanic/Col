<?php
    if($_GET['tru']==1)
    {
    setcookie("email", $_GET['email'], time()+3600); // On crée un cookie qui expirera 1 heure plus tard pour des raisons de sécurité.
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset=utf-8>
        <meta name=description content="">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>Subscribe to the newsletter of Col&amp;MacArthur</title>
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
        <!--[if !IE]><!-->
            <script>  
                if (/*@cc_on!@*/false) {  
                    document.documentElement.className+=' ie10';  
                }  
            </script>
        <!--<![endif]--> 
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
                                    <li id="testimonySub"><a href="feedback.php">Testimony</a></li>
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
                    <div id="path"><a href="index.php">Home</a> <img src="img/next.png" alt=""> <a href=""><span>Subscription to the newsletter</span></a></div>
                    <div id="inscription-container">
                    <div id="contact-title">
                        <span>Subscription to the newsletter</span> <br>
                        <p>Please, fill in the following form to complete your registration.</p>
                    </div>
                    <div id="inscription-form">
                        <form method="post" action="inscription.php?tru=2">
                    </br>
                        <div class="required">
                            <input id="inscriptionMail" type="email" name="email" placeholder=" Confirm your e-mail address" required><br>
                        </div>
                    </br>
                        <div>
                            <input id="inscriptionFirstname" type="text" name="firstname" placeholder=" Firstname">
                            <input id="inscriptionLastname" type="text" name="name" placeholder=" Name">
                        </div>
                    <br>
                        <div id="dateofbirthLabel">
                            Date of birth : 
                        </div>
                        <div>
                            <select id="birthmonth" name="birthmonth">
                                <option>January</option>
                                <option>February</option>
                                <option>March</option>
                                <option>April</option>
                                <option>May</option>
                                <option>June</option>
                                <option>July</option>
                                <option>August</option>
                                <option>September</option>
                                <option>October</option>
                                <option>November</option>
                                <option>December</option>
                            </select>
                            <select id="birthday" name="birthday">
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                                <option>16</option>
                                <option>17</option>
                                <option>18</option>
                                <option>19</option>
                                <option>20</option>
                                <option>21</option>
                                <option>22</option>
                                <option>23</option>
                                <option>24</option>
                                <option>25</option>
                                <option>26</option>
                                <option>27</option>
                                <option>28</option>
                                <option>29</option>
                                <option>30</option>
                                <option>31</option>
                            </select>
                        <select id="birthyear" name="birthyear">
                            <option>2000</option>
                            <option>1999</option>
                            <option>1998</option>
                            <option>1997</option>
                            <option>1996</option>
                            <option>1995</option>
                            <option>1994</option>
                            <option>1993</option>
                            <option>1992</option>
                            <option>1991</option>
                            <option>1990</option>
                            <option>1989</option>
                            <option>1988</option>
                            <option>1987</option>
                            <option>1986</option>
                            <option>1985</option>
                            <option>1984</option>
                            <option>1983</option>
                            <option>1982</option>
                            <option>1981</option>
                            <option>1980</option>
                            <option>1979</option>
                            <option>1978</option>
                            <option>1977</option>
                            <option>1976</option>
                            <option>1975</option>
                            <option>1974</option>
                            <option>1973</option>
                            <option>1972</option>
                            <option>1971</option>
                            <option>1970</option>
                            <option>1969</option>
                            <option>1968</option>
                            <option>1967</option>
                            <option>1966</option>
                            <option>1965</option>
                            <option>1964</option>
                            <option>1963</option>
                            <option>1962</option>
                            <option>1961</option>
                            <option>1960</option>
                            <option>1959</option>
                            <option>1958</option>
                            <option>1957</option>
                            <option>1956</option>
                            <option>1955</option>
                            <option>1954</option>
                            <option>1953</option>
                            <option>1952</option>
                            <option>1951</option>
                            <option>1950</option>
                            <option>1949</option>
                            <option>1948</option>
                            <option>1947</option>
                            <option>1946</option>
                            <option>1945</option>
                            <option>1944</option>
                            <option>1943</option>
                            <option>1942</option>
                            <option>1941</option>
                            <option>1940</option>
                            <option>1939</option>
                            <option>1938</option>
                            <option>1937</option>
                            <option>1936</option>
                            <option>1935</option>
                            <option>1934</option>
                            <option>1933</option>
                            <option>1932</option>
                            <option>1931</option>
                            <option>1930</option>
                            <option>1929</option>
                            <option>1928</option>
                            <option>1927</option>
                            <option>1926</option>
                            <option>1925</option>
                            <option>1924</option>
                            <option>1923</option>
                            <option>1922</option>
                            <option>1921</option>
                            <option>1920</option>
                            <option>1919</option>
                            <option>1918</option>
                            <option>1917</option>
                            <option>1916</option>
                            <option>1915</option>
                            <option>1914</option>
                            <option>1913</option>
                            <option>1912</option>
                            <option>1911</option>
                            <option>1910</option>
                            <option>1909</option>
                            <option>1908</option>
                            <option>1907</option>
                            <option>1906</option>
                            <option>1905</option>
                            <option>1904</option>
                            <option>1903</option>
                            <option>1902</option>
                            <option>1901</option>
                            <option>1900</option>
                        </select>
                        </div>
                    <br>
                        <div>
                            <select name="regiment" id="inscriptionRegiment">
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
                    <br>
                        <div class="submit">
                            <input id="inscriptionSubmit" class="button" type="submit" value="Send request" name="submit" /> <input id="inscriptionReset" class="button" type="reset" name="reset" value="Reset form" />
                        </div>
                    </form>
                    </div>
                    <div id="inscription-img"><img src="img/septum-contact.png" alt=""></div>
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
            $email_mail = mysql_real_escape_string($_COOKIE['email']); // on récupère l'email contenu dans le cookie créé au début
            $email_entre = mysql_real_escape_string($_POST['email']); // on récupère l'email que le visiteur a confirmé dans le formulaire
            $name = mysql_real_escape_string($_POST['name']); // on récupère les infos entrées dans le formulaire
            $firstname = mysql_real_escape_string($_POST['firstname']); // idem
            $birth_day = mysql_real_escape_string($_POST['birthday']); // idem
            $birth_month = mysql_real_escape_string($_POST['birthmonth']); // idem
            $birth_year = mysql_real_escape_string($_POST['birthyear']); // idem
            $regiment = mysql_real_escape_string($_POST['regiment']); // idem
            $interested = "Non communiqué";

            if ($regiment=="Your regiment...") {
                $regiment="";
            }

    // SECURITE ANTI XSS -- DEBUT
                if (preg_match('/[^a-z0-9.#$-]/i', $email))
                    {
                        echo "<script>alert(\"Invalid characters found. Please check the fields.\")</script>";
                        echo "<script>window.location.replace('Javascript:history.go(-1)')</script>";
                    }
                else // si il n'y a pas de caractères spéciaux, on exécute ce qui suit
                    //htmlentities (plus bas dans le code) permet de ne pas interpreter les balises html --> sécurité suplémentaire
                    {
    // SECURITE ANTI XSS -- FIN
                        //if ($name=="") // si le champ "name" est vide
                        //    {
                        //        echo "<script>alert(\"Please enter your name\")</script>"; // on le signale
                        //        echo "<script>window.location.replace('Javascript:history.go(-1)')</script>"; // on retourne au formulaire
                        //    }
                        //elseif ($firstname=="") // si le champ "firstname" est vide
                        //    {
                        //        echo "<script>alert(\"Please enter your firstname\")</script>"; // on le signale
                        //        echo "<script>window.location.replace('Javascript:history.go(-1)')</script>"; // on retourne au formulaire
                        //    }
                        //elseif ($regiment=="Choose a regiment...") // si aucun régiment n'a été choisi
                        //    {
                        //        echo "<script>alert(\"Please choose your regiment\")</script>"; // on le signale
                        //        echo "<script>window.location.replace('Javascript:history.go(-1)')</script>"; // on retourne au formulaire
                        //    }
                        //else // si tous les champs sont corrects, on exécute ce qui suit
                            //{
                                if($email_entre==$email_mail) // Si l'adresse email contenue dans le cookie est identique à celle confirmée par le visiteur
                                    {
                                        // does user exist?
                                        $exist = mysql_real_escape_string($email_entre);
                                        $query = "SELECT * FROM news WHERE email='$email_entre';";
                                        $res = mysql_query($query);
                                        
                                        if (mysql_num_rows($res) > 0)
                                            {
                                                echo "<script>alert(\"This email address is already registered.\")</script>";
                                                exit;
                                            }
                                        else
                                            {
                                        // no, user doesn't exist
                                             
                                    
                // on insert les valeurs indiquée dans la base de données
                                        mysql_query("SET NAMES 'utf8'");
                                        mysql_query("INSERT INTO news (email, name, firstname, birth_day, birth_month, birth_year, regiment, interested) VALUES ('".strip_tags($email_entre)."', '".strip_tags($name)."', '".strip_tags($firstname)."', '".$birth_day."', '".$birth_month."', '".$birth_year."', '".$regiment."', '".$interested."')");
                                        echo "<script>alert(\"Congratulations, you have just subscribed to the Col&MacArthur's newsletter!\")</script>"; // confirmation d'inscription


                                        // On définit les paramètres de l'e-mail que le client va recevoir.
                                        $message = 'You have successfully subscribed to the Col&MacArthur\'s newsletter.<br><br>We, in turn, will periodically update you with a news summary containing prototype-improvements, technical data and agenda.<br><br>We thank you in advance for your interest and more especially, the patience you have shown relative to the vital period of time needed for research and development.<br><br>Should you have any question, please contact us at info@colandmacarthur.com. We\'ll be glad to help you<br><br>The Col&MacArthur team.';
                                        $destinataire = ($_POST['email']);
                                        $objet = "Confirmation to your subscription to Col&MacArthur's newsletter" ;
                                        $headers  = 'MIME-Version: 1.0' . "\r\n";
                                        $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                                        $headers .= 'From: newsletter@colandmacarthur.com' . "\r\n";
                                        mail($destinataire, $objet, $message, $headers);
                                        // Fin de l'envoi du mail au client

                                        // On définit les paramètres de l'e-mail que l'administrateur va recevoir.
                                        $messageAdmin = "Une nouvelle personne s'est inscrite à la newsletter :<br><br>Email : ".$_POST['email']."<br>Prénom : ".$firstname."<br>Nom : ".$name."<br>Intéressé par la montre? ".$interested."";
                                        $destinataireAdmin = "colen.seb@gmail.com";
                                        $objetAdmin = "Nouvelle inscription à la newsletter";
                                        $headersAdmin  = 'MIME-Version: 1.0' . "\r\n";
                                        $headersAdmin .= 'Content-type: text/html; charset=utf-8' . "\r\n";
                                        $headersAdmin .= 'From: newsletter@colandmacarthur.com' . "\r\n";
                                        mail($destinataireAdmin, $objetAdmin, $messageAdmin, $headersAdmin);
                                        // Fin de l'envoi du mail à l'administrateur


                                        print("<script type=\"text/javascript\">setTimeout('location=(\"index.php\")' ,10);</script>");
                                            }
                                    }
                                        else // si l'adresse email contenu dans le cookie n'est pas identique à celle confirmée par le visiteur
                                    {
                                        echo "<script>alert(\"You have not entered the correct email\")</script>"; // on le signale
                                        echo "<script>window.location.replace('Javascript:history.go(-1)')</script>"; // on retourne au formulaire
                                    }
                            //}
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