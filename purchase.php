<?php
require 'paypal.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta charset=iso-8859-1>
        <meta name=description content="">
        <meta name=viewport content="width=device-width, initial-scale=1">
        <title>Ordering your regimental watch at Col&amp;MacArthur</title>
        <link href='http://fonts.googleapis.com/css?family=Noto+Serif:400italic,700,700italic,400' rel='stylesheet' type='text/css'>
        <!--[if !IE]><!-->
            <script>  
                if (/*@cc_on!@*/false) {  
                    document.documentElement.className+=' ie10';  
                }  
            </script>
        <!--<![endif]-->  
        <link rel=stylesheet href="style.css" media="screen">
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
        <div id="popup">
            <div id="popup-title">Personalisation</div>
            <div id="popup-watch">The <span id="popupWatchName"></span> Watch - Engraving</div>
            <div id="popup-content"><h1>Personalise my regimental watch</h1><div id="popup-instructions">To change your engraving's content, simply fill in the following inputs. If you don't need all of the three lines, feel free to leave them empty.</div></div>
            <div id="popup-note">Note, due to the shape of the watch, the number of characters is limited.</div>

            <!-- <div id="customEngravingLine1Check" class="depth" customEngraving="2nd Bn. Pipes and Drums">2nd Bn. Pipes and Drums</div> -->
            <div id="customEngravingLine1Relief" class="depth" customEngraving="2nd Bn. Pipes and Drums">2nd Bn. Pipes and Drums</div>
            <div id="customEngravingLine1" class="depth" customEngraving="2nd Bn. Pipes and Drums">2nd Bn. Pipes and Drums</div>
            <!-- <div id="customEngravingLine2Check" class="depth" customEngraving="The Scots Guards">The Scots Guards</div> -->
            <div id="customEngravingLine2Relief" class="depth" customEngraving="The Scots Guards">The Scots Guards</div>
            <div id="customEngravingLine2" class="depth" customEngraving="The Scots Guards">The Scots Guards</div>
            <!-- <div id="customEngravingLine3Check" class="depth" customEngraving=""></div> -->
            <div id="customEngravingLine3Relief" class="depth" customEngraving=""></div>
            <div id="customEngravingLine3" class="depth" customEngraving=""></div>
            <form id="gravureInput" accept-charset="iso-8859-1">
                <input maxlength="30" type="text" name="gravureContent1" id="gravureContent1" placeholder=" My engraving / Line 1" onkeyup="changeGravure(); checkGravure(); fillEngravingContent(); return false">
                <br>
                <input maxlength="25" type="text" name="gravureContent2" id="gravureContent2" placeholder=" My engraving / Line 2" onkeyup="changeGravure(); checkGravure(); fillEngravingContent(); return false">
                <br>
                <input maxlength="25" type="text" name="gravureContent3" id="gravureContent3" placeholder=" My engraving / Line 3" onkeyup="changeGravure(); checkGravure(); fillEngravingContent(); return false">
                <br>
                <input type="submit" id="gravureSubmit" value="Submit" class="button" onclick="closePopup(); return false"/> <input type="button" id="gravureSubmit" value="Cancel" class="button" onclick="cancelPopup(); updatePrice(); return false"/>
            </form>
            <script type="text/javascript" language="javascript">
                function changeGravure() {
                    $("#customEngravingLine1").attr("customEngraving", document.getElementById('gravureContent1').value);
                    $("#customEngravingLine1Relief").attr("customEngraving", document.getElementById('gravureContent1').value);
                    document.getElementById('customEngravingLine1').innerHTML = document.getElementById('gravureContent1').value;
                    document.getElementById('customEngravingLine1Relief').innerHTML = document.getElementById('gravureContent1').value;
                    /*document.getElementById('customEngravingLine1Check').innerHTML = document.getElementById('gravureContent1').value;*/
                    document.getElementById('engravingLine1Hidden').value = document.getElementById('gravureContent1').value;
        
                    $("#customEngravingLine2").attr("customEngraving", document.getElementById('gravureContent2').value);
                    $("#customEngravingLine2Relief").attr("customEngraving", document.getElementById('gravureContent2').value);
                    document.getElementById('customEngravingLine2').innerHTML = document.getElementById('gravureContent2').value;
                    document.getElementById('customEngravingLine2Relief').innerHTML = document.getElementById('gravureContent2').value;
                    /*document.getElementById('customEngravingLine2Check').innerHTML = document.getElementById('gravureContent2').value;*/
                    document.getElementById('engravingLine2Hidden').value = document.getElementById('gravureContent2').value;
        
                    $("#customEngravingLine3").attr("customEngraving", document.getElementById('gravureContent3').value);
                    $("#customEngravingLine3Relief").attr("customEngraving", document.getElementById('gravureContent3').value);
                    document.getElementById('customEngravingLine3').innerHTML = document.getElementById('gravureContent3').value;
                    document.getElementById('customEngravingLine3Relief').innerHTML = document.getElementById('gravureContent3').value;
                    /*document.getElementById('customEngravingLine3Check').innerHTML = document.getElementById('gravureContent3').value;*/
                    document.getElementById('engravingLine3Hidden').value = document.getElementById('gravureContent3').value;
                }
                function checkGravure() {
                    /*if (document.getElementById('customEngravingLine1Check').clientWidth > 235) {
                        alert("You have reached the limits of the watch. Please check the length of the engraving on the first line.");
                    }
                    if (document.getElementById('customEngravingLine2Check').clientWidth > 220) {
                        alert("You have reached the limits of the watch. Please check the length of the engraving on the second line.");
                    }
                    if (document.getElementById('customEngravingLine3Check').clientWidth > 200) {
                        alert("You have reached the limits of the watch. Please check the length of the engraving on the third line.");
                    }*/
                }
        </script>
        </div>
        <div id="assombri"></div>
        <div id="cache-top"></div><!-- Cache top -->
        <div id="cache-bottom"></div><!-- Cache bottom -->
        <div id="container"> <!-- On ouvre le contener principal -->
        	<div id="top"> <!-- On ouvre le top -->
                    <?php
                    include "menu.php";
                    ?>
                <div id="content"> <!-- Contenu quelconque -->
                    <div id="path"><a href="index.php">Home</a> <img src="img/next.png" alt=""> <a href="purchase.php"><span>Purchase</span></a></div>

                    <div id="purchase-container">
                    <div id="purchase-title">
                        <span>Purchase procedure</span> <br>
                        <p>Please, fill in the following form to order your regimental watch.</p>
                    </div>
                    
                    <div id="purchase-form">
                        <form action="purchase-confirm.php" id="PurchaseIndexForm" method="post" accept-charset="iso-8859-1">
                            <div id="expand"><a href="" onclick="showStep1(); showStep2(); showStep3(); hideExpand(); showCollapse(); return false">Expand all</a></div>
                            <div id="collapse"><a href="" onclick="hideStep1(); hideStep2(); hideStep3(); hideCollapse(); showExpand(); return false">Collapse all</a></div>
