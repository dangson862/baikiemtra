


<?php

//cau 1
function checkEven($num){
    if ($num % 2 == 0){
        return "$num la so chan";
    } else {
        return "$num khon phai so chan";
    }
}
echo checkEven(6). '<br>';

//cau 2
function sumToN($n){
    $sum = 0;
    for ($i = 1; $i <= $n; $i++){
        $sum += $i;
    }
    return $sum;
}
echo sumToN(5). '<br>'; 

// cau 3
function Multiplication($so) {
    echo "<h2>Bang cuu chuong $so</h2>";
    echo "<table border='1'>";
    for ($i = 1; $i <= 10; $i++) {
        echo "<tr><td>$so x $i = " . ($so * $i) . "</td></tr>";
    }
    echo "</table>";
}

for ($i = 1; $i <= 10; $i++) {
    Multiplication($i);
}

//cau 4
function containsWord($str, $word){
    if (strpos($str, $word) !== false){
        return "trong chuoi $str co chua tu $word";
    } else {
        return "trong chuoi $str khong chua tu $word";
    }
}
echo containsWord('dai hoc thuong mai', 'thuong mai').'<br>';

//cau 5
function findMax($arr) {
    $max = $arr[0]; 

    foreach ($arr as $value) {
        if ($value > $max) {
            $max = $value; 
        }
    }

    return $max;
}

function findMin($arr) {
    $min = $arr[0]; 

    foreach ($arr as $value) {
        if ($value < $min) {
            $min= $value; 
        }
    }

    return $min;
}

$array = [5, 2, 8, 3, 1, 7, 6];

$max = findMax($array);
$min = findMin($array);

echo "Giá trị lớn nhất trong mảng là: " . $max . "<br>";
echo "Giá trị nhỏ nhất trong mảng là: " . $min. "<br>";

//cau 6
function sortArr($arr) {
    $length = count($arr);

    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            if ($arr[$i] > $arr[$j]) {
                $temp = $arr[$i];
                $arr[$i] = $arr[$j];
                $arr[$j] = $temp;
            }
        }
    }

    return $arr;
}
$array = [5, 2, 8, 3, 1, 7, 6];

$sortedArray = sortArr($array);

echo "Mảng sau khi sắp xếp tăng dần là: ";
foreach ($sortedArray as $value) {
    echo $value . " ";
}
echo "<br>";

//cau 7
function giaiThua($n){
    $giaithua = 1;
    for($i = 1; $i <= $n; $i++){
        $giaithua *= $i;
    }
    return "Giai thừa của $n là: ". $giaithua;
}

echo  giaiThua(4);
echo "<br>";
//cau 8
function checkPrime($prime) { //kiem tra so nguyen to
    if($prime <= 1) {
        return false;
    }
    for($i = 2; $i <= sqrt($prime); $i++) { //ham sqrt can bac 2
        if($prime % $i == 0) { // kiem tra chia het trc can bac 2
            return false;
        }
    }
    return true;
}

function findPrime($start, $end) {
    for($i = $start; $i <= $end; $i++) {
        if(checkPrime($i)) {
            echo $i . " ";
        }
    }
}

    echo "Các số nguyên tố là: ";
    findPrime(1, 100);
    echo "<br>";
//cau 9
function sumTotal($arr) {
    $total = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $total += $arr[$i];
    }
    return $total;
}

$numbers = array(1, 2, 3, 4, 5);
echo sumTotal($numbers);
echo "<br>";
//cau 10
function printFibonacci($start, $end){
    $num1 = 0;
    $num2 = 1;
    while ($num2 <= $end){
        if ($num2 >= $start){
            echo ' '.$num2;
        }
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
    }
}

    $start = 10;
    $end = 100;
    echo "Các số Fibonacci là:";
    printFibonacci($start, $end);
    echo "<br>";
//cau 11
function isArmstrongNumber($number) {
    $sum = 0;
    $temp = $number;
    $Numdigits = strlen($number);

    while ($temp != 0) {
        $digit = $temp % 10;
        $sum += pow($digit, $Numdigits);
        $temp = (int)($temp / 10);
    }

    return $sum === $number;
}

