<?php
    // function faktorial($angka){

    // }

    // 3x2 = 3+3
    // function perkalian($angka1,$angka2){
    //     return perkalian
    // }
    
    // 4 = 4+3+2+1
    function tes($angka){
        if($angka == 1){
            return 1;
        }else{
            return $angka + tes($angka-1);
        }
    }
    echo tes(4);
    /*
    tes(4) => 4 + tes(3) = 4+6 = 10
    tes(3) => 3 + tes(2) = 3+3 = 6
    tes(2) => 2 + tes(1) = 2+1 = 3
    tes(1) => 1