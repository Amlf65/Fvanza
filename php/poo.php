<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header style="font-size:2em;"> CLASE PERSONA </header>
    <?php
        class Persona {
            public $nombre;
            public $apellidos;
            public $edad;

            public function cumplir(){
                return $this->edad++;
                }
           
            public function presentar(){
                return $this->apellidos  . ", " . $this->nombre. ": " . $this->edad. " años<br  > ";
                }
        }
        
        $hugo = new persona(); 
        $hugo->nombre="Hugo";
        $hugo->apellidos="Ramírez";
        $hugo->edad=28;
        echo  $hugo->presentar();
        $hugo->cumplir();
        echo  $hugo->presentar();
    ?>
</body>
</html>