$number = 6;

if (isArmstrongNumber($number)) {
    echo "{$number} là số Armstrong.";
} else {
    echo "{$number} không phải là số Armstrong.";
}
echo "<br>";
//cau 12

function insertElement($array, $element, $position) {
    // Kiểm tra vị trí chèn hợp lệ
    if ($position < 0 || $position > count($array)) {
        echo "Vị trí chèn không hợp lệ.";
        return $array;
    }

    // Chèn phần tử vào vị trí bất kỳ
    for ($i = 0; $i < count($array); $i++) {
        if ($i == $position) {
            $newArray[] = $element;
        }
        $newArray[] = $array[$i];
    }

    return $newArray;
}

$array = [1, 2, 3, 4, 5];
$element = 10;
$position = 2;

$newArray = insertElement($array, $element, $position);

print_r($newArray);
echo "<br>";
//cau 13 
function removeRepeat($arr) {
    $newArr = array();
    for ($i = 0; $i < count($arr); $i++) {
        if (!in_array($arr[$i], $newArr)) {
            array_push($newArr, $arr[$i]);
        }
    }
    return $newArr;
}

$numbers = array(1, 2, 3, 4, 5, 2, 3);
print_r(removeRepeat($numbers));
echo "<br>";
//cau 14 
function searchKey($arr, $key) {
    for ($i = 0; $i < count($arr); $i++) {
        if ($arr[$i] == $key) {
            return $i;
        }
    }
    return -1;
}

$numbers = array(1, 2, 3, 4, 5);
echo searchKey($numbers, 3);
echo "<br>";
//cau 15
function rvString($str) {
    $newStr = "";
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $newStr .= $str[$i];
    }
    return $newStr;
}

$string = "Hello World!";
echo rvString($string);
echo "<br>";
//cau 16
function countElements($array) {
    $count = 0;
    foreach ($array as $element) {
        $count++;
    }

    return $count;
}

$array = [1, 2, 3, 4, 5];
$count = countElements($array);
echo "Số lượng phần tử trong mảng là: " . $count;
echo "<br>";
//cau 17
function checkPalindrome($string) {
    $string = strtolower(str_replace(' ', '', $string)); //bỏ khoảng trắng và đổi thành chữ thường
    if ($string == strrev($string)) { //đảo ngược str
        echo "Chuỗi '".$string."' là chuỗi Palindrome";
    } else {
        echo "Chuỗi '".$string."' không phải là chuỗi Palindrome";
    }
}

    checkPalindrome("Madam"); //Race car
    echo "<br>";
//cau 18
function countOccurrences($array, $element) {
    $count = 0;

    foreach ($array as $value) {
        if ($value == $element) {
            $count++;
        }
    }

    return $count;
}

$array = [1, 2, 3, 4, 2, 5, 2];
$element = 2;
$count = countOccurrences($array, $element);
echo "Số lần xuất hiện của phần tử $element trong mảng là: $count";
echo "<br>";

//cau 19
function sortDesc($array) {
    $length = count($array);

    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            if ($array[$i] < $array[$j]) {
                // Hoán đổi giá trị của hai phần tử
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }

    return $array;
}

$array = [5, 2, 8, 1, 3];
$sortedArray = sortDesc($array);
echo "Mảng đã được sắp xếp theo thứ tự giảm dần: ";
print_r($sortedArray);
echo "<br>";

//cau 20

$myArray = [4, 12, 5, 8, 2, 10, 3]; 
$newElement = 0; 
echo "cho mảng: " . implode(", ", $myArray) . "<br>";
echo "ký tự thêm vào mảng: $newElement <br> ";
array_unshift($myArray, $newElement); 
echo "thêm vào đầu: " . implode(", ", $myArray) . "";
echo "<br>";

//21
function searchSecond($array) {
    $length = count($array);

    for ($i = 0; $i < $length - 1; $i++) {
        for ($j = $i + 1; $j < $length; $j++) {
            if ($array[$i] < $array[$j]) {
                // Hoán đổi giá trị của hai phần tử
                $temp = $array[$i];
                $array[$i] = $array[$j];
                $array[$j] = $temp;
            }
        }
    }

    return $array;
}

