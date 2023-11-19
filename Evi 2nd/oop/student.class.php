<?php 


class Student{

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

     $html="";     
     foreach($students as $student){
        list($id,$name,$class,$section,$roll)=explode(",",$student);
        
        $html.="$id | $name | $class | $section | $roll<br>";
     
      }
    echo $html;
   }

   public function save(){

         $csv="$this->id,$this->name,$this->class,$this->section,$this->roll".PHP_EOL;
         
         file_put_contents("students.txt",$csv,FILE_APPEND);
   }

   public static function find($_name){
      $students =file("students.txt");

      $html="";
      foreach($students as $student){        
          list($id,$name,$class,$section,$roll)=explode(",",$student);
            if(strtolower($_name)==strtolower($name)){
              $html.="$id | $name | $class | $section | $roll<br>";
            }//end if
      }//end for
        
      echo $html;
   }//end find

   public function update(){
    
   }

   public function delete($id){
    
   }

}