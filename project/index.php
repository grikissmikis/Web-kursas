<?php
    session_start();

    include_once 'header.php';
?>
        <div class="row">
            <main>
                <div class="main">
                    <div class="main-content">
                        <h2>NAUJIENOS</h2>
                        <?php
                            if(isset($_SESSION['u_id'])) {
                                
                            }
                        ?>
                        <h4>Akimirkos iš turnyro Jonavoje</h4>
                        <p>Gegužės 23 d. Jonavoje įvyko jau dešimtasis "Pokeris Jūsų Mieste" organizuojamas sportinio pokerio turnyras. Į turnyrą kavinėje "Svetainė" susirinko apie 30 žaidėjų. Po 6 valandas trūkusios įtemptos kovos, turnyrą laimėjo Paulius. Sveikiname Paulių ir laukiame visų norinčių smagiai praleisti laiką kituose mūsų turnyruose! Turnyrų grafiką galite rasti mūsų tinklalapyje bei faceboo paskyroje.<br><br>Daugiau įamžintų akimirkų iš turnyro Jonavoje ieškokite <a id="news-link" href="https://www.facebook.com/pg/pokerislietuvoj/photos/?tab=album&album_id=415872962594956&__xts__%5B0%5D=68.ARD45iAViILUMZ8Go794VoojnXiVPH-FN-3Q3xk4MJm-lxDIGn0r6t_TXNmiLY8Cxde2ey2_6XEYUE4BrFPzWCu-KBk5tuLjdqjiM0TCQmlSPnmGvlBKhyjHFxM4e4jgYcxE3WYwoV3hZBZdfJeyiI8kjQCvxnMn_LDh-ldFBoTC1cucoaUjXCa2ziI7AD-RNMZ7X1L6Fmup7TLxi0JVEJwbq0BpQoBmAOgpBC3_OWEBzvMSKr2e5FHJ5Y1az1a3B9WSK-_ySYDcQ6qapFwO8P2DG7_uWwvPz8EkCIGCa-xGcInC_1LzyIu3zKo68n3TOIjSN530yrEJybKKOG_KjfVasj0tXZPywXQe2r4pP65MfxOwnBk4qoosrhPG43Gc3JGeGsQ70f1tTt6gTk-1kNWYcli02AIK9GrQ2mOtl_kvHZQN4uyIO1W8KAJaEPtMb1Ih8A19qShNXeFAKg&__tn__=-UC-R">čia</a>.</p>
                        <div id="photo-news"><image src="apps/images/photo_news.jpg" alt="Turnyro prizininkai"></image></div>
                    </div>    
                </div>
            </main>
            <aside>
                <div class="side">
                    <h2>ARTIMIAUSI POKERIO TURNYRAI</h2>
                    <div class="tournament-list">
                        <div class="tournament-block">
                            <div class="tournament-date">2019-06-15</div>
                            <div class="tournament-name"><a href="tournament.php">Trakai, restoranas "Le Vivier Trakai"</a></div>
                        </div>
                        <div class="tournament-block">
                            <div class="tournament-date">2019-06-28</div>
                            <div class="tournament-name"><a href="#">Ukmergė, "Užupio kavinė"</a></div>
                        </div>
                        <div class="tournament-block">
                            <div class="tournament-date">2019-07-12</div>
                            <div class="tournament-name"><a href="#">Varėna, kavinė "Draugai"</a></div>
                        </div>
                    </div>
                </div>
                <div class="friends-logo">
                    <h2>MŪSŲ DRAUGAI</h2>
                    <a class="friends-logo-hover" href="https://lspf.lt/"><img class="logo-image" src="apps/images/lspf_logo.png" alt="Lspf logo"></a>
                    <a class="friends-logo-hover" href="http://dukaraliai.lt/"><img class="logo-image" src="apps/images/dukaraliai_logo.png" alt="Du Karaliai logo"></a>
                </div>
            </aside>
        </div>
<?php
    include_once 'footer.php';
?>