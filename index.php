<?php
// You embed PHP code by surrounding it with <?php and
// the closing tag
// Put PHP code you want to run before the HTML before it
// You can also embed PHP code within the HTML with
// the same tags

/*
Variables begin with a $, start with a letter and
can contain letters, numbers or underscores
A variables data type is defined by the value
assigned and the data type can change
*/

// Here are the different data types
$f_name = "Chris"; // String
$l_name = 'Pfaff'; // You can use single quotes
$age = 35; // Integer
$height = 1.92; // Float
$can_vote = true; // Boolean
// Array
$address = array('street'=> 'Battlebend Blvd', 'city'=> 'Austin');
// I'll cover objects later

// NULL signifies that something doesn't have a value
$state = NULL;

// You can define constants
define('PI', 3.1415);

 ?>

<!-- Tells the browser to render using HTML5 spec -->
<!DOCTYPE HTML>
<!-- Define we are using English -->
<html lang="en">
  <!-- Contains data for defining the doc -->
  <head>
    <!-- Defines the character set -->
    <meta charset="UTF-8">
    <title>PHP Tutorial</title>
  </head>
  <body>
    <!-- Display inline using PHP tags and echo. Combine strings with . -->
    <p>Name : <?php echo $f_name . ' ' . $l_name; ?></p>

    <!-- You can pass data to a PHP script using forms
    Get passes the values through the URL in an array
    Get should be used when you are reading data from the
    server. Using Get allows the user to bookmark the page
    Use Post when you resend data to the server
    because if the user tries to send the same data to the
    server multiple times they will be warned
    -->
    <form action="Php_help.php" method="get">
      <label>Your State : </label>
      <input type="text" name="state"/><br>
      <label>Number 1 : </label>
      <input type="text" name="num-1"/><br>
      <label>Number 2 : </label>
      <input type="text" name="num-2"/><br>
      <input type="submit" value="Submit"/>
    </form>
    <?php
    # Check if anything was passed to the web page and if the state key exists
    # I'll show a better way to validate user input later, but I want to cover
    # these functions as well
      if(isset($_GET) && array_key_exists('state', $_GET)){
        # Assign the value passed
        $state = $_GET['state'];
        # Verify that the value isn't NULL and isn't empty
        if (isset($state) && !empty($state)){
          echo 'You live in ' . $state . '<br>';
          # Use double quotes to insert a variable in a string
          echo "$f_name lives in $state<br>";
        }
        # Check how many values are in array with count
        # If executes statements between {} if the condition is true
        if(count($_GET) >= 3){
          # Math operators
          $num_1 = $_GET['num-1'];
          $num_2 = $_GET['num-2'];
          echo "$num_1 + $num_2 = " . ($num_1 + $num_2) . "<br>";
          echo "$num_1 - $num_2 = " . ($num_1 - $num_2) . "<br>";
          echo "$num_1 * $num_2 = " . ($num_1 * $num_2) . "<br>";
          echo "$num_1 / $num_2 = " . ($num_1 / $num_2) . "<br>";
          echo "$num_1 % $num_2 = " . ($num_1 % $num_2) . "<br>";

          # Integer Division
          echo "$num_1 / $num_2 = " . (intdiv($num_1, $num_2)) . "<br>";

          # Shortcut ways of incrementing and decrementing
          echo "Increment $num_1 = " . ($num_1++) . "<br>";
          echo "Decrement $num_1 = " . ($num_1--) . "<br>";

          # The following use the format of turning i = i + 1 into
          # i += 1
          $num_1 += 1;
          $num_1 -= 1;
          $num_1 *= 1;
          $num_1 /= 1;
          $num_1 %= 1;

          # Built in math functions
          echo "abs(-5) = " . abs(-5) . "<br>";
          echo "ceil(4.45) = " . ceil(4.45) . "<br>";
          echo "floor(4.45) = " . floor(4.45) . "<br>";
          echo "round(4.45) = " . round(4.45) . "<br>";
          echo "max(4,5) = " . max(4,5) . "<br>";
          echo "min(4,5) = " . min(4,5) . "<br>";
          echo "pow(4,2) = " . pow(4,2) . "<br>"; # 4 raised to the power of 2
          echo "sqrt(16) = " . sqrt(16) . "<br>"; # Square Root
          echo "exp(1) = " . exp(1) . "<br>"; # Exponent of e
          echo "log(e) = " . log(exp(1)) . "<br>"; # Logarithm
          echo "log10(10) = " . log10(exp(10)) . "<br>"; # Base 10 Logarithm
          echo "PI = " . pi() . "<br>"; # PI
          echo "hypot(10,10) = " . hypot(10,10) . "<br>"; # Hypotenuse
          echo "deg2rad(90) = " . deg2rad(90) . "<br>"; # Degrees to radians
          echo "rad2deg(1.57) = " . rad2deg(1.57) . "<br>";
          echo "mt_rand(1,50) = " . mt_rand(1,50) . "<br>"; # Fast random num
          echo "rand(1,50) = " . rand(1,50) . "<br>"; # Original random num
          echo "Max Random = " . mt_getrandmax() . "<br>"; # Max random num
          echo "is_finite(10) = " . is_finite(10) . "<br>";
          echo "is_infinite(log(0)) = " . is_infinite(log(0)) . "<br>";
          echo "is_numeric(\"10\") = " . is_numeric("10") . "<br>";

          # Trig functions
          # sin, cos, tan, asin, acos, atan, asinh, acosh, atanh, atan2
          echo "sin(0) = " . sin(0) . "<br>";

          # Format with decimals and defined decimal places
          echo number_format(12345.6789, 2) . "<br>";



        }
      }
     ?>
     <?php
     # conditionals
     # logical operators
     $num_oranges = 25;
     $num_bananas = 31;

     if(($num_oranges > 24) && ($num_bananas > 30)) {
       echo "25% discount <br>";
     } elseif(($num_oranges > 30) || ($num_bananas > 35)) {
       echo "35% discount <br>";
     } elseif(!(($num_oranges < 5) || ($num_bananas < 5))) {
       echo "5% discount <br>";
     } else {
       echo "No Discount <br>";
     }
     ?>
  </body>
</html>