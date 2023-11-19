<?php
  if(isset($_POST["submit"])){
    $numbers=explode(",",$_POST["numbers"]);

    echo "Max:",getmax($numbers),", Min:",getmin($numbers);

  }


  //----------Library-----------//
  function getmax($numbers){
    $max=$numbers[0];
    foreach($numbers as $number){
      if($number>$max){
        $max=$number;
      }
    }     
    return $max;
  }

  function getmin($numbers){
    $min=$numbers[0];
    foreach($numbers as $number){
      if($number<$min){
        $min=$number;
      }
    }
     
    return $min;
  }
?>
<form action="#" method="post">
    <textarea name="numbers"></textarea><br>
    <input type="submit" name="submit" value="Submit" />
</form>