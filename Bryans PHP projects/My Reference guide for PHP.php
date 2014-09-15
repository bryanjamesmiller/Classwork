<?php
//The built-in function rawurlencode() will take a string and replace any spaces with url signs like %20.  Don't use "urlencode"! Use "rawurlencode"!
$cityName = "Los Angeles, CA";
echo "Here is the url encoded:  " . rawurlencode($cityName) . "<br>";

//There is also a rawurldecode() that will do the reverse:
echo "and here is the url decoded:  " . rawurldecode($cityName) . "<br><br>";

//The date() built-in function.  The second argument allows for a "timestamp" and is optional.  See below for what a timestamp is.
echo "Today's date is: " . date("m/d/y") . "<br>";

//String to Time strtotime() built-in functions.  These "timestamps" give the number of seconds from January 1, 1970 at 00:00.  This is also called the "Unix Timestamp."  This measurement is a widely used standard that PHP has chosen to utlize.
echo "The below are just some dates and their timestamps." . "<br>";
echo $now = strtotime("now");
echo "<br>";
echo date("m/d/y", $now) . "<br>";

echo $past = strtotime("10 September 2000");
echo "<br>";
echo date("m/d/y", $past) . "<br>";

echo $oneweekplus = strtotime("+1 week 2 days 4 hours 2 seconds");
echo "<br>";
echo date("m/d/y", $oneweekplus) . "<br>";

echo $next_thurs = strtotime("next Thursday");
echo "<br>";
echo date("m/d/y", $next_thurs) . "<br>";

echo $last_wed = strtotime("last Wednesday");
echo "<br>";
echo date("m/d/y", $last_wed);

//mktime is a built-in function that if no parameters are given it, it will give you the timestamp for "now".
echo "<br><br>";
echo $now = time();

//Here are some examples of different date() parameters:
echo "<br><br>";
echo date("r", $now) . "<br>";
//This is a shortcut equivalent to:
echo date("D, d M Y H:i:s O", $now) . "<br>";

echo date("m/d/Y", $now) . "<br>";
//This one has leading zeros for the day and month
echo date("D, M n, Y", $now) . "<br>";
echo date("l, F d, Y", $now) . "<br>";
echo date("n/j/y", $now) . "<br>";
//This one does NOT have leading zeros for the day and month
//Using built-in DateTime and DateTimeZone objects to get and set the time zone
$myDateTime = new DateTime();
echo $myDateTime->format('F j, Y h:i a') . "<br>";
//Notice the default time zone is in Europe/Berlin
echo $myDateTime->getTimezone()->getName();
$myTimeZone = new DateTimeZone('America/Los_Angeles');
echo "<br>";
$myDateTime->setTimezone($myTimeZone);
//Changing the timezone to Los Angeles
echo $myDateTime->getTimezone()->getName() . "<br>";
echo $myDateTime->format('F j, Y h:i a') . "<br>";
$myTimeZone = new DateTimeZone('America/Chicago');
$myDateTime->setTimezone($myTimeZone);
//Changing the timezone to St. Louis
echo $myDateTime->getTimezone()->getName() . "<br>";
echo $myDateTime->format('F j, Y h:i a');

// "Empty()" does not check for just null.  "0" is considered "empty" - so be careful!  A leading cause of bugs in PHP.
/*  If you want to check for a 0 value, checking for "empty" will report that it's empty when you might
  actually want to see if someone entered a 0!!  Empty returns a boolean, true or false, for whether a variable is considered to be empty. What you might not expect though, are the things that it considers to be empty. In PHP, empty is going to be an empty string, null, 0, 0.0. Meaning, a float in which the value is zero, a string with a zero inside of it, false, or an empty array.  All of those things are considered empty. And this is a very important one, 0 inside the string are all considered to be empty. Imagine that, that field was, how many children do you have? You want to check if that field is left blank by the user.  But it would also not allow the number of children you have to be zero as a value.  That would be considered empty.  So most times, you'll need to use further conditions with empty such as, is it empty AND also not numeric?  Or is it empty but not null?  Empty is a leading cause of bugs in PHP code.
 */
echo "<br><br>";

$var1 = null;
$var2 = "";
$var3 = "0";

echo "Is var1 null?  ";
echo is_null($var1) . "<br>";
echo "Is var2 null?  ";
echo is_null($var2) . "<br>";
echo "Is var3 null?  ";
echo is_null($var3) . "<br>";

//the isset() function is the opporiste of the is_null() function
echo "Is var1 set?  ";
echo isset($var1) . "<br>";
echo "Is var2 set?  ";
echo isset($var2) . "<br>";
echo "Is var3 set?";
echo isset($var3) . "<br>";

//Being empty is not the same as being null.  Empty includes null however, as well as an empty string, 0, 0.0, false, and an empty array()

