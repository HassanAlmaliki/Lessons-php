 <?php
  // --------------------functions Array-------------
  //---- 1- Function Array push

  $web_dev = array("Html", "Css");
array_push($web_dev, "Javascript", "php");

print_r($web_dev);

echo "<br>";
//---- 2- Function Array pop

$web_dev = array("Html", "Css", "Javascript");
$remov = array_pop($web_dev); //remove  javascript

echo $remov;  // print the item that remove
echo "<br>";
print_r($web_dev);

echo "<br>";
//------------------------Strings----------

$text = "Hello, web devloper";
$length = strlen($text); // 1- this function to git the length of the text
echo $length; // output 19

echo "<br>";

//---------------------

$text = "Hello, web advance";
$position = strpos($text, "advance"); // 2- this function is  used to find the position of the first occurrence of a substring within a string
echo $position; // output 11

echo "<br>";
//----------------------

$text = "Hello, Hasan";
$substring = substr($text, 7, 5); // 3- this function is used to cut part of string
echo $substring; //output :Hasan

echo "<br>";

//-------------------
$text = "Hello, web devloper";
$upper = strtoupper($text);// 4- this function is used to conversion the letter to upper
echo $upper; // output : HELLO, WEB DEVLOPER

echo "<br>";
//-----------------

$text = "Hello, Web";
$lower = strtolower($text); // 5- this function is used to conversion the letter to lower
echo $lower; // output : hello, web!

echo "<br>";

//----------------

$text = "Hello, Javascript";
$newText = str_replace("Javascript", "PHP", $text);// 6- this function is used to replace text
echo $newText; // output : Hello, PHP!

echo "<br>";
//----------
$text = "Hasan ";
$repeated = str_repeat($text, 3);// 7- this used to repeat the text
echo $repeated; // output : Hasan Hasan Hasan

echo "<br>";

//------------------

$text = "Html,Css,Js";
$array = explode(",", $text); // 8- this used to partition the String to Array
print_r($array);
/*
output
Array
(
    [0] => Html
    [1] => Css
    [2] => Js
)
*/
echo "<br>";

//-------------------
$text = "   Hello Hasan,         ";
$trimmed = trim($text); // 9- used to remove the space 
echo $trimmed; 

echo "<br>";

//-------------------

$text = "Hasan";
$padded = str_pad($text, 10, "*"); // 10- used to padded the string by length
echo $padded; // output: Hasan*****

echo "<br>";

////----------------
$text = "Hasan, Almaliki ";
$contains = str_contains($text, "Almaliki"); //11- It is used to check if the string contains a specific substring
var_dump($contains); // output: bool(true)

