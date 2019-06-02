<!DOCTYPE html>
<html>
    <head>
        <title>PHP 04</title>
    </head>
    <body>
        <?php 
        
        $cities = ['Berlynas', 'Roma', 'Londonas'];
        $cities[] = 'Tokijas';
        
        print_r($cities);
        
        
        echo"<ul><li>$cities[1]</li></ul>";
        
        $cities2 = [
            'tokijas' => 13.6, 
            'vasingtonas' => 0.6, 
            'maskva' => 11.5
        ];
        
        print_r($cities2);
        
        $cities2['londonas'] = 8.6;
        
        echo"<ul><li>Gyventojų skaičius: {$cities2['tokijas']} mln.</li></ul>";
        
        ?>
        
    </body>
</html>