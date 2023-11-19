<?php
if(isset($_POST["submit"])){
    $name=$_POST["name"];
    $email=$_POST["email"];
    $errors=[];

    if(!preg_match("/^[a-zA-Z .]+$/",$name)){
        array_push($errors,"Your name is Invalid");
    }
    //m ehedi 67 @ gmail . com
    if(!preg_match("/^[a-z]+[a-zA-Z0-9]*[@][a-z]+[.][a-z]{2,3}$/",$email)){
        
        array_push($errors,"Your Email is Invalid");
    }

    if(count($errors)==0){
        echo "Your data is Valid";
    }else{
        print_r($errors);
    }
}

?>
<form action="#" method="post">
    <div>Name<br>
        <input type="text" name="name">
    </div>
    <div>Email<br>
        <input type="text" name="email">
    </div>
    <input type="submit" name="submit" value="submit">
</form>