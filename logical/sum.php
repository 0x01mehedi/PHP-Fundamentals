<?php
if(isset($_POST["submit"])){

    $n=$_POST["number"];
    $total=0;
    
    for ($i=1;$i<=$n;$i++) {
      $total+=$i;
    }
    echo "Sum:",$total."<hr>";
}

?>
Sum: 1+2+3+...+N<br>
<form action="#" method="post">
  N:<input type="text" size="3" name="number" />
  <input type="submit" name="submit" value="Submit">
</form>