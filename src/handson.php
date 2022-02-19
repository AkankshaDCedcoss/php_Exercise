<?php
echo
 "Hello World";//Insert the missing part of the code

echo "This is PHP";//opening tag and close tag 


//This is a single-line comment //Single-line comments in PHP 

/*
 This is a
multi-line
comment
*/            //Insert the correct characters to write a multi-line comment.

echo "Hello World"; //Statements in PHP have to end with a special character

$txt= "Hello"; //Create a variable

$x= 5;
$y= 7;
echo $x + $y; //echo statement to output the sum of x and y.
echo strlen("Hello World!"); //Get the length of the string "Hello World!".
echo strrev("Hello World!"); //Reverse the string
$oldtxt = "Hello World!";
$newtxt = str_replace("World", "Dolly",$oldtxt); //Replace the word
echo 10*5; //Multiply 10 with 5, and output the result
echo 10 / 2;  //Divide 10 by 2, and output the result
var_dump($a == $b); //comparison operator to check if $a is equal to $b
var_dump($a != $b); //comparison operator to check if $a is NOT equal to $b
$a = 50;
$b = 10;
if($a > $b)
{  
    echo "Hello World"; //Output "Hello World" if $a is greater than $b
}
$a = 50;
$b = 10;
if($a!=$b)
 {
  echo "Hello World"; //Output "Hello World" if $a is NOT equal to $b
}
$a = 50;
$b = 10;
if
 ($a == $b) {
  echo "Yes";
} 
else
 {
  echo "No"; //Output "Yes" if $a is equal to $b, otherwise output "No"
}
$a = 50;
$b = 10;
if
 ($a == $b) {
  echo "1";
} 
elseif
 ($a > $b) {
  echo "2";
} 
else
 {
  echo "3"; //Output "1" if $a is equal to $b, print "2" if $a is greater than $b, otherwise output "3"
}

switch($color)
{
  
 case "red":
    echo "Hello";
    break;
  
case  "green":
    echo "Welcome"; //Create a switch statement
    break;
}
switch ($color) {
    case "red":
      echo "Hello";
      break;
    case "green":
      echo "Welcome";
      break;
    default:
   echo "Neither"; //Add a section that will output "Neither"
  }
  $i = 1; 

while($i < 6) 
{
  echo $i;
  $i++; //Output $i as long as $i is less than 6
}
$i = 1; 

do
 {
    echo $i;
    $i++;
} 
while($i < 6); //Output $i as long as $i is less than 6 do while

for($i = 0; $i < 10; $i++)
 {
  echo $i; //Create a loop that runs from 0 to 9
}
$colors = array("red", "green", "blue", "yellow"); 

foreach($colors as $x) 
{
  echo $x; //Loop through the items in the $colors array.
}

function myfunction()
 {
  echo "Hello World!"; //Create a function named myFunction
}

myFunction(); //Call (execute) a function named myFunction
function myFunction($fname, $lname) {
        echo  $fname; //print the first parameter.
    }
function myFunction($fname, $lname) {
        return $lname; //Let the function return the second value.
    }
$fruits = array("Apple", "Banana", "Orange");
          echo count($fruits); //correct function to output the number of items in an array.
$fruits = array("Apple", "Banana", "Orange");
          echo $fruits[1]; //Output the second item in the $fruits array
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); //Create an associative array
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "Ben is " . $age['Ben'] . " years old."; //Here you see an associative array

foreach($age as $x => $y) {
echo "Key=" . $x . ", Value=" . $y;} //Loop through an associative array
$colors = array("red", "green", "blue", "yellow"); 
sort($colors); //sort the $colors array alphabetically
$colors = array("red", "green", "blue", "yellow"); 
rsort($colors); //sort the $colors array descending alphabetically
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
asort($age); // sort the $age array according to the values
?>

<html>
<body>

Welcome <?php echo $_GET["fname"]; ?>

</body>
</html>  gets submitted, how can you, in welcome.php
<form action="welcome.php" method="post">
First name: <input type="text" name="fname">
</form>


<html>
<body>

Welcome <?php echo $_POST["fname"]; ?>
</body>
</html> //using post method
echo date("l"); //date function to output the weekday of today 
echo date("Y.m.d"); //correct format parameter to output a date
echo date("H:i:s"); //utput the time like this: 14:13:25
<?php include 'footer.php';?> //correct syntax to include a file named "footer.php".
<?php echo readfile("webdict.txt"); // correct syntax to open and read the file content
$myfile = fopen("webdict.txt", "r");

while(!feof($myfile)) {
echo fgetc($myfile); //Open a file, and write the correct syntax 
}

setcookie("username", "John", time() + (86400 * 30), "/"); //Create a cookie named "username".







?>







