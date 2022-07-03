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
			$ft = $_POST['ft'];
			$cepe = $_POST['cepe'];
			$cre = $_POST['cre'];
			$ppt = $_POST['ppt'];

		?>
			<tr>
				<td>Fertilizer Technology <br>(3360501)</td>
				<td>
					<?php echo $_POST['ft']; ?>
				</td>
			</tr>
			<tr>
				<td>Chemical Engineering Plant Economics <br>(3360502)</td>
				<td>
					<?php echo $_POST['cepe']; ?>
				</td>
			</tr>
			<tr>
				<td>Chemical Reaction Engineering <br>(3360503)</td>
				<td>
					<?php echo $_POST['cre']; ?>
				</td>
			</tr>
			<tr>
				<td>PPT SFD PT (Any One) <br>(3360504-5-6-7)</td>
				<td>
					<?php echo $_POST['ppt']; ?>
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
// Chemical 6th sem
$grade = array($ft,$cepe,$cre,$ppt);

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

	$credit_ft = 6;
	$credit_cepe = 8;
	$credit_cre = 5;
	$credit_ppt = 5;


	if (in_array("No", $marks)) {
		echo '<p class="ans">Please choose all grade!</p>';
	} else {
		$mark_ft = $credit_ft * $marks[0];
		$mark_cepe = $credit_cepe * $marks[1];
		$mark_cre = $credit_cre * $marks[2];
		$mark_ppt = $credit_ppt * $marks[3];
		
		$stpi_calculetion = ($mark_ft+$mark_cepe+$mark_cre+$mark_ppt) / ($credit_ft+$credit_cepe+$credit_cre+$credit_ppt);

		echo '<p class="ans">6<sup>th</sup> Semester STPI : ' . round($stpi_calculetion,2) . '</p>';
		return $stpi_calculetion;
	}
	
}

mark($grade);

 ?>