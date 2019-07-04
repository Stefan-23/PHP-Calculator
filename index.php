<html lang="en">
<head> 
    <meta charset="UTF-8">
	<title> Calculator </title>
	<link href="style.css" type="text/css" rel="stylesheet">
</head>
<body>
<div id="header"></div>
<div id="wrapper">
<form  method="POST" action="">
    First number:<br><input type="number" name="first_value" id=""><br>
    Second number:<br><input type="number" name="second_value" id=""><br>
    <select name="operator" id="">
	    <option value="static">Select Operator</option>
        <option value="+">Addition</option>	
        <option value="-">Substraction</option>
        <option value="*">Multiplication</option>
        <option value="/">Division</option>
    </select>
	<input type="submit" name="submit" value="Calculate">
</form>

<br>

<?php
if(isset($_POST['submit'])){
	$first_value = $_POST['first_value'];
	$second_value = $_POST['second_value'];
	$operator= $_POST['operator'];

?>
<div class="result">
<h3>RESULT:<?php
switch($operator){
	case "static":
	    echo "You must choose operator";
	    break;
	case "+":
	    echo $first_value + $second_value;
	    break;
	case "-":
	    echo $first_value - $second_value;
	    break;
	case "*":
	    echo $first_value * $second_value;
	    break;
	case "/":
	    echo $first_value / $second_value;
	break;
	default:
	    echo "ERROR";
	
    }

}
?>
</h3>
</div>
</div>
</body>
</html>