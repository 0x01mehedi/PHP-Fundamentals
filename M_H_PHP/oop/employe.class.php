

<?php 

class employe{

   public $id;
   public $name;
   public $designation;
   public $salary;
   public $contact;

   public function __construct($id,$name,$designation,$salary,$contact){
      
     $this->id=$id;
     $this->name=$name;
     $this->designation=$designation;
     $this->salary=$salary;
     $this->contact=$contact;
      
   }

   public static function index(){
      
     $employee =file("employe.txt");

     $html="<table border=1>";
    
     $html.="<tr><th>ID</th><th>Name</th><th>Designation</th><th>Salary</th><th>Contact</th></tr>";
     foreach($employee as $employe){
        list($id,$name,$designation,$salary,$contact)=explode(",",$employe);
        $html.="<tr><td>$id</td><td>$name</td><td>$designation</td><td>$salary</td><td>$contact</td></tr>";
     }
      
     $html.="</table>";

     echo $html;
   }
  

   public function save(){

         $csv="$this->id,$this->name,$this->designation,$this->salary,$this->contact".PHP_EOL;
         
         file_put_contents("employe.txt",$csv,FILE_APPEND);
   }

}

?>

<style>
  table{
  border-collapse: collapse;
  margin-bottom: 15px;
}
</style>