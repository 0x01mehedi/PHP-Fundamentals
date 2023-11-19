<?php

  for($j=1;$j<=20;$j++){

       if(isPrime($j)){
         echo $j,"<br>";
       }
  }




  function isPrime($n){

    if($n<=1)return false;

    for($i = 2; $i < $n; $i++){            
            if($n%$i==0){
              return false;
            }
    }
   
    return true;
 }




?>