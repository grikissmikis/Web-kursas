<?php
    session_start();

    require __DIR__ . '/apps/src/app.php';

    include_once 'header.php';
?>
        <div class="row">
            <main>
                <div class="main">
                    <div class="contacts-information">
                        <div class="our-contacts">
                            <h2>KONTAKTAI</h2>
                            <ul class="our-contacts-list">
                                <li><a href="tel:+37067029667"><i class="fas fa-mobile-alt"></i>+37062291375</a></li>
                                <li><a href="mailto:pokerisjusumieste@gmail.com"><i class="far fa-envelope"></i>pokerisjusumieste@gmail.com</a></li>
                            </ul>
                        </div>
                        <div class="contacts-form">
                            <form id="contacts" action="contacts.php" method="post">
                                <h2>SUSISIEKITE</h2>
                                <h4>Norėdami susisiekti, užpildykite ir išsiųskite formą!</h4>
                                <p><input type="text" name="vardas" placeholder="Jūsų vardas" required autofocus></p>
                                <p><input type="email" name="email" placeholder="Jūsų el. pašto adresas" required></p>
                                <p><textarea placeholder="Jūsų žinutė..." name="message" required></textarea></p>
                                <p><button name="submit" type="submit" id="contact-submit">Siųsti</button></p>
                            </form>
                        </div>
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