<!DOCTYPE html>
<html>
<head>
    <title>Divided App</title>
    <link rel="stylesheet" type="text/css" href="main.css">
</head>
<?php 
if (isset($_POST['num1'])) {
    $num1 = (int)$_POST['num1'];
} else {
    $num1 = 0;
}

function isPrime($num) {
    //1 is not prime. See: http://en.wikipedia.org/wiki/Prime_number#Primality_of_one
    if($num == 1)
        return false;

    //2 is prime (the only even number that is prime)
    if($num == 2)
        return true;

    /**
     * if the number is divisible by two, then it's not prime and it's no longer
     * needed to check other even numbers
     */
    if($num % 2 == 0) {
        return false;
    }

    /**
     * Checks the odd numbers. If any of them is a factor, then it returns false.
     * The sqrt can be an aproximation, hence just for the sake of
     * security, one rounds it to the next highest integer value.
     */
    for($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
        if($num % $i == 0)
            return false;
    }

    return true;
}
?>
<body>
    <main>
        <h1>Number Calculation App</h1>
        <form action="index.php" method="post">

            <div id="data">
                <label>Number 1:</label>
                <input type="text" name="num1" value="<?=$num1;?>"><br>
            </div>

            <div id="buttons">
                <label>&nbsp;</label>
                <input type="submit" value="Test"><br>
            </div>
            <?php if ($num1 > 999) { ?>
                <label>Divided by 2:</label>
                <span><?php echo $num1%2==0 ? 'yes':'no' ; ?></span><br>
                <label>Divided by 3:</label>
                <span><?php echo $num1%3==0 ? 'yes':'no' ; ?></span><br>
                <label>Divided by 5:</label>
                <span><?php echo $num1%5==0 ? 'yes':'no' ; ?></span><br>
                <label>Primary number:</label>
                <span><?php echo isPrime($num1) ? 'yes':'no' ; ?></span><br>
            <?php } else { ?>
                <label>Error:</label>
                <span>The number is < 1000</span><br>
            <?php } ?>
        </form>
    </main>
</body>
</html>