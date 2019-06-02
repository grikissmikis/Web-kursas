<!DOCTYPE html>

<html>
    <head>
        <title>Datos</title>
    </head>
    
    <body>

    <?php 
        
       
     function show_cpyear ($x) {
         $today = date('Y');
        
       if ($x >= $today) {
            echo '&copy;' . $today;
       } else {
            echo '&copy;' . $x . ' - ' . $today;
        }
     }
        show_cpyear (2015);
        
    ?>  

    </body>
</html>