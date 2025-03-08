<?php

echo "Hello world <br>";

// NOTE: variable
$name = "ahsan";
$age = 30;
$balance = 1000.000;
echo "My name is $name, Iam $age years old, and I have $balance in my bank <br>";

// NOTE: Assignment by value - the old value will always attached
$var1 = "This var";
$var2 = $var1; // var2 assign value as $var1

// current value same
echo "$var1 <br>";
echo "$var2 <br>";

// update $var1
$var1 = "This is another var";

echo "$var1 <br>"; // $var1 is changed
echo "$var2 <br>"; // $var2 not change because assignment by value

// NOTE: Assigment by reference - share the same memory location
$myvar1 = "This myvar <br>";
// assigment reference with `&`
$myvar2 = &$myvar1;

// echo both
echo "$myvar1";
echo "$myvar2";

// myvar1 changed
$myvar1 = "myvar1 is changed to this<br>";

// output will be the same - the same memory location
echo "$myvar1";
echo "$myvar2";

// NOTE: using variable with string
$apple = 20;
$mango = 10;
$fruits = $apple + $mango;

echo "I have $apple Apple and $mango Mango. I have $fruits fruits <br>";

// NOTE: different between single and double quote
$count = 30;

echo "I have $count Apple <br>"; // print $count as value
echo 'I have $count <br>'; // print $count, not the value

// NOTE: string concatenation with . or dot or titik
$name1 = "Alice";
$name2 = "Bob";
$greeting = "Good morning " . $name1 . " and " . $name2 . "<br>";
echo $greeting;

// NOTE: escape character ' or koma atas like in I've
  $age = 30;
  $message = 'She\'s turning ' . $age . ' next week, but she doesn\'t
look a day over 25 <br>';
echo $message;

// NOTE: concatenate to thhe current variable withh .= atau titik sama dengan
$welcome = "Welcome ";
$welcome .= "Alice <br>";

echo $welcome; // output "Welcome Alice"

// NOTE: constant is a value that never change in the code bloc
// You can use define() function or `const` to create constant
// Mostly using uppercase
define('VAT', 0.20);
const AVERAGE_GRADE = 10;

// built-in constants
echo PHP_VERSION . "<br>";
echo PHP_OS . "<br>";

// NOTE: Data types in PHP
$age = 50;
$name = "Alice";
$price = 100.50;
$condition = true;
$fruits = array("Pisang", "Apple", "Semangka", "Melon");

echo gettype($age) . "<br>"; // integer
echo gettype($name) . "<br>"; // string
echo gettype($price) . "<br>"; // float
echo gettype($condition) . "<br>"; //boolean
echo gettype($fruits) . "<br>"; // array

// NOTE: arithmathic operations
$a = 18;
$b = 3;

echo "Hasil tambah: " . $a + $b . "<br>"; // tambah +
echo "Hasil kurang: " . $a - $b . "<br>"; // kurang -
echo "Hasil kali: " . $a * $b . "<br>"; // kali *
echo "Hasil bagi: " . $a / $b . "<br>"; // bagi /
echo "Sisa bagi: " . $a % $b . "<br>"; // sisa bagi %
echo "Hasil pangkat: " . $a ** $b . "<br>"; // pangkat **

// NOTE: assigment operators
$core = 64; // simple assignment
$a += 5; // combined assigment operations - means $a = $a + 5
$a -= 5; // beralku untuk lainya: -= (kurang) /= (bagi) *= (kali) %= (sisa bagi) **= (pangkat)

// NOTE: combined assignment operator with .= (titik sama dengan)
$b = "Hello"; // Hello
$b .= " Alice"; // become "Hello Alice"
echo $b . "<br>";

// NOTE: reference assignment operator with &=
// reference &= use the same memory location
$testMessage = "Welcome ";
$testMessage2 = &$testMessage;

// adding "Bob" to $testmessage2
$testMessage2 .= "Bob";

// both $testMessage and $testMessage2 in the same memory location
// modifying $testMessage2 will be applied to both
echo "The value of \$testMessage is " . $testMessage . ". And the value for \$testMessage2 is " . $testMessage2 . "<br>";

// NOTE: Comparison operator
// Jika True, maka outputnya 1
// Jika False, maka outputnya empty
// == sama dengan (value)
// === sama dengan (value dan type)
// != tidak sama dengan
// <> tidak sama dengan
// !== tidak sama dengan (value dan type)
// < lebih kecil
// > lebih besar
// <= lebih kecil atau sama dengan
// >= lebih besar atau sama dengan
$n = 40;
$z = 40;
$x = 30;
$y = "30";

// n sama dengan z -> True -> output 1
$output = ($n == $z);
echo $output . "<br>";

// z sama dengan x -> False -> output empty
$output2 = ($z == $x);
echo $output2;

// x tidak sama dengan z -> True -> output 1
$output3 = ($x != $z);
echo $output3 . "<br>";

// operator == sama dengan berdasar pada value, bukan type
// PHP menagnggap sama 30 dengan "30" -> True -> output 1
$output4 = ($x == $y);
echo $output4 . "<br>";

echo "Pemisah <br>";

// operator === sama dengan berdasar pada type, lebih explicit
// PHP menganggap ini beda, jadinya -> False - output empty
$output5 = ($x === $y);
echo $output5;

// z tidak sama dengan x -> True -> output 1
$output6 = ($z <> $x);
echo $output6 . "<br>";

