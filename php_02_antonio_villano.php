<?php
echo "Traccia 1 \n";
$users = [
    ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'M'],
    ['name' => 'Giorgia', 'surname' => 'Bianchi', 'gender' => 'F'],
    ['name' => 'Optimus', 'surname' => 'Prime', 'gender' => 'NB']
];

for($i=0;$i<count($users);$i++){
if ($users[$i]['gender']=='M'){
    $pref='Sig.';
    echo 'Buongiorno'.' '.$pref.' '.$users[$i]['name'].' '.$users[$i]['surname']."\n";
}
elseif($users[$i]['gender']=='F'){
    $pref1='Sig.na';
    echo 'Buongiorno'.' '.$pref1.' '.$users[$i]['name'].' '.$users[$i]['surname']."\n";
}
elseif ($users[$i]['gender']=='NB') {
    $pref2='';
    echo 'Buongiorno'.' '.$pref2.' '.$users[$i]['name'].' '.$users[$i]['surname']."\n";
}else{
    $pref2='';
    echo 'Buongiorno'.' '.$pref2.' '.$users[$i]['name'].' '.$users[$i]['surname']."\n";
}};

echo "Traccia 1.2 \n";
for($i=0;$i<count($users);$i++){
    switch ($users[$i]['gender']) {
        case 'M':
            $pref='Sig.';
            echo 'Buongiorno'.' '.$pref.' '.$users[$i]['name'].' '.$users[$i]['surname']."\n";
            break;
        case 'F':
            $pref1='Sig.na';
            echo 'Buongiorno'.' '.$pref1.' '.$users[$i]['name'].' '.$users[$i]['surname']."\n";
            break;

        default:
            $pref2='';
            echo 'Buongiorno'.' '.$pref2.' '.$users[$i]['name'].' '.$users[$i]['surname']."\n";
            break;
    }
    };


echo "Traccia 2 \n";

$num_a_scelta=[5,7,90,15,6,8,15,36];
$t=0;
$sum_par=0;
for($u=0;$u<count($num_a_scelta);$u++){

    if($num_a_scelta[$u]%2==0){
        $t++;
        $sum_par+=$num_a_scelta[$u];
    }
}
echo ($sum_par/$t)."\n";

echo "Traccia 3 \n";
echo "3.1\n";
$num_cento=[];
for($i=1;$i<=100;$i++){
    $num_cento[]=$i;
    echo $i.' ';
}
echo "3.2\n";

for($i=1;$i<=100;$i++){

    if ($i%3==0) {
        $s='PHP';
    } else {
        $s=$i;
    }
    echo $s.' ';

}
echo "3.3\n";
for($i=1;$i<=100;$i++){

    if ($i%5==0) {
        $su='JAVASCRIPT';
    } else {
        $su=$i;
    }
    echo $su.' ';

}
echo "3.4\n";
for($i=1;$i<=100;$i++){

    if ($i%5==0 && $i%3==0) {
        $sub='HACKADEMY';
    } else {
        $sub=$i;
    }
    echo $sub.' ';

}
echo "Traccia 4\n";
$temperatura=27;
if ($temperatura<15) {
    echo "Fa freddo\n";
}elseif ($temperatura>25) {
    echo "Fa molto caldo\n";
}
elseif ($temperatura>=15) {
    echo "Fa caldo\n";
}
echo "Traccia 5\n";

$temperature = [ "Venezia" => 16, "Bari" => 32, "Roma" => 28, "Napoli" => 30, "Milano" => 13, "Palermo" => 14, "Torino" => 24, "Lecce" => 27, "Genova" => 30, "Catania" => 11, "Cosenza" => 9, ];
foreach ($temperature as $key => $value) {
    if ($value<15) {
        $str= 'fa freddo';
    }elseif ($value>25) {
        $str= 'fa molto caldo';
    }
    elseif ($value>=15) {
        $str= 'fa caldo';
    }
    echo 'A'.' '.$key.' '.$str.' '.'con'.' '.$value.'°C'."\n";
}
echo "Traccia 6\n";
$tombola=[];
for($i=0;$i<4;$i++){
    for($u=0;$u<5;$u++){
        $tombola[$i][$u]=rand(1,100);
    }

}
var_dump($tombola);