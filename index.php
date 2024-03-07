<?php
    class Movie {
        public $titolo;
        public $durata; //espressa in minuti
        public $regista;

        function __construct($titolo, $durata, $regista) {
            $this->titolo =$titolo;
            $this->durata =$durata;
            $this->regista =$regista;
        }

        public function getHour($durata) {
            return intdiv($durata, 60).':'. ($durata % 60);
        }
    };

    $bladeRunner = new Movie('Blade Runner', 117, 'Ridley Scott');
    $bladeRunner2049 = new Movie('Blade Runner 2049', 163, 'Denis Villeneuve');
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Examples</title>
</head>
<body>
    <div>
        <h3>
            <?= $bladeRunner->titolo ?>
        </h3>
        <h5>
            <?= $bladeRunner->regista ?>
        </h5>
        <p>
            Durata: <?= $bladeRunner->getHour($bladeRunner->durata) ?>
        </p>
    </div>
    <div>
        <h3>
            <?= $bladeRunner2049->titolo ?>
        </h3>
        <h5>
            <?= $bladeRunner2049->regista ?>
        </h5>
        <p>
            Durata: <?= $bladeRunner2049->getHour($bladeRunner2049->durata) ?>
        </p>
    </div>
</body>
</html>