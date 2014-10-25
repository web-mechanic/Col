<?php
require 'paypal.php';

if ($_POST['PurchaseWatch'] == 'SG') {
    $watchname = "Scots Guards Watch";
    $watchprice = "299.0";
}

// Les autres montres (ajouté le 02/04/2014) vvvvvvvv DEBUT
if ($_POST['PurchaseWatch'] == 'HC') {
    $watchname = "Household Cavalry Watch";
    $watchprice = "299.0";
}
if ($_POST['PurchaseWatch'] == 'GG') {
    $watchname = "Grenadier Guards Watch";
    $watchprice = "299.0";
}
if ($_POST['PurchaseWatch'] == 'WG') {
    $watchname = "Welsh Guards Watch";
    $watchprice = "299.0";
}
if ($_POST['PurchaseWatch'] == 'IG') {
    $watchname = "Irish Guards Watch";
    $watchprice = "299.0";
}
if ($_POST['PurchaseWatch'] == 'CG') {
    $watchname = "Coldstream Guards Watch";
    $watchprice = "299.0";
}
// Les autres montres (ajouté le 02/04/2014) ^^^^^^^^ FIN

if ($_POST['PurchaseWrist'] == 'Leather') {
    $wristname = "Leather Wrist (free)";
    $wristprice = "0.0";
}
if ($_POST['PurchaseWrist'] == 'Steel') {
    $wristname = "Stainless Steel Wrist";
    $wristprice = "20.0";
}
if ($_POST['engravingQtyHidden'] == '1') {
    $engravingprice = "30.0";
}else{
    $engravingprice = "0.0";
}
$engravingContent =  $_POST["PurchaseEngravingContent"];

$totalCheck = $watchprice + $wristprice + $engravingprice;

// IF pas d'engraving alors $products = ...
// Else $products = ...

if ($_POST['engravingQtyHidden']) {
    $products = array(
    array(
        "name" => $watchname,
        "price" => $watchprice,
        "count" => 1
        ),
    array(
        "name" => $wristname,
        "price" => $wristprice,
        "count" => 1
        ),
    array(
        "name" => "Engraving",
        "price" => $engravingprice,
        "count" => $_POST['engravingQtyHidden']
        )
    );
}
else {
    $products = array(
    array(
        "name" => $watchname,
        "price" => $watchprice,
        "count" => 1
        ),
    array(
        "name" => $wristname,
        "price" => $wristprice,
        "count" => 1
        )
    );
}



$total = $_POST['totalTotalPriceHidden'];

/*$port = 10.0;*/ // Je retire les frais de port
$paypal = "#";
$paypal = new Paypal();
$params = array(
    'RETURNURL' => 'http://www.colandmacarthur.com/process.php',
    'CANCELURL' => 'http://www.colandmacarthur.com/cancel.php',

    'PAYMENTREQUEST_0_AMT' => $total /*+ $port*/, // Je retire les frais de port
    'PAYMENTREQUEST_0_CURRENCYCODE' => 'GBP',
    /*'PAYMENTREQUEST_0_SHIPPINGAMT' => $port,*/ // Je retire les frais de port
    'PAYMENTREQUEST_0_ITEMAMT' => $total,
    'LOGOIMG' => 'https://static.e-junkie.com/sslpic/113922.72e41e58e83870506dc6ea548051f0e8.gif',
    'CARTBORDERCOLOR' => '000000'
    );
