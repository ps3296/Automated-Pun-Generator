<html>
<?php                           							//for updating the ratings in database
session_start();

$servername = "localhost";
$username = "root";
$password = "";

$conn = new mysqli($servername, $username, $password,"pungen");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

							
$result=mysqli_query($conn,"SELECT rating FROM $_SESSION[ch] WHERE id=$_SESSION[temp]");
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
	$oldrating = $row['rating'];
	}
									
$result=mysqli_query($conn,"SELECT user FROM $_SESSION[ch] WHERE id=$_SESSION[temp]");
while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
	{
	$olduser = $row['user'];
	}
									
	if ($oldrating==0)
	{
		if ($_POST["rating"]=="excellent")
		{
			$newrating=4.0;
			$olduser=1;
		}
		if ($_POST["rating"]=="good")
		{
			$newrating=3.0;
			$olduser=1;
		}
		if ($_POST["rating"]=="average")
		{
			$newrating=3.0;
			$olduser=1;
		}
		if ($_POST["rating"]=="bad")
		{
			$newrating=2.0;
			$olduser=1;
		}
	}
	else
		{
		if ($_POST["rating"]=="excellent")
		{
			$newrating=(($oldrating*$olduser)+4.0)/(($olduser)+1);
			$olduser++;
		}
		if ($_POST["rating"]=="good")
		{
			$newrating=(($oldrating*$olduser)+3.0)/(($olduser)+1);
			$olduser++;	
		}
		if ($_POST["rating"]=="average")
		{
			$newrating=(($oldrating*$olduser)+2.0)/(($olduser)+1);
			$olduser++;
		}
		if ($_POST["rating"]=="bad")
		{
			$newrating=(($oldrating*$olduser)+1.0)/(($olduser)+1);
			$olduser++;
		}
	}
$tname=$_SESSION["ch"];

$sql = "UPDATE $_SESSION[ch] SET rating= $newrating where id=$_SESSION[temp]";
$sql1 = "UPDATE $_SESSION[ch] SET user= $olduser where id=$_SESSION[temp]";
if (($conn->query($sql) === TRUE) &&($conn->query($sql1) === TRUE))
{
  ?>
  <script>
  
  window.location.href="category_joke_disp1.php?tname=<?php echo $tname?>";</script>
  <?php 
  //echo "hua"   ;
}
else 
	echo "nai hua";
 
?>



</html>