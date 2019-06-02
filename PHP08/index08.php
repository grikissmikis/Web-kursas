<!DOCTYPE html>
<html>
    <head>
        <title>Temperatūros</title>
    </head>
    <body>
        <?php
        
        $temp = [4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21]; 
        
     
        $total = 0;
        foreach ($temp as $value) {
            $total += $value;
        }
        
        $vid_temp = $total / count($temp);
        
        ?>
        
        <p><?php echo 'Vidutinė Vilniaus miesto balandžio mėnesio temperatūra - ' . round($vid_temp) . ' laipsnių.'; ?></p>
        
        <?php
        
        rsort($temp);
        
        $penkios_hot = array_slice($temp, 0, 5);
            
        $penkios_cold = array_slice($temp, -5, 5);
        echo 'Penkios šilčiausios temperatūros: ' . implode(', ',$penkios_hot) . '.<br>Penkios šalčiausios temperatūros: ' . implode(', ',$penkios_cold) . '.'; 
      
        ?>
    </body>
</html>