// NOTE: Logical operator
// used to combine two or multiple conditions (true or false)
// 1. AND -> && -> Return True if both is True
// 2. OR -> || -> Return True if one or both is True
// 3. XOR -> XOR -> Return True if only $a is True or if only $b is True. If both $a and $b True or False, return False
// 4. Denial -> ! -> Return inverse atau kebalikan
$a = 10 < 2; // false
$b = 30 > 20; // true

// a is false AND b is true
// result -> False -> output empty
$logResult = ($a && $b);
echo $logResult;

// a is false OR b is true
// result -> True -> output 1
$logResult1 = ($a || $b);
echo $logResult1 . "<br>";

// a is false XOR b is true
// result -> True -> output 1
$logResult2 = ($a XOR $b);
echo $logResult2 . "<br>";

// Invert a (False) is True
// True -> output 1
$logResult3 = !$a;
echo $logResult3 . "<br>";

// NOTE: Increament and decreament operators
// ++ increament and -- decreament (increament or decreament value by 1)
$a = 10;
$a++; // increament by 1 - become 11
echo $a . "<br>";

$b = 10;
$b--; // decreament by 1 - become 9
echo $b."<br>";

$x = 10;
$y = 15;
$testOut = ++$x * ++$y; // become 11 * 16 = 176

echo $testOut."<br>"; // output 176

// HACK: Exercises
// Ex 1:
$name = "Bob";
$age = 25;
echo "Hello $name, you're $age years old. <br>";

// Ex 2:
$fname = "Jane";
$lname = "Doe";
$age = 30;
echo 'My name is ' .$fname. ' ' .$lname. ' and I\'m ' .$age. ' years old. <br>';

// Ex 3:
$price = 125.0;
$quantity = 50;
$total = $price * $quantity;
echo "The total of your cart is $total <br>";

// NOTE: if else in PHP
// if execute code block when True
// else will be executed when False
// Format:
// if (condition) {
//   code that will be executed;
// }
// if parentheses, then braces
$age = 15;
if ($age >= 18) {
  echo "You're eligable to register. <br>";
} else {
  echo "You're below 18 years old and not eligable to register.<br>";
}

// NOTE: if elseif else
// elseif will be executed when first if return False
$grade = 55;

if ($grade >= 80) {
  echo "You're excellent student.<br>";
} elseif ($grade >= 65) {
  echo "You're good.<br>";
} else {
  echo "Please learn again.<br>";
}

// NOTE: Conditional structure and boolean variable
// variable with the value `TRUE` or `true` or True will always be true
// variable with the value `FALSE` or false or False will always be false
$truth = false;

// conditional based on boolean value
if ($truth) {
  echo "The condition is true <br>";
} else {
  echo "The condition is false <br>";
}

// conditional with ! or inverse
// inverse/kebalikan of true is false
if (!$truth) {
  echo "The condition is true <br>";
} else {
  echo "The condition is false <br>";
}

// NOTE: Nested conditional with if else
$grade = 15;

if ($grade >= 25) {
  echo "You're excellent <br>"; // $grade 25 - unlimited
} else {
  if ($grade >= 20) {
    echo "You're awesome <br>"; // $grade 20 - 24
  } else {
    if ($grade >=15) {
      echo "I think you're good <br>"; // $grade 15 - 19
    } else {
      echo "You can do better than this <br>"; // $grade 1 - 14
    }
  }
}

// NOTE: Multiple condition or combined conditions
// Using logical operator to check multiple conditions
// this reduce nestep conditional
$nilai = 70;

// AND or && operator return TRUE if both condition is TRUE
if ($nilai >= 80 && $nilai < 95) {
  echo "You're awesome <br>";
} elseif ($nilai < 80 && $nilai > 65) {
  echo "You're good <br>";
} elseif ($nilai < 65 && $nilai > 55) {
  echo "You're fine <br>";
} else {
  echo "Please try again <br>";
}

$user = "admin";
$permission = "write";

// OR or || operator return True if one of condition is true
if ($user == "admin" || $permission == "rwx") {
  echo "You've write permission <br>";
} elseif ($user == "other" || $permission == "write") {
  echo "You can write here <br>";
} else {
  echo "You do not belong here <br>";
}

// NOTE: combining Logical operators
$age = 18;
$role = "admin";

// first condition return true
// second condition return false
// final: True OR or || False = True
// change $age lower than 18 and wil return False
if (($age >= 18 && $role == "admin") || $role == "moderator") {
  echo "You've the right for this <br>";
} else {
  echo "You dont have the right. <br>";
}

// NOTE: Switch statement in PHP
// allows you to execute different actions dependening on the value of expression.
//
// switch (expression) {
// case value1:
//   code;
//   break
// default:
//   default value that wil be executed
// }
$prayer = 4;

switch ($prayer) {
  case 4:
    echo "$prayer rekaat untuk sholat Dzuhur, Ashar, dan Isya <br>";
    break;
  case 2:
    echo "Sholat Shubuh <br>";
    break;
  case 3:
    echo "Sholat Maghrib <br>";
  default:
    echo "Sholat sunnah <br>";
}

// NOTE: Match control structure
// Alternative to switch, if else statement
// introduce in PHP 8
// Syntax:
// match (expression) {
//   value => instruction,
//   value2 => instruction2,
//   default => instruction default
// };
$day = "friday";

// assign the match control in variable $message
$message = match ($day) {
  "Monday" => "Today is Monday. <br>",
  "Sunday" => "Today is Sunday. <br>",
  "Wednesday" => "Today is Wednesday",
  default => "Today is no Monday, Sunday, or Wednesday. <br>"
};

