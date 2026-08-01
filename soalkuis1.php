<?php
$kumpulanangka =[];
for ($i = 1; $i <= 20; $i++){
    $kumpulanangka[]= $i;
}
echo "angka dari 1-20 yang habis dibagi 3 adalah:<br>";
foreach ($kumpulanangka as $angka) {
    if ($angka %3 ==0){
echo $angka.",";
    }
}
?>