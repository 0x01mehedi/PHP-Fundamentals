<?php
    if(isset($_POST["upload"])){
        $name=$_FILES["photo"]["name"];
        $tmp_name=$_FILES["photo"]["tmp_name"];
        $size=$_FILES["photo"]["size"];
        $type=$_FILES["photo"]["type"];

        $kb=$size/1024;
        $mb=$kb/1024;

        if($type=="image/png" || $type=="image/jpg" || $type=="image/jpeg"){

            if($mb<=2){
                if(move_uploaded_file($tmp_name,"img/$name")){
                    echo "<img src='img/$name' height='200' />";
                }
            }else{
                echo "Invalid image size";
            }
    
        }else{
            echo "Invalid Type. Allowed types: png, jpg, jpeg ";
        }

    }

?>

<form action="#" method="post" enctype="multipart/form-data">
    <div>
        Photo File<br>
        <input type="file" name="photo"/>
    </div>

    <div>
        <input type="submit" value="Upload" name="upload"/>
    </div>

</form>