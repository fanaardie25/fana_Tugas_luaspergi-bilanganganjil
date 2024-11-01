<?php
function BilanganGanjil($arr)
{
    foreach ($arr as $array) {
        if (is_numeric($array) && is_int($array)) {
            if ($array % 2 == 1) {
                echo $array . ",";
            }
        } else {
            echo "error, yang anda masukkan bukan angka/bukan angka ganjil genap coba cek lagi";
            return; 
        }
    }
}
BilanganGanjil([5,6,6,7,8,2.3,5,6]);
?>