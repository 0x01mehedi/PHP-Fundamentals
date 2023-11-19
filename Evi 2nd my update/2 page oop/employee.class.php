<?php
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
            $html.="$id | $name | $designation | $contact | $salary <br>";


        }
        echo $html;
    }
    public function save(){
        $csv="$this->id,$this->name,$this->designation,$this->contact,$this->salary".PHP_EOL;
        file_put_contents("employee.txt",$csv,FILE_APPEND);
    }
    public function find($id){}
    public function update(){}
    public function delete($id){}
}

?>