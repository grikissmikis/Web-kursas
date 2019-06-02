<!DOCTYPE html>
<html>
    <head>
        <title>PHP 07</title>
    </head>
    <body>
   
        <?php $cities4 = ['Tokijas', 'Vašingtonas', 'Maskva', 'Londonas']; ?>
        
        <?php
        
        echo implode(', ', $cities4);
       
        ?>
        
        <ul>
            <?php
            
            for($i = 0; $i < count($cities4); $i++) {
                echo "<li>$cities4[$i]</li>";
            }
            ?>
        </ul>
        
        <ul>
            <?php
            
            foreach ($cities4 as $cities) {
                echo "<li>$cities</li>";
            }
            ?>
        </ul>
        
    </body>
</html>