foreach ($products as $k => $product) {
    $params["L_PAYMENTREQUEST_0_NAME$k"] = $product['name'];
    $params["L_PAYMENTREQUEST_0_DESC$k"] = '';
    $params["L_PAYMENTREQUEST_0_AMT$k"] = $product['price'];
    $params["L_PAYMENTREQUEST_0_QTY$k"] = $product['count'];
}
$response = $paypal->request ('SetExpressCheckout', $params);
if ($response) {
    $paypal = 'https://www.paypal.com/webscr?cmd=_express-checkout&useraction=commit&token=' . $response['TOKEN']; // www.sandbox.paypal.com EN MODE TEST
}
else {
    echo "<pre>";
    var_dump($paypal->errors);
    echo "</pre>";
    die('Erreur ');
}
// PREPARATION PAGE VIREMENT
session_destroy(); // on détruit la session précédente
session_start(); // On crée une nouvelle session
$today = date("F j, Y");
$_SESSION['watchReference'] = "00";
$_SESSION['watch']=  $_POST["PurchaseWatch"];
if ($_SESSION['watch']=="SG") {
    $_SESSION['watchReference'] = "01-";
}
if ($_SESSION['watch']=="SG") {
    $_SESSION['watch'] = "The Scots Guards Watch";
}
$_SESSION['referenceOrder'] = date("dm\-yH\-is");
$_SESSION['firstname'] = $_POST["PurchaseFirstname"];
$_SESSION['lastname'] =  $_POST["PurchaseLastname"];
$_SESSION['address'] =  $_POST["PurchaseAddress1"] ." ". $_POST["PurchaseAddress2"];
$_SESSION['country'] =  $_POST["PurchaseCountry"];
$_SESSION['pc'] = $_POST["PurchasePC"];
$_SESSION['city'] = $_POST["PurchaseCity"];
$_SESSION['state'] = $_POST["PurchaseState"];
$_SESSION['mail'] = $_POST["PurchaseMail"];

$_SESSION['shipfirstname'] = $_POST["ShipFirstname"];
$_SESSION['shiplastname'] =  $_POST["ShipLastname"];
$_SESSION['shipaddress'] =  $_POST["ShipAddress1"] ." ". $_POST["ShipAddress2"];
$_SESSION['shipcountry'] =  $_POST["ShipCountry"];
$_SESSION['shippc'] =  $_POST["ShipPC"];
$_SESSION['shipcity'] =  $_POST["ShipCity"];
$_SESSION['shipstate'] =  $_POST["ShipState"];
$_SESSION['shipmail'] =  $_POST["ShipMail"];

$_SESSION['engraving'] =  "No";
if ($_POST["PurchaseEngravingChk"]) {
    $_SESSION['engraving'] = "Yes";
}

$_SESSION['engravingContent']   =  $_POST["PurchaseEngravingContent"];

$_SESSION['engravingLine1'] = $_POST["engravingLine1Hidden"];
$_SESSION['engravingLine2'] = $_POST["engravingLine2Hidden"];
$_SESSION['engravingLine3'] = $_POST["engravingLine3Hidden"];

$_SESSION['engravingTable'] = "&nbsp;";

if ($_SESSION['engravingContent'] != "") {
    $_SESSION['engravingTable'] = "<br><table border='0' cellpadding='5' cellspacing='0'>
                            <tbody>
                                <tr>
                                    <td>Engraving particular :</td>
                                </tr>
                            </tbody>
                        </table>
                        <table border='0' cellpadding='5' cellspacing='0'>
                            <tbody>
                                <tr bgcolor='#F4F4F4'>
                                    <td width='50'>Line 1 : </td>
                                    <td>".$_SESSION['engravingLine1']."&nbsp;</td>
                                </tr>
                                <tr>
                                    <td>Line 2 : </td>
                                    <td>".$_SESSION['engravingLine2']."&nbsp;</td>
                                </tr>
                                <tr bgcolor='#F4F4F4'>
                                    <td>Line 3 : </td>
                                    <td>".$_SESSION['engravingLine3']."&nbsp;</td>
                                </tr>
                            </tbody>
                        </table>";
}

if (empty($_POST["PurchaseComments"])) {
    $_SESSION['comments'] = "Aucun commentaire";
}
else {
    $_SESSION['comments'] =  $_POST["PurchaseComments"];
}
$_SESSION['bracelet'] =  $_POST["PurchaseWrist"];
if ($_POST["PurchaseWrist"] =="Both"){
    $_SESSION['bracelet'] = "Leather + Steel (pack)";
}
if ($_POST["PurchaseWrist"] =="Leather"){
    $_SESSION['bracelet'] = "Leather (default bracelet)";
}

