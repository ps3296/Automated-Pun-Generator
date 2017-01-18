<?php 
$val="Let's play Holi";
 $value = htmlspecialchars("Let's play", ENT_QUOTES);
echo $val;
echo $value;
?>
<input type='text' value='<?php echo $value; ?>'/>