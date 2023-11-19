<?php
    //1. for Loop
    //2. while loop
    //3. do-while loop
    //4. foreach loop

     //1. for Loop
     echo "FOR LOOP<br>";
    for($i=0;$i<10;$i++){
        echo $i."<br>";
    }

    echo "<br>WHILE LOOP<br>";

     //2. while Loop
     $j=0;
     while($j<10){        
        echo $j."<br>";
        $j++;
     }


     echo "<br>DO-WHILE LOOP<br>";
     //3 do-while loop  

     $k=0;
     do{
        echo $k."<br>";
        $k++;
     }while($k<10);


     echo "<br>FOREACH LOOP<br>";
  //4. foreach loop
  
  echo "<br>";
   $arr=[10,11,12,13,14,15,16,17,18,19];

   foreach($arr as $k=>$v){
     echo $k.":".$v."<br>";
   }

//    foreach($arr as $v){
//     echo $v."<br>";
//   }



?>