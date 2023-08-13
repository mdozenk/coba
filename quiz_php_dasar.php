<?php
function luasLingkaran($jari2){
    return round(3.14 * $jari2 * $jari2, 2);
}

function kelilingLingkaran($jari2){
    return round(3.14 * 2 * $jari2,2);
}

function luasPersegi($panjang , $lebar){
    return round($panjang * $lebar,2);
}

for ($i = 1; $i <= 100 ; $i++){
    if($i % 3 == 0 && $i % 5 == 0){
        $panjang = $i / 3;
        $lebar = $i / 5;
        $luas = luasPersegi($panjang , $lebar);
        echo "$luas\n";
    }elseif($i % 3 == 0 ){
        $jari2 = $i / 3;
        $luas = luasLingkaran($jari2);
        echo "$luas\n";
    }elseif ($i % 5 == 0){
        $jari2 = $i / 5;
        $luas = kelilingLingkaran($jari2);
        echo "$luas\n";
    }else{
        $angka_format = number_format($i,2);
        echo "$angka_format\n";
    }

}
?>