echo "Is var1 empty?";
echo empty($var1) . "<br>";
echo "Is var2 empty?";
echo empty($var2) . "<br>";
echo "Is var3 empty?";
echo empty($var3) . "<br>";

//This tells you the current version of PHP built-in functions, here it is 5.5.9
echo "<br><br>";
$version = phpversion();
echo $version;
echo "<br><br>";

//You can test to see if a number is a float, an int, or a number at all:
$float_example = 3.14;
$integer_example = 3;

echo "Is {$integer_example} integer? " . is_int($integer_example) . "<br>";
echo "Is {$float_example} integer? " . is_int($float_example) . "<br>";

echo "Is {$integer_example} float? " . is_float($integer_example) . "<br>";
echo "Is {$float_example} float? " . is_float($float_example) . "<br>";

echo "Is {$integer_example} numeric? " . is_numeric($integer_example) . "<br>";
echo "Is {$float_example} numeric? " . is_numeric($float_example) . "<br>";

//Rounding functions with round().  Using ceil() gives you a fraction rounded up.  Using floor() will round a fraction down.
echo "<br><br>";
echo "Rounding 5/3 will result in " . round(5 / 3) . "<br>";
echo "Rounding pi will result in " . round(M_PI) . "<br>";
echo "Rounding 5/3 to two decimal places will result in " . round(5 / 3, 2) . "<br>";
echo "Rounding 5/3 up will result in " . ceil(5 / 3) . ".";
echo "Rounding 5/3 down will result in " . round(5 / 3) . ".";

//Using random number generator rand()
// Prints a random number between 0 and 32767
echo "<br><br>";
print "A random number between 0 and 32767 is: " . rand() . "<br>";

// prints a random number between a minimum and a maximum number
print "A random number between 1 and 20 is: " . rand(1, 20) . "<br>";

//Uppercase/lowercase/initial case/substring built-in functions
echo "<br><br>";
$name = "Bryan";
echo "My name in all upper case is: " . strtoupper($name) . "<br>";
echo "My name in all lower case is: " . strtolower($name) . "<br>";
echo "My name in initial caps is: " . ucfirst($name) . "<br>";
echo "My name in initial caps is: " . ucwords($name) . "<br>";
echo "A substring of my name is " . substr($name, 0, 3) . "<br>";
echo "If there is a 'b' in my name, the following code will return 'true' (but it doesn't print it)." . strpos($name, "b") . "<br>";
echo "The length of my name is: " . strlen($name) . " letters." . "<br>";

//strstr() finds a string within a string.  It is the way to "find" a substring.  It returns everything after the string it finds.
$myWholeName = "Bryan James Miller";
echo "The first 'James' and everything after it is: " . strstr($myWholeName, "James") . "<br>";
//strchr() is how to find a character within a string.  It returns everything after the character it finds.
echo "The first 'a' and everything after it is: " . strchr($myWholeName, "a") . "<br>";

//str_replace() is a function to find and replace a string with another string
echo str_replace("Miller", "Losier", $myWholeName) . "<br>";

//str_repeat() is how to repeat a string a specified number of times
echo str_repeat($myWholeName, 3) . "<br>";

//trim() removes the leading or trailing white space in a string.  However, it doesn't seem necessary as this seems to happen anyways...
echo "A " . trim("             no white space!                 ") . "B" . "<br>";

//Stripping HTML tags built-in functions
echo "<br><br>";
$input = '<em>This text has all of its HTML tags removed</em>';
echo strip_tags($input);
//Stripping HTML tags with exceptions built-in functions
echo "<br><br>";
$input = '<em>This text has its HTML tags removed except for em italics</em>';
echo strip_tags($input, '<em>');

//Sorting an array with a built-in sort() function using two "foreach" loops
echo "<br><br>";
$wordsArray = array("This", "array", "of", "strings", "will", "sort", "alphabetically", "and", "change", "the", "initial", "array", "on", "the", "line", "below.");
foreach ($wordsArray as $one_word) {
    echo $one_word . " ";
}
echo "<br>";

sort($wordsArray);
foreach ($wordsArray as $word) {
    echo $word . " ";
}
echo "<br>";

//Accessing the first element in an array starts at 0
echo "The first element in the array is: " . $wordsArray[0] . "<br>";

//Adding a delimiter between the elements of the array with join()
echo "Here is the array with three periods between each element: " . join("... ", $wordsArray);
echo "<br>";

//Finding the number of elements in an array with the count()
echo "There are " . count($wordsArray) . " elements in this array.";
echo "<br>";

//Associative arrays.  An associative array makes use of (key => value) pairs.  Associative arrays are also called "maps".
$myCarArray = array(1997, 'grey', 4);
$myCarAssocArray = array('year' => 1997, 'color' => 'grey', 'doors' => 4);

echo "My Car's color is: " . $myCarArray[1];
echo '<br>';

