
<?php
// Definisco la classe movie
class Movie {
    public string $titolo;
    public int $durata;
    public bool $doppiaggio;
    public string $prezzo;
    public array $genere;

    function __construct($_titolo, $_durata, $_doppiaggio, $_genere) {
        $this->titolo = $_titolo;
        $this->durata = $_durata;
        $this->doppiaggio = $_doppiaggio;
        $this->genere = $_genere;
    }

    function get_price() {

        if ($this->doppiaggio === false) {
            $this->prezzo = 9.99 . '€';
        } else {
            $this->prezzo = 12.99 . '€';
        }
    }

    function print_genres() {
        $generi = '';
        if(isset($this->genere)) {
            foreach($this->genere as $gen ) {
                $generi .= $gen . ', ';
            }
            $generi = rtrim($generi, ', ');
            return $generi;
        } else {
            return 'NO';
        }
    }



}

$film1 = new Movie('Avatar', 180, false, ['azione', 'avventura']);
$film2 = new Movie('Avatar La Via dell\'acqua', 190, true, ['azione', 'avventura']);
$film3 = new Movie('Ciao', 120, false, ['azione', 'dramma', 'commedia', 'ciao']);

$film1->get_price();
$film2->get_price();
$film3->get_price();


var_dump($film1, $film2)


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-oop</title>
</head>
<body>
    
    <h1>PHP OOP</h1>
    <h3> <?php echo $film1->titolo; ?></h3>
    <ul>
        <li> <?php echo $film1->durata; ?> </li>
        <li> <?php echo ($film1->doppiaggio) ? 'Doppiato': 'Lingua Originale' ?> </li>
        <li> <?php echo $film1->prezzo; ?> </li>
        <li> <?php echo $film1->genere[0] . ', ' . $film1->genere[1]; ?> </li>
    </ul>
    <h3> <?php echo $film2->titolo; ?></h3>
    <ul>
        <li> <?php echo $film2->durata; ?> </li>
        <li> <?php echo ($film2->doppiaggio) ? 'Doppiato': 'Lingua Originale' ?> </li>
        <li> <?php echo $film2->prezzo; ?> </li>
        <li> <?php echo $film2->print_genres(); ?> </li>
    </ul>
    <ul>
        <li> <?php echo $film3->durata; ?> </li>
        <li> <?php echo ($film3->doppiaggio) ? 'Doppiato': 'Lingua Originale' ?> </li>
        <li> <?php echo $film3->prezzo; ?> </li>
        <li> <?php echo $film3->print_genres(); ?> </li>
    </ul>

</body>
</html>