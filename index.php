<!--#### Descrizione

#### Bonus 2
Creare una classe Actor e modificare la classe Movie in modo che accetti piú di un attore
#### Bonus 3
Creare un layout html per stampare a schermo una lista di movies.
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.-->

<?php 
class Director 
{
    public $first_name;
    public $last_name;
    public $age;
    public $role;

    public function __construct($first_name, $last_name, $age, $role)
    {
        $this -> first_name = $first_name;
        $this -> last_name = $last_name;
        $this -> age = $age;
        $this -> role = $role;
    }

    public function getFullName()
    {
        return $this->first_name . ' ' . $this->last_name;
    }
}
$director1 = new Director ('Chris', 'Columbus', 65, 'Direttore, sceneggiatore e produttore cinematografico');


class Movie 
{
    public $id;
    public $title;
    public $rating;
    public $year;
    public $plot

    public function __construct ($id, $title, $rating, $year, $plot) 
    {
        $this -> id = $id;
        $this -> title = $title;
        $this -> rating = $rating;
        $this -> year = $year;
        $this -> plot = $plot;
    }

    public function getPoster(Director $director)
    {
        return $this->title . ' è un film uscito nel ' . $this->year . ' diretto da ' . $director->getFullName() . '<br>';
    }
}

$plot1 = 'A 11 anni, Harry Potter scopre di essere il figlio orfano di due potenti maghi. Frequenta la scuola di magia e stregoneria di Hogwarts dove scopre la verità su se stesso e sulla morte dei suoi genitori.';
$plot2 = 'Il secondo anno ad Hogwarts si rivela denso di pericoli per Harry Potter e i suoi amici: un mostro misterioso si aggira per la scuola pietrificando i maghi mezzosangue figli di babbani, e tutti incolpano Harry.';
$movie1 = new Movie (1, 'Harry Potter e la pietra filosofale', 8, 2001, $plot1);
$movie2 = new Movie (2, 'Harry Potter e la camera dei segreti', 7, 2002, $plot2);



echo $movie1->getPoster($director1);
echo $movie2->getPoster($director1);



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