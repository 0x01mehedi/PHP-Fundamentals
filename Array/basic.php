<?php

//Defining array

//Method1
$arr=array("Jahid","Rasel","Karim");

//Method2
$arr=["Jahid","Rasel","Karim"];

//Method3
$arr[0]="jahid";
$arr[1]="Rasel";
$arr[2]="Karim";


//append array
$arr[]="Robi";
$arr[]="Ali";

array_push($arr,"Rahim");

//Outputting array
foreach($arr as $name){
  
    echo $name."<br>";

}



?>