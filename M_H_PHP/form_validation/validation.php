<?php
   
   if(isset($_POST["submit"])){
    
    $name=$_POST["name"];
    $email=$_POST["email"];
    $errors=[];

      if(!preg_match("/^[a-zA-Z .]+$/",$name)){          
        array_push($errors,"Invalid Name Formet.");
      }

      
      if(!preg_match("/^[a-z]+[a-zA-Z0-9]*[@][a-z]+[.][a-z]{2,3}$/",$email)){          
        array_push($errors,"Invalid Email Formet.");
      }


      if(count($errors)==0){
         echo "No Invalid data";
      }else{
         print_r($errors);
      }

  
   }

?>

<form action="#" method="post">
  <div>Name<br>
    <input type="text" name="name" />
  </div>
  <div>E-mail<br>
    <input type="text" name="email" />
  </div>
  <div>
    <input type="submit" name="submit" />
  </div>
</form>