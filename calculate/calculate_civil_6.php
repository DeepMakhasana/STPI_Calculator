<?php 
	require_once ('../include/component.php');
 ?>
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
			<?php title(); ?>
		</thead>
		<tbody>
		<?php
			$drcs = $_POST['drcs'];
			$cqcm = $_POST['cqcm'];
			$cpm = $_POST['cpm'];
			$rhte = $_POST['rhte'];
			$te = $_POST['te'];

		?>
			<tr>
				<td>Design Of Reinforced Concrete Structures <br>(3360601)</td>
				<td>
					<?php echo $_POST['drcs']; ?>
				</td>
			</tr>
			<tr>
				<td>Construction Quality Control & Monitoring <br>(3360602)</td>
				<td>
					<?php echo $_POST['cqcm']; ?>
				</td>
			</tr>
			<tr>
				<td>Construction Project Managemnet <br>(3360603)</td>
				<td>
					<?php echo $_POST['cpm']; ?>
				</td>
			</tr>
			<tr>
				<td>Railway , Harbour & Tunnel Engineering (Any other) <br>(3360606)</td>
				<td>
					<?php echo $_POST['rhte']; ?>
				</td>
			</tr>
			<tr>
				<td>Traffic Engineering (Any other) <br>(3360607)</td>
				<td>
					<?php echo $_POST['te']; ?>
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
// civil 6th sem
$grade = array($drcs,$cqcm,$cpm,$rhte,$te);

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

	$credit_drcs = 7;
	$credit_cqcm = 5;
	$credit_cpm = 5;
	$credit_rhte = 5;
	$credit_te = 5;

	if (in_array("No", $marks)) {
		echo '<p class="ans">Please choose all grade!</p>';
	} else {
		$mark_drcs = $credit_drcs * $marks[0];
		$mark_cqcm = $credit_cqcm * $marks[1];
		$mark_cpm = $credit_cpm * $marks[2];
		$mark_rhte = $credit_rhte * $marks[3];
		$mark_te = $credit_te * $marks[4];
		
		$stpi_calculetion = ($mark_drcs+$mark_cqcm+$mark_cpm+$mark_rhte+$mark_te) / ($credit_drcs+$credit_cqcm+$credit_cpm+$credit_rhte+$credit_te);

		echo '<p class="ans">6<sup>th</sup> Semester STPI : ' . round($stpi_calculetion,2) . '</p>';
		return $stpi_calculetion;
	}
	
}

mark($grade);

 ?>