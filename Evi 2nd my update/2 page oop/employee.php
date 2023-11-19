<?php
require_once("employee.class.php");


if(isset($_POST["submit"])){
    $id=$_POST["id"];
    $name=$_POST["name"];
    $salary=$_POST["salary"];
    $designation=$_POST["designation"];
    $contact=$_POST["contact"];

    $employee=new Employee($id, $name, $salary, $designation, $contact);
    $employee->save();
}
Employee::index();


?>

<form action="#" method="post">
    <div>ID <br>
        <input type="text" name="id">
    </div>
    <div>Name <br>
        <input type="text" name="name">
    </div>
    <div>Designation <br>
        <select name="designation">
            <option>Manager</option>
            <option>Manager</option>
            <option>Manager</option>
        </select>
    </div>
    <div>Salary <br>
        <select name="salary">
            <option>50000</option>
            <option>50000</option>
            <option>50000</option>
        </select>
    </div>
    <div>Contact <br>
        <input type="text" name="contact">
    </div>
    <input type="submit" name="submit" value="Submit">
</form>