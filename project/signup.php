<?php
    session_start();

    include_once 'header.php';
?>
        <div class="row">
            <main>
                <div class="main">
                    <div class="main-signup">
                        <h2>REGISTRACIJA</h2>
                        <h4>Norint dalyvauti turnyruose, būtina užsiregistruoti sistemoje.</h4>
                        <form class="signup-form" action="includes/signup.inc.php" method="post">
                            <input type="text" name="first" placeholder="Vardas"/>
                            <input type="text" name="last" placeholder="Pavardė"/>
                            <input type="text" name="email" placeholder="El. paštas"/>
                            <input type="text" name="uid" placeholder="Vartotojo vardas"/>
                            <input type="password" name="pwd" placeholder="Slaptažodis"/>
                            <button type="submit" name="submit">Registruotis</button>
                        </form>
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