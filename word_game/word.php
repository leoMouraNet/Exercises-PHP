<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$conn = new mysqli("localhost", "root", "", "word_game");

if (isset($_GET['level'])) {
    $level = (int)$_GET['level'];
} else {
	$level = 1;
}

switch ($level) {
    case 1:
        $result = $conn->query("SELECT word FROM words HAVING LENGTH(word) between 3 and 4");
        break;
    case 2:
        $result = $conn->query("SELECT word FROM words HAVING LENGTH(word) between 4 and 5");
        break;
    case 3:
        $result = $conn->query("SELECT word FROM words HAVING LENGTH(word) between 5 and 6");
        break;
    default:
        $result = $conn->query("SELECT word FROM words HAVING LENGTH(word) between 6 and 7");
}

$words = array();
while($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $words[] = $row["word"];
}
$conn->close();

echo json_encode($words);
?>