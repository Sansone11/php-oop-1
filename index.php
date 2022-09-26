<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop-1</title>
</head>

<body>
    <?php
    // definita una classe ‘Movie’
    class movie
    {
        // interno della classe sono dichiarate delle variabili d’istanza
        public $title;
        public $year;
        public $regista;
        public $actor;
        public $vote;
        // all’interno della classe è definito un costruttore
        function __construct($title, $year, $regista, $actor, $vote)
        {
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

    $Rocky = new movie('Rocky', 1986, 'Silvester Stallone', 'Silvester Stallone', 6);
    $Rocky->setVote(4);
    var_dump($Rocky);

    $IlPadrino = new movie('Il Padrino', 1972, 'Martin Scorsese', 'Al Pacino', 9,);
    $IlPadrino->setVote(18);
    var_dump($IlPadrino);

    $LoSqualo = new movie('Lo Squalo', 1975, 'Steven Spielberg', 'Roy Scheider', 8);
    $LoSqualo->setVote(-3);
    var_dump($LoSqualo);

    $Shining = new movie('Shining', 1980, 'Stanley Kubrik', 'Jack Nicholson', 8);
    $Shining->setVote(4);
    var_dump($Shining);
    ?>
    <?php
    $movies = [
        $Rocky = new movie('Rocky', 1986, 'Silvester Stallone', 'Silvester Stallone', 6),
        $IlPadrino = new movie('Il Padrino', 1972, 'Martin Scorsese', 'Al Pacino', 9,),
        $LoSqualo = new movie('Lo Squalo', 1975, 'Steven Spielberg', 'Roy Scheider', 8),
        $Shining = new movie('Shining', 1980, 'Stanley Kubrik', 'Jack Nicholson', 8),

    ];
   
    ?>
    <div class="Card_wrapper">
        <div class="card">
            <?php
            foreach ($movies as $movie) {
                strval($movie);
                $title = $movie['title'];
                $year = $movie['year'];
                $regista = $movie['regista'];
                $actor = $movie['actor'];
                $vote = $movie['vote'];
            };
            ?>

            <h1>
                <?php
                echo $title
                ?>
            </h1>

        </div>

    </div>
    <h1></h1>

</body>

</html>