echo "My Car's color is: " . $myCarAssocArray['color'];

// This is a regular array using integers as the indices:
$myArray = array(2012, 'blue', 5, 'BMW');

// ...and this is an associative array using strings as indices:
$myAssocArray = array('year' => 2012, 'colour' => 'blue', 'doors' => 5, 'make' => 'BMW');

//This is how you access both kinds of arrays.
echo "My car has $myArray[2] doors and was built in " . $myAssocArray['year'] . "<br>";

//Using a "foreach" loop with an associative array:
$myMenuOrder = array('bread' => 'with', 'fruit' => 'with', 'vegetables' => 'without');

foreach ($myMenuOrder as $foodItem => $myOrder) {
    echo "I would like to order " . $myOrder . ' ' . $foodItem . '<br>';
}
echo '<br>';

//Here is a two-dimensional array
$deck = array(array('2 of Diamonds', 2), array('5 of Diamonds', 5), array('7 of Diamonds', 7), array('9 of Diamonds', 9));

echo 'This is the ' . $deck[2][0] . '!' . '<br>';

//Some more array functions with numbers, maximum and minimum element in the array, how to print an array, reverse sort rsort(), sort()
$numbers = array(8, 23, 15, 42, 16, 4);
echo count($numbers) . '<br>';
echo max($numbers) . '<br>';
echo min($numbers) . '<br>';
sort($numbers);
print_r($numbers);
echo '<br>';
rsort($numbers);
print_r($numbers);
echo "<br>";

//implode() inserts a string in between each element in the array, which turns the array into a string.  explode() takes out the specified string and turns the rest of the leftover elements into an array.
echo $num_string = implode(" * ", $numbers) . '<br>';
print_r(explode(" * ", $num_string));
echo '<br>';
echo in_array(15, $numbers) . '<br>';
// returns true/false if it's in the array
echo in_array(19, $numbers) . '<br>';
// returns true/false if it's in the array
//Simple booleans:
$result1 = true;
$result2 = false;

echo $result1 . "<br>";
echo $result2 . "<br>";
echo is_bool($result2) . "<br>";

$number = 3.14;
if (is_float($number)) {
    echo "It is a float.";
}

//A simple "while" loop:
$i = 0;
while ($i < 3) {
    echo "<p>The variable is $i.</p>";
    $i++;
}

//A "while" loop using "endwhile":
while ($i < 5) :
    $i++;
    echo "<p>The num is $i.</p>";
endwhile;

//A simple "for" loop:
for ($i = 0; $i < 3; $i++) {
    echo "The variable is $i.<br><br>";
}

//An easy way to return more than one variable using an array and the built-in function list()
function add_subt($val1, $val2) {
    $add = $val1 + $val2;
    $subt = $val1 - $val2;
    return array($add, $subt);
}

$result_array = add_subt(10, 5);
echo "Add: " . $result_array[0] . "<br />";
echo "Subt: " . $result_array[1] . "<br />";

list($add_result, $subt_result) = add_subt(20, 7);
echo "Add: " . $add_result . "<br />";
echo "Subt: " . $subt_result . "<br />";

//Use the global keyword with caution.  It allows you to access variables from outside the scope of a function.
//Normally, only variables from inside a function are accessable in that function.  I think this is a little different
//from Java, though the program setups are a bit different.
$bar = "outside";

// global scope

function foo() {
    global $bar;
    //Normally, you wouldn't be able to access the variable "$bar" from outside of the function.  But the global keyword allows you to.  However, you should use this sparingly as it's not clear what becomes of your variables unless you pass them in as parameters and return them if they get modified.
    if (isset($bar)) {
        echo "foo: " . $bar . "<br />";
    }
    $bar = "inside";
    // local scope
}

echo "1: " . $bar . "<br />";
foo();
echo "2: " . $bar . "<br />";

//You can set default values for parameters if you like.  These default values get overriden by whatever is passed in as an argument.
//If nothing is passed in, then the default values are used.
function paint($room = "office", $color = "red") {
    return "The color of the {$room} is {$color}.<br />";
}

echo paint();
echo paint("bedroom", "blue");
echo paint("bedroom", null);
echo paint("bedroom");
echo paint("blue");

//You have to pay attention to the order of the paramters you're passing!
//A simple inheritance example, where the parent class' method "honk" is accessed using two different syntaxes.
class Vehicle {

    public function honk() {
        return "HONK HONK!";
    }
}

class Bicycle extends Vehicle {
}

$bicycle = new Bicycle();
echo $bicycle->honk() . "<br>";
echo Bicycle::honk() . "<br>";

//The :: is a "scope resolution operator".  However, according to strict standards, one should not call a non-static method statically.
//Accessing a parent class constant const (notice no $ before the constant's name) without creating an object
class Hi {
    const hi = "hello";
}

