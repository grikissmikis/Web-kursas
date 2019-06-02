<!DOCTYPE html>

<html>
    <head>
        <title>Forma1</title>
    </head>
    
    <body>
     
<?php
   
    function staciakampio_plotas ($x, $y) {
            $plotas = $x * $y;
            return $plotas;
    }

    if(!isset($_POST['submit']) || empty($_POST['ilgis']) || empty ($_POST['plotis'])) {
?>
     
    <form action="<?php $_PHP_SELF; ?>" method="post">
        <p>Įrasykite staciakampio ilgi ir ploti.</p>
        <p>Ilgis: <input type=number name="ilgis" size="5" />
        Plotis: <input type=number name="plotis" size="5" /></p>
        <input type="submit" name="submit" value="Skaiciuoti plota" />
    </form>
        
<?php

    } else {

        $x = $_POST['ilgis'];
        $y = $_POST['plotis'];

        echo 'Stačiakampio, kurio kraštinės yra ' . $x . ' ir ' . $y . ', plotas: ' . staciakampio_plotas($x, $y) . '.';
    }

?>
   
    </body>
</html>