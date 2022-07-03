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
			$te2 = $_POST['te2'];
			$dme = $_POST['dme'];
			$ie = $_POST['ie'];
			$me3 = $_POST['me3'];
			$seed = $_POST['seed'];
			$ecc = $_POST['ecc'];
			$cam = $_POST['cam'];
			$tool = $_POST['tool'];
			$im = $_POST['im'];
			$ppe = $_POST['ppe'];
			$tsee = $_POST['tsee'];
		?>
			<tr>
				<td>Thermal Engineering - II <br>(3351901)</td>
				<td>
					<?php echo $te2; ?>
				</td>
			</tr>
			<tr>
				<td>Design of Machine Elements <br>(3351902)</td>
				<td>
					<?php echo $dme; ?>
				</td>
			</tr>
			<tr>
				<td>Industrial Engineering <br>(3351904)</td>
				<td>
					<?php echo $ie; ?>
				</td>
			</tr>
			<tr>
				<td>Manufacturing Engineering - III <br>(3351903)</td>
				<td>
					<?php echo $me3; ?>
				</td>
			</tr>
			<tr>
				<td>Self Employement and Entrepreneurship Development <br>(3351906)</td>
				<td>
					<?php echo $seed; ?>
				</td>
			</tr>
			<tr>
				<td>Estimating, Costing and Contracting <br>(3351905)</td>
				<td>
					<?php echo $ecc; ?>
				</td>
			</tr>
			<tr>
				<td>Computer Aided Manufacturing <br>(3361901)</td>
				<td>
					<?php echo $cam; ?>
				</td>
			</tr>
			<tr>
				<td>Tool Engineering <br>(3361902)</td>
				<td>
					<?php echo $tool; ?>
				</td>
			</tr>
			<tr>
				<td>Industrial Management <br>(3361903)</td>
				<td>
					<?php echo $im; ?>
				</td>
			</tr>
			<tr>
				<td>Manufacturing Systems OR (PPE)<br>(3361904)</td>
				<td>
					<?php echo $ppe; ?>
				</td>
			</tr>
			<tr>
				<td>Fabrication Technology OR (TSEE)<br>(3361905)</td>
				<td>
					<?php echo $tsee; ?>
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
// Mechanical 5th sem
$gradeFor5Sem = array($te2,$dme,$ie,$me3,$seed,$ecc);

function markFor5Sem($grades)
{
	$marks = array();
	for ($i=0; $i <= 5; $i++) { 
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


	$credit_te2 = 4;
	$credit_dme = 5;
	$credit_ie = 5;
	$credit_me3 = 7;
	$credit_seed = 5;
	$credit_ecc = 4;

	if (in_array("No", $marks)) {
		return 'Please choose all grade!';
	} else {
		$mark_te2 = $credit_te2 * $marks[0];
		$mark_dme = $credit_dme * $marks[1];
		$mark_ie = $credit_ie * $marks[2];
		$mark_me3 = $credit_me3 * $marks[3];
		$mark_seed = $credit_seed * $marks[4];
		$mark_ecc = $credit_ecc * $marks[5];
		
		$stpi_calculetion = ($mark_te2+$mark_dme+$mark_ie+$mark_me3+$mark_seed+$mark_ecc) / ($credit_te2+$credit_dme+$credit_ie+$credit_me3+$credit_seed+$credit_ecc);
		return $stpi_calculetion;
	}
	
}

$stpiFor5sem = markFor5Sem($gradeFor5Sem);


// Mechanical 6th sem
$gradeFor6Sem = array($cam,$tool,$im,$ppe,$tsee);

function markFor6Sem($grades)
{
	$marks = array();
	for ($i=0; $i <= 4; $i++) { 
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


	$credit_cam = 4;
	$credit_tool = 5;
	$credit_im = 3;
	$credit_ppe = 5;
	$credit_tsee = 5;
	

	if (in_array("No", $marks)) {
		return 'Please choose all grade!';
	} else {
		$mark_cam = $credit_cam * $marks[0];
		$mark_tool = $credit_tool * $marks[1];
		$mark_im = $credit_im * $marks[2];
		$mark_ppe = $credit_ppe * $marks[3];
		$mark_tsee = $credit_tsee * $marks[4];
		
		$stpi_calculetion = ($mark_cam+$mark_tool+$mark_im+$mark_ppe+$mark_tsee) / ($credit_cam+$credit_tool+$credit_im+$credit_ppe+$credit_tsee);
		return $stpi_calculetion;
	}
	
}

// final year for mechanical
$stpiFor6sem = markFor6Sem($gradeFor6Sem);


if ($stpiFor5sem == 'Please choose all grade!' || $stpiFor6sem == 'Please choose all grade!') {
	echo '<p class="ans">Please choose all grade!</p>';
} else {
	$totalstpi = $stpiFor5sem + $stpiFor6sem;
	echo '<p class="ans"><b>Final Year STPI : ' . round($totalstpi,2) . '</b></p>';
}


 ?>