<!-- 2 PERSONALISATION -->
                    <div id="PurchaseStep1TitleDisable">1 Your personalization</div>
                        <a href="#" onclick="showStep1(); hideStep2(); hideStep3()"><div id="PurchaseStep1Title">1 Your personalization</div></a>
                        <div id="purchase-separator"></div>
                        <div id="PurchaseStep1Content">
                        <div>
                            <select name="PurchaseWatch" id="PurchaseWatch" onchange="updatePrice()">
                                <option value="">Choose your regimental watch...</option>
                                <!-- <option value="HC">The Household Cavalry Guards Watch - &pound; 299.00</option>
                                <option value="GG">The Grenadier Guards Watch - &pound; 299.00</option>
                                ICI VIENT SG
                                <option value="WG">The Welsh Guards Watch - &pound; 299.00</option>
                                <option value="IG">The Irish Guards Watch - &pound; 299.00</option>
                                <option value="CG">The Coldstream Guards Watch - &pound; 299.00</option> -->
                                
                                <option value="SG">The Scots Guards Watch - &pound; 299.00</option>
                                
                            </select>
                        </div>
                        <div>
                            <select name="PurchaseWrist" id="PurchaseWrist"  onchange="updatePrice()">
                                <option value="">Choose your strap...</option>
                                <option value="Leather">Leather (default bracelet) - &pound; 00.00</option>
                                <option value="Steel">Stainless Steel - &pound; 20.00</option>
                            </select>
                        </div>
                        <br>
                        <div id="PurchaseEngraving">
                            <input type="checkbox" name ="PurchaseEngravingChk" id="PurchaseEngravingChk" onclick="checkPopup(); updatePrice()">
                            <label id="PurchaseEngravingLabel" for="PurchaseEngravingChk">I wish the watch to be engraved - &pound; 30.00</label>
                            <br>
                            <div id="PurchaseEngravingContentRequired">
                                <input maxlength="90" type="text" name="PurchaseEngravingContent" id="PurchaseEngravingContent" placeholder=" Engraving's content" required>
                            </div>
                        </div>
                        <br>
                        <div id="PurchaseComments">
                            <textarea cols="40" rows="3" name="PurchaseComments" id="PurchaseComments" placeholder=" Additional comments"></textarea>
                        </div>
                        <input type="submit" id="Continue2" value="Next step" class="button" onclick="chkContenu1(); return false"/>
                        <br>
                    </div>
