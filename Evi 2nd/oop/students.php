<?php
  require_once("student.class.php");
  
  if(isset($_POST["save"])){

    $id=$_POST["id"];
    $name=$_POST["name"];
    $class=$_POST["class"];
    $section=$_POST["section"];
    $roll=$_POST["roll"];

    $student=new Student($id,$name,$class,$section,$roll);
    $student->save();   
  }

  if(isset($_POST["search"])){
    $name=$_POST["name"];
    Student::find($name);

  }else{
    Student::index();
  }

  
?>
Search<br>
<form action="#" method="post">
  <input type="text" name="name" placeholder="Search..." />
  <input type="submit" name="search" value="Go" />
</form>

<br>
<form action="#" method="post">
    <div>
        Id<br>
        <input type="text" name="id" />
    </div>
    <div>
        Name<br>
        <input type="text" name="name" />
    </div>
    <div>
        Roll<br>
        <input type="text" name="roll" />
    </div>
    <div>
        Class<br>
       <select name="class">
         <option>THREE</option>
         <option>FOUR</option>
         <option>FIVE</option>
       </select>

    </div>

    <div>
        Section<br>
       <select name="section">
         <option>A</option>
         <option>B</option>
         <option>C</option>
       </select>
    </div>

    <div>      
        <input type="submit" name="save" value="Save" />
    </div>
</form>



