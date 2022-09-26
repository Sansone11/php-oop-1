<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>php-oop-1</title>
</head>

<body>
    <?php
    // definita una classe ‘Movie’
    class movie
    {
        // interno della classe sono dichiarate delle variabili d’istanza
        public $poster;
        public $title;
        public $year;
        public $regista;
        public $actor;
        public $vote;
        // all’interno della classe è definito un costruttore
        function __construct($poster, $title, $year, $regista, $actor, $vote)
        {
            $this->poster = $poster;
            $this->title = $title;
            $this->year = $year;
            $this->regista = $regista;
            $this->actor = $actor;
            // if($vote >=0 && $vote <=10)
            $this->vote = $vote;
            // else $this->vote ='il valore inserito non è corretto';

        }
        // all’interno della classe è definito almeno un metodo
        function setVote($vote)
        {
            if ($vote >= 0 && $vote <= 10) {
                $this->vote = $vote;
            } else {
                $this->vote = 'il valore inserito non è corretto';
            }
        }
    }

    $Rocky = new movie('https://pad.mymovies.it/filmclub/2006/08/254/locandina.jpg', 'Rocky', 1986, 'Silvester Stallone', 'Silvester Stallone', 6);
    $Rocky->setVote(4);
    // var_dump($Rocky);

    $IlPadrino = new movie('https://pad.mymovies.it/filmclub/2002/08/056/locandina.jpg', 'Il Padrino', 1972, 'Martin Scorsese', 'Al Pacino', 9,);
    $IlPadrino->setVote(18);
    // var_dump($IlPadrino);

    $LoSqualo = new movie('https://www.artovercovers.com/wp-content/uploads/2020/07/lo-squalo.jpg', 'Lo Squalo', 1975, 'Steven Spielberg', 'Roy Scheider', 8);
    $LoSqualo->setVote(-3);
    // var_dump($LoSqualo);

    $Shining = new movie('http://cultura.biografieonline.it/wp-content/uploads/2012/09/shining-locandina.jpg', 'Shining', 1980, 'Stanley Kubrik', 'Jack Nicholson', 8);
    $Shining->setVote(4);
    // var_dump($Shining);

    $movies = [
        $Rocky,
        $IlPadrino,
        $LoSqualo,
        $Shining,
    ];

    ?>
    <div class="card_wrapper">
        <?php
        foreach ($movies as $movie) {
            // var_dump($movie);
        ?>
            <div class="card">
                <img src="<?php
                            echo $movie->poster;
                            ?>" alt="">

                <h1>
                    <?php
                    echo $movie->title;
                    ?>
                </h1>
                <p>
                    <?php
                    echo $movie->year;
                    ?>
                </p>
                <p>
                    <?php
                    echo $movie->regista;
                    ?>
                </p>
                <p>
                    <?php
                    echo $movie->actor;
                    ?>
                </p>
                <p class="vote">
                    <?php
                    echo $movie->vote;
                    ?>
                </p>
            </div><?php
                };
                    ?>
    </div>
    <h1></h1>

</body>

</html>