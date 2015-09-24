<?php
/**
 * Created by PhpStorm.
 * User: Kaiman
 * Date: 13.08.15
 * Time: 0:45
 */


/*
$str= "[{\"id\":1,\"posX\":\"123\",\"posY\":\"321\",\"title\":\"TITLE\"},{\"id\":1,\"posX\":\"123\",\"posY\":\"321\",\"title\":\"TITL E\"},{\"id\":1,\"posX\":\"123\",\"posY\":\"321\",\"title\":\"TITLE\"}]";

$arr = json_decode($str, true);

echo ("<pre>");

print_r($arr);

echo ("</pre>");

for ($i =0 ,$arr_l = count($arr); $i<$arr_l ; $i++){




    $a = $arr[$i]["id"];
    $a .=";". $arr[$i]["posX"];
    $a .=";". $arr[$i]["posY"];
    $a .=";". $arr[$i]["title"];
    $a .=";". $arr[$i]["text"];
    $a .="<br/>";

    echo $a;
}*/


if ($_POST) {


     /*  $arr = $_POST["str_json"];

        for ($i =0 ,$arr_l = count($arr); $i<$arr_l ; $i++){

            $str .= $arr[i][0];
            $str .=";". $arr[i][1];
            $str .=";". $arr[i][2];
            $str .=";". $arr[i][3];
            $str .=";". $arr[i][4];
            $str .=";";


        }*/


    /*$str = "id;posX;posY;title;text;\n";
    $str .= $_POST['id'];
    $str .=";". $_POST['posX'];
    $str .=";". $_POST['posY'];
    $str .=";". $_POST['title'];
    $str .=";". $_POST['text'];
    $str .=";";


    file_put_contents("data.txt", $str);



   /* echo "SAVE :: ".$_POST['id'].$_POST['posX'].$_POST['posY'].$_POST['title'].$_POST['text'];*/

    $arr = json_decode($_POST['str_json'], true);

    $str = "id;posX;posY;title;text;\n";

    for ($i =0 ,$arr_l = count($arr); $i<$arr_l ; $i++){




        $a = $arr[$i]["id"];
        $a .=";". $arr[$i]["posX"];
        $a .=";". $arr[$i]["posY"];
        $a .=";". $arr[$i]["title"];
        $a .=";". $arr[$i]["text"];
        $a .="\n";

        $str.= $a;
    }
    file_put_contents("data.txt", $str);




    echo SAVE.$arr[0]["id"];
} else {


   echo "EMPTY POST ";

}
/*echo "EMPTY POST ::".$_POST['posX'];*/
?>