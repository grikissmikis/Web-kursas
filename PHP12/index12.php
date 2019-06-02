<!DOCTYPE html>

<html>
    <head>
        <title>Forma2</title>
    </head>
    
    <body>
     
<?php
     

    if(!isset($_POST['submit']) || empty($_POST['vardas']) || empty ($_POST['pavarde'])) {
    
     
?>
     
    <form action="<?php $_PHP_SELF; ?>" method="post">
        <p>Įrašykite vardą ir pavardę.</p>
        <p>Vardas: <input type="text" name="vardas" size="15" />
        Pavardė: <input type="text" name="pavarde" size="15" /></p>
        <input type="submit" name="submit" value="Išvesti" />
    </form>
        
<?php

    } else {
        
        $x = $_POST['vardas'];
        $y = $_POST['pavarde'];
        
        echo 'Jūsų vardas ir pavardė yra ' . $x . ' ' . $y . '.';
    }

?>
   
    </body>
</html>