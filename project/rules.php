<?php
    session_start();

    include_once 'header.php';
?>
        <div class="row">
            <main>
                <div class="main">
                    <h2>TURNYRŲ TAISYKLĖS</h2>
                    <ol id="rules-list">
                        <li>Turnyruose gali dalyvauti ne jaunesni nei 18 metų sulaukę asmenys.</li>
                        <li>Norint dalyvauti turnyruose, būtina užsiregistruoti "Pokeris Jūsų Mieste" tinklalapyje ir patvirtinti dalyvavimą pasirinktame konkrečiame turnyre likus ne mažiau nei 24 val. iki turnyro pradžios.</li>
                        <li>Žaidėjai, nespėję laiku užsiregistruoti į turnyrą, tai gali padaryti atvykę į turnyro vietą ne anksčiau nei likus 30 min. iki turnyro pradžios. Organizatorius turnyro informacijoje pateikia vėlyvosios registracijos laiką, kuris nurodo, iki kada vėliausiai prie turnyro gali prisijungti žaidėjai. Iš anksto neužziregistavusiems žaidėjams organizatorius negarantuoja vietos prie stalo, todėl esant pilnam susodinimui, žaidėjas patenka į laukiančiųjų sąrašą.</li>
                        <li>Organizatorius turi teisę atšaukti, patikslinti ar perkelti turnyrų vietą ir laiką, apie tai iš anksto informavęs užsiregistravusius dalyvius jų nurodytu el. paštu.</li>
                        <li>Turnyruose negalimi piniginiai prizai. Bet kokie žaidėjų susitarimai, susiję su piniginiais santykiais, yra griežtai draudžiami, ir organizatorius turi teisę tokius žaidėjus pašalinti iš turnyro.</li>
                        <li>Prizų vertė gali kisti priklausomai nuo susirinkusių žaidėjų skaičiaus. Apie tai organizatorius informuoja konkretaus turnyro informacijoje.</li>
                        <li>Sąžiningas žaidimas yra esminis turnyrų kriterijus. Draudžiami bet kokie veiksmai, kurie galėtų būti įvardijami kaip nesąžiningas žaidimas:
                            <ul class="rules-list2">
                                <li>žaidimo taisyklių nesilaikymas,</li>
                                <li>žaidėjų susitarimai,</li>
                                <li>žetonų vagystės,</li>
                                <li>kortų keitimas ar žymėjimas,</li>
                                <li>bet kokio mechaninio ar elektroninio sukčiavimo mechanizmo naudojimas.</li>
                            </ul>
                        </li>
                        <li>Organizatorius gali skirti įvairias sankcijas (turnyrinio laiko nuobaudas, žetonų konfiskavimą ar net pašalinimą iš turnyro) už turnyro taisyklių nepaisymą bei nesąžiningą žaidimą.</li>
                        <li>Žaidėjai privalo laikytis pagrindinių pokerio žaidimo taisyklių, tokių kaip:
                            <ul class="rules-list2">
                                <li>tinkamas kortų atvertimas,</li>
                                <li>statymo dydžio nusakymas žodiniu pareiškimu,</li>
                                <li>sprendimo priėmimas per "protingą" laiko tarpą,</li>
                                <li>veiksmo atlikimas savo eilės metu,</li>
                                <li>mažėjančios vertės žetonų nuėmimas ir pan.</li>
                            </ul>
                        </li>
                        <li>Žaidimas yra prižiūrimas turnyro direktoriaus ir personalo. Galutinis žodis ginčų sprendime suteikiamas turnyro direktoriui.</li>
                    </ol>
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