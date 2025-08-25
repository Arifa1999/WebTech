<?php
//Task 1
$length = 10;
$width  = 5;

$area = $length * $width;
$perimeter = 2 * ($length + $width);
echo"TASK 1 <br>";
echo "Length: " . $length . "<br>";
echo "Width: " . $width . "<br>";
echo "Area of Rectangle = " . $area . "<br>";
echo "Perimeter of Rectangle = " . $perimeter."<br>";


//Task 2
$amount = 1000; 
$vat = $amount * 0.15;     
$total = $amount + $vat;   
echo"<br>";
echo"<br>";
echo"TASK 2 <br>";
echo "Amount: " . $amount . "<br>";
echo "VAT (15%): " . $vat . "<br>";
echo "Total with VAT: " . $total;

//Task 3
$number = 15; 
echo"<br>";
echo"<br>";
echo"TASK 3<br>";
echo"Number is ".$number ."<br>"; 
if ($number % 2 == 0) {
    echo $number . " is an Even number.";
} else {
    echo $number . " is an Odd number.";
}


//Task 4
$a = 25;
$b = 40;
$c = 15;
echo"<br>";
echo"<br>";
echo"TASK 4<br>";
echo"Number A : ".$a ."<br>"; 
echo"Number B : ".$b ."<br>"; 
echo"Number C ".$c ."<br>"; 
if ($a >= $b && $a >= $c) {
    echo "Largest number is: " . $a;
} elseif ($b >= $a && $b >= $c) {
    echo "Largest number is: " . $b;
} else {
    echo "Largest number is: " . $c;
}
//Task 5
echo"<br>";
echo"<br>";
echo"TASK 5<br>";
for ($i = 10; $i <= 100; $i++) {
    if ($i % 2 != 0) {
        echo $i . "<br>";
    }
}

//Task 6
$numbers = array(10, 20, 30, 40, 50); 
$search = 30; 
$found = false;
echo"<br>";
echo"<br>";
echo"TASK 6<br>";

for($i=0;$i<count(value:$numbers); $i++){
    echo "Number is :".$i."<br>";
}
echo" Search Numbers is :".$search."<br>";
for ($i = 0; $i < count($numbers); $i++) {
    if ($numbers[$i] == $search) {
        echo "Element " . $search . " found at position " . ($i + 1);
        $found = true;
        break; 
    }
}

if (!$found) {
    echo "Element " . $search . " not found in the array.";
}

//Task 7
echo"<br>";
echo"<br>";
echo"TASK 7<br>";
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

echo "<br>";


for ($i = 3; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "<br>";
}

echo "<br>";

$letters = ['A','B','C','D','E','F'];
$k = 0;
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo $letters[$k] . " ";
        $k++;
    }
    echo "<br>";
}

// Task 8

$array = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];

echo"<br>";
echo"<br>";
echo"TASK 8<br>";
for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array[$i]); $j++) {
        if (is_numeric($array[$i][$j])) {
            echo $array[$i][$j] . " ";
        }
    }
    echo "<br>";
}

echo "<br>";


for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array[$i]); $j++) {
        if (!is_numeric($array[$i][$j])) {
            echo $array[$i][$j] . " ";
        }
    }
    echo "<br>";
}


?>