echo $message;

// contoh lain Match control
$tujuan = "Magelang";

// assign Match ke variable $kotaTujuan
$kotaTujuan = match ($tujuan) {
  "Surakarta" => "Wah kurang jauh gan <br>",
  "Klaten" => "Maksudnya tidak kota atau desa? <br>",
  "Yogyakarta" => "Mau kerja atau kuliah? <br>",
  "Magelang" => "Alhamdulillah sampai tujuan <br>",
  default => "Mau berangkat jam berapa? <br>"
};

echo $kotaTujuan;

// NOTE: Ternary operator pada PHP
// conditional structure in the single line code
// Syntax:
// $variable = (condition) ? value_if_true : value_if_false;
// If True, the value following ? is assigned to the variable $variable
// If False, the value following : is assigned to the variable $variable
//
$age = 10;
$checkAge = ($age >= 18) ? "Kamu sudah dewasa <br>" : "Kamu masih kecil <br>";
echo $checkAge;

// HACK: Excersises
// Ex 4. check if number is positive, negative, or 0
// jika nomor lebih besar dari 0 maka positif
// jika lebih kecil dari 0 maka negatif
// jika 0 maka 0
// Pakai if elseif
$angka = -10;

if ($angka > 0) {
  echo "Angka adalah Positif <br>";
} elseif ($angka < 0) {
  echo "Angka adalah Negatif <br>";
} else {
  echo "Angka yang anda masukan adalah 0 <br>";
}

// pakai switch case
$angka = -5;

switch ($angka) {
  case $angka > 0:
    echo "Angka adalah Positif <br>";
    break;
  case $angka < 0:
    echo "Angka adalah negatif <br>";
    break;
  case $angka == 0:
    echo "Angka yang anda masukan 0";
  default:
    echo "Masukan angkanya dong";
    break;
}

// Ex 5. Student assasement
// max nilai 100%
// 80% or more = first group
// between 50% to 80% = second group
// 30% to 50% = third group
// below 30% = fail
$nilai = 70;

if ($nilai >= 80 && $nilai <= 100) {
  echo "Congratulations, you're in group A <br>";
} elseif ($nilai < 80 && $nilai >= 50) {
  echo "You're in the group B <br>";
} elseif ($nilai < 50 && $nilai >= 30) {
  echo "You're in group C <br>";
} elseif ($nilai < 30 && $nilai >= 0) {
  echo "You've been failed, try harder <br>";
} else {
  echo "Input the correct number. <br>";
}

// Ex 6. Test whether number is multiple of both 3 and 5
$cekNilai = 525;

if ($cekNilai % 5 == 0 && $cekNilai % 3 == 0) {
  echo "Bilangan $cekNilai bisa dibagi dengan 3 dan 5 <br>";
} else {
  echo "Bilangan $cekNilai tidak bisa di bagi 3 dan 5 <br>";
}

// Ex 7. Display day of the week with number using switch statement
$dayNumber = 7;

switch ($dayNumber) {
  case 1:
    echo "Sekarang hari Senin<br>";
    break;
  case 2:
    echo "Sekarang hari Selasa<br>";
    break;
  case 3:
    echo "Sekarang haru Rabu<br>";
    break;
  case 4:
    echo "Sekarang hari Kamis<br>";
    break;
  case 5:
    echo "Sekarang hari Jumat<br>";
    break;
  case 6:
    echo "Sekarang hari Sabtu <br>";
    break;
  case 7:
    echo "Sekarang hari Minggu/Ahad <br>";
    break;
  default:
    echo "Invalid number via default";
    break;
}

// NOTE: While loop in PHP
// while loop execute codes as long as the condition is True.
// How to create?
// 1. initialize Boolean condition
// 2. evaluate condition, tru or false
// 3. if True, the code block will be executed
// 4. if False, the wjile loop ends
// Tips: define the False or stop condition to avoid infinite loop
// Syntax:
// while (condition) {
//   // block of code
// }
// when $counter is 11 or false, the code will never get executed
$counter = 1;
while ($counter <= 10) {
  echo "The counter is $counter <br>";
  $counter++;
}

// NOTE: do .. while loop
// the code is executed first, and then do the evaluation
// the main difference with the `while loop` is the code will be executed at least once
// put 1 will print 1 to 10
// put 11 or false, the echo will be executed once
$counter = 1;
do {
  echo "do ... while loop: $counter <br>";
  $counter++;
} while ($counter <= 10);

// NOTE: For loop
// loop for specific of a time
// when false, the code will not get executed
// syntax:
// for (initialization; condition; incrementing) {
//  code block
// }
for ($i = 1; $i <= 10; $i++ ) {
  echo "For Loop of i is: $i <br>";
}

// for loop with $i--
for ($i = 20; $i >= 10; $i--) {
  echo "For Loop of i minus is: $i <br>";
}

// for loop and store $i in new variable and operations
for ($i = 1; $i <= 5; $i++) {
  $result = 8 * $i;
  echo "Hasil kali dari 8 dan $i adalah: $result <br>";
}

for ($i = 1; $i <= 6; $i++) {
  echo "<h$i>This is the header of H$i</h$i>";
}

// HACK: When use while and when use do?
// jika tahu jumla pengulangan/iteration-nya berapa kali, gunakan For Loop
// Jika pengulangan tidak tahu / indeterminate, maka gunakan While loop
// While and for code block will not get executed if False
// do ... while loop akan selalu mengexecute code paling tidak 1x, walaupun kondisi False

