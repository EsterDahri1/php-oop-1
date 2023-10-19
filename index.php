<?php
/*
è definita una classe ‘Movie’ => all’interno della classe sono dichiarate delle variabili d’istanza => all’interno della classe è definito un costruttore => all’interno della classe è definito almeno un metodo ✔️

vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà ✔️

Bonus 1: Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2: Creare un layout completo per stampare a schermo una lista di movies. ✔️
*/

# Class declaration
class Movie
{
    public $title;
    public $year;
    public $director;
    public $timeDuration;


    function __construct($_title, $_year, $_director, $_timeDuration)
    {
        $this->title = $_title;
        $this->year = $_year;
        $this->director = $_director;
        $this->timeDuration = $_timeDuration;
    }

    public function getTitle()
    {
        echo $this->title;
    }

    public function getYear()
    {
        echo $this->year;
    }

    public function getDirector()
    {
        echo $this->director;
    }
    public function getTimeDuration()
    {
        echo $this->timeDuration;
    }
}

# Create class istances
$movie_1 = new Movie('Barbie', 2023, 'Greta Gerwig', '114 min');
$movie_2 = new Movie('Avatar: The Way of Water', 2022, 'James Cameron', '192 min');
$movie_3 = new Movie('Culpa mìa', 2023, 'Domingo Gonzales', '117 min');

# Access to the object properties print on page
$movie_1->title = 'Barbie';
$movie_1->year = 2023;
$movie_1->director = 'Greta Gerwig';
$movie_1->timeDuration = '114 min';

$movie_2->title = 'Avatar: The Way of Water';
$movie_2->year = 2022;
$movie_2->director = 'James Cameron';
$movie_2->timeDuration = '192 min';

$movie_3->title = 'Culpa mìa';
$movie_3->year = 2023;
$movie_3->director = 'Domingo Gonzales';
$movie_3->timeDuration = '117 min';

// var_dump($movie_1);
// var_dump($movie_2);
// var_dump($movie_3);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body class="bg-info bg-opacity-25">
    <div class="pt-5 container">
        <h1 class="text-center text-primary">Movies</h1>
        <div class="row">

            <div class="col-4 card-group">
                <div class="card">
                    <img class="card-img-top" src="https://picsum.photos/100/80" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-center text-primary"><?= $movie_1->title ?></h4>
                        <p class="card-text">
                        <ul>
                            <li><?= $movie_1->year ?></li>
                            <li><?= $movie_1->director ?></li>
                            <li><?= $movie_1->timeDuration ?></li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4 card-group">
                <div class="card">
                    <img class="card-img-top" src="https://picsum.photos/100/80" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-center text-primary"><?= $movie_2->title ?></h4>
                        <p class="card-text">
                        <ul>
                            <li><?= $movie_2->year ?></li>
                            <li><?= $movie_2->director ?></li>
                            <li><?= $movie_2->timeDuration ?></li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-4 card-group">
                <div class="card">
                    <img class="card-img-top" src="https://picsum.photos/100/80" alt="Card image cap">
                    <div class="card-body">
                        <h4 class="card-title text-center text-primary"><?= $movie_3->title ?></h4>
                        <p class="card-text">
                        <ul>
                            <li><?= $movie_3->year ?></li>
                            <li><?= $movie_3->director ?></li>
                            <li><?= $movie_3->timeDuration ?></li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>

        </div>


    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>