<!--
#### Bonus 2
Creare una classe Actor e modificare la classe Movie in modo che accetti piú di un attore
#### Bonus 3
Facciamo attenzione all’organizzazione del codice, suddividendolo in appositi file e cartelle. Possiamo ad esempio organizzare il codice
- creando un file dedicato ai dati (tipo le array di oggetti) che potremmo chiamare db.php
- mettendo ciascuna classe nel proprio file e magari raggruppare tutte le classi in una cartella dedicata che possiamo chiamare Models
- organizzando il layout dividendo la struttura ed i contenuti in file e parziali dedicati.-->

<?php 
// require_once __DIR__ . '/models/director.php';
// require_once __DIR__ . '/models/movie.php';

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
    public $plot;

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

$text1 = 'A 11 anni, Harry Potter scopre di essere il figlio orfano di due potenti maghi. Frequenta la scuola di magia e stregoneria di Hogwarts dove scopre la verità su se stesso e sulla morte dei suoi genitori.';
$text2 = 'Il secondo anno ad Hogwarts si rivela denso di pericoli per Harry Potter e i suoi amici: un mostro misterioso si aggira per la scuola pietrificando i maghi mezzosangue figli di babbani, e tutti incolpano Harry.';
$text3 = 'Harry Potter sta frequentando il terzo anno a Hogwarts e questa volta deve difendersi da un pericoloso assassino, Sirius Black, scappato dalla sorvegliata prigione per maghi di Azkaban e legato alla famiglia del piccolo mago.';
$text4 = 'Il quarto anno di Harry a Hogwarts è contrassegnato dal torneo di Tremaghi, nel quale i rappresentanti di ogni scuola di magia devono sfidarsi in alcune gare.';
$text5 = 'Mentre si trova confinato contro la sua volontà a Privet Drive, Harry scopre che Albus Silente è a capo di una organizzazione segreta che ha il compito di contrapporsi a Lord Voldemort per sconfiggerlo.';
$text6 ='Lord Voldemort stringe la sua presa sia sul mondo dei babbani che su quello dei maghi, Hogwarts non è più un rifugio sicuro. Harry sospetta che i pericoli possano nascondersi addirittura all\'interno del castello, ma Silente è deciso a prepararsi per lo scontro conclusivo che sembra prossimo.';
$text7 = 'Harry, insieme ai fidati Ron ed Hermione, decide di portare a termine il compito affidatogli da Silente. Il piano è quello di scovare tutti gli Horcrux creati da Lord Voldemort e distruggerli.';
$text8 = 'Harry, Ron e Hermione organizzano un furto alla Gringott, dove si trova nascosto uno degli Horcrux rimanenti. Nel corso dello scontro finale con Lord Voldemort potrebbe rivelarsi necessario un sacrificio.';
$movie1 = new Movie (1, 'Harry Potter e la pietra filosofale', 8, 2001, $text1);
$movie2 = new Movie (2, 'Harry Potter e la camera dei segreti', 7, 2002, $text2);
$movie3 = new Movie (3, 'Harry Potter e il prigioniero di Azkaban', 8.5, 2004, $text3);
$movie4 = new Movie (4, 'Harry Potter e il calice di fuoco', 8, 2005, $text4);
$movie5 = new Movie (5, 'Harry Potter e l\'ordine della fenice', 8, 2007, $text5);
$movie6 = new Movie (6, 'Harry Potter e il principe mezzosangue', 6.5, 2009, $text6);
$movie7 = new Movie (7, 'Harry Potter e i doni della morte pt.1', 7.5, 2010, $text7);
$movie8 = new Movie (8, 'Harry Potter e i doni della morte pt.2', 8.5, 2011, $text8);




$movies = [$movie1, $movie2, $movie3, $movie4, $movie5, $movie6, $movie7, $movie8];



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Il Cinefilo</title>

    <!--Bootstrap--> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!--Namdhinggo Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Namdhinggo:wght@400;500;600;700;800&display=swap" rel="stylesheet">

    <!--CSS-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">    
        <header> 
            <h1 class="text-center my-5">Il cinefilo</h1>
        </header>

        <main>
            <div class="container text-center">
                <div class="row justify-content-center">
                    <?php foreach($movies as $movie) : ?>
                    <div class="col mb-5 flex-grow-0">
                        <div class="card" style="width: 18rem;">
                            <!-- <img src="..." class="card-img-top" alt="..."> -->
                            <div class="card-body d-flex flex-column justify-content-center" style="height: 350px;">
                                <h5 class="card-title"><?= $movie->title ?></h5>
                                <p class="card-text"><?= $movie->plot ?></p>
                                <!-- <address> Pinco pallo </address> -->
                            </div>
                        </div>
                    </div>
                    <?php endforeach?>
                </div>
            </div>
        </main>
    </div>


</body>
</html>