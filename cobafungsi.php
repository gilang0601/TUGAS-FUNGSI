<?php 

echo "1.rumus balok\n";
echo "2.rumus tabung\n";
echo "pilih rumus : ";
$type =trim(fgets(STDIN));

function rumus_balok($pjg,$lbr,$tgi) {

    $rms = $pjg * $lbr * $tgi;
    echo "hasilnya : $rms";
}


function rumus_tabung($phi,$r,$tgi) 
    {

        $rms =$phi* $r * $r * $tgi;
        echo "hasilnya : $rms";
    }




if ($type ==1) {
    echo "masukan panjang : ";
    $pjg =trim(fgets(STDIN));

    echo "masukan lebar : ";
    $lbr =trim(fgets(STDIN));

    echo "masukan tinggi : ";
    $tgi =trim(fgets(STDIN));
    rumus_balok($pjg,$lbr,$tgi);

} else {
    echo "masukan tinggi : ";
    $tgi =trim(fgets(STDIN));

    echo "masukan jari jari :";
    $r =trim(fgets(STDIN));

    $phi = 3.14;

    rumus_tabung($phi,$r,$tgi);
}
?>