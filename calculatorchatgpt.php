<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Calculator</title>
</head>
<body>
<form action="" method="POST">
  Enter first number: <input type="text" name="num1"><br>
  Enter +,-,*,/: <input type="text" name="operation"><br>
  Enter second number: <input type="text" name="num2"><br>
  <input type="submit">
</form>

<?php 
if (isset($_POST["num1"]) && isset($_POST["num2"]) && isset($_POST["operation"])) {

  // Get and trim inputs
  $num1 = trim($_POST["num1"]);
  $num2 = trim($_POST["num2"]);
  $operation = trim($_POST["operation"]);

  // Validate the numbers
  if (!is_numeric($num1) || !is_numeric($num2)) {
    echo "Please enter valid numbers.";
    exit;
  }

  // Convert to numbers for calculation
  $num1 = (float)$num1;
  $num2 = (float)$num2;

  // Function definitions
  function add($x, $y) {
    return $x + $y;
  }

  function diff($x, $y) {
    return $x - $y;
  }

  function product($x, $y) {
    return $x * $y;
  }

  function divide($x, $y) {
    if ($y == 0) {
      return "Error: Division by zero.";
    }
    return $x / $y;
  }
  
  // Operation switch-case
  switch ($operation) {
    case "+":
      echo "Result: " . add($num1, $num2);
      break;
    case "-":
      echo "Result: " . diff($num1, $num2);
      break;
    case "*":
      echo "Result: " . product($num1, $num2);
      break;
    case "/":
      echo "Result: " . divide($num1, $num2);
      break;
    default:
      echo "Error: Invalid operation chosen.";
  }
}
?>
</body>
</html>
