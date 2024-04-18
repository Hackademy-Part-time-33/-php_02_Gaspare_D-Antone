<?php
// Dato un array contenente una serie di array associativi di utenti con nome, cognome e genere, per ogni utente stampare “Buongiorno Sig. Nome Cognome” o “Buongiorno Sig.ra Nome Cognome” o “Buongiorno Nome Cognome” a seconda del genere. Esempio di array:

$users = [
 ['name' => 'Vito', 'surname' => 'agassi', 'gender' => 'm'],
 ['name' => 'jenny', 'surname' => 'deshap', 'gender' => 'f'],
 ['name' => 'Sissi', 'surname' => 'patacherru', 'gender' => 'f'],
 ['name' => 'Filippo', 'surname' => 'piddu', 'gender' => 'm'],
 ['name' => 'Giamaica', 'surname' => 'indiano', 'gender' => 'nb'],


];

foreach($users as $user){
    if ($user['gender'] == 'm') {
        echo "Buongiorno Sig. {$user['name']} {$user['surname']}\n";

        
    }elseif($user['gender'] == 'f')
    { 
        echo "Buongiorno Sig.ra. {$user['name']} {$user['surname']}\n";
    }else{
        echo "Buongiorno {$user['name']} {$user['surname']}\n ";
    };



}


// Traccia 2:
// Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array.

// $numbers= [10, 4, 7, 50, 13, 74, 23, 17, 22, ];
// $tot = 0;
// $i = 0;

// foreach ($numbers as $number){
//     if($number%2 == 0){
//         $tot+=$number;
//         $i++;
//     }

// }
// $media=$tot/$i;

// echo "la media dei numeri pari è $media";


// Traccia 3:
// Scrivere un programma che stampi in console tutti i numeri da uno a cento. Se il numero è multiplo di 3 stampare “PHP” al posto del numero; se multiplo di 5 stampare “JAVASCRIPT”; se multiplo di 3 e 5 contemporaneamente deve stampare “HACKADEMY".

for ($i = 1; $i <= 100; $i++){

    if ($i %15 == 0) {
        echo "HACKADEMY\n";
    
    }elseif($i % 3 == 0){

        echo "PHP\n";
    }elseif ($i % 5 == 0){

        echo "JAVASCRIPT\n";
    }
    else{
        echo $i . "\n";

    };

        
};





