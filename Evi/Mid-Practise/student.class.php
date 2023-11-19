<?php
    require_once("student.interface.php");

    class Student implements IStudent{

        public $id;
        public $name;
        public $class;
        public $section;
        public $roll;

    public function __construct($id,$name,$class,$section,$roll){

        $this->id=$id;
        $this->name=$name;
        $this->class=$class;
        $this->section=$section;
        $this->roll=$roll;

    }
    public static function index(){

        $students =file("students.txt");

        $html="<table>";
        $html.="<tr><th>ID</th><th>Name</th><th>Class</th><th>Section</th><th>Roll</th></tr>";
        foreach($students as $student){
            list($id,$name,$class,$section,$roll)=explode(",",$student);
            $html.="<tr><td>$id</td><td>$name</td><td>$class</td><td>$section</td><td>$roll</td></tr>";
        }
        $html.="</table>";

        echo $html;
    }
    public function save(){

        $csv="$this->id,$this->name,$this->class,$this->section,$this->roll".PHP_EOL;

        file_put_contents("students.txt",$csv,FILE_APPEND);
        
    }
    public function find($id){
        
    }
    public function update(){
        
    }
    public function delete($id){
        
    }


    }

?>


