
<?php
  require_once("employe.class.php");


  if(isset($_POST["save"])){

    $id=$_POST["id"];
    $name=$_POST["name"];
    $contact=$_POST["contact"];
    $designation=$_POST["designation"];
    $salary=$_POST["salary"];

    $employe=new Employe($id,$name,$designation,$salary,$contact);
    $employe->save();
  }

  Employe::index();
?>

<form action="#" method="post">
    <hr>
    <div>
        Id<br>
        <input type="text" name="id" />
    </div>

    <div>
        Name<br>
        <input type="text" name="name" />
    </div>
    <div>
        Contact<br>
        <input type="text" name="contact" />
    </div>
    <div>
        Salary<br>
        <input type="text" name="salary" />
    </div>
    <div>
        Designation<br>
       <select name="designation">
         <option>HR</option>
         <option>Web Developer</option>
         <option>Softwer Developer</option>
       </select>

    </div>

    <div>      
        <input type="submit" name="save" value="Save" />
    </div>
</form>

