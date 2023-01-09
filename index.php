<?php
    class Movie {
        public $title;
        public $year;
        public $region;
        public $director;
        public $vote;

        public function __construct($title, $year, $region, $director, $vote) 
        {
            $this->title = $title;
            $this->year = $year;
            $this->region = $region;
            $this->director = $director;
            $this->setVote($vote);
        }
        public function setVote($vote) {
            if ($vote === 5) {
                $this->vote = 'Molto bello';
            } elseif ($vote === 4) {
                $this->vote = 'Bello';
            } elseif ($vote === 3) {
                $this->vote = 'Carino';
            } elseif ($vote === 2) {
                $this->vote = 'Insomma';
            } elseif ($vote === 1) {
                $this->vote = 'Brutto';
            } 
        }
    }

    $avatar = new Movie ('Avatar', 2009, 'USA', 'James Cameron', 4);
    $avengers = new Movie ('The Avengers', 2012, 'USA', 'Joss Whedon', 3);
    $vitaBella = new Movie ('La vita è bella', 1997, 'Italy', 'Roberto Benigni', 5);
    $softAir = new Movie ('Soft Air', 1998, 'Italy', 'Claudio Masin', 1);
    $simpson = new Movie ('I Simpson, Il Film', 2007, 'USA', 'David Silverman', 2);

    $movie = array($avatar, $avengers, $vitaBella, $softAir, $simpson);

    foreach ($movie as $i) {
        echo $i->title . ' ';
        echo $i->vote;
        echo '<br>';
    }