//PRICES
$_SESSION['watchPrice'] = 299;
if ($_POST["PurchaseWrist"]=="Steel") {
    $_SESSION['braceletPrice'] = 20;
}
if ($_POST["PurchaseWrist"]=="Leather") {
    $_SESSION['braceletPrice'] = 0;
}
if ($_POST["PurchaseWrist"]=="Both") {
    $_SESSION['braceletPrice'] = 50;
}
$_SESSION['engravingPrice'] = 30;
$_SESSION['engravingQty'] = $_POST["engravingQtyHidden"];
$_SESSION['engravingTotalPrice'] = $_SESSION['engravingPrice'] * $_SESSION['engravingQty'];

// TOTAL
$_SESSION['total'] = $_SESSION['watchPrice'] + $_SESSION['braceletPrice'] + $_SESSION['engravingTotalPrice'];
// MAIL A COLANDMACARTHUR
$_SESSION['sender'] = $_POST["PurchaseMail"];
// FIN PREPARATION PAGE VIREMENT
?>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta charset=iso-8859-1>
        <meta name=description content="">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>Order confirmation</title>
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
                    <div id="path"><a href="index.php">Home</a> <img src="img/next.png" alt=""> <a href="purchase.php">Purchase</a> <img src="img/next.png" alt=""> <a href="#"><span>Confirmation</span></a></div>
                    <div id="confirm-container">
                        <div id="confirm-title">
                            <span>Order</span> <br>
                            <p>Confirm your order.</p>
                        </div>
                        <!-- INFORMATIONS CLIENT LIVRAISON -->
                        <div id="ConfirmDeliveryTitle">Delivery <a href="javascript:history.back()">(edit)</a></div>
                        <div id="confirm-separator"></div>
                        <?php
                        if (!empty($_POST['ShipAddress2']) && !empty($_POST['ShipState'])) {
                                echo "<table>
                                        <tbody>
                                            <tr>
                                                <td class='confirm-cell-bg-left'>".$_POST['ShipFirstname']." ".$_POST['ShipLastname']."</td>
                                                <td class='confirm-cell-bg-right'>".$_POST['ShipAddress1']."</td>
                                            </tr>
                                            <tr>
                                                <td class='confirm-cell-mid-left'>".$_POST['ShipPC']." - ".$_POST['ShipCity']."</td>
                                                <td class='confirm-cell-mid-right'>".$_POST['ShipAddress2']."</td>
                                            </tr>
                                            <tr>
                                                <td class='confirm-cell-bg-left'>".$_POST['ShipState']." - ".$_POST['ShipCountry']."</td>
                                                <td class='confirm-cell-bg-right'>".$_POST['ShipMail']."</td>
                                            </tr>
                                        </tbody>
                                    </table>";
                            }
                            
                        if (!empty($_POST['ShipAddress2']) && empty($_POST['ShipState'])) {
                            echo "<table>
                                    <tbody>
                                        <tr>
                                            <td class='confirm-cell-bg-left'>".$_POST['ShipFirstname']." ".$_POST['ShipLastname']."</td>
                                            <td class='confirm-cell-bg-right'>".$_POST['ShipAddress1']."</td>
                                        </tr>
                                        <tr>
                                            <td class='confirm-cell-mid-left'>".$_POST['ShipPC']." - ".$_POST['ShipCity']."</td>
                                            <td class='confirm-cell-mid-right'>".$_POST['ShipAddress2']."</td>
                                        </tr>
                                        <tr>
                                            <td class='confirm-cell-bg-left'>".$_POST['ShipCountry']."</td>
                                            <td class='confirm-cell-bg-right'>".$_POST['ShipMail']."</td>
                                        </tr>
                                    </tbody>
                                </table>";
                        }
                        if (!empty($_POST['ShipState']) && empty($_POST['ShipAddress2'])) {
                            echo "<table>
                                    <tbody>
                                        <tr>
                                            <td class='confirm-cell-bg-left'>".$_POST['ShipFirstname']." ".$_POST['ShipLastname']."</td>
                                            <td class='confirm-cell-bg-right'>".$_POST['ShipAddress1']."</td>
                                        </tr>
                                        <tr>
                                            <td class='confirm-cell-mid-left'>".$_POST['ShipPC']." - ".$_POST['ShipCity']."</td>
                                            <td class='confirm-cell-mid-right'>".$_POST['ShipState']."</td>
                                        </tr>
                                        <tr>
                                            <td class='confirm-cell-bg-left'>".$_POST['ShipCountry']."</td>
                                            <td class='confirm-cell-bg-right'>".$_POST['ShipMail']."</td>
                                        </tr>
                                    </tbody>
                                </table>";
                        }
                        if (empty($_POST['ShipAddress2']) && empty($_POST['ShipState'])) {
                            echo "<table>
                                    <tbody>
                                        <tr>
                                            <td class='confirm-cell-bg-left'>".$_POST['ShipFirstname']." ".$_POST['ShipLastname']."</td>
                                            <td class='confirm-cell-bg-right'>".$_POST['ShipAddress1']."</td>
                                        </tr>
                                        <tr>
                                            <td class='confirm-cell-mid-left'>".$_POST['ShipPC']."</td>
                                            <td class='confirm-cell-mid-right'>".$_POST['ShipCity']."</td>
                                        </tr>
                                        <tr>
                                            <td class='confirm-cell-bg-left'>".$_POST['ShipCountry']."</td>
                                            <td class='confirm-cell-bg-right'>".$_POST['ShipMail']."</td>
                                        </tr>
                                    </tbody>
                                </table>";
                        }
                        ?>
                        
                        <!-- CONFIRMATION COMMANDE -->
                        <div id="ConfirmProductTitle">Products <a href="javascript:history.back()">(edit)</a></div>
                        <div id="confirm-separator"></div>
                        <div id="ConfirmProducts">
                            <table id="confirm-table" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Item</th>
                                        <th>Quantity</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr><!-- juste là pour le css nth-child --></tr>
                                    <?php foreach ($products as $k => $product): ?>
                                    <tr>
                                        <td><?php echo $product['name']; ?></td>
                                        <td><?php echo $product['count']; ?></td>
                                        <td>&pound; <?php echo number_format($product['price'],2,'.',' '); ?></td>
                                    </tr>
                                <?php endforeach ?>
                                    <?php
                                        if ($_POST['engravingQtyHidden'] == '1') {
                                            echo "<td>Line 1 : ".$_POST["engravingLine1Hidden"]."<br>Line 2 : ".$_POST["engravingLine2Hidden"]."<br>Line 3 : ".$_POST["engravingLine3Hidden"]."</td>";
                                        }
                                        else {
                                            
                                        }
                                    ?>
                                </tbody>
                            </table>
                            <div id="confirm-total">
                                <div id="confirm-total-total">Total :</div>

                                <div id="confirm-total-echo">&pound; <?php echo number_format($total,2,'.',' '); ?></div>
                            </div>
                        </div>
                        <div id="clear"><!--  --></div>
                        <!-- MOYEN DE PAIEMENT -->
                        <div id="ConfirmPaymentTitle">Payment method</div>
                        <div id="confirm-separator"></div>
                        <div id="table-paiement">
                            <table>
                                <tr>
                                    <td>I choose to pay by :</td>
                                    <td>I choose to pay by :</td>
                                </tr>
                                <tr>
                                    <td><a href="purchase-banktransfer.php"><img src="img/bank.png" alt="Cheque or Bank transfer" title="Cheque or Bank transfer"></a></td>
                                    <td><a href="<?= $paypal; ?>"><img src="img/horizontal_solution_PP.png" alt="Credit Card or PayPal" title="Credit Card or PayPal"></a></td>
                                </tr>
                                <tr>
                                    <td><a href="purchase-banktransfer.php"><input type="submit" id="virement-btn" value="Bank transfer" class="button"/></td>
                                    <td><a href="<?= $paypal; ?>"><input type="submit" id="paypal-btn" value="PayPal" class="button"/></a></td>
                                </tr>
                                <tr id="confirm-small-txt">
                                    <td>Pay by cheque or bank transfer</td>
                                    <td>Pay by credit card or PayPal</td>
                                </tr>
                            </table>
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