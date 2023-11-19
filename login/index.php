<?php session_start();

   if(isset($_POST["submit"])){
           
      $user=trim($_POST["user"]);
      $pass=trim($_POST["password"]);

      $users=file("users.txt");
      
      $found=0;
      $img="png";

      foreach($users as $u){
        list($username,$password,$path)=explode(",",trim($u));      

        if($user==$username && $pass==$password){
             $found=1;
             $img=$path;
             break;
        }

      }

      //-------------------------------
      if($found){

        $_SESSION["user"]=$user;
        $_SESSION["img"]=$img;

        header("location:home.php");

      }else{
        echo "Incorrect Username or password";
      }




   }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
         <div>User<br>
           <input type="text" name="user" />
        </div>
        <div>Password<br>
           <input type="password" name="password" />
        </div>
        <div>
           <input type="submit" name="submit" value="Log In" />
        </div>
        <div>
            Don't you have accout? <a href="signup.php">Sign Up</a>
         </div>
    </form>
</body>
</html>