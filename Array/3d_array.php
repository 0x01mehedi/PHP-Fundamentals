<style>
    .table{
        border-collapse: collapse;        
    }

    .table td,.table th{
      border: 1px solid lightgray;
      padding: 10px;
    }

    .table tr:nth-child(even){
      background-color: #f2f2f2;
    }

</style>
<?php

$c="hello"; 
$r=["Name"=>"Jahid","Age"=>22,"Mobile"=>34932432];

$students_class_8=[
  ["name"=>"Ali","age"=>32,"mobile"=>"038394839"],
  ["name"=>"Sakib","age"=>31,"mobile"=>"343432322"],
  ["name"=>"Akram","age"=>21,"mobile"=>"342325234"]
];

$students_class_9=[
  ["name"=>"Jahid","age"=>32,"mobile"=>"038394839"],
  ["name"=>"Rasel","age"=>31,"mobile"=>"343432322"],
  ["name"=>"Rahim","age"=>21,"mobile"=>"342325234"]
];

$students_class_10=[
  ["name"=>"Noman","age"=>32,"mobile"=>"038394839"],
  ["name"=>"Motin","age"=>31,"mobile"=>"343432322"],
  ["name"=>"Shuvo","age"=>21,"mobile"=>"342325234"]
];


$students=[$students_class_8,$students_class_9,$students_class_10];
//print_r($students);
//Outputting 2d array

$html="<table class='table'>";
$html.="<tr><th>Name</th><th>Age</th><th>Mobile</th></tr>";
foreach($students[0] as $student){
    $html.="<tr><td>{$student["name"]}</td><td>{$student["age"]}</td><td>{$student["mobile"]}</td></tr>";
}
$html.="</table>";

echo $html;

?>