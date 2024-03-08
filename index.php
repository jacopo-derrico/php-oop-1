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

    $bladeRunner = new Movie('Blade Runner', 117, 'Ridley Scott', 'https://picsum.photos/400/400');
    $bladeRunner2049 = new Movie('Blade Runner 2049', 163, 'Denis Villeneuve', 'https://picsum.photos/400/400');
    
    $moviesArray = [$bladeRunner, $bladeRunner2049];
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class Examples</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center mt-3">
        Movies
    </h1>
    <div class="container-fluid my-5">
        <div class="row col-10 mx-auto gap-3">
            <?php foreach($moviesArray as $movie) : ?>
            <div class="card col-3 px-0 ">
                <figure class="figure" style="height: 80%">
                    <img src="<?= $movie->img ?>" class="img-fluid object-fit-cover" alt="<?= $movie->titolo.' copertina' ?>"
                    style="border-radius: 0.3rem 0.3rem 0 0">
                </figure>
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