<?php
//Header to Allow access from any origin
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

//Database Connection, server, user, password, database
$conn = new mysqli("localhost", "root", "", "word_game");

//Check if there is level on get URL
if (isset($_GET['level'])) {
    $level = (int)$_GET['level'];
} else {
	$level = 1;
}

//Switch case based on level
switch ($level) {
    case 1:
    	//Level 1 - Get All words on database where lenght is between 3 and 4
        $result = $conn->query("SELECT word FROM words HAVING LENGTH(word) between 3 and 4");
        break;
    case 2:
    	//Level 2 - Get All words on database where lenght is between 4 and 5
        $result = $conn->query("SELECT word FROM words HAVING LENGTH(word) between 4 and 5");
        break;
    case 3:
    	//Level 3 - Get All words on database where lenght is between 5 and 6
        $result = $conn->query("SELECT word FROM words HAVING LENGTH(word) between 5 and 6");
        break;
    default:
    	//Level 4+ - Get All words on database where lenght is between 6 and 7
        $result = $conn->query("SELECT word FROM words HAVING LENGTH(word) between 6 and 7");
}

$words = array();
while($row = $result->fetch_array(MYSQLI_ASSOC)) {
		//get all words result
        $words[] = $row["word"];
}
$conn->close();

//print a Json to sent it to Javascript
echo json_encode($words);
?>