<!-- 1 BILLING INFORMATION -->
                        <div id="PurchaseStep2TitleDisable">2 Billing Information</div>
                        <a href="#" onclick="showStep2(); hideStep1(); hideStep3()"><div id="PurchaseStep2Title">2 Billing Information</div></a>
                        <div id="purchase-separator"></div>
                        <div id="PurchaseStep2Content">
                            <table style="position:relative; width:auto;">
                                <tr style="height:41px">
                                    <td colspan="3"><div class="required"><input maxlength="50" type="text" name="PurchaseFirstname" id="PurchaseFirstname" placeholder=" First name" required onchange="shippingAddress()"></div></td>
                                    
                                    <td><div class="required"><input maxlength="50" type="text" name="PurchaseLastname" id="PurchaseLastname" placeholder=" Last name" required onchange="shippingAddress()"></div></td>
                                </tr>
                                <tr style="height:41px">
                                    <td colspan="3"><div class="required"><input maxlength="50" type="text" name="PurchaseAddress1" id="PurchaseAddress1" placeholder=" Address" required onchange="shippingAddress()"></div>                           </td>
                                    
                                    <td><div><input maxlength="50" type="text" name="PurchaseAddress2" id="PurchaseAddress2" placeholder=" Additional address details" onchange="shippingAddress()"></div></td>
                                </tr>
                                <tr style="height:41px">
                                    <td><div class="required"><input maxlength="20" type="text" name="PurchasePC" id="PurchasePC" placeholder=" Postal Code" required onchange="shippingAddress()"></div></td>
                                    <td></td>
                                    <td><div class="required"><input maxlength="50" type="text" name="PurchaseCity" id="PurchaseCity" placeholder=" City" required onchange="shippingAddress()"></div></td>
                                    
                                    <td><input maxlength="50" type="text" name="PurchaseState" id="PurchaseState" placeholder=" County" onchange="shippingAddress()"></td>
                                </tr>
                                <tr style="height:41px">
                                    <td colspan="3"><div>
                                            <select name="PurchaseCountry" id="PurchaseCountry" onchange="shippingAddress()">
                                            <option value="">Country...</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bonaire">Bonaire</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Canary Islands">Canary Islands</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Channel Islands">Channel Islands</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos Island">Cocos Island</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Curacao">Curacao</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="East Timor">East Timor</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands">Falkland Islands</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="PF">French Polynesia</option>
                                            <option value="French Southern Ter">French Southern Ter</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Great Britain">Great Britain</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Hawaii">Hawaii</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea North">Korea North</option>
                                            <option value="Korea South">Korea South</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Laos">Laos</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Macedonia">Macedonia</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Midway Islands">Midway Islands</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Nambia">Nambia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherland Antilles">Netherland Antilles</option>
                                            <option value="Netherlands (Holland, Europe)">Netherlands (Holland, Europe)</option>
                                            <option value="Nevis">Nevis</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau Island">Palau Island</option>
                                            <option value="Palestine">Palestine</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn Island">Pitcairn Island</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                                            <option value="Republic of Serbia">Republic of Serbia</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russia">Russia</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="St Barthelemy">St Barthelemy</option>
                                            <option value="St Eustatius">St Eustatius</option>
                                            <option value="St Helena">St Helena</option>
                                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                            <option value="St Lucia">St Lucia</option>
                                            <option value="St Maarten">St Maarten</option>
                                            <option value="St Pierre and Miquelon">St Pierre and Miquelon</option>
                                            <option value="St Vincent and Grenadines">St Vincent and Grenadines</option>
                                            <option value="Saipan">Saipan</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="Samoa American">Samoa American</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syria">Syria</option>
                                            <option value="Tahiti">Tahiti</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Is">Turks and Caicos Is</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States of America">United States of America</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Vatican City State">Vatican City State</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                            <option value="Wake Island">Wake Island</option>
                                            <option value="Wallis and Futana Is">Wallis and Futana Is</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zaire">Zaire</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                        </div></td>
                                    
                                    <td><div class="required"><input maxlength="50" type="email" name="PurchaseMail" id="PurchaseMail" placeholder=" Email address" required onchange="shippingAddress()"></div></td>
                                </tr>
                            </table>
                            <br><br>
                            <div id="purchase-ship">
                                <input type="radio" name ="PurchaseShip" id="PurchaseShipThis" value="ThisAddress" checked="checked" onclick="shippingAddress()">
                                <label for="PurchaseShipThis">Ship to this address</label>
                                <input type="radio" name ="PurchaseShip" id="PurchaseShipOther" value="OtherAddress" onclick="shippingAddress()">
                                <label for="PurchaseShipOther">Ship to a different address</label>
                            </div>
                        <br>
                            <div id="ShipHidden">
                                <table style="position:relative; width:auto;">
                                <tr style="height:41px">
                                    <td colspan="3"><div class="required"><input maxlength="50" type="text" name="ShipFirstname" id="ShipFirstname" placeholder=" First name" required></div></td>
                                    
                                    <td><div class="required"><input maxlength="50" type="text" name="ShipLastname" id="ShipLastname" placeholder=" Last name" required></div></td>
                                </tr>
                                <tr style="height:41px">
                                    <td colspan="3"><div class="required"><input maxlength="50" type="text" name="ShipAddress1" id="ShipAddress1" placeholder=" Address" required></div></td>
                                    
                                    <td><div><input maxlength="50" type="text" name="ShipAddress2" id="ShipAddress2" placeholder=" Additional address details"></div></td>
                                </tr>
                                <tr style="height:41px">
                                    <td><div class="required"><input maxlength="20" type="text" name="ShipPC" id="ShipPC" placeholder=" Postal Code" required></div></td>
                                    <td></td>
                                    <td><div class="required"><input maxlength="50" type="text" name="ShipCity" id="ShipCity" placeholder=" City" required></div></td>
                                    
                                    <td><input maxlength="50" type="text" name="ShipState" id="ShipState" placeholder=" County"></td>
                                </tr>
                                <tr style="height:41px">
                                    <td colspan="3"><div>
                                            <select name="ShipCountry" id="ShipCountry">
                                            <option value="">Country...</option>
                                            <option value="Afghanistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bonaire">Bonaire</option>
                                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Canary Islands">Canary Islands</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Channel Islands">Channel Islands</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos Island">Cocos Island</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote D'Ivoire">Cote D'Ivoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Curacao">Curacao</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="East Timor">East Timor</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands">Falkland Islands</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="PF">French Polynesia</option>
                                            <option value="French Southern Ter">French Southern Ter</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Great Britain">Great Britain</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Hawaii">Hawaii</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="India">India</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea North">Korea North</option>
                                            <option value="Korea South">Korea South</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Laos">Laos</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Macedonia">Macedonia</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Midway Islands">Midway Islands</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Nambia">Nambia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherland Antilles">Netherland Antilles</option>
                                            <option value="Netherlands (Holland, Europe)">Netherlands (Holland, Europe)</option>
                                            <option value="Nevis">Nevis</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau Island">Palau Island</option>
                                            <option value="Palestine">Palestine</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Philippines">Philippines</option>
                                            <option value="Pitcairn Island">Pitcairn Island</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                                            <option value="Republic of Serbia">Republic of Serbia</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russia">Russia</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="St Barthelemy">St Barthelemy</option>
                                            <option value="St Eustatius">St Eustatius</option>
                                            <option value="St Helena">St Helena</option>
                                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                            <option value="St Lucia">St Lucia</option>
                                            <option value="St Maarten">St Maarten</option>
                                            <option value="St Pierre and Miquelon">St Pierre and Miquelon</option>
                                            <option value="St Vincent and Grenadines">St Vincent and Grenadines</option>
                                            <option value="Saipan">Saipan</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="Samoa American">Samoa American</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syria">Syria</option>
                                            <option value="Tahiti">Tahiti</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks and Caicos Is">Turks and Caicos Is</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Emirates">United Arab Emirates</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="United States of America">United States of America</option>
                                            <option value="Uruguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Vatican City State">Vatican City State</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                            <option value="Wake Island">Wake Island</option>
                                            <option value="Wallis and Futana Is">Wallis and Futana Is</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zaire">Zaire</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                        </div></td>
                                    
                                    <td><div class="required"><input maxlength="50" type="email" name="ShipMail" id="ShipMail" placeholder=" Email address" required></div></td>
                                </tr>
                            </table>
                            </div>
                            <br><br>
                            <input type="submit" id="Continue1" value="Next step" class="button" onclick="chkContenu2(); return false"/>
                            <div id="purchase-compulsory"><img src="img/asterisk.png" alt="">Compulsory fields</div>
                        <br>
                        <br>
                        </div>
