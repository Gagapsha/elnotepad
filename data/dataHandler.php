<?php
/**
 * Created by PhpStorm.
 * User: Kaiman
 * Date: 13.08.15
 * Time: 0:45
 */
$textToClient= "";

$arr = array();

$handle = @fopen("data.txt", "r");
if ($handle) {

    $i  = 0;

    while (($buffer = fgets($handle, 4096)) !== false) {
        if ($i>0){


            $arr[$i-1] = $buffer;



            $textToClient = $buffer;}

        $i++;
    }
    if (!feof($handle)) {
        echo "Error: unexpected fgets() fail\n";
    }
    fclose($handle);
}

/*echo $textToClient;*/


echo json_encode($arr);



?>