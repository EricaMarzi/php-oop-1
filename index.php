<!--#### Descrizione


#### Bonus 1
Creare una classe Director e modificare la classe Movie in modo che accetti come direttore un'istanza di Director
#### Bonus 2
Creare una classe Actor e modificare la classe Movie in modo che accetti piú di un attore
#### Bonus 3
Creare un layout html per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.-->

<?php 

class Movie 
{
    public $id;
    public $title;
    public $director;
    public $rating;
    public $year;

    public function __construct ($id, $title, $director, $rating, $year) 
    {
        $this -> id = $id;
        $this -> title = $title;
        $this -> director = $director;
        $this -> rating = $rating;
        $this -> year = $year;
    }

    public function getPoster(Director $director)
    {
        return $this->title . ' è un film uscito nel ' . $this->year . ' diretto da ' . $director->last_name . '<br>';
    }
    // public function getPoster()
    // {
    //     return $this->title . ' è un film uscito nel ' . $this->year . ' diretto da ' . $this->director . '<br>';
    // }
}

$movie1 = new Movie (1, 'Harry Potter e la pietra filosofale', 'Chris Columbus', 8, 2001);
$movie2 = new Movie (2, 'Harry Potter e la camera dei segreti', 'Chris Columbus', 7, 2002);

class Director 
{
    public $first_name;
    public $last_name;
    public $age;
    public $role;

    public function __construct($first_name, $last_name, $age, $role)
    {
        $this -> first_name -> $first_name;
        $this -> last_name -> $last_name;
        $this -> age -> $age;
        $this -> role -> $role;
    }

    public function getFullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}

$director1 = new Director ('Chris', 'Columbus', 65, 'Direttore, sceneggiatore e produttore cinematografico');
var_dump($director1);

// echo $movie1->getPoster($director1);
// echo $movie2->getPoster($director1);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>