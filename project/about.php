<?php
    session_start();

    include_once 'header.php';
?>
        <div class="row">
            <main>
                <div class="main">
                    <h2>APIE MUS</h2>
                    <h4>Kas mes?</h4>
                    <div id="photo-team"><image src="apps/images/komanda.jpg" alt="Komanda"></image></div>
                    <p>"Pokeris Jūsų Mieste" - tai trijų draugų iniciatyva gimęs projektas, kurio tikslas populiarinti mėgiamą žaidimą rytinėje Lietuvos dalyje ir tuo pačiu paįvairinti mažesnių Lietuvos miestų socialinį gyvenimą suteikiant neeilinę pramogą jų gyventojams. Sportinis pokeris yra ne tik beprotiškai populiarus žaidimas, bet ir valią, psichologinį stabilumą, matematinius ir loginius įgūdžius lavinantis visuomeninio bendravimo įrankis. Pagrindinis sportinio pokerio principas skiriantis jį nuo įprasto pokerio yra sportinis interesas varžytis ir nugalėti nesiekiant piniginio laimėjimo. Todėl "Pokeris Jūsų Mieste" organizuojamuose turnyruose žaidžiama ne iš pinigų, o tam tikrą piniginę vertę atitinkančių prizų.</p>
                    <h4>Kaip viskas vyksta?</h4>
                    <p>"Pokeris Jūsų Mieste" komanda išsirenka tinkamiausią vietą (paprastai restoraną ar kavinę) turnyro organizavimui Jūsų mieste ir turnyro dieną atvyksta su visa profesionalia įranga bei dalintojais. Informaciją apie artėjantį turnyrą galite rasti turnyro organizavimo vietoje, "Pokeris Jūsų Mieste" tinklalapyje bei facebook paskyroje. Tereikia užsiregistruoti ir atvykti, o kokybišku laiko praleidimu pasirūpinsime mes!</p>
                    <h4>Kokias papildomas paslaugas siūlome?</h4>
                    <p>Mes jauni, žavūs ir energingi, todėl neapsiribojame sportinio pokerio turnyrų organizavimu rytinėje Lietuvos dalyje, bet taip pat siūlome ir papildomas paslaugas:</p>
                        <ul class="about-list">
                            <li>užsakomuosius sportinio pokerio turnyrus Jūsų renginiui,</li>
                            <li>profesionalios pokerio įrangos nuomą (žetonai, kortos, stalai ir pan.).</li>
                        </ul>
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