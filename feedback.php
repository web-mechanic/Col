<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta charset=utf-8>
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
                    <div id="path"><a href="index.php">Home</a> <img src="img/next.png" alt=""> <a href="">Our Commitment</a> <img src="img/next.png" alt=""> <a href=""><span>Feedback</span></a></div>
                    <div id="testimony-container">
                        <?php
                        if (isset($_COOKIE['testimonyCookie'])) {
                            echo "<div id='testimony-wait' style='display:none;''><!--  --></div>
                             <script>$('#testimony-wait').fadeIn(2000).delay(6000).fadeOut(2000);</script>";
                        }
                        ?>
                        <div id="testimony-wait" style="display:none;">
                            <!--  -->
                        </div>
                        <div id="testimony-title">
                            <span>Customer Testimony</span>
                            <p>At Col&MacArthur, your opinion matters.</p>
                        </div>
                        <div id="testimony-content">
                            <input type="submit" id="btnShowSubmit" class="button" value="Click here to submit your review" onClick="openSubmitTab(), clickShowBtn()"/>
                            <input type="submit" id="btnHideSubmit" class="button" style="display:none;" value="Click here to hide form" onClick="closeSubmitTab(), clickHideBtn()"/>
                            <div id="submitForm">
                                <div id="TestimonyTitle">Submit your review</div>
                                <form method="post" action="testimony-create.php"/>
                                    <input type="text" name="nom" id="SubmitName" placeholder=" Name" required>
                                    <br><br>
                                    Rating :
                                    <select name="rating">
                                        <option value="5">5</option>
                                        <option value="4">4</option>
                                        <option value="3">3</option>
                                        <option value="2">2</option>
                                        <option value="1">1</option>
                                    </select>
                                    <br><br>
                                    <input type="text" name="titre" id="SubmitTitle" placeholder =" Review title" required/>
                                    <br><br>
                                    <textarea name="contenu" id="SubmitContenu" placeholder=" Review" required></textarea>
                                    <br><br>
                                    <input type="submit" class="button" id="testimony-submit" value="Submit your review" onClick="fade()"/>
                                </form>
                            </div>
                            <br><br>
                            <script language=javascript>
                                function openSubmitTab() {
                                    submitForm.style.display = 'block';
                                }
                                function closeSubmitTab() {
                                    submitForm.style.display = 'none';
                                }
                                function clickShowBtn() {
                                    btnShowSubmit.style.display = 'none';
                                    btnHideSubmit.style.display = 'block';
                                }
                                function clickHideBtn() {
                                    btnShowSubmit.style.display = 'block';
                                    btnHideSubmit.style.display = 'none';
                                }
                            </script>
                            

                            <?php
                            //Connexion à la base de données
                            mysql_connect("colandmacarthur.com.mysql", "colandmacarthur", "wjzcQiSM");
                            mysql_select_db("colandmacarthur");
                            mysql_query("SET NAMES UTF8"); 
                            
                            $messagesParPage=5; //Nous allons afficher 2 messages par page.
                            $validation = 1;
                            //Une connexion SQL doit être ouverte avant cette ligne...
                            $retour_total=mysql_query('SELECT COUNT(*) AS total FROM testimony WHERE validation="1"'); //Nous récupérons le contenu de la requête dans $retour_total
                            $donnees_total=mysql_fetch_assoc($retour_total); //On range retour sous la forme d'un tableau.
                            $total=$donnees_total['total']; //On récupère le total pour le placer dans la variable $total.
                            
                            //Nous allons maintenant compter le nombre de pages.
                            $nombreDePages=ceil($total/$messagesParPage);
                            
                            if(isset($_GET['page'])) // Si la variable $_GET['page'] existe...
                            {
                                 $pageActuelle=intval($_GET['page']);
                                 
                                 if($pageActuelle>$nombreDePages) // Si la valeur de $pageActuelle (le numéro de la page) est plus grande que $nombreDePages...
                                 {
                                      $pageActuelle=$nombreDePages;
                                 }
                            }
                            else // Sinon
                            {
                                 $pageActuelle=1; // La page actuelle est la n°1    
                            }
                            
                            $premiereEntree=($pageActuelle-1)*$messagesParPage; // On calcul la première entrée à lire
                            
                            // La requête sql pour récupérer les messages de la page actuelle.
                            $retour_messages=mysql_query('SELECT * FROM testimony WHERE validation="1" ORDER BY id DESC LIMIT '.$premiereEntree.', '.$messagesParPage.'');
                            while($donnees_messages=mysql_fetch_assoc($retour_messages)) // On lit les entrées une à une grâce à une boucle
                            {
                            
                            $description=stripslashes($donnees_messages['contenu']);
                            
                                 //Je vais afficher les messages dans des petits tableaux. C'est à vous d'adapter pour votre design...
                                 //De plus j'ajoute aussi un nl2br pour prendre en compte les sauts à la ligne dans le message.
                            if ($donnees_messages["validation"] == 1) {

                                str_replace($donnees_messages["nom"], "''", "'");
                                str_replace($donnees_messages["titre"], "''", "'");
                                str_replace($donnees_messages["contenu"], "''", "'");
    
                                echo "<div class='testimony-bloc'>
                                <h1>".stripslashes($donnees_messages['titre'])."</h1>
                                <div class='ratingvalue".stripslashes($donnees_messages['rating'])."'><!--  --></div><h2>".stripslashes($donnees_messages['dateTestimony'])." by ".stripslashes($donnees_messages['nom'])."</h2>
                                <p>".$description."</p>
                                </div>";
                                }
                            }
                            //Affichage de la pagination
                            $prev = ($pageActuelle-1);
                            if ($prev<=1) {
                                $prev=1;
                            }
                            $next = ($pageActuelle+1);
                            if ($next>=$nombreDePages) {
                                $next=$nombreDePages;
                            }
                            echo '<div id="pagination"><p align="center">'; //Pour l'affichage, on centre la liste des pages
                            if ($pageActuelle==1) {
                                echo '<img src="img/pagination-left.png" alt="">';
                            }
                            else {
                                echo '<a href="feedback.php?page='.$prev.'"><img src="img/pagination-left.png" alt=""></a>';
                            }
                            for($i=1; $i<=$nombreDePages; $i++) //On fait notre boucle
                            {
                                 //On va faire notre condition
                                 if($i==$pageActuelle) //Si il s'agit de la page actuelle...
                                 {
                                    echo '<img src="img/pagination-'.$i.'-on.png" alt="">';
                                 }  
                                 else //Sinon...
                                 {
                                      echo '<a href="feedback.php?page='.$i.'"><img src="img/pagination-'.$i.'.png" alt=""></a>';
                                 }
                            }
                            if ($pageActuelle==$nombreDePages) {
                                echo '<img src="img/pagination-right.png" alt="">';
                            }
                            else { 
                                echo '<a href="feedback.php?page='.$next.'"><img src="img/pagination-right.png" alt=""></a>';
                            }
                            
                            echo '</p></div>';
                            
                            ?>


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