<?php
if(isset($_POST["submit"])){
    $id=$_POST["id"];
    $name=$_POST["name"];
    $salary=$_POST["salary"];
    $designation=$_POST["designation"];
    $contact=$_POST["contact"];

    $employee = new Employee($id,$name,$salary,$designation,$contact);
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
    <div>Contact <br>
        <input type="text" name="contact">
    </div>
    <div>Designation <br>
        <select name="designation">
            <option>Manager</option>
            <option>Chief Engineer</option>
            <option>Sinior Engineer</option>
        </select>
    </div>
    <div>Salary <br>
        <select name="salary">
            <option>50000</option>
            <option>40000</option>
            <option>30000</option>
        </select>
    </div>
    <input type="submit" name="submit" value="Submit">
    
</form><!--  End Form -->

<?php //class php
class Employee{

    public $id;
    public $name;
    public $salary;
    public $designation;
    public $contact;

    public function __construct($id,$name,$salary,$designation,$contact){

        $this->id=$id;
        $this->name=$name;
        $this->salary=$salary;
        $this->designation=$designation;
        $this->contact=$contact;

    }
    public static function index(){
        $employees=file("employee.txt");

        $html="";     
        foreach($employees as $employee){
            list($id,$name,$salary,$designation,$contact)=explode(",",$employee);

            $html.="$id | $name | $salary | $designation | $contact <br>";

        }
        echo $html;
    }
    public function save(){
        $csv="$this->id,$this->name,$this->salary,$this->designation,$this->contact".PHP_EOL;
        file_put_contents("employee.txt",$csv,FILE_APPEND);
    }
    public static function find($id){

    }
    public function update(){}
    public function delete($id){}
}

?>