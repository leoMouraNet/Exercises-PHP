<?php
	$c = 0;
	$courses = array('Math','History','Bio','Chem','Eng');
	$students = array('Mark','Kevin','Gina','Leo','Marie');
	$grade = array();
	foreach($courses as $course) {

		foreach($students as $student) {
			$grade[$course][$student] = rand(1,100);			
		}

		$minKey = array_search(min($grade[$course]),$grade[$course]);
		$minGrade[$course][$minKey] = true;

		$maxKey = array_search(max($grade[$course]),$grade[$course]);
		$maxGrade[$course][$maxKey] = true;

		$avgGrade[$course] = array_sum($grade[$course])/count($students);
	}

?>
<!DOCTYPE html>
<html lang="en">
  	<head>
	    <meta charset="utf-8">
	    <title>Course Grade</title>
	    <!-- Latest compiled Bootstrap minified CSS -->
	    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>
		<table class="table table-bordered">
		<?php
			echo "<tr>";
			echo "<td></td>";
			foreach($courses as $courseName) {
				echo "<td>" . $courseName . "</td>";
			}
			echo "</tr>";
			foreach($students as $student) {
				echo "<tr>";
				echo "<td>" . $student . "</td>";
				$c++;
				foreach($courses as $course) {
					$tdClass = "";
					if (isset($maxGrade[$course][$student])) {
						$tdClass = "class='warning'";
					}

					if (isset($minGrade[$course][$student])) {
						$tdClass = "class='danger'";
					}
					echo "<td " . $tdClass . ">";
					echo $grade[$course][$student];
					echo "</td>";
				}
				echo "</tr>";
			}
			echo "<tr class='info'>";
			echo "<td>AVG</td>";
			foreach($courses as $course) {
				echo "<td>" . $avgGrade[$course] . "</td>";
			}
			echo "</tr>";
		?>
		</table>
	</body>
</html>