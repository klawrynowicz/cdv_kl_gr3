<?php
    $firstName = "Kuba";
    $lastName = "Przybył";
    echo "Imię i nazwisko: $firstName $lastName<br>";
    echo 'Imię i nazwisko: $firstName $lastName<br>';
// heredoc
    echo <<< 'DATA'
    Imię: $firstName<br>;
    Nazwisko: $lastnName<br>;
DATA;
    $data = <<< DATA
    Imię: $firstName<br>;
    Nazwisko: $lastnName<br>;
DATA;

$bin = 0b1011;
echo $bin; //11
$oct = 011;
echo $oct; //9
$hex = 0xA1;
echo $hex; //161 
?>
