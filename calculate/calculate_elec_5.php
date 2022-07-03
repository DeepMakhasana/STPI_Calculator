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
			$wecc = $_POST['wecc'];
			$eca = $_POST['eca'];
			$pe = $_POST['pe'];
			$mca = $_POST['mca'];
			$etc = $_POST['etc'];

		?>
			<tr>
				<td>Wiring Estimating, Costing and Contracting <br>(3350901)</td>
				<td>
					<?php echo $_POST['wecc']; ?>
				</td>
			</tr>
			<tr>
				<td>Energy Conservation & Audit <br>(3350902)</td>
				<td>
					<?php echo $_POST['eca']; ?>
				</td>
			</tr>
			<tr>
				<td>Power Electronics <br>(3350903)</td>
				<td>
					<?php echo $_POST['pe']; ?>
				</td>
			</tr>
			<tr>
				<td>Microprocessor and Controller Applications <br>(3350904)</td>
				<td>
					<?php echo $_POST['mca']; ?>
				</td>
			</tr>
			<tr>
				<td>Electric Traction and Control OR (Any Other) <br>(3350907)</td>
				<td>
					<?php echo $_POST['etc']; ?>
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
// electrical 5th sem
$grade = array($wecc,$eca,$pe,$mca,$etc);

function mark($grades)
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
	// print_r($marks);

	$credit_wecc = 5;
	$credit_eca = 6;
	$credit_pe = 6;
	$credit_mca = 6;
	$credit_etc = 5;

	if (in_array("No", $marks)) {
		echo '<p class="ans">Please choose all grade!</p>';
	} else {
		$mark_wecc = $credit_wecc * $marks[0];
		$mark_eca = $credit_eca * $marks[1];
		$mark_pe = $credit_pe * $marks[2];
		$mark_mca = $credit_mca * $marks[3];
		$mark_etc = $credit_etc * $marks[4];

		
		$stpi_calculetion = ($mark_wecc+$mark_eca+$mark_pe+$mark_mca+$mark_etc) / ($credit_wecc+$credit_eca+$credit_pe+$credit_mca+$credit_etc);

		echo '<p class="ans">5<sup>th</sup> Semester STPI : ' . round($stpi_calculetion,2) . '</p>';
		return $stpi_calculetion;
	}
	
}

mark($grade);


 ?>