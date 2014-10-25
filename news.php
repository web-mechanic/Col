<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta charset=utf-8>
        <meta name=description content="">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>The last news of Col&amp;MacArthur</title>
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
        <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.1.1.min.js"></script>
        <script type="text/javascript" src='js/jquery.hoverIntent.minified.js'></script>
        <script type="text/javascript" src='js/jquery.dcmegamenu.1.3.3.js'></script>
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
                    <div id="path"><a href="index.php">Home</a> <img src="img/next.png" alt=""> <a href="news.php"><span>News</span></a></div>
                        <div id="news-container">
                        <div id="lastNews-title">
                                <span>Last news</span>
                        </div>
                        <div class="newsCarrousel">
                            <div id="carrousel">
                                <div id="slide1" class="slide">
                                    <div class="visu">
                                        <div class="caroussel-inline">
                                            <h1>The Col&MacArthur Website is opening</h1><a href="article-15072013.php">More information</a>
                                        </div>
                                        <img src="img/slide3.png" alt="">
                                    </div>
                                </div>
                                <div id="slide2" class="slide">
                                    <div class="visu">
                                        <div class="caroussel-inline">
                                            <h1>A bigger insignia</h1><a href="article-14072013.php">More information</a>
                                        </div>
                                        <img src="img/slide2.png" alt="">
                                    </div>
                                </div>
                                <div id="slide3" class="slide">
                                    <div class="visu">
                                        <div class="caroussel-inline">
                                            <h1>Col&MacArthur : Watch Manufacturing</h1><a href="article-12072013.php">More information</a>
                                        </div>
                                        <img src="img/slide1.png" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="carousselprev" id="carousselprev"></div>
                            <div class="carousselnext" id="carousselnext"></div>

                            <!-- SCRIPT CARROUSEL -->
                            <script type="text/javascript" src="js/carrousel.js"></script>
                            <!-- FIN SCRIPT CARROUSEL -->
                            
                            <div id="contact-separator"></div>
                    </div>
                    <div id="previousNews-title">
                        <span>Previous news</span>
                    </div>
                    
                    <div id="previousNews-content">

<?php
//Connexion à la base de données
mysql_connect("colandmacarthur.com.mysql", "colandmacarthur", "wjzcQiSM");
mysql_select_db("colandmacarthur");

$messagesParPage=2; //Nous allons afficher 2 messages par page.

//Une connexion SQL doit être ouverte avant cette ligne...
$retour_total=mysql_query('SELECT COUNT(*) AS total FROM articles'); //Nous récupérons le contenu de la requête dans $retour_total
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
$max_caracteres=275;

// La requête sql pour récupérer les messages de la page actuelle.
$retour_messages=mysql_query('SELECT * FROM articles ORDER BY id DESC LIMIT '.$premiereEntree.', '.$messagesParPage.'');
while($donnees_messages=mysql_fetch_assoc($retour_messages)) // On lit les entrées une à une grâce à une boucle
{

$description=stripslashes($donnees_messages['contenu']);
// Test si la longueur du texte dépasse la limite
if (strlen($description)>$max_caracteres)
{    
// Séléction du maximum de caractères
$description = substr($description, 0, $max_caracteres);
// Récupération de la position du dernier espace (afin déviter de tronquer un mot)
$position_espace = strrpos($description, " ");    
$description = substr($description, 0, $position_espace);    
// Ajout des "..."
$description = $description." <a href='".$donnees_messages['lienArticle']."'>[...]</a>";
}
     //Je vais afficher les messages dans des petits tableaux. C'est à vous d'adapter pour votre design...
     //De plus j'ajoute aussi un nl2br pour prendre en compte les sauts à la ligne dans le message.
echo "<div class='previousNews'>
<a href='".$donnees_messages['lienArticle']."'><img src='".$donnees_messages['imageurl']."'></a>
<h1>".stripslashes($donnees_messages['titre'])."</h1>
<h2>".stripslashes($donnees_messages['dateArticle'])."</h2>
<p>".$description."</p>
<span><a href='".$donnees_messages['lienArticle']."'>Read more.</a></span>
</div>";
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
    echo '<a href="news.php?page='.$prev.'"><img src="img/pagination-left.png" alt=""></a>';
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
          echo '<a href="news.php?page='.$i.'"><img src="img/pagination-'.$i.'.png" alt=""></a>';
     }
}
if ($pageActuelle==$nombreDePages) {
    echo '<img src="img/pagination-right.png" alt="">';
}
else { 
    echo '<a href="news.php?page='.$next.'"><img src="img/pagination-right.png" alt=""></a>';
}

echo '</p></div>';

?>
                    </div>
                    
                    </div>
                </div> <!-- On ferme le contenu quelconque -->
            </div> <!-- On ferme le top -->
            <div id="middle"></div> <!-- Middle à 800px "middle-800" ou Middle simple "middle" -->
            <div id="news-presiteplan"><!--  --></div>
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