<?php

 // php 함수는 자바스크립트와 같이 정의부와 호출부로 구성된다.
 
 // 정의부
 function sayHello(){
    echo '심인식 천재~';
 };

// 호출부
sayHello();

$sum = 0;
function sumAll($n){
    for($i = 1; $i <= 100; $i++){
        $sum += $i;
    }
    return $sum;
}


echo sumAll(1000).'<br>';

function sumAllwhile(){
 $num = 1; 
 $sum = 0; 
 while($num <= 100){ 
    $sum += $num;
    $num++; 
    }
    return $sum;
}

echo sumAllwhile(50);

?>