<?php
    session_start();

    include_once 'header.php';
?>
        <div class="row">
            <main>
                <div class="main">
                    <div class="main-content">
                        <h2>POKERIO TURNYRAS TRAKUOSE</h2>
                        <h4>Data: 2019 m. birželio 15 d., 18:00 val.</h4>
                        <h4>Vieta: Restoranas "Le Vivier Trakai", Karaimų g. 66A, Trakai</h4>
                        <h4>Turnyro informacija:</h4>
                        <p>Prizai: (prizus, galime pakeisti į Jūsų pageidavimus, bendru sutarimu)<br> 
                            1 vieta – 100€* Prekybos ir pramogų centro Akropolis dovanų čekis;<br>
                            2 vieta – 30€ Prekybos ir pramogų centro Akropolis dovanų čekis;<br>
                            3 vieta – 20€ Prekybos ir pramogų centro Akropolis dovanų čekis;<br>
                            4 - 5 vietos – FREE PASS (nemokamas dalyvavimas kitame turnyre).
                        </p>
                        <h4>Turnyro struktūra:</h4>
                        <p>Žetonų skaičius: 10000;<br>Lygiai: 20 min., nuo 9 lygio - 15 min.;<br>Pradinis privalomasis statymas: 25 – 50.<br>Turnyras su dalintojais.
                        </p>
                        <h4>Dalyvio informacija:</h4>
                        <P>Dalyvio mokestis: 5€ baro sąskaita + 5€ aptarnavimo mokestis;<br>Re-buy: 10000 žetonų iki 8 lygio pabaigos (5€ baro sąskaita + 5€ aptarnavimo mokestis);<br>Add-on: 20000 žetonų po 8 lygio (5€ baro sąskaita + 5€ aptarnavimo mokestis);<br>Registruoti į žaidimą pradedame: 17:30 val.;<br>Vėlyvoji registracija: iki 4 lygio pabaigos.
                        </P>
                        <h4>Svarbi informacija:</h4>
                        <p>* - nesusirinkus 25 žaidėjams, pirmos vietos prizo vertė - 50€.<br>Sutarus su organizatoriais, prizus galima pasikeisti į pageidaujamus (pvz., pigu.lt kuponas, Maxima dovanų čekis). Jūsų valia rinktis, mūsų pastangos Jūsų norus įgyvendinti.<br>Žaidėjas, norėdamas dalyvauti turnyre ar pasipildyti žetonų kiekį žaidimo metu (re-buy ir add-on), moka dalyvio mokestį. Už jį gaunama baro sąskaitą, kuri leidžia įsigyti norimas prekes bare.</p>
                        <p><button name="submit" type="submit" id="tournament-submit">Dalyvauti</button></p>
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