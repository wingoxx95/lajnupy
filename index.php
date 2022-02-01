<!DOCTYPE html>
<html lang="en">

<head>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="script1.js"></script>
    <link rel="stylesheet" href="style1.css">
    <title>LAJNUPY</title>
</head>

<body>
    <header>
        <h1>LAJNUPY</h1><img src="LOGO_LAJNUPY.png" alt="LOGO_LAJNUPY" id="logo">
    </header>
    <section id="MENU"></section>
    <main>

        <form action="" method="get" name="Form1">
            <div class="menu">
                <div class="menu_block_map">
                    <h1 class="name_map">MAPA</h1>
                    <div class="list_map">

                        <li>
                            <label>
                                <input type="radio" name="list_map_option" value="ASCENT" class="map" id="MAPA">
                                <div>ASCENT</div>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="list_map_option" value="BIND" class="map" id="MAPA">
                                <div>BIND</div>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="list_map_option" value="BREEZE" class="map">
                                <div>BREEZE</div>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="list_map_option" value="FRACTURE" class="map">
                                <div>FRACTURE<div>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="list_map_option" value="HAVEN" class="map">
                                <div>HAVEN<div>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="list_map_option" value="ICEBOX" class="map">
                                <div>ICEBOX<div>
                            </label>
                        </li>
                        <li>
                            <label>
                                <input type="radio" name="list_map_option" value="SPLIT" class="map"><div>SPLIT<div>
                            </label>
                        </li>
                    </div>
                </div>
                <div class="menu_block_site">
                    <h1 class="name_site">SITE</h1>
                    <div class="list_site">

                        <li><label><input type="radio" name="list_site_option" value="A" class="site"><div>A</div></label></li>
                        <li><label><input type="radio" name="list_site_option" value="B" class="site"><div>B</div></label></li>
                        <li><label><input type="radio" name="list_site_option" value="C" class="site"><div>C</div></label></li>


                    </div>
                </div>
                <div class="menu_block_agent">
                    <h1 class="name_agent">AGENT</h1>
                    <div class="list_agent">

                        <li><label><input type="radio" name="list_option_agent" value="VIPER" class="agent"><div>VIPER<div></label></li>
                        <li><label><input type="radio" name="list_option_agent" value="SOVA" class="agent"><div>SOVA<div></label></li>
                        <li><label><input type="radio" name="list_option_agent" value="KILLJOY" class="agent"><div>KILLJOY<div></label></li>
                        <li><label><input type="radio" name="list_option_agent" value="BRIMSTONE" class="agent4"><div>BRIMSTONE<div></label></li>

                    </div>
                </div>
            </div>
           
            <div class="container">
                <div class="empty"></div>
                <div class="submit"><div class="empty"></div><button type="submit" name="submit" >SZUKAJ</button><div class="empty"></div></div>
                <div class="empty"></div>
            </div>           
        </form>
        <div class="link_script">
            <div class="empty"></div>
            <div class="php">
        <?php 
        
                  function button(){

                 //  echo "<div>WYBRANO MAPĘ: ".$a.", WYBRANO SITE: ".$b.", WYBRANO AGENTA: ".$c." </div>";
                 //  echo "LINK TO:".$a."_".$b."_".$c;
                   //if(isset($_GET['submit'])){
                    $a=$_GET["list_map_option"]; 
                    $b=$_GET["list_site_option"];
                    $c=$_GET["list_option_agent"];
                    $text="<!DOCTYPE html>
                    <label lang='en'>
                    <head>
                        <meta charset='UTF-8'>
                        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
                        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
                        <link rel='stylesheet' href='lajnup.css'>
                        <title>LAJNUPY</title>
                    </head>
                    <body>
                        <header><h1>LAJNUPY</h1></header>
                        MAPA: ".$a."; SITE: ".$b."; AGENT: ".$c.";
                        <div class='mid'>
                            <div class='map_placement'>
                                <img src='".$a."_".$b."_".$c."_PLACE_1.png' alt='where on the map'>
                                <img src='".$a."_".$b."_".$c."_PLACE_2.png' alt='szczegół umiejscowienia'>
                            </div>
                            <div class='site_landing'>
                                <img src='".$a."_".$b."_".$c."_LANDING_1.png' alt='landing point'>
                            </div>
                            <div class='agent_angle'>
                                <img src='".$a."_".$b."_".$c."_ANGLE_1.png' alt='screen ogólny'>
                                <img src='".$a."_".$b."_".$c."_DETAIL_1.png' alt='screen sczegóły'>
                            </div>
                        </div>
                        <footer>
                            <a href='index.php'>POWRÓT</a>
                        </footer>
                       
                    </body>
                    
                    </html>";

                        echo "MAPA TO: ".$a.", SITE TO: ".$b.", AGENT TO: ".$c."</br>";

                            $fh = fopen('test.html', 'w');
                            fwrite($fh, $text);
                            fclose($fh);
                            echo"<a href='test.html'><button id='lajnup_wynik'>LAJNUP</button></a>";

                    //unlink('test.html');
                   }
                   if (isset($_GET['submit'])){
                        button();
                   }
        ?>

        </div>
        <div class="empty"></div>
        </div>

        
        <div class="tabela">
        <div class="wynik_container">
            
                <div class="wiersz">
                    <div class="kolumna_pierwsza"><h2>MAPA</h2></div>
                    <div class="kolumna_pierwsza1"><h2>SITE</h2></div>
                    <div class="kolumna_pierwsza"><h2>AGENT</h2></div>
                </div>

