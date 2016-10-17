<?php

class car{
    public $color;
    public function setColor($c) {
        return 'Car is : '.$this->color=$c; ;
        
    }
    public function sayHello() {
        return 'say HELLO 5555555';
        
    }
}
$newcar = new car;
echo $newcar ->setColor('black');
echo "<hr>";
echo $newcar ->sayHello();
echo "<hr>";
echo $newcar ->color='red-black-green-gold-blue';
$arr_val=["java","php","c++"];
print_r($arr_val);