<?php
session_start();
include_once("quiz.php");

$answers = [];

if(empty($_POST)){
	$_SESSION["questionId"] = 0;
} else {
	if ($_SESSION["questionId"]<=sizeof($quiz)) {

		$answers[] = $_POST["answer"][$_SESSION["questionId"]];
		$_SESSION["questionId"]++;
	}
	else {
		print_r($answers);
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>quiz</title>
</head>
<body>

<form action="#" method="post">
		
	
		<br><p><?=$quiz[$_SESSION["questionId"]]["question"]?></p><br>

		<?php foreach ($quiz[$_SESSION["questionId"]]["options"] as $key => $option): ?>
			<label>
				<p><input 

					type="radio" 
					name="answer[]<?=$_SESSION['questionId']?>" 
					value="<?=$quiz[$_SESSION["questionId"]]["options"]["$key"]?>">

					<?=$option?>
				</p>
			</label>
		<?php endforeach ?>
		<br><p><input type="submit" value="შემდეგი შეკითხვა"></p>
</form>


</body>
</html>