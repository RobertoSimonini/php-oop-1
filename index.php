<?php
/*  

Oggi pomeriggio ripassate i primi concetti di classe, variabili e metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
! è definita una classe Movie
=> all'interno della classe sono dichiarate delle variabili d'istanza
=> all'interno della classe è definito un costruttore
=> all'interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà

#Bonus 1:
Creatre un'istanza Genre e modificare la classe Movie in modo che accetti piú di un genere

#Bonus 2:
Creare un layout completo per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.

*/

class Movie
{

    // Variabili d'istanza 
    public $title;
    public $genre;
    public $director;
    public $producer;
    public $film_script;

    //Constructor
    public function __construct($_title, $_genre, $_director, $_producer, $_film_script)
    {
        $this->title = $_title;
        $this->genre = $_genre;
        $this->director = $_director;
        $this->producer = $_producer;
        $this->film_script = $_film_script;
    }

    //Methods:
    public function getFullTeam()
    {
        return "$this->director $this->producer";
    }
}

$the_irishman = new Movie('The Irishman', 'Crime', 'Martin Scorsese', 'Sikelia Production', 'Steven Zaillian');
$taxi_driver = new Movie('Taxi Driver', 'Thriller', 'Martin Scorsese', 'Michael Philips', 'Paul Schrader');

$movies = [$the_irishman, $taxi_driver];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies Objects</title>

    <!-- Bootstrap  -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css' integrity='sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==' crossorigin='anonymous' />

</head>

<body>
    <div class="text-center py-5">
        <h1 class="text-secondary">
            Movies:
        </h1>

        <!-- IRISHMAN  -->
        <?php foreach ($movies as $movie) : ?>
            <ul class="list-group w-25 mx-auto">
                <h3 class="pt-5 text-primary">
                    <?= $movie->title ?>
                </h3>
                <li class="list-group-item"><?= $movie->genre ?></li>
                <li class="list-group-item"><?= $movie->director ?></li>
                <li class="list-group-item"><?= $movie->producer ?></li>
                <li class="list-group-item"><?= $movie->film_script ?></li>
            </ul>
        <?php endforeach ?>
    </div>
</body>

</html>