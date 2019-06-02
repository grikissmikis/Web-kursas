<!DOCTYPE html>
<html>
    <head></head>
    <body>
        
        <?php 
        
        $cities3 = [
            'Tokijas' => [13.6, 1868, 'Japonija'], 
            'Vasingtonas' => [0.6, 1790, 'JAV'], 
            'Maskva' => [11.5, 1147, 'Rusija']
        ];
        
        print_r($cities3); 
        
        $cities3['Londonas'] = [8.6, 43, 'Anglija'];
        
        echo"<ul>
                <li>Gyventojų skaičius: {$cities3['Londonas'][0]} mln.</li>
                <li>Įkurtas: {$cities3['Londonas'][1]} m.</li>
                <li>Šalis: {$cities3['Londonas'][2]}</li>
            </ul>";
        ?>
        
    </body>
</html>