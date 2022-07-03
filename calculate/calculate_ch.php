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
			$im = $_POST['im'];
			$mt2 = $_POST['mt2'];
			$prpt = $_POST['prpt'];
			$uicp = $_POST['uicp'];
			$cet = $_POST['cet'];
			$ft = $_POST['ft'];
			$cepe = $_POST['cepe'];
			$cre = $_POST['cre'];
			$ppt = $_POST['ppt'];
		?>
			<tr>
				<td>Industrial Management <br>(3350501)</td>
				<td>
					<?php echo $_POST['im']; ?>
				</td>
			</tr>
			<tr>
				<td>Mass Transfer - II <br>(3350502)</td>
				<td>
					<?php echo $_POST['mt2']; ?>
				</td>
			</tr>
			<tr>
				<td>Petroleum Refining & Petrochemical Technology <br>(3350503)</td>
				<td>
					<?php echo $_POST['prpt']; ?>
				</td>
			</tr>
			<tr>
				<td>Utilities And Instrumentation In Chemical Plant <br>(3350504)</td>
				<td>
					<?php echo $_POST['uicp']; ?>
				</td>
			</tr>
			<tr>
				<td>Chemical Engineering Thermodynamics <br>(3350505)</td>
				<td>
					<?php echo $_POST['cet']; ?>
				</td>
			</tr>

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
// Chemical 5th sem
$gradeFor5Sem = array($im,$mt2,$prpt,$uicp,$cet);

function markFor5Sem($grades)
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

	$credit_im = 3;
	$credit_mt2 = 8;
	$credit_prpt = 6;
	$credit_uicp = 8;
	$credit_cet = 5;

	if (in_array("No", $marks)) {
		echo '<p class="ans">Please choose all grade!</p>';
	} else {
		$mark_im = $credit_im * $marks[0];
		$mark_mt2 = $credit_mt2 * $marks[1];
		$mark_prpt = $credit_prpt * $marks[2];
		$mark_uicp = $credit_uicp * $marks[3];
		$mark_cet = $credit_cet * $marks[4];
		
		$stpi_calculetion = ($mark_im+$mark_mt2+$mark_prpt+$mark_uicp+$mark_cet) / ($credit_im+$credit_mt2+$credit_prpt+$credit_uicp+$credit_cet);
		return $stpi_calculetion;
	}
	
}

$stpiFor5sem = markFor5Sem($gradeFor5Sem);

// Chemical 6th sem
$gradeFor6Sem = array($ft,$cepe,$cre,$ppt);

function markFor6Sem($grades)
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
		return $stpi_calculetion;
	}
	
}

$stpiFor6sem = markFor6Sem($gradeFor6Sem);

// Final Year STPI
if ($stpiFor5sem == 'Please choose all grade!' || $stpiFor6sem == 'Please choose all grade!') {
	echo '<p class="ans">Please choose all grade!</p>';
} else {
	$totalstpi = $stpiFor5sem + $stpiFor6sem;
	echo '<p class="ans"><b>Final Year STPI : ' . round($totalstpi,2) . '</b></p>';
}

 ?>