class HelloWorld extends Hi {
}

echo HelloWorld::hi;
//The :: is a "scope resolution operator"
echo "<br>";
echo "<br>";

//Here is the necessary syntax for a constructor, although the number of variables can change
class Dog {

    public $numLegs = 4;
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function woof() {
        echo "Bow-wow!" . "<br>";
    }

    //If you want to call another function within the same class, you have
    //to use the keyword $this->functionName();
    public function bark() {
        echo "bark, bark and ";
        $this->woof();
    }

}

$myDog = new Dog("Fido");
$myDog->woof();
echo $myDog->name;
echo "<br>";
echo $myDog->bark();
echo "<br>";

//Constants are all caps and have to use a function called define() to define them:
define("MAX_WIDTH", 980);
//In the function, you enter the name of the constant as a string
echo MAX_WIDTH;
echo "<br>";
/* You can't change a constant's value and you can't redefine it, either:
  MAX_WIDTH = MAX_WIDTH + 1;
  echo MAX_WIDTH;

  define("MAX_WIDTH", 981);
  echo MAX_WIDTH; */

//Type Juggling refers to PHP AUTOMATICALLY doing type casting (converting one type like integer to another type like string).  In general, you want to avoid casting strings to integers, but it's okay to cast integers to strings.
$count = "2 cats";
echo "\$count, which is '$count', is a " . gettype($count) . "<br>";

$count += 3;
echo "\$count += 3 gets juggled to become a: " . gettype($count) . "<br>";

$cats = "I have " . $count . " cats.";
echo gettype($cats) . "<br>";

//Type Casting refers to converting one type to another MANUALLY, on purpose
settype($count, "integer");
//This DOES change a variable's type permanently!
echo "Now count is a " . gettype($count) . "<br>";

$count2 = (string) $count;
//This doesn't change the variable's type permanently.  It just lets you use it as another type temporarily.
echo "Now count is a " . gettype($count) . "<br>";
echo "Now count2 is a " . gettype($count2) . "<br>";

$test1 = 3;
//an integer
$test2 = 3;
//an integer
settype($test1, "string");
//This DOES change a variable's type permanently!
(string) $test2;
//This doesn't change the variable's type permanently.  It just lets you use it as another type temporarily.
echo "Test is a " . gettype($test1) . "<br>";
echo "Test 2 is a " . gettype($test2) . "<br>";

//some debugging functions.  make sure to turn off debugging, debuggers, and warnings before publishing anything to a website, or else it's vulnerable security risk. 
$number = 99;
$string = "Bug?";
$array = array(1 => "Homepage", 2 => "About Us", 3 => "Services");

var_dump($number);  //prints out all the details.
echo "<br>";
var_dump($string);
echo "<br>";
var_dump($array);
echo "<br>";
?>

<br />
<pre>
    <?php
//the <pre> tags just make things prettier through HTML
    print_r(get_defined_vars());
    ?>
</pre>  
<br />
<?php
/*
  function say_hello_to($word) {
  echo "Hello {$word}!<br />";
  }

  say_hello_to('Everyone');

  var_dump(debug_backtrace());  //debug_backtrace() shows you all the functions
 */


/* Here are some different ways of displaying the date:

  TIME:
  a: am or pm depending on the time
  A: AM or PM depending on the time
  g: Hour without leading zeroes. Values are 1 through 12.
  G: Hour in 24-hour format without leading zeroes. Values are 0 through 23.
  h: Hour with leading zeroes. Values 01 through 12.
  H: Hour in 24-hour format with leading zeroes. Values 00 through 23.
  i: Minute with leading zeroes. Values 00 through 59.
  s: Seconds with leading zeroes. Values 00 through 59.

  DAY:
  d: Day of the month with leading zeroes. Values are 01 through 31.
  j: Day of the month without leading zeroes. Values 1 through 31
  D: Day of the week abbreviations. Sun through Sat
  l: Day of the week. Values Sunday through Saturday
  w: Day of the week without leading zeroes. Values 0 through 6.
  z: Day of the year without leading zeroes. Values 0 through 365.

  MONTHS:
  m: Month number with leading zeroes. Values 01 through 12
  n: Month number without leading zeroes. Values 1 through 12
  M: Abbreviation for the month. Values Jan through Dec
  F: Normal month representation. Values January through December.
  t: The number of days in the month. Values 28 through 31.

  YEAR:
  L: 1 if it's a leap year and 0 if it isn't.
  Y: A four digit year format
  y: A two digit year format. Values 00 through 99.

  OTHER FORMATTING:
  U: The number of seconds since the Unix Epoch (January 1, 1970)
  O: This represents the Timezone offset, which is the difference from Greenwich Meridian Time (GMT). 100 = 1 hour, -600 = -6 hours
 */
//let's see how fast i can type
?>