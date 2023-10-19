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
    public $poster;
    public $title;
    public $year;
    public $director;
    public $timeDuration;


    function __construct($_poster, $_title, $_year, $_director, $_timeDuration)
    {
        $this->poster = $_poster;
        $this->title = $_title;
        $this->year = $_year;
        $this->director = $_director;
        $this->timeDuration = $_timeDuration;
    }

    public function getPoster()
    {
        echo $this->poster;
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

$movies = [
    new Movie('https://pad.mymovies.it/filmclub/2018/01/274/locandinapg1.jpg', 'Barbie', 2023, 'Greta Gerwig', '114 min'),
    new Movie('https://encrypted-tbn1.gstatic.com/images?q=tbn:ANd9GcQy9jPtAHveL7z7VdtujkHdoyE2So140KC7LceE4XB0oL2yUEF_', 'Avatar: The Way of Water', 2022, 'James Cameron', '192 min'),
    new Movie('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBz8xB1m_j5ZWsLLNUPlRkqmcSXHB6LkkiLepcCDeyTgJ0bTPp', 'Culpa mìa', 2023, 'Domingo Gonzales', '117 min')
]

/*# Access to the object properties print on page
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
$movie_3->timeDuration = '117 min';*/

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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="bg-info bg-opacity-25">
    <header>
        <nav class="navbar navbar-expand-sm navbar-light bg-light">
            <div class="container">
                <a class="navbar-brand" href="#">Movies</a>
                <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav me-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#" aria-current="page">Home <span class="visually-hidden">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact us</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Dropdown</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="#">2022</a>
                                <a class="dropdown-item" href="#">2023</a>
                            </div>
                        </li>
                    </ul>
                    <form class="d-flex my-2 my-lg-0">
                        <input class="form-control me-sm-2" type="text" placeholder="Search a movie">
                        <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>

    </header>
    <main>
        <div class="pt-3 container">
            <h1 class="pb-3 text-center text-primary">Movies</h1>
            <div class="row">
                <?php foreach ($movies as $movie) : ?>
                    <div class="col-4 card-group">
                        <div class="pt-4 card d-flex align-items-center justify-content-center">
                            <img style="height: 400px; width: 300px;" class="card-img-top" src="<?php $movie->getPoster() ?>" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title text-center text-primary"><?= $movie->getTitle() ?></h4>
                                <p class="card-text">
                                <ul>
                                    <li><strong>Anno di uscita:</strong> <?= $movie->getYear() ?></li>
                                    <li><strong>Regista:</strong> <?= $movie->getDirector() ?></li>
                                    <li><strong>Durata:</strong> <?= $movie->getTimeDuration() ?></li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </main>
    <footer class="mt-4 p-2 bg-light text-center h-70">
        <div class="container d-flex align-items-center justify-content-between">
            <div>
                <a class="btn btn-outline-primary rounded-2" href="https://www.instagram.com/boolean.careers/?hl=it">
                    <i class="fa-brands fa-instagram"></i>
                </a>
                <a class="btn btn-outline-primary rounded-2" href="https://www.facebook.com/boolean.careers/?locale=it_IT">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a class="btn btn-outline-primary rounded-2" href="https://boolean.careers/corso/full-stack-web-development">
                    <i class="fa-solid fa-globe"></i>
                </a>
            </div>
            <div>
                &copy; 2023 By
                <a class="text-decoration-none" href="https://boolean.careers/corso/full-stack-web-development">Boolean &hearts;</a>
            </div>
        </div>
    </footer>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>