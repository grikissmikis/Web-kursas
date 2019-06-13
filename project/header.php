<!DOCTYPE html>
<html lang="lt">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Pokeris jūsų mieste">
        <meta name="keywords" content="pokeris, miestas, žaidimas, pramoga, laisvalaikis">
        <meta name="author" content="GS">
        <link href="https://fonts.googleapis.com/css?family=Raleway&display=swap&subset=latin-ext" rel="stylesheet">
        <link href="apps/images/fontawesome/css/all.css" rel="stylesheet">
        <link href="apps/css/styles.css" rel="stylesheet">
        <title>Pokeris jūsų mieste | Pagrindinis</title>
    </head>
    <body>
        <header>
            <div class="header">
                <a href="index.php"><img id="logo" src="apps/images/logo_03_comp.jpg" alt="logo"></a>
            </div>
            <nav>
                <div class="top-nav">
                    <a href="index.php">Pagrindinis</a>
                    <a href="rules.php">Turnyrų taisyklės</a>
                    <a href="about.php">Apie</a>
                    <a href="contacts.php">Kontaktai</a>
                    <div class="nav-login">
                       <?php
                            if(isset($_SESSION['u_id'])) {
                                echo '<form action="includes/logout.inc.php" method="post">
                                <button type="submit" name="submit">Atsijungti</button></form>';
                            } else {
                                echo '<form id="navig-form" action="includes/login.inc.php" method="post">
                                <input type="text" name="uid" placeholder="Vartotojo vardas" />
                                <input type="password" name="pwd" placeholder="Slaptažodis" />
                                <button type="submit" name="submit">Prisijungti</button>
                                </form>
                                <a href="signup.php">Registracija</a>';
                            }
                        ?>
                    </div>
                </div>
            </nav>
        </header>