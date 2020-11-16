<?php

function selisih($a,$b) {
    $selisih = $a - $b;
    return $selisih;
};

function hitung($nama,$say="hai") {
    echo "$say\n";
    echo "\n";
    echo "perkenalkan nama saya $nama\n";
    echo "\n";
    echo "dan ini adik saya budi\n";
    echo "\n";
    echo "disini kami ingin mengukur selisih tinggi kami\n";
    echo "\n";
    echo "setelah saya ukur dengan meteran,selisih tinggi kami adalah : " .selisih(165,140)." cm";
}

echo hitung("andi");



?>