// NOTE: Exercises
// Ex 8. diplay 10 to 50 with while loop
$angka = 10;

while ($angka <= 50) {
  echo "Nilai angka adalah: $angka <br>";
  $angka++;
}

// Ex 9.Generate hasil dari perkalian 1-20 with for loop
// initialize the $product with value 1
$product = 1;

// loop 1-20
for ($i = 1; $i <= 20; $i++) {
    $product *= $i; // $product = $product * $i
}

echo $product."<br>";

// Ex 10. generate multiplication table for 7 (all numbers 1 to 100)
echo "<ul>"; // Start of unordered list

for ($i = 1; $i <= 100; $i++) {
    $result = 7 * $i;
    echo "<li>7 x " . $i . " = " . $result . "</li>";
}

echo "</ul>"; // End of unordered list

// Ex 11. write sum of 1+3+3**2+3**4 ... + 3**20
$sum = 0;
$power = 0;

for ($i = 1; $i <= 20; $i++) {
  $sum += pow(3, $power);
  $power++;
}

echo $sum."<br>";

// NOTE: Function in PHP
// set of instrction to achive specific task, can take args as an input to customize its behavior. Function cab be used multiple times, even with the separate file.
// Syntax:
// function function_name(args1, args2) {
//   // code block instruction
// }
// NOTE: Function with no arguments
// create printHello function without argument
function printHello() {
  $message = "Hello Function PHP";
  echo $message."<br>";
}

// call printHello function
printHello();

// NOTE: function dengan argument
// function kelPersegi dengan arg $sisi
function kelPersegi($sisi) {
  $hasil = 4 * $sisi;
  echo "Keliling persegi dengan sisi: $sisi adalah $hasil<br>";
}

// panggil kelPersegi dengan value 7
kelPersegi(7);

// NOTE: Returning values from function with return
function hitung_bulat($diameter, $jari) {
  // M_PI adalah konstanta pi pada PHP
  $luas = M_PI * $diameter ** 2 * $jari;
  return "Luast lingkarang adalah: $luas <br>";
}

echo hitung_bulat(3, 10);

// NOTE: Function with the default parameter
// "my friend" will be shown when no argument
// "my friend" will be replaced when argument used
function greetings($name = "my friend <br>") {
  return "Hello $name";
}

// output "Hello Hakase"
echo greetings("Hakase <br>");
// output "Hello my friend"
echo greetings();

// NOTE: Function with parameter by reference
// can be used to modify the value of a variable passed as an arg to the function

// HACK: function with parameter value by default
function pangkatDua($number) {
  $number **= 2;
  return $number;
}

// x as 10
$x = 10;

// call pangkatDua with $x as parameter
pangkatDua($x);
echo "Function with the parameter value (default): $x<br>"; // $x still 10


// HACK: function with parameter reference using & within the parameter
function pangkatTiga(&$number) {
  $number **= 3;
  return $number;
}

// y as 15
$y = 15;
// call pangkatTiga with $y
pangkatTiga($y);
echo "Function with the parameter reference (via&): $y <br>"; // output 3375 = 15 * 15 * 15

// NOTE: Function with the named parameter
// You can create variable with the value of function call
function tambah($num1, $num2) {
  $total = $num1 + $num2;
  return $total."<br>";
}

// assign tambah() function as $totalBanana
$totalBanana = tambah(20, 30);
echo $totalBanana;

// Example of function with named parameter
function detailUser($fname, $lname, $age, $status) {
  return "First Name: $fname, Last Name: $lname, Age: $age, Status: $status <br>";
}

// harus presisi dengan parameter yang ada
$getInfo = detailUser("Ahmad", "Zain", 30, "Active");
echo $getInfo;

// jika acak, maka data yg ditampilan juga acak
// output acak dan tidak rapi
$getInfo2 = detailUser(30, "Zain", "Ahmad", "Active");
echo $getInfo2;

// bisa acak menggunakan menggunaka nama_parameter:value
// output rapi walau input acak
$getInfo3 = detailUser(age:30, lname:"Zain", status:"Active", fname:"Ahmad");
echo $getInfo3;

// NOTE: Typing in PHP:
// weak typing: default and PHP will automatically detect your data type
// strict typing: you must specify the data type for parameter or return type
//
// example of weak typing or default
// PHP automatically detect the data type
function pangkat($number, $akar) {
  $hasil = $number ** $akar;
  return $hasil;
}

echo pangkat(10, 7).'<br>';

// example strict typing with `declare(strict_types=1)`
// HACK: check strict.php

// NOTE: Scope of Variables in PHP
//
// HACK: 1. Global Variable = variable outisde of function is Global Variable and can be accessed from anywhere
// - The scope for global variable is the entire PHP script
// - To access global variable within function, use the `global` keyword

// define variable
$globalVar = "This is from the outside of function <br>";

function show_global_var() {
  // call global variable within function body
  // using global keyword
  global $globalVar;
  echo $globalVar;
}

// execute show_global_var() function
show_global_var();

// HACK: 2. Local Scope
// means that variable only live within function and canot be call outside and destroyed as soon as the function ends
// - Local variable can have the same name as global variable, but do not have the scope as global (just the same name)
function greet() {
  // local scope variable $hello
  $hello = "Hello PHP from function <br>";
  echo $hello;
}

// call the function
echo greet();

// call variable $hello outside function
// throw error undefined variable
//echo $hello;

