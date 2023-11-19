<?php

//1. IF
//2. IF-ELSE
//3. IF-ELSEIF-ELSE
//4. switch-case

//1. IF
$a=40;
$b=32;

$g=$a;
if($a<$b){
 $g=$b;
}

echo $g;

//3. IF-ELSE
$g=0;

if($g==0){
    echo "Male";
}else{
    echo "Other";
}

//3. IF-ELSEIF-ELSE

$score=40;

if($score>=90){
    echo "A+";
}elseif($score>=80){
   echo "A";
}elseif($score>=70){
    echo "A-";
}elseif($score>=60){
    echo "B";
}elseif($score>=50){
    echo "C";
}else{
    echo "F";
}


//4. switch-case

$key=3;
switch($key){
    case 1:
        echo "One";
    break;
    case 2:
        echo "Two";
    break;
    case 3:
        echo "Three";
    break;
    case 4:
        echo "Four";
    break;
    default:
        echo "Unknow";
    break; 
}


?>