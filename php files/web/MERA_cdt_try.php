<html>
<?php                           //code for updating the ratings in database
session_start();

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password,"pungen");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

/*

$sql2="select table_name from information_schema.tables where table_schema='pungen'";
if ($result->num_rows > 0) 
{
	while($row = $result->fetch_assoc()) 
	{
		echo $row;
	}
}
*/

$sql = "SELECT rating FROM knock where id=$_SESSION[rate]";
$sql2 = "SELECT user FROM knock where id=$_SESSION[rate]";
$result = $conn->query($sql);
$result1 = $conn->query($sql2);
if ($result->num_rows > 0)
{
	while($row = $result->fetch_assoc()) 
	{
		$row["rating"];
	}

	while($row = $result1->fetch_assoc()) 
	{
		$row["user"];
	}
	
	if ($row["rating"]==0)
	{
		if ($_POST["rating"]=="excellent")
		{
			$row["rating"]=4.0;
			$userNo=1;
		}
		if ($_POST["rating"]=="good")
		{
			$row["rating"]=3.0;
			$userNo=1;
		}
		if ($_POST["rating"]=="average")
		{
			$row["rating"]=2.0;
			$userNo=1;
		}
		if ($_POST["rating"]=="bad")
		{
			$row["rating"]=1.0;
			$userNo=1;
		}
	}
	else
	{
	if ($_POST["rating"]=="excellent")
	{
		$row["rating"]=(($row["rating"]*$row["user"])+4.0)/($row["user"]+1);
		$userNo=$row["user"]+1;
	}
	if ($_POST["rating"]=="good")
	{
		$row["rating"]=(($row["rating"]*$row["user"])+3.0)/($row["user"]+1);
		$userNo=$row["user"]+1;
	}
	if ($_POST["rating"]=="average")
	{
		$row["rating"]=(($row["rating"]*$row["user"])+2.0)/($row["user"]+1);
		$userNo=$row["user"]+1;
	}
	if ($_POST["rating"]=="bad")
	{
		$row["rating"]=(($row["rating"]*$row["user"])+1.0)/($row["user"]+1);
		$userNo=$row["user"]+1;
	}
	}
}

$sql1 = "UPDATE knock SET rating= $row[rating], user=$userNo where id=$_SESSION[rate]";

if ($conn->query($sql1) === TRUE) 
{
  ?><script>
  window.location.href="index.php";</script>
 <?php
  echo "hua"   ;
}
else 
	echo "nai hua";
 
?>
</html>