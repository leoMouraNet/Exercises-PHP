<?php
    // get the data from the form
    $num1 = (int)$_POST['num1'];
    $num2 = (int)$_POST['num2'];
    $num3 = (int)$_POST['num3'];
    $num4 = (int)$_POST['num4'];
    $num5 = (int)$_POST['num5'];
    
    // calculate the discount
    $sum = $num1+$num2+$num3+$num4+$num5;
    $avg = $sum/5;
    $max = max($num1,$num2,$num3,$num4,$num5);
    $min = min($num1,$num2,$num3,$num4,$num5);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Number Calculation App</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
    <main>
        <h1>Number Calculation App</h1>

        <label>Number 1:</label>
        <span><?php echo $num1; ?></span><br>

        <label>Number 2:</label>
        <span><?php echo $num2; ?></span><br>

        <label>Number 3:</label>
        <span><?php echo $num3; ?></span><br>

        <label>Number 4:</label>
        <span><?php echo $num4; ?></span><br>

        <label>Number 5:</label>
        <span><?php echo $num5  ; ?></span><br>

        <label>SUM:</label>
        <span><?php echo $sum; ?></span><br>

        <label>AVG:</label>
        <span><?php echo $avg; ?></span><br>

        <label>Min:</label>
        <span><?php echo $min; ?></span><br>

        <label>Max:</label>
        <span><?php echo $max; ?></span><br>
    </main>
</body>
</html>