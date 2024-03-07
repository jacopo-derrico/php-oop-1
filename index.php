<?php
    class Movie {
        public $titolo;
        public $durata; //espressa in minuti
        public $regista;
        public $img;

        function __construct($titolo, $durata, $regista, $img) {
            $this->titolo =$titolo;
            $this->durata =$durata;
            $this->regista =$regista;
            $this->img =$img;
        }

        public function getHour($durata) {
            return intdiv($durata, 60).'h '. ($durata % 60).'m';
        }
    };

    $bladeRunner = new Movie('Blade Runner', 117, 'Ridley Scott', 'https://stanforddaily.com/wp-content/uploads/2017/10/Brunner1.jpeg');
    $bladeRunner2049 = new Movie('Blade Runner 2049', 163, 'Denis Villeneuve', 'https://e-cdn-images.dzcdn.net/images/cover/87dbcce1d3c1ecf29440de6fb13686a1/500x500-000000-80-0-0.jpg');
    
    $moviesArray = [$bladeRunner, $bladeRunner2049];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Examples</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
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
    <div>
        <div class="row">
            <?php foreach($moviesArray as $movie) : ?>
            <div class="card" style="width: 18rem;">
                <img src="<?= $movie->img ?>" class="card-img-top" alt="<?= $movie->titolo.' copertina' ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $movie->titolo ?></h5>
                    <h6 class="card-text">
                        <?= $movie->regista ?>
                    </h6>
                    <p class="card-text">
                        <?= $movie->getHour($movie->durata) ?>
                    </p>
                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                </div>
            </div>
            <?php endforeach ?>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>