<html>
<style>
ul
{
    list-style-type: none;
}
</style>
<?php
	$con=mysqli_connect("localhost","root","","pungen");
	$max=mysqli_num_rows(mysqli_query($con,"SELECT * FROM knock"));
	$i=rand(1,$max);
	

	//echo $i;
		 $result=mysqli_query($con,"SELECT * FROM knock WHERE id='$i'");
											while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
										{
												$question = $row['question'];
											}

$i = 0	;	

			
$array =  (explode("\n",$question));

foreach ($array as $item) {
    echo "<ul>$item</ul>";
}			
/*if(strpos($joke, "\n") !== FALSE) {
  echo 'New line break found';
  echo "\n";
  $i++;
  echo "$i \n";
}
else {
  echo 'not found';
}*/

		?>
		</html>