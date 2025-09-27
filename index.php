<?php
$name = "Mr.A";
$age = 20;
$courses = array("Java", "C", "PHP");
echo "Name:" . $name . ", age: " . $age . 
     "<br/>3rd course is:" . $courses[2];
?>

<h1>This is my first PHP</h1>
<p>
<?php
//htp://localhost:8008/?x=5&y=7
    $x = 5;
    $y = 7;

    echo "x = $x, y = $y <br><br>";

    // Arithmetic Operators
    echo "x + y = " . ($x + $y) . "<br>";
    echo "x - y = " . ($x - $y) . "<br>";
    echo "x * y = " . ($x * $y) . "<br>";
    echo "x / y = " . ($x / $y) . "<br>";
    echo "x % y = " . ($x % $y) . "<br>";

?>
</p>