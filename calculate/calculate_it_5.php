<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>calculation</title>
	<!-- Google Fonts -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
	<!-- CSS Fill -->
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>
	<h1 class="calculation">CALCULATION</h1>
	<div id="goback_btn" onclick="goBack()"><img src="../img/arrow.png" alt="bake_arrow"></div>
<main>
	<table>
		<thead>
			<tr>
				<th>Subject</th>
				<th>Grade</th>
			</tr>
		</thead>
		<tbody>

		<?php
			$cmts = $_POST['cmts'];
			$dwpd = $_POST['dwpd'];
			$jp = $_POST['jp'];
			$cns = $_POST['cns'];

		?>
			<tr>
				<td>Computer Maintenance and Trouble Shooting <br>(3350701)</td>
				<td>
					<?php echo $cmts; ?>
				</td>
			</tr>
			<tr>
				<td>Dynamic Web Page Development <br>(3350702)</td>
				<td>
					<?php echo $dwpd; ?>
				</td>
			</tr>
			<tr>
				<td>Java Programming <br>(3350703)</td>
				<td>
					<?php echo $jp; ?>
				</td>
			</tr>
			<tr>
				<td>Computer and Network Security OR (MAT) <br>(3350704)</td>
				<td>
					<?php echo $cns; ?>
				</td>
			</tr>
		</tbody>
	</table>
</main>

	<!-- Script Fill -->
    <script src="../js/script.js"></script>
</body>
</html>


<?php 
// computer 5th sem
$grade = array($cmts,$dwpd,$jp,$cns);

function mark($grades)
{
	$marks = array();
	for ($i=0; $i <= 3; $i++) { 
		switch ($grades[$i]) {
			case 'AA':
				array_push($marks, 10);
				break;
			case 'AB':
				array_push($marks, 9);
				break;
			case 'BB':
				array_push($marks, 8);
				break;
			case 'BC':
				array_push($marks, 7);
				break;
			case 'CC':
				array_push($marks, 6);
				break;
			case 'CD':
				array_push($marks, 5);
				break;
			case 'DD':
				array_push($marks, 4);
				break;
			case 'FF':
				array_push($marks, 3);
				break;
			default:
				array_push($marks, "No");
		}
	}
	// print_r($marks);

	$credit_cmts = 5;
	$credit_dwpd = 7;
	$credit_jp = 7;
	$credit_cns = 7;

	if (in_array("No", $marks)) {
		echo '<p class="ans">Please choose all grade!</p>';
	} else {
		$mark_cmts = $credit_cmts * $marks[0];
		$mark_dwpd = $credit_dwpd * $marks[1];
		$mark_jp = $credit_jp * $marks[2];
		$mark_cns = $credit_cns * $marks[3];

		
		$stpi_calculetion = ($mark_cmts+$mark_dwpd+$mark_jp+$mark_cns) / ($credit_cmts+$credit_dwpd+$credit_jp+$credit_cns);

		echo '<p class="ans">5<sup>th</sup> Semester STPI : ' . round($stpi_calculetion,2) . '</p>';
		return $stpi_calculetion;
	}
	
}

mark($grade);

 ?>