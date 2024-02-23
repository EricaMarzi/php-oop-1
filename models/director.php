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