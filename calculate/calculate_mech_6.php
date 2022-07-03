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
			$cam = $_POST['cam'];
			$tool = $_POST['tool'];
			$im = $_POST['im'];
			$ppe = $_POST['ppe'];
			$tsee = $_POST['tsee'];
		?>
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
// Mechanical 6th sem

$grade = array($cam,$tool,$im,$ppe,$tsee);

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

	$credit_cam = 4;
	$credit_tool = 5;
	$credit_im = 3;
	$credit_ppe = 5;
	$credit_tsee = 5;
	

	if (in_array("No", $marks)) {
		echo '<p class="ans">Please choose all grade!</p>';
	} else {
		$mark_cam = $credit_cam * $marks[0];
		$mark_tool = $credit_tool * $marks[1];
		$mark_im = $credit_im * $marks[2];
		$mark_ppe = $credit_ppe * $marks[3];
		$mark_tsee = $credit_tsee * $marks[4];
		
		$stpi_calculetion = ($mark_cam+$mark_tool+$mark_im+$mark_ppe+$mark_tsee) / ($credit_cam+$credit_tool+$credit_im+$credit_ppe+$credit_tsee);

		echo '<p class="ans">6<sup>th</sup> Semester STPI : ' . round($stpi_calculetion,2) . '</p>';
		return $stpi_calculetion;
	}
	
}

mark($grade);




















// function stpiSem6($cam,$tool,$im,$ppe,$tsee)
// 	{
// 		switch ($cam) {
// 			case 'AA':$a = 10;break;
// 			case 'AB':$a = 9;break;
// 			case 'BB':$a = 8;break;
// 			case 'BC':$a = 7;break;
// 			case 'CC':$a = 6;break;
// 			case 'CD':$a = 5;break;
// 			case 'DD':$a = 4;break;
// 			case 'FF':$a = 0.01;break;	
// 			default:
// 				$a = "Enter correct Grade!";
// 				break;
// 		}switch ($tool) {
// 			case 'AA':$a1 = 10;break;
// 			case 'AB':$a1 = 9;break;
// 			case 'BB':$a1 = 8;break;
// 			case 'BC':$a1 = 7;break;
// 			case 'CC':$a1 = 6;break;
// 			case 'CD':$a1 = 5;break;
// 			case 'DD':$a1 = 4;break;
// 			case 'FF':$a1 = 0.01;break;	
// 			default:
// 				$a1 = "Enter correct Grade!";
// 				break;
// 		}switch ($im) {
// 			case 'AA':$a2 = 10;break;
// 			case 'AB':$a2 = 9;break;
// 			case 'BB':$a2 = 8;break;
// 			case 'BC':$a2 = 7;break;
// 			case 'CC':$a2 = 6;break;
// 			case 'CD':$a2 = 5;break;
// 			case 'DD':$a2 = 4;break;
// 			case 'FF':$a2 = 0.01;break;	
// 			default:
// 				$a2 = "Enter correct Grade!";
// 				break;
// 		}switch ($ppe) {
// 			case 'AA':$a3 = 10;break;
// 			case 'AB':$a3 = 9;break;
// 			case 'BB':$a3 = 8;break;
// 			case 'BC':$a3 = 7;break;
// 			case 'CC':$a3 = 6;break;
// 			case 'CD':$a3 = 5;break;
// 			case 'DD':$a3 = 4;break;
// 			case 'FF':$a3 = 0.01;break;	
// 			default:
// 				$a3 = "Enter correct Grade!";
// 				break;
// 		}switch ($tsee) {
// 			case 'AA':$a4 = 10;break;
// 			case 'AB':$a4 = 9;break;
// 			case 'BB':$a4 = 8;break;
// 			case 'BC':$a4 = 7;break;
// 			case 'CC':$a4 = 6;break;
// 			case 'CD':$a4 = 5;break;
// 			case 'DD':$a4 = 4;break;
// 			case 'FF':$a4 = 0.01;break;	
// 			default:
// 				$a4 = "Enter correct Grade!";
// 				break;
// 		}

// 		$cam_c = 4;
// 		$tool_c = 5;
// 		$im_c = 3;
// 		$ppe_c = 5;
// 		$tsee_c = 5;
		

// 		$x = "Enter correct Grade!";
// 		if ($a == $x || $a1 == $x || $a2 == $x || $a3 == $x || $a4 == $x) {
// 			$chek = 0;
// 		}else {
// 			$chek = 1;
// 		}

// 		if ($chek == 0) {
// 			echo "Please Choose All Grade!";
// 		}else {
// 			$cam_m = $cam_c * $a;
// 			$tool_m = $tool_c * $a1;
// 			$im_m = $im_c * $a2;
// 			$ppe_m = $ppe_c * $a3;
// 			$tsee_m = $tsee_c * $a4;

// 			$stpi_calculetion = ($cam_m+$tool_m+$im_m+$ppe_m+$tsee_m) / ($cam_c+$tool_c+$im_c+$ppe_c+$tsee_c);

// 			echo '<p class="ans">6<sup>th</sup> Semester STPI : ' . round($stpi_calculetion,2) . '</p>';
// 			return $stpi_calculetion;

// 		}
		
// 	}

// if (isset($_POST['submit'])) {
// 	stpiSem6($_POST['cam'],$_POST['tool'],$_POST['im'],$_POST['ppe'],$_POST['tsee']);
// }

//  ?>