<!-- ----------------------------------------------------- WIERSZ TABELI ------------------------------------------------------------- -->
            <section id="ASCENT_A_VIPER">
                <div class="wiersz">
                    <div class="kolumna"><img src="Ascent_position_A_viper_1" alt="Ascent_position_A_viper_1"><img src="Ascent_position_A_viper_2" alt="Ascent_position_A_viper_2"></div>
                    <div class="kolumna1"><img src="Ascent_landing_A_viper" alt="Ascent_landing_A_viper"></div>
                    <div class="kolumna"><img src="Ascent_angle_A_viper_1" alt="Ascent_angle_A_viper_2"><img src="Ascent_angle_A_viper_2" alt="Ascent_angle_A_viper_2"></div>
                </div>
                <div class="powrot"><a href="#MENU">POWRÓT</a></div>
            </section>
<!-- ----------------------------------------------------- KONIEC WIERSZA TABELI ------------------------------------------------------------- -->
<!-- ----------------------------------------------------- WIERSZ TABELI ------------------------------------------------------------- -->
            <section id="ASCENT_B_VIPER">
                <div class="wiersz">
                    <div class="kolumna"><img src="Ascent_position_B_viper_1" alt="Ascent_position_B_viper_1"><img src="Ascent_position_B_viper_2" alt="Ascent_position_B_viper_2"></div>
                    <div class="kolumna1"><img src="Ascent_landing_B_viper" alt="Ascent_landing_B_viper"></div>
                    <div class="kolumna"><img src="Ascent_angle_B_viper_1" alt="Ascent_angle_B_viper_2"><img src="Ascent_angle_B_viper_2" alt="Ascent_angle_B_viper_2"></div>
                </div>
            </section>
<!-- ----------------------------------------------------- KONIEC WIERSZA TABELI ------------------------------------------------------------- -->
<!-- ----------------------------------------------------- WIERSZ TABELI ------------------------------------------------------------- -->
            <section id="ASCENT_A_SOVA">
                <div class="wiersz">
                    <div class="kolumna"><img src="Ascent_position_A_SOVA_1" alt="Ascent_position_A_SOVA_1"><img src="Ascent_position_A_SOVA_2" alt="Ascent_position_A_SOVA_2"></div>
                    <div class="kolumna1"><img src="Ascent_landing_A_SOVA" alt="Ascent_landing_A_SOVA"></div>
                    <div class="kolumna"><img src="Ascent_angle_A_SOVA_1" alt="Ascent_angle_A_SOVA_2"><img src="Ascent_angle_A_SOVA_2" alt="Ascent_angle_A_SOVA_2"></div>
                </div>
            </section>
