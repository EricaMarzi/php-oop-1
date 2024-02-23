<?php
require_once __DIR__ . '/models/director.php';
require_once __DIR__ . '/../plot/plot.php';


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