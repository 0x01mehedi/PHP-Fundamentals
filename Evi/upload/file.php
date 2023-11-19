<?php
 //print_r();
 //print();
 //printf();
 //echo();
 //sprint();
 //vprintf();
 if(isset($_POST["upload"])){
 
    $name=$_FILES["photo"]["name"];
    $tmp_name=$_FILES["photo"]["tmp_name"];
    
    $size=$_FILES["photo"]["size"];
    $kb=$size/1024;
    $mb=$kb/1024;

    $type=$_FILES["photo"]["type"];

   // echo $type;
    if($type=="image/png" || $type=="image/jpg" || $type=="image/jpeg"){

        if($mb<=4){
            if(move_uploaded_file($tmp_name,"img/$name")){
                echo "<img src='img/$name' height='200' />";
            }
        }else{
            echo "Invalid size";
        }

    }else{
        echo "Invalid Type. Allowed types: png, jpg, jpeg ";
    }
     
    
 }
  


?>

<form action="#" method="post" enctype="multipart/form-data">
   Photo: <input type="file" name="photo" />
    <br>
    <input type="submit" name="upload" value="Upload" />
</form>

<?php

$dir = new DirectoryIterator(dirname("__FILE__")."/img");

foreach ($dir as $fileinfo) {
    if (!$fileinfo->isDot()) {
       $img=$fileinfo->getFilename();
       echo "<img src='img/$img' width='100' />"; 
    }
}

?>

