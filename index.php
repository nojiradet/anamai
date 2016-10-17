<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        $word ='555555';
        
        $arr=array("apple","papaya","banana","orange");
        echo "สวัสดีชาวโลก".$word;
        echo '<hr>';
        print_r($arr);
        echo '<hr>';
        $a=1;
        
        
//  loop while      
    while ($a<=20) {
        echo $a.'<br>';
        $a++;
    }
        echo '<hr>';
        
//  loop for
    for ($x=0; $x < count($arr); $x++){
        echo $arr[$x].'<br>';
    }
//  loop foreach
$arr1=['john'=>178,'michal'=>190,'robert'=>185];   
foreach ($arr1 as $key => $value) {
    echo $key.'   สูง    '.$value.'<br>';
}
        ?>
    </body>
</html>
