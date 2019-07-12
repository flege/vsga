<?php
    function perkenalan(){
        echo "Selamat Datang, ";
        echo "Pada Acara Digital Talent<br/>";
        echo "2019<br/>";
    }

    // perkenalan();

    function perkenalan2($nama, $panggilan){
        // echo "selamat datang ".$panggilan." ".$nama;
        echo "selamat datang $panggilan $nama";
    }

    perkenalan2("nama", "Mr.");
    echo "<hr/>";

    $nama = "aku";
    $panggilan = "Ms.";
    perkenalan2($nama,$panggilan);
    echo "<hr/>";

    function perkenalan3($nama = "Hantu", $waktu = "Siang"){
        echo "Selamat $waktu $nama";
    }

    perkenalan3("aku","Malam");
    echo "<hr/>";

    function umur($tahun_lahir, $tahun_sekarang){
        $umur = $tahun_sekarang - $tahun_lahir;
        return $umur;
    }
    function umur2($tahun_lahir, $tahun_sekarang){
        $umur = $tahun_sekarang - $tahun_lahir;
    }

    umur(2000,2077);
    echo "<hr/>";

    echo umur(2000,2077) + 100;
    echo "<hr/>";

    function perkenalanZ($nama,$waktu){
        echo "Selamat $waktu <br/>";
        echo "Perkenalkan nama saya $nama <br/>";
        echo "Umur saya ".umur(2000,2019)." tahun";
    }

    perkenalanZ("Z","Siang");