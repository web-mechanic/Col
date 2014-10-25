<?php
echo "<div id='header2'> <!-- Contient : Logo, Search, Menu,  -->
                        <a href='index.php' alt='Home page' title='Home page'><div id='logo'></div></a>
                        <a href='#my-menu' class='menuToggle'>Open the menu</a>
                        <!-- <div id='search'>
                            <form action='#'>
                                <input type='text' name='result' id='search' placeholder='  Search'>
                            </form>
                        </div> -->
                        <!-- <div id='newsletter'>
                            <form action='#'>
                                <input type='text' name='result' placeholder='  your-email@domain.com'>
                            </form>
                        </div> -->
                        <div class='grey'>
                        <nav id='my-menu'>
                        <ul>
                            <li class='ourcompany' class='menu'><a href='our-company.php'><span>Learn about</span><p>OUR COMPANY</p></a>
                                <ul id='ourcompany-submenu'>
                                    <li id='about-us'><a href='our-company.php'>About us</a></li>
                                    <li id='savoir-faire'><a href='our-company.php#savoirfaire-title'>Savoir-Faire</a></li>
                                </ul>
                            </li>
                            <div class='separatorvertical'></div>
                            <li class='news' class='menu'><a href='news.php'><span>Latest</span><p>NEWS</p></a></li>
                            <div class='separatorvertical'></div>
                            <li class='guarantee' class='menu'><a href='guarantee.php'><span>Our</span><p>COMMITMENT</p></a>
                                <ul id='guarantee-submenu'>
                                    <li id='guaranteeSub'><a href='guarantee.php'>Guarantee</a></li>
                                    <li id='modSub'><a href='ministry-of-defence.php'>MoD Licensed</a></li>
                                    <li id='testimonySub'><a href='feedback.php'>Feedback</a></li>
                                </ul>
                            </li>
                            <div class='separatorvertical'></div>
                            <li class='purchase' class='menu'><a href='purchase.php'><span>How to</span><p>PURCHASE</p></a>
                                <ul id='purchase-submenu'>
                                    <li id='how-to-buy'><a href='purchase.php'>Ordering</a></li>
                                    <li id='donations'><a href='donations.php'>Donations</a></li>
                                </ul>
                            </li>
                            <div class='separatorvertical'></div>
                            <li class='contact' class='menu'><a href='contact.php'><span>Information &amp;</span><p>CONTACT</p></a></li>
                        </ul>
                        </nav>
                        </div>
                
                    </div> <!-- On ferme le header -->";
?>