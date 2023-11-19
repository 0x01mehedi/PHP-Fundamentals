<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
    // 1. Assignment Operators: =,+=,-=,*=,/=,%=
    // 2. Arithmetic Operators: +,-,*,/,%
    // 3. Comparison Operators: <,>,<=,>=,!=,==, ===, !==    
    // 4. Logical Operators: !, && , ||
    // 5. Bitwise Operators: <<, >>, >>>, | , & ,^=
    // 6. Special Operators: ?:, ++, --, typeof, new , delete, void

    //1. Assignment Operator:
    $x=2;
    echo $x."<br>";
    $x+=3;//$x=$x+3;
    echo $x."<br>";
    $x-=1;//$x=$x-3;
    echo $x."<br>";
    $x*=5;//$x=$x*5;
    echo $x."<br>";
    $x/=2;//$x=$x/3;
    echo $x."<br>";
    $x%=3;//$x=$x%3;
    echo $x."<br>";

    //2. Arithmetic Operators:
    $a=3;
    $b=2;

    $r=$a+$b;
    echo $r."<br>";

    $r=$a-$b;
    echo $r."<br>";

    $r=$a*$b;
    echo $r."<br>";

    $r=$a/$b;
    echo $r."<br>";

    $r=$a%$b;
    echo $r."<br>";

     //3. Comparison Operators:

     $a=3;
     $b=2;

     $c=$a>$b;
     echo $c."<br>";

     $c=$a<$b;
     echo $c."<br>";

     $c=$a==$b;
     echo $c."<br>";

     $c=$a>=$b;
     echo $c."<br>";

     $c=$a<=$b;
     echo $c."<br>";

     $c=$a!=$b;
     echo $c."<br>";

 // 4. Logical Operators:

   $a=2;
   $b=4;
   $c=5;

   $r=($a>$b) && $a<$c || !($c<$b);
   echo "Result:".$r."<br>";


  ?>
</body>
</html>