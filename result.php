<!DOCTYPE HTML>
<html>
<head>
</head>
<body>
<?php
 $ot = 0;
   $not = 0;
      if ($_POST['q1'] == 'a'){$ot++;} else {$not++;}
      if ($_POST['q2'] == 'a'){$ot++;} else {$not++;}
	  if ($_POST['q3'] == 'a'){$ot++;} else {$not++;}
	  if ($_POST['q4'] == 'a'){$ot++;} else {$not++;}
	  if ($_POST['q5'] == 'c'){$ot++;} else {$not++;}
	  if ($_POST['q6'] == 'b'){$ot++;} else {$not++;}
	  if ($_POST['q7'] == 'b'){$ot++;} else {$not++;}
	  if ($_POST['q8'] == 'c'){$ot++;} else {$not++;}
	  if ($_POST['q9'] == 'a'){$ot++;} else {$not++;}
	  if ($_POST['q10'] == 'b'){$ot++;} else {$not++;}
?>
<p>Правильных ответов: <?php echo $ot; ?></p>
<p>Неправильных ответов: <?php echo $not; ?></p>
</body> 
</html>