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
    class movie {
        public $title;
        public $year;
        public $regista;
        public $actor;
        public $vote;

        function __construct($title,$year,$regista,$actor,$vote){
            $this->title = $title;
            $this->year = $year;
            $this->regista = $regista;
            $this->actor =$actor;
            $this->vote =$vote;
        }
    } 

    $film = new movie('Rocky',1986,'Silvester Stallone','Silvester Stallone',7/10);
    var_dump($film);
    
    $filmDrama = new movie('Il Padrino',1972,'Martin Scorsese','Al Pacino',9/10,);
    var_dump($filmDrama);
    ?>
    
</body>
</html>