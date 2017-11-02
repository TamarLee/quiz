<?php
include_once("quiz.php");

if(!empty($_POST)){

	$sum = 0;
	foreach ($_POST["answer"] as $key => $value) {
		if($value == $quiz["$key"]["correct option"]){
			$sum++;
		}
	}
	echo "თქვენ დააგროვეთ "."$sum"." ქულა";
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>quiz</title>
</head>
<body>


<form action="#" method="post">
	<?php foreach($quiz as $questionId => $question): ?>
		<br><p><?=($questionId+1).". "?><?=$question["question"]?></p><br>
		<?php foreach ($question["options"] as $key => $option): ?>
			<label>
				<p><input type="radio" name="answer[]<?=$questionId?>" value="<?=$quiz["$questionId"]["options"]["$key"]?>"><?=$option?></p>
			</label>
		<?php endforeach ?>
	<?php endforeach ?>

	<p><input type="submit" value="გაგზავნა"></p>
</form>


</body>
</html>