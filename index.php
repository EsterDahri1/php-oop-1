<?php
/*
è definita una classe ‘Movie’ => all’interno della classe sono dichiarate delle variabili d’istanza => all’interno della classe è definito un costruttore => all’interno della classe è definito almeno un metodo

vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà 
*/

# Class declaration
class Movie
{
    public $title;
    public $year;
    public $director;
    public $timeDuration;
}

# Create class istances
$movie_1 = new Movie();
$movie_2 = new Movie();
$movie_3 = new Movie();

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