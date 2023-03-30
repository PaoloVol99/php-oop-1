
<?php
// Definisco la classe movie
class Movie {
    public string $titolo;
    public int $durata;
    public bool $doppiaggio;

    function __construct($_titolo, $_durata, $_doppiaggio) {
        $this->titolo = $_titolo;
        $this->durata = $_durata;
        $this->doppiaggio = $_doppiaggio;
    }

    function get_price() {

        if ($this->doppiaggio === false) {
            $this->prezzo = 9.99 . '€';
        } else {
            $this->prezzo = 12.99 . '€';
        }
    }


}

$film1 = new Movie('Avatar', 180, false);
$film2 = new Movie('Avatar La Via dell\'acqua', 190, true);

$film1->get_price();
$film2->get_price();

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
    </ul>
    <h3> <?php echo $film2->titolo; ?></h3>
    <ul>
        <li> <?php echo $film2->durata; ?> </li>
        <li> <?php echo ($film2->doppiaggio) ? 'Doppiato': 'Lingua Originale' ?> </li>
        <li> <?php echo $film2->prezzo; ?> </li>

</body>
</html>