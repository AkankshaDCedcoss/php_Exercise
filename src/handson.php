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
?>