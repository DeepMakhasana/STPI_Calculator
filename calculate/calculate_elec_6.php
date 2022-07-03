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
			$sp = $_POST['sp'];
			$icm = $_POST['icm'];
			$mtcb = $_POST['mtcb'];
			$ebc = $_POST['ebc'];

		?>
			<tr>
				<td>Switchgear & Protection <br>(3360901)</td>
				<td>
					<?php echo $_POST['sp']; ?>
				</td>
			</tr>
			<tr>
				<td>Installation, Commissioning And Maintenance <br>(3360902)</td>
				<td>
					<?php echo $_POST['icm']; ?>
				</td>
			</tr>
			<tr>
				<td>Maintenance Of Transformer And Circuit Breaker  OR (Any Other) <br>(3360907)</td>
				<td>
					<?php echo $_POST['mtcb']; ?>
				</td>
			</tr>
			<tr>
				<td>Electrification Of Building Complexes OR (Any Other)<br>(3360908)</td>
				<td>
					<?php echo $_POST['ebc']; ?>
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
// electrical 6th sem
$grade = array($sp,$icm,$mtcb,$ebc);

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

	$credit_sp = 4;
	$credit_icm = 5;
	$credit_mtcb = 3;
	$credit_ebc = 5;


	if (in_array("No", $marks)) {
		echo '<p class="ans">Please choose all grade!</p>';
	} else {
		$mark_sp = $credit_sp * $marks[0];
		$mark_icm = $credit_icm * $marks[1];
		$mark_mtcb = $credit_mtcb * $marks[2];
		$mark_ebc = $credit_ebc * $marks[3];
		
		$stpi_calculetion = ($mark_sp+$mark_icm+$mark_mtcb+$mark_ebc) / ($credit_sp+$credit_icm+$credit_mtcb+$credit_ebc);

		echo '<p class="ans">6<sup>th</sup> Semester STPI : ' . round($stpi_calculetion,2) . '</p>';
		return $stpi_calculetion;
	}
	
}

mark($grade);

 ?>