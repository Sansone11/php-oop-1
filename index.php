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
    class movie {
        // interno della classe sono dichiarate delle variabili d’istanza
        public $title;
        public $year;
        public $regista;
        public $actor;
        public $vote;
        // all’interno della classe è definito un costruttore
        function __construct($title,$year,$regista,$actor,$vote){
            $this->title = $title;
            $this->year = $year;
            $this->regista = $regista;
            $this->actor =$actor;
            // if($vote >=0 && $vote <=10)
            $this->vote =$vote;
            // else $this->vote ='il valore inserito non è corretto';

        }

         function setVote($vote){
             if($vote >=0||$vote <=10 ){
                 $this->vote =$vote;
                 
             }else{
                $this->vote = 'il valore inserito non è corretto' ;
             }

         }
    } 

    $Rocky = new movie('Rocky',1986,'Silvester Stallone','Silvester Stallone',11);
    var_dump($Rocky);
    
    $IlPadrino = new movie('Il Padrino',1972,'Martin Scorsese','Al Pacino',9,);
    var_dump($IlPadrino);

    $LoSqualo = new movie('Lo Squalo', 1975,'Steven Spielberg','Roy Scheider',8);
    var_dump($LoSqualo);

    $Shining = new movie('Shining',1980,'Stanley Kubrik','Jack Nicholson',8);
    var_dump($Shining);
    ?>
    
</body>
</html>