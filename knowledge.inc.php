
<?php
$a = 'Мои знания на';
$b = 100;
$c = '%'; 
?>

<?php
  $price = 15;

  if($price >= 15 && $price <= 20)
      $d = 'Это число находится между 15 и 20';
?>

<?php
  $lang = ['html', 'css', 'php', 'js', 'python'];
	foreach ($lang as $item) {
		echo $item.'<br>'; 
	}
?>