<!-- 3 ORDER INFORMATION -->
                    <div id="PurchaseStep3TitleDisable">3 Order Information</div>
                        <a href="#" onclick="showStep3(); hideStep1(); hideStep2()"><div id="PurchaseStep3Title">3 Order Information</div></a>
                        <div id="purchase-separator"></div>
                        <div id="PurchaseStep3Content">
                            <div id="totalLeft">
                                <span id="watchName">--</span>
                                <br>
                                <span id="braceletType">--</span>
                                <br>
                                <span id="engravingChk"></span>
                            </div>
                            <div id="totalRight">
                                <span id="watchPrice">&pound; 00.00</span>
                                <div id="purchaseUnderline"></div>
                                <span id="braceletPrice">&pound; 00.00</span>
                                <div id="purchaseUnderline"></div>
                                <span id="engravingPrice"></span>
                                <div id="purchaseUnderlineEngraving"></div>
                            </div>
                            <br>
                            <div id="clear"></div>
                            <div id="totalPound">&pound; </div><div id="totalTotalPrice">00.00</div><div id="totalTotal">TOTAL :</div>
                            <input type="hidden" id="totalTotalPriceHidden" name="totalTotalPriceHidden"/>
                            <input type="hidden" id="engravingQtyHidden" name="engravingQtyHidden"/>
                            <input type="hidden" id="engravingLine1Hidden" name="engravingLine1Hidden"/>
                            <input type="hidden" id="engravingLine2Hidden" name="engravingLine2Hidden"/>
                            <input type="hidden" id="engravingLine3Hidden" name="engravingLine3Hidden"/>
                    </br>
                        <div id="clear"></div>
                        <div id="iagree" class="required">
                            <input type="checkbox" name ="IagreeChk" id="IagreeChk" required>
                            <label id="IagreeChkLabel" for="IagreeChk">I have read and I agree to <a href="terms-and-conditions.php" target="_blank">the terms and conditions of sale</a>.</label>
                        </div>
                        <div id="submitBtn" class="submit">
                            <input type="submit" id="PurchaseSubmit" value="Submit" class="button" onclick="return chkForm();"/>
                        </div>
                    </div>
                    </form>
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
        <div id="loading">
            <img src="img/engraving-bg.jpg" alt="">
        </div>
        <script type="text/javascript" language="javascript">

        window.onload=function(){
                document.getElementById('PurchaseEngravingContent').disabled = true;
            }

        document.getElementById('popup').style.display = 'none';
        document.getElementById('assombri').style.display = 'none';

        function checkPopup() {
            if(document.forms["PurchaseIndexForm"]["PurchaseWatch"].value == "") {
                alert("Please choose a watch.");
                document.getElementById("PurchaseEngravingChk").checked = false;
                return false;
            }
            if (document.forms["PurchaseIndexForm"]["PurchaseEngravingChk"].checked) {
                document.getElementById('popup').style.display = 'block';
                document.getElementById('assombri').style.display = 'block';
                document.getElementById('PurchaseEngravingContent').disabled = false;
                document.getElementById('PurchaseEngravingContentRequired').className = "required";
                $("#PurchaseEngravingContentRequired").attr("required", "required");
                document.getElementById('PurchaseEngravingContent').value = "";
            }
            else {
                    document.getElementById('PurchaseEngravingContent').disabled = true;
                    document.getElementById('PurchaseEngravingContentRequired').removeAttribute("required");
                    $("#PurchaseEngravingContentRequired").removeClass("required");
                }
            if (document.forms["PurchaseIndexForm"]["PurchaseWatch"].value == "SG") {
                document.getElementById('popupWatchName').innerHTML = "Scots Guards";
            }
            if (document.forms["PurchaseIndexForm"]["PurchaseWatch"].value == "WG") {
                document.getElementById('popupWatchName').innerHTML = "Welsh Guards";
            }
            if (document.forms["PurchaseIndexForm"]["PurchaseWatch"].value == "CG") {
                document.getElementById('popupWatchName').innerHTML = "Coldstream Guards";
            }
            if (document.forms["PurchaseIndexForm"]["PurchaseWatch"].value == "GG") {
                document.getElementById('popupWatchName').innerHTML = "Grenadier Guards";
            }
            if (document.forms["PurchaseIndexForm"]["PurchaseWatch"].value == "IG") {
                document.getElementById('popupWatchName').innerHTML = "Irish Guards";
            }
            if (document.forms["PurchaseIndexForm"]["PurchaseWatch"].value == "HC") {
                document.getElementById('popupWatchName').innerHTML = "Household Cavalry Guards";
            }
            if (document.forms["PurchaseIndexForm"]["PurchaseWatch"].value == "BR") {
                document.getElementById('popupWatchName').innerHTML = "Blues & Royals Guards";
            }
            if (document.forms["PurchaseIndexForm"]["PurchaseWatch"].value == "LG") {
                document.getElementById('popupWatchName').innerHTML = "Life Guards";
            }
        }

        function closePopup() {
            document.getElementById('popup').style.display = 'none';
            document.getElementById('assombri').style.display = 'none';
            document.getElementById('PurchaseEngravingContent').value = document.getElementById('gravureContent1').value + " " + document.getElementById('gravureContent2').value + " " + document.getElementById('gravureContent3').value;
        }

        function cancelPopup() {
            document.getElementById('gravureContent1').value = "";
            document.getElementById('gravureContent2').value = "";
            document.getElementById('gravureContent3').value = "";
            document.getElementById('popup').style.display = 'none';
            document.getElementById('assombri').style.display = 'none';
            document.getElementById('PurchaseEngravingContent').value = "";
            document.getElementById("PurchaseEngravingChk").checked = false;
            document.getElementById('PurchaseEngravingContent').disabled = true;
            document.getElementById('PurchaseEngravingContentRequired').removeAttribute("required");
            $("#PurchaseEngravingContentRequired").removeClass("required");
        }

        function fillEngravingContent() {
            document.getElementById('PurchaseEngravingContent').value = document.getElementById('gravureContent1').value + " " + document.getElementById('gravureContent2').value + " " + document.getElementById('gravureContent3').value;
        }

        function updatePrice() {
            
            if (document.forms["PurchaseIndexForm"]["PurchaseWatch"].value == "SG") {
                document.getElementById('watchName').innerHTML = "The Scots Guards Watch";
                document.getElementById('watchPrice').innerHTML = "&pound; 299.00";
                var watchValue = 299;
            }
            if (document.forms["PurchaseIndexForm"]["PurchaseWatch"].value == "HC") {
                document.getElementById('watchName').innerHTML = "The Household Cavalry Guards Watch";
                document.getElementById('watchPrice').innerHTML = "&pound; 299.00";
                var watchValue = 299;
            }
            if (document.forms["PurchaseIndexForm"]["PurchaseWatch"].value == "GG") {
                document.getElementById('watchName').innerHTML = "The Grenadier Guards Watch";
                document.getElementById('watchPrice').innerHTML = "&pound; 299.00";
                var watchValue = 299;
            }
            if (document.forms["PurchaseIndexForm"]["PurchaseWatch"].value == "WG") {
                document.getElementById('watchName').innerHTML = "The Welsh Guards Watch";
                document.getElementById('watchPrice').innerHTML = "&pound; 299.00";
                var watchValue = 299;
            }
            if (document.forms["PurchaseIndexForm"]["PurchaseWatch"].value == "IG") {
                document.getElementById('watchName').innerHTML = "The Irish Guards Watch";
                document.getElementById('watchPrice').innerHTML = "&pound; 299.00";
                var watchValue = 299;
            }
            if (document.forms["PurchaseIndexForm"]["PurchaseWatch"].value == "CG") {
                document.getElementById('watchName').innerHTML = "The Coldstream Guards Watch";
                document.getElementById('watchPrice').innerHTML = "&pound; 299.00";
                var watchValue = 299;
            }
            if (document.forms["PurchaseIndexForm"]["PurchaseWrist"].value == "Steel") {
                document.getElementById('braceletType').innerHTML = "Steel Bracelet";
                document.getElementById('braceletPrice').innerHTML = "&pound; 20.00";
                var braceletValue = 20;
            }
            if (document.forms["PurchaseIndexForm"]["PurchaseWrist"].value == "Leather") {
                document.getElementById('braceletType').innerHTML = "Leather Bracelet (default bracelet)";
                document.getElementById('braceletPrice').innerHTML = "&pound; 00.00";
                var braceletValue = 0;
            }
            if (document.forms["PurchaseIndexForm"]["PurchaseWrist"].value == "Both") {
                document.getElementById('braceletType').innerHTML = "Leather Bracelet + Steel Bracelet (pack)";
                document.getElementById('braceletPrice').innerHTML = "&pound; 50.00";
                var braceletValue = 50;
            }
            if (document.forms["PurchaseIndexForm"]["PurchaseEngravingChk"].checked) {
                document.getElementById('engravingChk').innerHTML = "Engraving";
                document.getElementById('engravingPrice').innerHTML = "&pound; 30.00";
                underlineEngraving.style.display = 'block';
                document.getElementById('engravingQtyHidden').value = "1";
                var engravingValue = 30;
            }
            if (document.forms["PurchaseIndexForm"]["PurchaseWatch"].value == "") {
                document.getElementById('watchName').innerHTML = "--";
                document.getElementById('watchPrice').innerHTML = "&pound; 00.00";
                var watchValue = 0;
            }
            if (document.forms["PurchaseIndexForm"]["PurchaseWrist"].value == "") {
                document.getElementById('braceletType').innerHTML = "--";
                document.getElementById('braceletPrice').innerHTML = "&pound; 00.00";
                var braceletValue = 0;
            }
            if (!(document.forms["PurchaseIndexForm"]["PurchaseEngravingChk"].checked)) {
                document.getElementById('engravingChk').innerHTML = "";
                document.getElementById('engravingPrice').innerHTML = "";
                underlineEngraving.style.display = 'none';
                document.getElementById('engravingQtyHidden').value = "0";
                var engravingValue = 0;
            }

            document.getElementById('totalTotalPrice').innerHTML = watchValue + braceletValue + engravingValue + ".00";
            document.getElementById('totalTotalPriceHidden').value = watchValue + braceletValue + engravingValue;

        }

        </script>
        <script type="text/javascript" language="javascript">
        var contenu1 = document.getElementById('PurchaseStep1Content');
        var contenu2 = document.getElementById('PurchaseStep2Content');
        var contenu3 = document.getElementById('PurchaseStep3Content');
        var titre1 = document.getElementById('PurchaseStep1Title');
        var titre2 = document.getElementById('PurchaseStep2Title');
        var titre3 = document.getElementById('PurchaseStep3Title');
        var titre1disable = document.getElementById('PurchaseStep1TitleDisable');
        var titre2disable = document.getElementById('PurchaseStep2TitleDisable');
        var titre3disable = document.getElementById('PurchaseStep3TitleDisable');
        var shipingAddress = document.getElementById('ShipHidden');
        var expand = document.getElementById('expand');
        var collapse = document.getElementById('collapse');
        var underlineEngraving = document.getElementById('purchaseUnderlineEngraving');

        underlineEngraving.style.display = 'none';

        collapse.style.display = 'none';

        shipingAddress.style.display = 'none';

        titre1.style.display = 'none';
        titre2.style.display = 'none';
        titre3.style.display = 'none';

        contenu2.style.display = 'none';
        contenu3.style.display = 'none';

        function hideCollapse() {
            collapse.style.display = 'none';
        }
        function hideExpand() {
            expand.style.display = 'none';
        }
        function showCollapse() {
            collapse.style.display = 'block';
        }
        function showExpand() {
            expand.style.display = 'block';
        }

        function shippingAddress() {
            if (document.getElementById("PurchaseShipOther").checked) {
                shipingAddress.style.display = 'block';
                document.getElementById('purchase-container').style.height = '1150px';
                document.getElementById('ShipFirstname').value = "";
                document.getElementById('ShipLastname').value = "";
                document.getElementById('ShipAddress1').value = "";
                document.getElementById('ShipAddress2').value = "";
                document.getElementById('ShipPC').value = "";
                document.getElementById('ShipCity').value = "";
                document.getElementById('ShipState').value = "";
                document.getElementById('ShipCountry').value = "";
                document.getElementById('ShipMail').value = "";
                //focus tous les champs pour ie
                document.getElementById('ShipFirstname').focus();
                document.getElementById('ShipLastname').focus();
                document.getElementById('ShipAddress1').focus();
                document.getElementById('ShipAddress2').focus();
                document.getElementById('ShipPC').focus();
                document.getElementById('ShipCity').focus();
                document.getElementById('ShipState').focus();
                document.getElementById('ShipMail').focus();
                document.getElementById('ShipCountry').focus();
                //defocus le dernier champs
                $('#ShipCountry').blur();
            }
            else {
                shipingAddress.style.display = 'none';
                document.getElementById('purchase-container').style.height = '1000px';
                document.getElementById('ShipFirstname').value = document.getElementById('PurchaseFirstname').value;
                document.getElementById('ShipLastname').value = document.getElementById('PurchaseLastname').value;
                document.getElementById('ShipAddress1').value = document.getElementById('PurchaseAddress1').value;
                document.getElementById('ShipAddress2').value = document.getElementById('PurchaseAddress2').value;
                document.getElementById('ShipPC').value = document.getElementById('PurchasePC').value;
                document.getElementById('ShipCity').value = document.getElementById('PurchaseCity').value;
                document.getElementById('ShipState').value = document.getElementById('PurchaseState').value;
                document.getElementById('ShipCountry').value = document.getElementById('PurchaseCountry').value;
                document.getElementById('ShipMail').value = document.getElementById('PurchaseMail').value;
            }
        }

        function chkContenu1() {
            if(document.forms["PurchaseIndexForm"]["PurchaseWatch"].value == "") {
                alert("Please choose a watch.");
                return false;
            }
            else if(document.forms["PurchaseIndexForm"]["PurchaseWrist"].value == "") {
                alert("Please choose a bracelet.");
                return false;
            }
            if(!(document.forms["PurchaseIndexForm"]["PurchaseWatch"].value == "")) {
                if(!(document.forms["PurchaseIndexForm"]["PurchaseWrist"].value == "")) {
                    contenu1.style.display = 'none';
                    contenu2.style.display = 'block';
                    contenu3.style.display = 'none';
                    titre1.style.display = 'block';
                    titre1disable.style.display = 'none';
                    titre2.style.display = 'block';
                    titre2disable.style.display = 'none';
                }
            }
                return false;
            
        }
        function chkContenu2() {
            if(document.forms["PurchaseIndexForm"]["PurchaseFirstname"].value == "") {
                alert("Please fill in all the required fields.\nYour firstname is missing.");
                document.getElementById("PurchaseFirstname").focus();
                return false;
            }
            else if(document.forms["PurchaseIndexForm"]["PurchaseLastname"].value == "") {
                alert("Please fill in all the required fields.\nYour lastname is missing.");
                document.getElementById("PurchaseLastname").focus();
                return false;
            }
            else if(document.forms["PurchaseIndexForm"]["PurchaseAddress1"].value == "") {
                alert("Please fill in all the required fields.\nYour address is missing.");
                document.getElementById("PurchaseAddress1").focus();
                return false;
            }
            else if(document.forms["PurchaseIndexForm"]["PurchasePC"].value == "") {
                alert("Please fill in all the required fields.\nYour postal code is missing.");
                document.getElementById("PurchasePC").focus();
                return false;
            }
            else if(document.forms["PurchaseIndexForm"]["PurchaseCity"].value == "") {
                alert("Please fill in all the required fields.\nYour city is missing.");
                document.getElementById("PurchaseCity").focus();
                return false;
            }
             else if(document.forms["PurchaseIndexForm"]["PurchaseCountry"].value == "") {
                alert("Please fill in all the required fields.\nThe country is missing.");
                document.getElementById("PurchaseCountry").focus();
                return false;
            }
            else if(document.forms["PurchaseIndexForm"]["PurchaseMail"].value == "") {
                alert("Please fill in all the required fields.\nYour email address is missing.");
                document.getElementById("PurchaseMail").focus();
                return false;
            }
            else if(document.forms["PurchaseIndexForm"]["ShipFirstname"].value == "") {
                alert("Please fill in all the required fields.\nThe firstname in the shipping address is missing.");
                document.getElementById("ShipFirstname").focus();
                return false;
            }
            else if(document.forms["PurchaseIndexForm"]["ShipLastname"].value == "") {
                alert("Please fill in all the required fields.\nThe lastname in the shipping address is missing.");
                document.getElementById("ShipLastname").focus();
                return false;
            }
            else if(document.forms["PurchaseIndexForm"]["ShipAddress1"].value == "") {
                alert("Please fill in all the required fields.\nThe address in the shipping address is missing.");
                document.getElementById("ShipAddress1").focus();
                return false;
            }
            else if(document.forms["PurchaseIndexForm"]["ShipPC"].value == "") {
                alert("Please fill in all the required fields.\nThe postal code in the shipping address is missing.");
                document.getElementById("ShipPC").focus();
                return false;
            }
            else if(document.forms["PurchaseIndexForm"]["ShipCity"].value == "") {
                alert("Please fill in all the required fields.\nThe city in the shipping address is missing.");
                document.getElementById("ShipCity").focus();
                return false;
            }
            else if(document.forms["PurchaseIndexForm"]["ShipCountry"].value == "") {
                alert("Please fill in all the required fields.\nThe country in the shipping address is missing.");
                document.getElementById("ShipCountry").focus();
                return false;
            }
            else if(document.forms["PurchaseIndexForm"]["ShipMail"].value == "") {
                alert("Please fill in all the required fields.\nThe email address in the shipping address is missing.");
                document.getElementById("ShipMail").focus();
                return false;
            }

            else if(document.forms["PurchaseIndexForm"]["PurchaseFirstname"].value != "" && document.forms["PurchaseIndexForm"]["PurchaseLastname"].value != "" && document.forms["PurchaseIndexForm"]["PurchaseAddress1"].value != "" && document.forms["PurchaseIndexForm"]["PurchasePC"].value != "" && document.forms["PurchaseIndexForm"]["PurchaseCity"].value != "" && document.forms["PurchaseIndexForm"]["PurchaseCountry"].value != "" && document.forms["PurchaseIndexForm"]["PurchaseMail"].value != "" && document.forms["PurchaseIndexForm"]["ShipFirstname"].value != "" && document.forms["PurchaseIndexForm"]["ShipLastname"].value != "" && document.forms["PurchaseIndexForm"]["ShipAddress1"].value != "" && document.forms["PurchaseIndexForm"]["ShipPC"].value != "" && document.forms["PurchaseIndexForm"]["ShipCity"].value != "" && document.forms["PurchaseIndexForm"]["ShipCountry"].value != "" && document.forms["PurchaseIndexForm"]["ShipMail"].value != "") {
                contenu1.style.display = 'none';
                contenu2.style.display = 'none';
                contenu3.style.display = 'block';
                titre1.style.display = 'block';
                titre1disable.style.display = 'none';
                titre2.style.display = 'block';
                titre2disable.style.display = 'none';
                titre3.style.display = 'block';
                titre3disable.style.display = 'none';
            }
            return false;
        }
        function hideStep1() {
            contenu1.style.display = 'none';
        }
        function hideStep2() {
            contenu2.style.display = 'none';
        }
        function hideStep3() {
            contenu3.style.display = 'none';
        }
        function showStep1() {
            contenu1.style.display = 'block';
        }
        function showStep2() {
            contenu2.style.display = 'block';
        }
        function showStep3() {
            contenu3.style.display = 'block';
        }
        function chkForm () {
            if(document.forms["PurchaseIndexForm"]["PurchaseFirstname"].value == "") {
                alert("Please fill in all the required fields.\nYour firstname is missing.");
                contenu1.style.display = 'block';
                contenu2.style.display = 'block';
                contenu3.style.display = 'block';
                return false;
            }
            else if(document.forms["PurchaseIndexForm"]["PurchaseLastname"].value == "") {
                alert("Please fill in all the required fields.\nYour lastname is missing.");
                contenu1.style.display = 'block';
                contenu2.style.display = 'block';
                contenu3.style.display = 'block';
                return false;
            }
            else if(document.forms["PurchaseIndexForm"]["PurchaseAddress1"].value == "") {
                alert("Please fill in all the required fields.\nYour address is missing.");
                contenu1.style.display = 'block';
                contenu2.style.display = 'block';
                contenu3.style.display = 'block';
                return false;
            }
            else if(document.forms["PurchaseIndexForm"]["PurchasePC"].value == "") {
                alert("Please fill in all the required fields.\nYour postal code is missing.");
                contenu1.style.display = 'block';
                contenu2.style.display = 'block';
                contenu3.style.display = 'block';
                return false;
            }
            else if(document.forms["PurchaseIndexForm"]["PurchaseCity"].value == "") {
                alert("Please fill in all the required fields.\nYour city's name is missing.");
                contenu1.style.display = 'block';
                contenu2.style.display = 'block';
                contenu3.style.display = 'block';
                return false;
            }
             else if(document.forms["PurchaseIndexForm"]["PurchaseCountry"].value == "") {
                alert("Please fill in all the required fields.\nThe country is missing.");
                contenu1.style.display = 'block';
                contenu2.style.display = 'block';
                contenu3.style.display = 'block';
                return false;
            }
//CHECK SHIPPING ADDRESS FIELDS
            else if(document.forms["PurchaseIndexForm"]["ShipFirstname"].value == "") {
                alert("Please fill in all the required fields.\nThe firstname in the shipping address is missing.");
                contenu1.style.display = 'block';
                contenu2.style.display = 'block';
                contenu3.style.display = 'block';
                return false;
            }
            else if(document.forms["PurchaseIndexForm"]["ShipLastname"].value == "") {
                alert("Please fill in all the required fields.\nThe lastname in the shipping address is missing.");
                contenu1.style.display = 'block';
                contenu2.style.display = 'block';
                contenu3.style.display = 'block';
                return false;
            }
            else if(document.forms["PurchaseIndexForm"]["ShipAddress1"].value == "") {
                alert("Please fill in all the required fields.\nThe address in the shipping address is missing.");
                contenu1.style.display = 'block';
                contenu2.style.display = 'block';
                contenu3.style.display = 'block';
                return false;
            }
            else if(document.forms["PurchaseIndexForm"]["ShipPC"].value == "") {
                alert("Please fill in all the required fields.\nThe postal code in the shipping address is missing.");
                contenu1.style.display = 'block';
                contenu2.style.display = 'block';
                contenu3.style.display = 'block';
                return false;
            }
            else if(document.forms["PurchaseIndexForm"]["ShipCity"].value == "") {
                alert("Please fill in all the required fields.\nThe city's name in the shipping address is missing.");
                contenu1.style.display = 'block';
                contenu2.style.display = 'block';
                contenu3.style.display = 'block';
                return false;
            }
            else if(document.forms["PurchaseIndexForm"]["ShipCountry"].value == "") {
                alert("Please fill in all the required fields.\nThe country in the shipping address is missing.");
                contenu1.style.display = 'block';
                contenu2.style.display = 'block';
                contenu3.style.display = 'block';
                return false;
            }
// END CHECK SHIPPING ADDRESS
            else if(document.forms["PurchaseIndexForm"]["PurchaseMail"].value == "") {
                alert("Please fill in all the required fields.\nYour email address is missing.");
                contenu1.style.display = 'block';
                contenu2.style.display = 'block';
                contenu3.style.display = 'block';
                return false;
            }
            else if(document.forms["PurchaseIndexForm"]["PurchaseWatch"].value == "") {
                alert("Please choose a watch.");
                contenu1.style.display = 'block';
                contenu2.style.display = 'block';
                contenu3.style.display = 'block';
                return false;
            }
            else if(document.forms["PurchaseIndexForm"]["PurchaseWrist"].value == "") {
                alert("Please choose a bracelet.");
                contenu1.style.display = 'block';
                contenu2.style.display = 'block';
                contenu3.style.display = 'block';
                return false;
            }
            else if(document.forms["PurchaseIndexForm"]["PurchaseEngravingChk"].checked) {
                if(document.forms["PurchaseIndexForm"]["PurchaseEngravingContent"].value == "") {
                    alert("Please specify the engraving's content.");
                    contenu1.style.display = 'block';
                    contenu2.style.display = 'block';
                    contenu3.style.display = 'block';
                    return false;
                }
                else if ($.trim( $("#PurchaseEngravingContent").val() ) == "" ) {
                    alert("The engraving's content can not be empty.");
                    contenu1.style.display = 'block';
                    contenu2.style.display = 'block';
                    contenu3.style.display = 'block';
                    return false;
                }
            }
            else if(!(document.getElementById("IagreeChk").checked)) {
                alert("Please specify that you accept the terms and conditions of sale");
                document.getElementById("IagreeChk").focus();
                return false;
            }
        }
        </script>
        <!-- ========================================= ALERTBOX STEPS DEBUT ================================================ -->
        <!-- <script type="text/javascript" language="javascript">
        alert("Your SG Watch ordering procedure\n\nStep 1: Personalization of your Scots Guards Watch.\nStep 2: Providing your coordinates and shipping address.\nStep 3: Submit the request.\nStep 4: Confirmation will be sent to your E-mail Address, you will be invited to transfer 30% of the total purchase.\n\nNote:\n- Following the submission of your order, you have 3 working days to proceed with the payment.\n- Following the reception of your transfer, the manufacturing process will commence.\n\nIf you have any concerns during the ordering process, please contact us at info@colandmacarthur.com")
        </script> -->
        <!-- ========================================== ALERTBOX STEPS FIN ================================================= -->
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