$array = [5, 2, 8, 1, 3];
echo "số lớn thứ 2 trong mảng là: " . $array[1];
echo "<br>";
//cau 22
function findUCLN($a, $b) {
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp;
    }
    return $a;
}

function findBCNN($a, $b) {
    $ucln = findUCLN($a, $b);
    $bcnn = ($a * $b) / $ucln;
    return $bcnn;
}

$num1 = 24;
$num2 = 36;
$ucln = findUCLN($num1, $num2);
$bcnn = findBCNN($num1, $num2);
echo "USCLN của $num1 và $num2 là: $ucln" . "<br>";
echo "BSCNN của $num1 và $num2 là: $bcnn" ;
echo "<br>";
//cau 23 

function isPerfectNumber($number) {
    $sum = 0;
    for ($i = 1; $i <= $number / 2; $i++) {
        if ($number % $i == 0) {
            $sum += $i;
        }
    }
    return $sum == $number;
}

$number = 6;
if (isPerfectNumber($number)) {
    echo "$number là số hoàn hảo";
} else {
    echo "$number không là số hoàn hảo";
}
echo "<br>";
//cau 24

function searchOdd($array) {
    $maxOdd = null;
    foreach ($array as $value) {
        if ($value % 2 == 1 && ($maxOdd == null || $value > $maxOdd)) //ktra max odd
        {
            $maxOdd = $value;
        }
    }
    return $maxOdd;
}
    $array = array(1, 2, 3, 4, 5, 17, 7, 8, 9);
    echo searchOdd($array);
    echo "<br>";
//cau 25
function isPrime($number) {
    if ($number <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }

    return true;
}
$number = 7;
if (isPrime($number)) {
    echo "Số $number là số nguyên tố";
} else {
    echo "Số $number không phải là số nguyên tố";
}
echo"<br>";

//26

function maxInteger($array) {
    $max = 0;
    foreach ($array as $value) {
        if ($value > $max && $value > 0) {
            $max = $value; //ktra integer max dể thay thế
        }
    }
    return $max;
}
    $array = array(1, 10 ,5 ,6 ,9);
    echo maxInteger($array);
    echo"<br>";
//cau 27
function findLargestNegative($array) {
    $largestNegative = null;

    foreach ($array as $value) {
        if ( $value < 0 && ($largestNegative === null ||  $value > $largestNegative)) {
            $largestNegative =  $value;
        }
    }

    return $largestNegative;
}
$array = [2, -5, 7, -10, -3, 0, -8, 4, -2];
$largestNegative = findLargestNegative($array);
if ($largestNegative !== null) {
    echo "Số âm lớn nhất trong mảng là: $largestNegative";
} else {
    echo "Không có số âm trong mảng.";
}
echo"<br>";

//cau 28

function sumOddNum($n) {
    $sum = 0;
    for ($i =1; $i =$n ; $i++){
        if($i % 2 !=0){
            $sum +=$i;
        }
    }
    return $sum;
}
$n = 10;
$sumOdd = sumOddNum($n);
echo "Tổng các số lẻ từ 1 đến $n là: " . $sumOdd;
echo"<br>";

//cau 29 
function numSquare($n) {
    for ($i = 1; $i <= $n; $i++) {
        $root = sqrt($i); 
        if ($root == (int)$root) {
            echo $i." ";
        }
    }
}
    echo numSquare(100);
    echo "<br>";
//cau 30 
$substr = "d";

if(substr($str, 0, strlen($substr)) === $substr) /*lấy một phần tử con từ chuỗi $str bắt 
đầu từ vị trí 0 và có độ dài bằng độ dài của chuỗi $substr. Điều này sẽ trả về một chuỗi con của $str.*/
{
    echo "Chuỗi '$str' bắt đầu bằng chuỗi con '$substr'";
} else {
    echo "Chuỗi '$str' không bắt đầu bằng chuỗi con '$substr'";
}
echo "<br>";
?>