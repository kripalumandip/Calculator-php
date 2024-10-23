<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Temperature Converter</title>
</head>
<body>
<form action="" method="post">
    <label for="name">Enter the value:</label>
    <input name="temperature" id="name" type="text">

    <label for="age">Choose conversion type:</label>
    <select name="conversionType" id="conversion">
    <option value="CtoF">C to F</option>
    <option value="FtoC">F to C</option>
    </select>

    <button type="submit">Submit</button>
</form>


<?php 

function FtoC($f){
  return ($f-32)*5/9;
}

function CtoF($c){
  return ($c*9/5) + 32;
}

if (isset($_POST["temperature"]) && is_numeric($_POST["temperature"])) {
  // Perform conversion
  if ($_POST["conversionType"] == "FtoC"){
    echo "The converted temperature is: ".FtoC($_POST["temperature"]). "&degC";
  }
  elseif($_POST["conversionType"] == "CtoF"){
    echo "The converted temperature is:". CtoF($_POST["temperature"]). "&degF";
  }
} else {
  echo "Please enter a valid number.";
}


?>
</body>
</html>
