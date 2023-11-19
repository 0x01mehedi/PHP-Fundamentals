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
$students=[
  ["name"=>"Jahid","age"=>32,"mobile"=>"038394839"],
  ["name"=>"Rasel","age"=>31,"mobile"=>"343432322"],
  ["name"=>"Rahim","age"=>21,"mobile"=>"342325234"]
];

//Outputting 2d array

$html="<table class='table'>";
$html.="<tr><th>Name</th><th>Age</th><th>Mobile</th></tr>";
foreach($students as $student){
    $html.="<tr><td>{$student["name"]}</td><td>{$student["age"]}</td><td>{$student["mobile"]}</td></tr>";
}
$html.="</table>";

echo $html;

?>