// HACK: 3. Static range
// is a variable inside function that can be called outside upon successive call
// - Static variable is not destroyed at the function ends and retained between successive call
// - Declared with the `static` keyword
// - Allows you to store information between function call without using global variable
// WITHOUT static range
function counter() {
  // each call will increment the counter
  $counter = 0;
  $counter++;
  echo "Angka ke: $counter <br>";
}

// each execute will print 1
// each execute will start from 0
echo counter();
echo counter();
echo counter();
echo "<br>";

// WITH static range
function newCounter() {
  // each call will increment the counter
  // adding static keyword
  static $counter = 0;
  $counter++;
  echo "Angka ke: $counter <br>";
}

// each execute will increament and print 1, 2, 3
// the code will be executed continusly upon success
echo newCounter();
echo newCounter();
echo newCounter();

// NOTE: Generators in PHP
// Generator is a special function that return an iterator/loop object.
// Instead of using `return`, generator using `yield` keyword
// You can access generated object via foreach
//
// create function generate_even_number()
// generating even number based on $max
function generate_even_number($max) {
  for ($i = 0; $i <= $max; $i += 2) {
    // generator yield
    yield $i;
  }
}

// generate object with the generate_even_number() function
// check generated type: output object
echo gettype(generate_even_number(80));

// generate even number with the generate_even_number() function
// call the object using foreach
foreach (generate_even_number(30) as $num) {
  echo $num.'<br>';
}

// NOTE: Generator Delegation
// - Allows one generator to call other generator to obtain values
// - With this, you can reuse existing generators in a new generators
// - use the `yield from generator`

// generator1
function generator_even_number($max) {
  for ($i = 0; $i <= $max; $i += 2) {
    yield $i;
  }
}

// generator2
function generator_odd_number($max) {
  for ($i = 1; $i <= $max; $i +=2) {
    yield $i;
  }
}

// call generator1
echo "Below some even numbers: <br>";
foreach (generator_even_number(20) as $even) {
  echo $even."<br>";
}

// call generator2
echo "Below some odd nunmbers: <br>";
foreach (generator_odd_number(20) as $odd) {
  echo $odd."<br>";
}

// generator3
// Generator delegation
function generator_odd_even($evenmax, $oddmax) {
  // Take value from generator_even_number function
  // and generator_odd_number function
  // delegate generator via `yield from`
  yield from generator_even_number($evenmax);
  yield from generator_odd_number($oddmax);
}

// ensure that object is created
echo gettype(generator_odd_even(30, 15)) . "<br>";

// using foreach to show sequence odd and even numbers
// via generator_odd_even()
foreach (generator_odd_even(40, 20) as $num) {
  echo $num . " <br>";
}

// HACK: Exercises
//
// Ex 12. test if number is multiple of 3 and display message accordingly
function bagiTiga($num) {
  if ($num % 3 == 0) {
    return "$num adalah multiply 3 <br>";
  } else {
    return "$num bukan multiply 3 <br>";
  }
}

echo bagiTiga(1827);

// Ex 13. create function with three args and return the largest
function check_largest($num1, $num2, $num3) {
  if ($num1 > $num2 && $num1 > $num3) {
    echo "$num1 is the largest number <br>";
  } elseif ($num2 > $num1 && $num2 > $num3) {
    echo "$num2 is the largets number <br>";
  } else {
    echo "$num3 is the largest number <br>";
  }
}

echo check_largest(100, 5, 10);

// Ex 14. display the random number needed to
// find two a digit of integer given as parameter
function find_number($number) {
    $Number_of_prints = 0; // Initialize a counter for the number of random numbers generated.
    $Random_number = -1; // Initialize the random number to a value different from the target.

    while ($Random_number != $number) { // Loop until the random number matches the target number.
        $Random_number = random_int(0, 100); // Generate a random integer between 0 and 100 (inclusive).
        $Number_of_prints++; // Increment the counter for each random number generated.
        echo $Random_number . "<br>"; // Output the generated random number to the browser, followed by a line break.
    }

    echo "The number " . $number . " is found after " . $Number_of_prints . " trials <br>"; // Output the final message indicating the target number and the number of trials it took to find it.
}

// Call the function with the target number 43.
find_number(43);

// HACK: PHP Built-in Functions
// random_int() - generating random integer and cryptography
// array() - creating array via function
// count() - counting total object in an array
// unset() - function to delete an object from array
// print_r() - function to print arrays
// array_reverse() - reversing an array
// sort() - srting indexed array in alphabetical

// NOTE: Array
// data structure that allows you to store several values in a single variables
// values in array can be varius data types such as int, string, bool, etc.
//
// NOTE: Macam-macam Array
// 1. Indexed Array or numbered array
// Each element within the array associated with a numerical index
//
// HACK: Create an array
// a. with square brackets []
// b. array() function
// Empty array - no data
$empty_array = [];

// Array with data
$numbers = [10, 11, 20, 30, 40, 50];

// create array with array() function
$names = array("Alice", "Bob", "Joko", "Sarah", "Abdul", "Khonsa");

// HACK: Access an array
// a. using index
echo $numbers[0]."<br>";
echo $names[2]."<br>";

// HACK: Add element to array
$numbers[] = 100; // default add to akhir array
$names[2] = "Ahmad"; // add array t index 2

echo $numbers[6]."<br>";
echo $names[2]."<br>";

// HACK: Edit and delete element in Array
$numbers[1] = 75; // replace array index 1 with value 75
unset($names[3]); // delete array index 3 from $names

echo $numbers[1]."<br>";

// HACK: Browse an indexed array
// a. using for Loop

