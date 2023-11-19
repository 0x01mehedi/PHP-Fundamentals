<?php session_start();
if(!isset($_SESSION["user"])){
    header("location:index.php");
    die();
}

echo "<h1>Home</h1>";
echo "<img src='img/{$_SESSION["img"]}' width='80' /><br>";
echo $_SESSION["user"]."<br>";
echo "<a href='logout.php'>Logout</a>";
echo "<hr>";
echo "<h1>How are you? :)</h1>";

?>