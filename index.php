<?php
// Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere. Esempio di array:

// $users = [
//  ['name' => 'Vito', 'surname' => 'agassi', 'gender' => 'm'],
//  ['name' => 'jenny', 'surname' => 'deshap', 'gender' => 'f'],
//  ['name' => 'Sissi', 'surname' => 'patacherru', 'gender' => 'f'],
//  ['name' => 'Filippo', 'surname' => 'piddu', 'gender' => 'm'],
// ];

// foreach($users as $user){
//     if ($user['gender'] == 'm') {
//         echo "Buongiorno Sig. {$user['name']} {$user['surname']}\n";

        
//     }else{
//         echo "Buongiorno Sig.ra. {$user['name']} {$user['surname']}\n";
//     }



// }


// Traccia 2:
// Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array.

$numbers= [10, 4, 7, 50, 13, 74, 23, 17, 22, ];
$tot = 0;
$i = 0;

foreach ($numbers as $number){
    if($number%2 == 0){
        $tot+=$number;
        $i++;
    }

}
$media=$tot/$i;

echo "$media";