//$angka = [10, 20, 30, 40, 50, 60];
//$length = count($angka);

//for ($i = 0; $i < $length; $i++) {
//  echo numbers[$i]."<br>";
//}

// b. using foreach Loop
$numArray = [10, 20, 30, 40, 50, 60, 70];
foreach ($numArray as $number) {
  echo $number."<br>";
}

// 2. Associative arrays
// key-value arrays - key => value
// HACK: Create associative arrays
// create empty array
$empty_associative_array = [];

// create associative array $person with [] square brackets
$person = [
  "fname" => "Ahmad",
  "lname" => "Zain",
  "age" => 20,
  "country" => "Magelang"
];

// create associative array with array() function
$grade = array(
  "Math" => 9.0,
  "Biology" => 7.0,
  "Computer Science" => 9.5
);

// HACK: Access element in associative array
echo "My name is " .$person["fname"]. " age " .$person["age"]. " and I came from " .$person["country"]. "<br>";
echo $grade["Math"]."<br>";

// HACK: Add element to associative array
$person["email"] = "ahmad@email.com";
$grade["Physics"] = 7.5;

echo $person["email"]."<br>";
echo $grade["Physics"]."<br>";

// HACK: print_r() function to print array elements
echo "<pre>";
print_r($person);
print_r($grade);
echo "</pre> <br>";

// HACK: Modify element Associative array
$person["email"] = "ahmad_new@gmail.com";
$grade["Math"] = 8.5;

echo $person["email"]."<br>";
echo $grade["Math"]."<br>";

// HACK: Delete element in associative array
unset($person["age"]);
unset($grade["Biology"]);

echo "<pre>";
print_r($person);
print_r($grade);
echo "</pre> <br>";

// HACK: Browse associative array
foreach ($person as $key => $val) {
  echo "Key: $key, Value: $val <br>";
}

echo "<br>";

foreach ($grade as $key => $val) {
  echo "Key: $key, Value: $val <br>";
}

// 3. Multidimensional array
// A complex data structure where each element can be an array itself.
// Simple array store data in linear fashion, where multidimensional array stores data in tabular.
// HACK: Create multidimensional array
// using array() function
$info_provinsi = array(
  array("Jawa Tengah", "Semarang", 70),
  array("Jawa Barat", "Jakarta", 80),
  array("Jawa Timur", "Surabaya", 90),
  array("DIY", "DIY", 100)
);

// using squre brackets
$info_kota = [
  ["Jawa Tengah", "Semarang", 70],
  ["Jawa Barat", "Jakarta", 80],
  ["Jawa Timur", "Surabaya", 90],
  ["DIY", "DIY", 100]
];

echo "<pre>";
print_r($info_provinsi);
echo "</pre>";

// HACK: Access multidimensional array
// select index 0 = jawa tengah, kemudian didalamnya select index 1 = semarang
$ibukota_jateng = $info_provinsi[0][1];
// select index 0 = jawa tengah, kemudian didalamnya select index 2 = 70
$total_penduduk = $info_provinsi[0][2];

echo "Ibukota Jawa Tengah adalah " . $ibukota_jateng . " dan jumlah penduduknya adalah " . $total_penduduk . " juta jiwa <br>";

// 4. Two Dimensional Associative Array
// Instead of using index, we can use key => value in Two-dimensional associative array.
//
// HACK: Create two-dimensional associative array
// using array() function
$info_provinsi_two = array(
  array("Provinsi" => "Jawa Tengah", "Ibukota" => "Semarang", "Penduduk" => 70),
  array("Provinsi" => "Jawa Barat", "Ibukota" => "Jakarta", "Penduduk" => 80),
  array("Provinsi" => "Jawa Timur", "Ibukota" => "Surabaya", "Penduduk" => 90),
  array("Provinsi" => "DIY", "Ibukota" => "DIY", "Penduduk" => 100)
);

// using [] square brackets
$info_provinsi_twov2 = array(
  ["Provinsi" => "Jawa Tengah", "Ibukota" => "Semarang", "Penduduk" => 70],
  ["Provinsi" => "Jawa Barat", "Ibukota" => "Jakarta", "Penduduk" => 80],
  ["Provinsi" => "Jawa Timur", "Ibukota" => "Surabaya", "Penduduk" => 90],
  ["Provinsi" => "DIY", "Ibukota" => "DIY", "Penduduk" => 100]
);

// HACK: Access two-diemsional associative array
// select array index 3 DIY, then select index "Ibukota" from 3
$ibukota_diy = $info_provinsi_two[3]["Ibukota"];
$penduduk_diy = $info_provinsi_two[3]["Penduduk"];
echo "Ibukota DIY adalah " .$ibukota_diy. " dan jumlah penduduknya adalah " .$penduduk_diy. " juta jiwa <br>";

// HACK: Access two-dimensial associative array with 2 foreach
// extract first array as $provinsi
// extract each of second array from $provisi as $key => $val
foreach ($info_provinsi_twov2 as $provinsi) {
  foreach ($provinsi as $key => $val) {
    echo "$key: $val <br>";
  }
  echo "<br>";
}

// HACK: Exercises
// Ex 15. write array of names and display as bullet list
$students = array("Ahmad", "Joko", "Pras", "Andi", "Zein", "Melo");

foreach ($students as $student) {
  echo "<li>$student</li>";
}

// Ex 16. write array of three colors and display in reverse
$colors = ["Black", "Yellow", "Red", "Green", "Blue"];
// array_reverse() function reverse an array
$colors_rev = array_reverse($colors);

