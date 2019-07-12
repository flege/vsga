<?php
    $a = array();
    $a1 = array(1,2,3);
    $a2 = array("satu","dua","tiga");
    $a3 = array(1,"dua",3,"empat");
    $a4 = array("nama" => "saya", "alamat" => "diy", 0 => "saasasa");

    // echo $a1;
    // print_r($a1);

    // array_push($a1,4);

    // print_r($a1);

    // echo $a1[1];

    print_r($a2);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <table border="1">
        <tr>
            <td>Key</td>
            <td>Value</td>
        </tr>
        <!-- Loop -->
        <?php
            //count($array) => menghitung panjang array
            // foreach($a2 as $key => $value){
            for($i=0; $i<count($a2); $i++){
                //code, show data from array to table
        ?>
            <tr>
                <td><?php echo $i?></td>
                <td><?php echo $a2[$i]?></td>
                <!-- untuk foreach
                <td><?php echo $key?></td>
                <td><?php echo $value?></td>
                -->
            </tr>
        <?php  
            }
        ?>
    </table>
</body>
</html>