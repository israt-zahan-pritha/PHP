
<?php
//1. Write a simple PHP class which displays the following string. Go to the editor ‘Mamurjor IT Institute !’

class SimpleMessage {
    public function displayMessage() {
        echo "Mamurjor IT Institute !";
    }
}

$message = new SimpleMessage();
$message->displayMessage();
echo "<br>";
?>

<?php
//2. Write a simple PHP class which displays an introductory message like “Hello All, I am Hadi”, where “Hadi” is an argument value of the method within the class
class IntroMessage {
    public function displayIntro($name) {
        echo "Hello All, I am $name";
    }
}

$intro = new IntroMessage();
$intro->displayIntro("Hadi");
echo "<br>";
?>

<?php
//3. Write a PHP class that calculates the factorial of an integer
class FactorialCalculator {
    public function calculateFactorial($number) {
        if ($number < 0) {
            return "Invalid input";
        }
        $factorial = 1;
        for ($i = 1; $i <= $number; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }
}

$factorialCalc = new FactorialCalculator();
echo $factorialCalc->calculateFactorial(5); // Output: 120
echo "<br>";
?>

<?php
//4. Write a PHP class that sorts an ordered integer array with the help of sort() function.Sample array : array(11, -2, 4, 35, 0, 8, -9) Output : Array ( [0] => -9 [1] => -2 [2] => 0 [3] => 4 [4] => 8 [5] => 11 [6] => 35 )
class ArraySorter {
    public function sortArray($array) {
        sort($array);
        return $array;
    }
}

$arraySorter = new ArraySorter();
$array = array(11, -2, 4, 35, 0, 8, -9);
$sortedArray = $arraySorter->sortArray($array);
print_r($sortedArray);
echo "<br>";
?>

<?php
//5. Calculate the difference between two dates using PHP OOP approach. Sample Dates : 1981-11-03, 2013-09-04 Expected Result : Difference : 31 years, 10 months, 1 days
class DateDifferenceCalculator {
    public function calculateDifference($date1, $date2) {
        $datetime1 = new DateTime($date1);
        $datetime2 = new DateTime($date2);
        $interval = $datetime1->diff($datetime2);

        return "Difference : {$interval->y} years, {$interval->m} months, {$interval->d} days";
    }
}

$dateDiffCalc = new DateDifferenceCalculator();
echo $dateDiffCalc->calculateDifference("1981-11-03", "2013-09-04");
echo "<br>";
?>

<?php
/*
6. Write a PHP Calculator class which will accept two values as arguments, then add them, subtract them, multiply them together, or divide them on request.For example :
$mycalc = new MyCalculator( 12, 6);
echo $mycalc- > add(); // Displays 18
echo $mycalc- > multiply(); // Displays 72
*/

class MyCalculator {
    private $value1;
    private $value2;

    public function __construct($value1, $value2) {
        $this->value1 = $value1;
        $this->value2 = $value2;
    }

    public function add() {
        return $this->value1 + $this->value2;
    }

    public function subtract() {
        return $this->value1 - $this->value2;
    }

    public function multiply() {
        return $this->value1 * $this->value2;
    }

    public function divide() {
        if ($this->value2 != 0) {
            return $this->value1 / $this->value2;
        } else {
            return "Division by zero error";
        }
    }
}

$mycalc = new MyCalculator(12, 6);
echo $mycalc->add(); 
echo "<br>";      // Displays 18
echo $mycalc->multiply();  // Displays 72
echo "<br>";
?>

<?php
//7. Write a PHP script to convert a string to Date and DateTime.Sample Date : ’12-08-2004′
class StringToDateConverter {
    public function convertToDate($dateString) {
        $date = DateTime::createFromFormat('d-m-Y', $dateString);
        return $date->format('Y-m-d');
    }

    public function convertToDateTime($dateString) {
        $date = DateTime::createFromFormat('d-m-Y', $dateString);
        return $date->format('Y-m-d H:i:s');
    }
}

$dateConverter = new StringToDateConverter();
echo $dateConverter->convertToDate('12-08-2004');      // Displays 2004-08-12
echo $dateConverter->convertToDateTime('12-08-2004');  // Displays 2004-08-12 00:00:00
echo "<br>";
?>