foreach ($colors_rev as $color) {
  echo "$color <br>";
}

// Ex 17. array of names and display in alphabetical order
$users = ["Zain", "Zainab", "Hans", "Steve", "Gary", "Lary", "Adam"];
sort($users);
print_r($users);
echo "<br>";

// Ex 18. Write associative array of fruits and price, then display with foreach
$fruits = array(
  "Mango" => 7.7,
  "Apple" => 5.6,
  "Banana" => 3,
  "Kiwi" => 10,
  "Telo" => 3
);

foreach ($fruits as $fruit => $price) {
  echo "Buah " . $fruit . " Harganya: " . $price ."<br>";
}

// Ex 19. Write multidimensional arrays with each name as key and values contain first name, city, age
// name => array("lname", "city", "age"),
$myArr = array(
  "Ahmad" => array("Zain", "Solo", 25),
  "Abdul" => array("Aziz", "Jakarta", 30),
  "Muhammad" => array("Nurdin", "Semarang", 40)
);

foreach ($myArr as $key => $val) {
  echo "<li>My name is " . $key . " " . $val[0] . ". I'm from " . $val[1] . " and " . $val[2] . " years old</li>";
}

// BUG: Mine
$person = array(
  array("Name" => "Ahmad", "City" => "Magelang", "Age" => 20),
  array("Name" => "Zain", "City" => "DIY", "Age" => 25),
  array("Name" => "Rian", "City" => "Solo", "Age" => 30)
);

echo "My name is " . $person[0]["Name"] . ", I'am from " .$person[0]["City"]. ", I'am " . $person[0]["Age"] ." years old <br>";
echo "My name is " . $person[1]["Name"] . ", I'am from " .$person[1]["City"]. " I'am " . $person[1]["Age"]." years old<br>";
echo "My name is " . $person[2]["Name"] . ", I'am from " .$person[2]["City"]. " I'am " . $person[2]["Age"]." years old<br>";

foreach ($person as $guy) {
  foreach ($guy as $key => $val) {
    echo  "$key $val <br>";

  }
  echo "<br>";
}

// Ex. 20 - Write function that take array of numbers as parameter and return the sum of all numbers in array
function sumNum($arr) {
  $sum = 0;
  foreach ($arr as $num) {
    $sum += $num;
  }
  return $sum ."<br>";
}

$myArr = [10, 20, 30, 40, 100, 200, 500];
$sumArr = sumNum($myArr);
echo "Hasil penjumlahan seluruh nomor di array: ". $sumArr;

// Ex. 21 - Write function that take array of number as an argument and sum ONLY even numbers
function sumEvenNumber($arr) {
  $sum = 0;
  foreach ($arr as $num) {
    if ($num % 2 == 0) {
      $sum += $num;
    }
  }
  return $sum ."<br>";
}

$testArr = [2, 4, 5, 6, 8, 10, 11, 13, 14, 15, 16];
$testSum = sumEvenNumber($testArr);
echo "Hasil penjumlahan dari even number di array: " .$testSum;

// Ex 22 - Write function take an array numbers as parameter and return the average of all even numbers in the array.
// rumus => tambah semua nomor di array "di bagi" jumlah elements
function averaging($arr) {
  $sum = 0;
  $counter = 0;
  foreach ($arr as $num) {
    $sum += $num;
    $counter++;
  }
  return $sum / $counter;
}

$aveArr = [10, 20, 30, 40, 200, 344, 90, 76];
$calcAve = averaging($aveArr);
echo "The average number from my array is: " . $calcAve . "<br>";

// Ex 23. write function with parameter from an array and find the max number
// gunkana fungsi max($array)
function findMax($arr) {
  $cariMax = max($arr);
  return $cariMax;
}

$maxArr = [10, 12, 15, 60, 100];
$testMax = findMax($maxArr);
echo "Nilai terbesar dari array adalah: " .$testMax."<br>";

// BUILT-IN FUNCTIONS IN PHP YOU MUST KNOW
// HACK: 1. Math functions
// a. Basic:
//  - abs() return absolute number => abs(-10) -> 10
//  - sqrt() return the square root of a number => sqrt(25) -> 5
//  - pow() return power of a number (exponential) => pow(2, 3) -> 8
//  - round() return a number nearest of decimal place => round(5.7) -> 6
// b. Trigonometric functions
//  - sin() cos() tan() asin() acos() atan()
// c. Random functions
//    rand() function for generating random numbers ex: rand($min, $max)
//    rand(1, 100) -> generate random number between 1 to 100
//
// HACK: 2. String functions
// - strlen() return length of a character string => strlen("string/variable");
//    $text = "Hello";
//    $length = strlen($text);
//    echo $length; -> return 5
// - strpos() return the position of first occurence of substring or character in a string => strpos("text/var", "target");
//    $text = "Good morning";
//    position = strpos($text, "mor") -> return 5 (remember index is 0 in PHP)
// - substr() return a substring of a string of given index => substr("string/var", start, length of target)
//    $text = "Hello Everyone";
//    $substring = substr($text, 3, 10); // -> return lo everyon -> index 3 to 10 after
//    echo $substring;
// - strtoupper() and strtolower() convert string to UPPERCASE or lowercase
// - str_replace() replace all occurences of a substring with new substring => str_replace("target", "newstring", "var")
//    $text = "Hello everyone";
//    $new_text = str_replace("Hello", "Bye", $text) -> return "Bye everyone"
//
// HACK: 3. Functions for Tables or Arrays
// - count() count the number element in an array => count($array);
// - sort() sort array in ASCENDING order => sort($array);
// - dsort() sort array in DESCENDING order => dsort($array);
// - array_push() add item or more to an array to the end => array_push($array, "newitem", "newitem2");
// - array_unshift() add item or more to an array to the beginning of array => array_unshift($array, "newitem", "newitem");
// - array_pop() delete the last element from array => array_pop($array);
// - array_shift() delete the first element from an array => array_shift($array);
// - array_slice() extract part of an array => array_slice($array, number to start, number after after start);
// - array_merge() merge one or more arrays => array_merge($array1, $array2);
// - array_key_exists() check whether KEY exists in an array => array_key_exists("KEY", $array);
// - in_array() check whether VALUE exists in an array => in_array("VALUE", $array)
// - array_search() search of given VALUE in an array and return the corresponding KEY
// - array_replace() replace the elements of an array with one or more other arrays

