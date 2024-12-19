<?php                        //----------Lab1-----------

$num =10; //Integer number
if ($num >0){ // if condition , if the number 10 is greater than 0
    echo " the $num is postiv number"; // if the condition is true print postiv number

}elseif($num <0){   // elseif condition the number is less than 0
    echo "the $num is negitive number"; // if the condition is true print negitive  number
}else {   // else the condition is not greater than 0 or  not less than 0 
    echo "the number is 0"; // print the number is 0 or equal 0
}

echo "<br>"; 

//---------------------- for Loop--------------------------------
for ($i = 1; $i <=5; $i++){  // external loop
    echo " Multiplication table $i:<br>";
     for ($j = 1; $j <=10; $j++){ // inland loop
        $result = $i * $j; // calculate output
         echo " $i * $j = $result<br>"; // print the result

     }
      echo "<br>"; // make space btween the tables
}


//--------------------this code to know path information about project's files  ---------------

// echo "</pre>";
// print_r(pathinfo(__FILE__));
// echo "</pre>";