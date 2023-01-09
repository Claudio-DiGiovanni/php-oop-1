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

    echo $avatar->title . ' ';
    echo $avatar->vote;
    echo '<br>';
    echo $avengers->title . ' ';
    echo $avengers->vote;
    echo '<br>';
    echo $vitaBella->title . ' ';
    echo $vitaBella->vote;
    echo '<br>';
    echo $softAir->title . ' ';
    echo $softAir->vote;
    echo '<br>';
    echo $simpson->title . ' ';
    echo $simpson->vote;
    echo '<br>';

    var_dump($avatar);
    var_dump($avengers);
    var_dump($vitaBella);
    var_dump($softAir);
    var_dump($simpson);