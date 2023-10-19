<?php
/*
è definita una classe ‘Movie’ => all’interno della classe sono dichiarate delle variabili d’istanza => all’interno della classe è definito un costruttore => all’interno della classe è definito almeno un metodo

vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà ✔️

Bonus 1: Modificare la classe Movie in modo che accetti piú di un genere.
Bonus 2: Creare un layout completo per stampare a schermo una lista di movies.
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

var_dump($movie_1);
var_dump($movie_2);
var_dump($movie_3);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 1</title>
</head>

<body>
    <h1>MOVIES</h1>
</body>

</html>