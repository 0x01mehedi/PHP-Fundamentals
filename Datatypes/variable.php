<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
 //Datatypes: 1. Primitive Datatype: number, string, boolean 2. Compound Datatype: array, object

 // 1. Primitive
       $x=10;
       $y=20;
       echo $x+$y;
      
       $name="Jahid";
       $age=22;
       echo "<br>Your name is $name. and age is $age.";

       //2.Compound DataType (Array): 1 associative array 2. numerical array 
       
       //Asssciative Array
       $arr=["name"=>"Jahid","age"=>23];
       echo "<br>";
       print_r($arr);
       echo "<br>";
       echo "Your name ".$arr["name"]." and age is ".$arr["age"];

       //Numerical Array
       $arr2=[2,34,32,52,3];

       echo "<br>";
       foreach($arr2 as $v){
           echo $v.",";
       }

//----Object making blueprint: Class
      class Student{
        public $id;
        public $name;
        public $contact;

        function __construct($id,$name,$contact){
            $this->id=$id;
            $this->name=$name;
            $this->contact=$contact;
        }
        function display(){
            echo "<br>Id: ".$this->id."<br>Name:".$this->name."<br>Contact:".$this->contact;
        }
      }

      $obj=new Student(12,"Jahid","3434343");
      $obj->display();


    

    ?>
</body>
</html>