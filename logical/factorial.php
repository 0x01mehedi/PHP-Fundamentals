<?php
  
  if(isset($_POST["submit"])){
    
    $n=$_POST["number"];

    $fac=1;
    for($i=2;$i<=$n;$i++ ){
        $fac*=$i;
    }

    echo $fac;
 }
?>

<form action="#" method="post">
    <input type="text" name="number" >
    <input type="submit" name="submit" value="Submit" >
</form>