<!-- ----------------------------------------------------- KONIEC WIERSZA TABELI ------------------------------------------------------------- -->
<!-- ----------------------------------------------------- WIERSZ TABELI ------------------------------------------------------------- -->
            <section id="ASCENT_B_SOVA">
                <div class="wiersz">
                    <div class="kolumna"><img src="Ascent_position_B_SOVA_1" alt="Ascent_position_B_SOVA_1"><img src="Ascent_position_B_SOVA_2" alt="Ascent_position_B_SOVA_2"></div>
                    <div class="kolumna1"><img src="Ascent_landing_B_SOVA" alt="Ascent_landing_B_SOVA"></div>
                    <div class="kolumna"><img src="Ascent_angle_B_SOVA_1" alt="Ascent_angle_B_SOVA_2"><img src="Ascent_angle_B_SOVA_2" alt="Ascent_angle_B_SOVA_2"></div>
                </div>
            </section>
<!-- ----------------------------------------------------- KONIEC WIERSZA TABELI ------------------------------------------------------------- -->
<!-- ----------------------------------------------------- WIERSZ TABELI ------------------------------------------------------------- -->
            <section id="ASCENT_A_KILLJOY">
                <div class="wiersz">
                    <div class="kolumna"><img src="Ascent_position_A_KILLJOY_1" alt="Ascent_position_A_KILLJOY_1"><img src="Ascent_position_A_KILLJOY_2" alt="Ascent_position_A_KILLJOY_2"></div>
                    <div class="kolumna1"><img src="Ascent_landing_A_KILLJOY" alt="Ascent_landing_A_KILLJOY"></div>
                    <div class="kolumna"><img src="Ascent_angle_A_KILLJOY_1" alt="Ascent_angle_A_KILLJOY_2"><img src="Ascent_angle_A_KILLJOY_2" alt="Ascent_angle_A_KILLJOY_2"></div>
                </div>
            </section>
<!-- ----------------------------------------------------- KONIEC WIERSZA TABELI ------------------------------------------------------------- -->
<!-- ----------------------------------------------------- WIERSZ TABELI ------------------------------------------------------------- -->
            <section id="ASCENT_B_KILLJOY">
                <div class="wiersz">
                    <div class="kolumna"><img src="Ascent_position_B_KILLJOY_1" alt="Ascent_position_B_KILLJOY_1"><img src="Ascent_position_B_KILLJOY_2" alt="Ascent_position_B_KILLJOY_2"></div>
                    <div class="kolumna1"><img src="Ascent_landing_B_KILLJOY" alt="Ascent_landing_B_KILLJOY"></div>
                    <div class="kolumna"><img src="Ascent_angle_B_KILLJOY_1" alt="Ascent_angle_B_KILLJOY_2"><img src="Ascent_angle_B_KILLJOY_2" alt="Ascent_angle_B_KILLJOY_2"></div>
                </div>
            </section>
<!-- ----------------------------------------------------- KONIEC WIERSZA TABELI ------------------------------------------------------------- -->
<!-- ----------------------------------------------------- WIERSZ TABELI ------------------------------------------------------------- -->
            <section id="ASCENT_A_BRIMSTONE">
                <div class="wiersz">
                    <div class="kolumna"><img src="Ascent_position_A_BRIMSTONE_1" alt="Ascent_position_A_BRIMSTONE_1"><img src="Ascent_position_A_BRIMSTONE_2" alt="Ascent_position_A_BRIMSTONE_2"></div>
                    <div class="kolumna1"><img src="Ascent_landing_A_BRIMSTONE" alt="Ascent_landing_A_BRIMSTONE"></div>
                    <div class="kolumna"><img src="Ascent_angle_A_BRIMSTONE_1" alt="Ascent_angle_A_BRIMSTONE_2"><img src="Ascent_angle_A_BRIMSTONE_2" alt="Ascent_angle_A_BRIMSTONE_2"></div>
                </div>
            </section>
<!-- ----------------------------------------------------- KONIEC WIERSZA TABELI ------------------------------------------------------------- -->

            
        </div>
        </div>
    </main>
    <footer></footer>
    
</body>

</html>