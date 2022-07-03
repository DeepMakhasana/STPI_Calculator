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
			$ajp = $_POST['ajp'];
			$ppud = $_POST['ppud'];
			$nma = $_POST['nma'];
			$mcad = $_POST['mcad'];
		?>
			<tr>
				<td>Advance Java Programming <br>(3360701)</td>
				<td>
					<?php echo $ajp; ?>
				</td>
			</tr>
			<tr>
				<td>Professional Practices Using Database <br>(3360702)</td>
				<td>
					<?php echo $ppud; ?>
				</td>
			</tr>
			<tr>
				<td>Networking Management & Administration OR (DWSA) <br>(3360703)</td>
				<td>
					<?php echo $nma; ?>
				</td>
			</tr>
			<tr>
				<td>Mobile Computing and Application Development OR (AWT) <br>(3360704)</td>
				<td>
					<?php echo $mcad; ?>
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
// Mechanical 6th sem

$grade = array($ajp,$ppud,$nma,$mcad);

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

	$credit_ajp = 7;
	$credit_ppud = 4;
	$credit_nma = 7;
	$credit_mcad = 7;

	

	if (in_array("No", $marks)) {
		echo '<p class="ans">Please choose all grade!</p>';
	} else {
		$mark_ajp = $credit_ajp * $marks[0];
		$mark_ppud = $credit_ppud * $marks[1];
		$mark_nma = $credit_nma * $marks[2];
		$mark_mcad = $credit_mcad * $marks[3];
		
		$stpi_calculetion = ($mark_ajp+$mark_ppud+$mark_nma+$mark_mcad) / ($credit_ajp+$credit_ppud+$credit_nma+$credit_mcad);

		echo '<p class="ans">6<sup>th</sup> Semester STPI : ' . round($stpi_calculetion,2) . '</p>';
		return $stpi_calculetion;
	}
	
}

mark($grade);

?>