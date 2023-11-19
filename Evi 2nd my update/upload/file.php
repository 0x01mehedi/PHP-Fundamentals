<?php
if(isset($_POST["upload"])){
    $name=$_FILES["photo"]["name"];
    $tmp_name=$_FILES["photo"]["tmp_name"];
    //$size=$_FILES["photo"]["size"];

    //$type=$_FILES["photo"]["type"];

    if(move_uploaded_file($tmp_name,"img/$name")){
        echo "<img src='img/$name'height='300'/>";
    }
}

?>

<form action="#" method="post" enctype="multipart/form-data">
    <div>
        Photo: <input type="file" name="photo">      
    </div><br>
    <input type="submit" name="upload" value="upload">

</form>

