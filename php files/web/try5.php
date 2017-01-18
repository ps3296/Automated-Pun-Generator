<?php 
$con=mysqli_connect("localhost","root","","pungen");

$sql="SELECT id FROM knock ORDER BY rating DESC";
								$res = mysqli_query($con,$sql);
								$x=0;
								while($row = mysqli_fetch_array($res,MYSQLI_ASSOC))
								{
									$arr1[$x]=$row['id'];
									$x=$x+1;
								}
								$result = mysqli_query($con,"SELECT question as n FROM knock WHERE id=$arr1[1]"); 
								while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
								{  
									$question=$row['n'] . ' ';
								}
							
								$result = mysqli_query($con,"SELECT answer as n FROM knock WHERE id=$arr1[1]"); 
								while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
								{    
									$answer=$row['n'] . ' ';
								}
			$array =  (explode("\n",$question));
			foreach ($array as $item) {?>
			<p><?php
			echo "<ul>$item</ul>";}
			echo $answer;
								?>