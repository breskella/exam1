<!DOCTYPE html>
<!-- Q1 -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chessboard</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 100px auto;
        }
        td {
            width: 50px;
            height: 50px;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>
<table>
<?php
    for ($row = 0; $row < 8; $row++) {
        for ($col = 0; $col < 8; $col++) {
            if (($row + $col) % 2 == 0) {
                $color = "white";
            } else {
                $color = "black";
            }
            echo "<td class='$color'></td>";
        }
        echo "</tr>";
    }
?>
</table>
</body>
</html>
<?php
echo "<hr>";
//Q2
$rows = 5;

for ($i = 1; $i <= $rows; $i++) {
    for ($j = 1; $j <= $rows - $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "*&nbsp;&nbsp;";
    }
    echo "<br>";
}

for ($i = $rows - 1; $i >= 1; $i--) {
    for ($j = 1; $j <= $rows - $i; $j++) {
        echo "&nbsp;&nbsp;";
    }
    for ($k = 1; $k <= $i; $k++) {
        echo "*&nbsp;&nbsp;";
    }
    echo "<br>";
}
echo "<hr>";
?>

<?php
//Q2
$size = 5;
for ($i = 1; $i <= $size; $i++) {
    echo str_repeat(" * ", $i) . "<br>";
}
echo str_repeat(" * ", $size) . "<br>";
for ($i = $size - 1; $i >= 1; $i--) {
    echo str_repeat(" * ", $i) . "<br>";
}
echo"<hr>";
?>
<?php
//  Q2
$size = 3;
for ($i = 1; $i <= $size; $i++) {
    echo str_repeat(" * ", 2 * $i - 1);
    echo "<br>";
}
for ($i = $size - 1; $i >= 1; $i--) {
    echo str_repeat(" * ", 2 * $i - 1);
    echo "<br>";
}
echo"<hr>";
?>
<?php
//Q3
$array = [2,4,3,1,6,7,5,8,0,9] ;
$n = count($array);
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($array[$j] > $array[$j + 1]) {
            $temp = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $temp;
        }
    }
}
echo "Array sorted in ASC: ";
echo"<br>";
print_r($array);
echo"<br>";
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($array[$j] < $array[$j + 1]) {
            $temp = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $temp;
        }
    }
}
echo "Array sorted in DESC: ";
echo"<br>";
print_r($array);
echo"<hr>";
?>
<?php
//Q4
$array = [1,2,3,4,5];
$sum = 0;
$count = count($array);
for($i=0;$i<$count;$i++) {
    $sum += $array[$i];
}
if ($count > 0) {
    $average = $sum / $count;
    echo "The avg of the numbers in the array is: " . $average;
} else {
    echo "The array is empty";
}
echo"<hr>";
?>
<?php
//Q5
$array = [1,2,3,4,5,6,7,8,9,10];
$filteredArray = [];
for($i=0;$i<count($array);$i++) {
    if ($array[$i] % 2 == 0) {
        continue; 
    }
    $filteredArray[] = $array[$i];
}
print_r($filteredArray);
echo"<hr>";
?>
<?php
//Q6
$numbers = [10, 30, 20];
$max = $numbers[0];
if ($numbers[1] > $max) {
    $max = $numbers[1];  
}
if ($numbers[2] > $max) {
    $max = $numbers[2]; 
}
echo "The maximum number is: " . $max;
echo"<hr>";
?>
<?php
//Q7
$date = "2012-12-21";
$dateTime = new DateTime($date);
$dateTime->modify('+1 month');
echo "Original Date: $date";
echo"<br>";
echo "New Date (after adding one month): " . $dateTime->format('Y-m-d');
echo"<hr>";
?>
<?php
//Q8
$currentDate = new DateTime();
$currentDate->modify('-1 month');
$previousMonth = $currentDate->format('m');
echo "The month number before the current month is: $previousMonth";
echo"<hr>";
?>
<?php
//Q9
$text = "Hi, I'm studying php";
$word = "php";
if (preg_match("/$word/", $text)) {
    echo "The string '$word' is found in the string '$text'.";
} else {
    echo "The string '$word' is not found in the string '$text'.";
}
echo"<hr>";
?>
<?php
//Q10
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }
    for ($i = 2; $i * $i <= $number; $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
$num = 17;
if (isPrime($num)) {
    echo "$num is a prime number.";
} else {
    echo "$num is not a prime number.";
}
echo"<hr>";
?>

<?php
//Q11
if (isset($_POST['color'])) {
    setcookie('backgroundColor', $_POST['color'], time() + (30 * 24 * 60 * 60), '/');
    echo "<script>document.body.style.backgroundColor = '" . $_POST['color'] . "';</script>";
}
$backgroundColor = isset($_COOKIE['backgroundColor']) ? $_COOKIE['backgroundColor'] : 'white';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Background Color</title>
    <style>
        body {
            background-color: <?php echo $backgroundColor; ?>;
            color: black;
            font-family: Arial, sans-serif;
            padding: 50px;
        }
    </style>
</head>
<body>

<h1>Choose a Background Color</h1>

<form method="POST" action="">
    <label for="color">Select Color:</label>
    <select name="color" id="color">
        <option value="white" <?php if ($backgroundColor == 'white') echo 'selected'; ?>>White</option>
        <option value="blue" <?php if ($backgroundColor == 'blue') echo 'selected'; ?>> Blue</option>
        <option value="green" <?php if ($backgroundColor == 'green') echo 'selected'; ?>> Green</option>
        <option value="violet" <?php if ($backgroundColor == 'violet') echo 'selected'; ?>> violet</option>
        <option value="red" <?php if ($backgroundColor == 'red') echo 'selected'; ?>> red</option>
    </select>
    <button type="submit">Change Color</button>
</form>

</body>
</html>





