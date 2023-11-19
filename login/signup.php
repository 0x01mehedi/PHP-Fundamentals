<?php
    if(isset($_POST["submit"])){
           
        $user=trim($_POST["user"]);
        $pass=trim($_POST["password"]);
        $repass=trim($_POST["repassword"]);   
             
        $tmp=$_FILES["file"]["tmp_name"];
        $fname=$_FILES["file"]["name"];        
        $ext = pathinfo($fname, PATHINFO_EXTENSION);

        $image=$user.".".$ext;

       if($pass==$repass){ 

        if(move_uploaded_file($tmp,"img/".$image)){         

         $user_csv=$user.",".$pass.",".$image.PHP_EOL;
         file_put_contents("users.txt",$user_csv,FILE_APPEND);         
         echo "Successfully created!";
         
        }
       
       }else{
          echo "Password did not match";
       }
  
        //$users=file("users.txt");
        
       
  
       
  
  
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
<form action="#" method="post" enctype="multipart/form-data">
         <div>User<br>
           <input type="text" name="user" />
        </div>
        <div>Password<br>
           <input type="password" name="password" />
        </div>
        <div>Retype Password<br>
           <input type="password" name="repassword" />
        </div>
        <div>Photo<br>
           <input type="file" name="file" />
        </div>
        <br>
        <div>
           <input type="submit" name="submit" value="Sign Up" />
        </div>
        
        <div>
           I have account <a href="index.php">Login</a>
         </div>
    </form>
</body>
</html>