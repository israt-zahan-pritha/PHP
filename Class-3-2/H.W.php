<!-- i. Electric bill calculation (For first 50 units – 3.50 tk/unit For next 100 units – 4.00
tk/unit For next 100 units – 5.20 tk/unit For units above 250 – 6.50 tk/unit) -->

<?php
function calculateElectricBill($units) {
    $bill = 0;

    if ($units <= 50) {
        $bill = $units * 3.50;
    } elseif ($units <= 150) {
        $first50 = 50 * 3.50;
        $remainingUnits = $units - 50;
        $bill = $first50 + ($remainingUnits * 4.00);
    } elseif ($units <= 250) {
        $first50 = 50 * 3.50;
        $next100 = 100 * 4.00;
        $remainingUnits = $units - 150;
        $bill = $first50 + $next100 + ($remainingUnits * 5.20);
    } else {
        $first50 = 50 * 3.50;
        $next100 = 100 * 4.00;
        $next100Again = 100 * 5.20;
        $remainingUnits = $units - 250;
        $bill = $first50 + $next100 + $next100Again + ($remainingUnits * 6.50);
    }

    return $bill;
}

// Example usage
$units = 300; 
echo "Total electric bill for $units units is: " . calculateElectricBill($units) . " Tk <br>";
?>

<!-- ii. A PHP calculator using switch case (Addition, Subtraction, Multiplication, Division) -->

<?php
function calculator($num1, $num2, $operator) {
    $result = 0;

    switch ($operator) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                return "Division by zero is not allowed!";
            }
            break;
        default:
            return "Invalid operator!";
    }

    return "The result of {$num1} {$operator} {$num2} is: {$result}";
}

// Example
$num1 = 10;
$num2 = 5;
$operator = '/'; 

echo calculator($num1, $num2, $operator);
?>

<!-- iii. Check if a person is eligible to vote by age -->

<?php
function checkVotingEligibility($age) {
    if ($age >= 18) {
        return "<br> You are eligible to vote.<br>";
    } else {
        return " <br> You are not eligible to vote.<br>";
    }
}

// Example usage
$age = 20; 
echo checkVotingEligibility($age);
?>


<!-- iv. Check if a person is eligible for marriage in BD by gender. -->

<?php
function checkMarriageEligibility($age, $gender) {
    // Convert gender input to lowercase to handle case insensitivity
    $gender = strtolower($gender);

    if ($gender == "male") {
        if ($age >= 21) {
            return "You are eligible for marriage.<br>";
        } else {
            return "You are not eligible for marriage. Males must be at least 21 years old.<br>";
        }
    } elseif ($gender == "female") {
        if ($age >= 18) {
            return "You are eligible for marriage.<br>";
        } else {
            return "You are not eligible for marriage. Females must be at least 18 years old.<br>";
        }
    } else {
        return "Invalid gender input. Please enter 'male' or 'female'.<br>";
    }
}

// Example usage
$age = 19;
$gender = "female"; 

echo checkMarriageEligibility($age, $gender);
?>

<!-- v. Check if number is positive or negetive -->

<?php
function checkNumber($number) {
    if ($number > 0) {
        return "The number {$number} is positive.<br>";
    } elseif ($number < 0) {
        return "The number {$number} is negative.<br>";
    } else {
        return "The number is zero.<br>";
    }
}

// Example usage
$number = -5; 
echo checkNumber($number);
?>

<!-- vi. Check if number is odd or even vii. Check if data is integer or string -->

<?php
function checkOddOrEven($number) {
    if ($number % 2 == 0) {
        return "The number {$number} is even.";
    } else {
        return "The number {$number} is odd.";
    }
}

// Example usage
$number = 7; 
echo checkOddOrEven($number);
?>

