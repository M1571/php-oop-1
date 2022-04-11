<?php 
    class Movie {
        public $nome;
        public $voto;
        public $descrizione;
        public $eta;
        public $adulto;

        function __construct($_nome, $_voto, $_desrizione, $_eta, $_adulto)
        {
            $this->nome = $_nome;
            $this->voto = $_voto;
            $this->descrizione = $_desrizione;
            $this->eta = $_eta;
            $this->adulto = $_adulto;
            
        }

        public function setAlert() {
            if($this->adulto) {
                return 'Contenuto non adatto ai minorenni';
            }
            return 'Contenuto adatto ai minorenni';
        }
    }

    $simpson = new Movie('The Simpson', '8.5', 'Homer strozza il figlio Bart e ...' , '+8', false);

    var_dump($simpson);
    var_dump($simpson->setAlert());

    $batman = new Movie('Batman e il suo pipistrellone', '8', 'Batman finalmente ha trovato una ragazza ...' , +'18', true);

    var_dump($batman);
    var_dump($batman->setAlert());

?>