$fruits = ["Banana", "Apple", "Mango", "Sirsak", "Kiwi"];
sort($fruits);

// sort an array ASCENDING
echo "<pre>";
print_r($fruits);
echo "</pre>";

// sort an array DESCENDING
rsort($fruits);
print_r($fruits);
echo "<br>";

// array_push()
// add "Telo" and "Gandul" to the end of array
array_push($fruits, "Telo", "Gandul");
print_r($fruits);
echo "<br>";

// array_unshift()
// add "Bit" and "Salat" to the beginning of $fruits
array_unshift($fruits, "Bit", "Salak");
print_r($fruits);
echo "<br>";

// array_pop()
// delete the last element from an array
$last_element = array_pop($fruits);
echo "The last element of array that will be removed is " . $last_element . "<br>";
print_r($fruits);
echo "<br>";

// array_shift()
// delete first element from an array
$first_element = array_shift($fruits);
echo "The first element of array that you will remove is " . $first_element . "<br>";
print_r($fruits);
echo "<br>";

// array_slice()
// extract element from an array and return array too, so print_r is used
$names = ["Joko", "Ardi", "Ahmad", "Zaid", "Wahyu", "Sabar", "Abrur"];
// slice at 3 and include 4 elements after the start elemen
// output = Array ( [0] => Zaid [1] => Wahyu [2] => Sabar [3] => Abrur )
$names_slice = array_slice($names, 3, 4);
print_r($names_slice);
echo "<br>";

// array_merge()
// mrege two or more arrays in one
// merge array $names and $names1 to $names_merged
$names1 = ["Zahra", "Nurul", "Mutmainah", "Alice"];
$names_merged = array_merge($names, $names1);

echo "<pre>";
print_r($names_merged);
echo "</pre>";

// array_key_exist()
// return true or 1 if the KEY is available, and false or 0 if the key is not available
$person = [
  "fname" => "Abdul",
  "lname" => "Aziz",
  "Asal" => "Solo",
  "Pekerjaan" => "Nganggur"
];

// conditional if "fname" is available or not
// output => true
if (array_key_exists("fname", $person) == true) {
  echo "The 'fname' key is available <br>";
} else {
  echo "Not Available <br>";
}

// is_array()
// return true or 1 if VALUE is available, and false or 0 if the VALUE is not available
if (in_array("Aziz", $person) == true) {
  echo "The value 'Aziz' is available in the array<br>";
} else {
  echo "Not Available <br>";
}

// array_replace()
$colors = [
  "a" => "Blue",
  "b" => "Green",
  "c" => "Black",
  "d" => "White"
];

$colors2 = [
  "a" => "Cyan",
  "b" => "Magenta",
  "c" => "Mint"
];

$new_colors = array_replace($colors, $colors2);
echo "<pre>";

echo "This is original colors array <br>";
print_r($colors);

echo "This is the colors2 array <br>";
print_r($colors2);

echo "This is replaced new_colors array <br>";
print_r($new_colors);
echo "</pre> <br>";

// HACK: 4. Function for Dates and Times
// - date() return STRING representing current date and time or the date specified the timestamp
// - getdate() return ASSOCIATIVE ARRAY string containing current date
//    "seconds": Current seconds (from 0 to 59)
//    "minutes": Current minutes (from 0 to 59)
//    "hours": The current time in 24-hour format (from 0 to 23).
//    "mday": Day of the current month (from 1 to 31)
//    "wday": Current day of the week (from 0 for Sunday to 6 for Saturday)
//    "my": The current month (from 1 to 12)
//    "year": Current year (in full format, e.g. 2024)
//    "yday": Current day of the year (from 0 to 365)
//    "weekday": The full name of the current day of the week (e.g. "Monday").
//    "month": The full name of the current month (e.g. "February")
//    "0": A Unix timestamp representing the current date
//  - strtotime() used to parse textual date to the Unix timestamp value, which is the number of seconds elapsed since 1 January 1970 at 00:00:00 UTC
//
$current_date = date("d-m-Y H:i:s");
echo $current_date . "<br>";

$currentDate = date("d/m/Y");
echo $currentDate . "<br>";

$curdate = getdate();
echo "<pre>";
print_r($curdate); // getdate() return associative array - use print_r() function
echo "</pre>";

$date_time = "2025-03-01";
$unix_time = strtotime($date_time);
echo "The timestamp for " . $date_time ." is: " . $unix_time . "<br>";

$start_time = "1992-09-11";
$current_time = date("Y-m-d");

$calc_time = strtotime($current_time) - strtotime($start_time);
echo "I've live for " . $calc_time ."<br>";
