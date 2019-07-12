<?php
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tempat = $_POST['tempat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $usia = $_POST['usia'];
    $submit = $_POST['submit'];

    // if(!isset($nama)){
    // if(empty($nama)){
    if($submit == ""){
        header("location:form.php");
    }else{
        echo "Nama anda adalah $nama <br/>";
        echo "dengan alamat $alamat <br/>";
        echo "tempat anda $tempat <br/>";
        echo "$jenis_kelamin <br/>";
        echo "Usia anda  $usia <br/>";
    }
    