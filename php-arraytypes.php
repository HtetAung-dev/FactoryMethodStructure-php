<?php

//Numeric Array

$numbers = array(1,2,3,4);

foreach($numbers as $number){

    echo "The value is $number</br>"; //output

}

//Abstract Array

$values = array( [
    'name' => 'Hla Hla',
    'age' => '18'
],
[
    'name' => 'Mg Mg',
    'age' => '20'
]);




foreach($values as $value){
    echo "<pre>";
    echo 'Name : '.$value['name']."<br>";
    echo 'Age  : '.$value['age'];
    echo "</pre>";
}
//var_dump($values);//output

//Multidimensional Array

$arr =  array(

    'Htet'=> array(
        'eng' => 88,
        'bio' => 88
    ),
    'Aung'=> array(
        'eng' => 79,
        'bi0' => 92
    )
    );

    echo "<pre>";

    var_dump($arr);
    
    echo "</pre>";

