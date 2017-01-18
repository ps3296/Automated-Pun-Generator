<!-- 
$command = escapeshellcmd('C:\Python34\Scripts\dbex.py');
$output = shell_exec($command);
echo $output;
-->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password,"pungen");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$c=0;
$result=mysqli_query($conn,"SELECT * FROM knock ORDER BY rating DESC");
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
{
	while($c!=3)
		echo $row['question'];
		echo $row['answer'];
		$c=$c+1;
}
?>