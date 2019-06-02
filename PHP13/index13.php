<!DOCTYPE html>

<html>
    <head>
        <title>Žmones</title>
    </head>
    
    <body>


    <?php 

    class Žmogus {
        public $vardas;
        public $pavarde;

        public function labas() {
            return 'Labas, esu ' . $this -> vardas . ' ' . $this -> pavarde . '.<br>';
        }
    }

    $moteris = new Žmogus();
    $vyras = new Žmogus();


    $moteris -> vardas = "Neringa";
    $moteris -> pavarde = "Nekrašiūtė";

    $vyras -> vardas = "Rafailas";
    $vyras -> pavarde = "Karpis";

    echo $moteris -> labas();
    echo $vyras -> labas();

    ?>  

    </body>
</html>