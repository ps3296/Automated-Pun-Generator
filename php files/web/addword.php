
<!doctype html>
<?php
session_start();
//$_SESSION["ch"]= $_GET['tname'];
?>
<html>
<head>
<title>Education Tutorial a Educational Category Flat Bootstrap Responsive Website Template | Contact :: w3layouts</title>


<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Education Tutorial Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--bootstrap-->



       
        
        <link type="text/css" href="abootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link type="text/css" href="abootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
        <link type="text/css" href="acss/theme.css" rel="stylesheet">
        <link type="text/css" href="aimages/icons/css/font-awesome.css" rel="stylesheet">
        <link type="text/css" href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600'
            rel='stylesheet'>


<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all">
<!--coustom css-->
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<!--script-->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- js -->
<script src="js/bootstrap.js"></script>
<!-- /js -->
<!--fonts-->
<link href='//fonts.googleapis.com/css?family=Open+Sans:300,300italic,400italic,400,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!--/fonts-->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<!--script-->
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},900);
				});
			});
</script>
<!--/script-->
</head>
	<body>
<!--header-->
		<div class="header" id="home">
			<nav class="navbar navbar-default">
				<div class="container">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
						<span class="icon-bar"> </span>
					</button>
					<h1><a class="navbar-brand" href="index.php">Masti ki<br /><span> Paathshaala</span></a></h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<ul class="nav navbar-nav navbar-right margin-top cl-effect-2">
								<li><a href="index.php"><span data-hover="Home">Home</span></a></li>
								<!--<li><a href="about.html"><span data-hover="About">About</span></a></li>
								<li><a href="typography.html"><span data-hover="Shortcodes">Short</span></a></li>-->
								<li><a href="gallery.php"><span data-hover="Gallery">Top Puns</span></a></li>
							</ul>
							<div class="clearfix"> </div>
						</div><!-- /.navbar-collapse -->
				<!-- /.container-fluid -->
				<div class="login-pop">
						<div id="loginpop"><a href="#" id="loginButton"><span>Login</span></a>
								<div id="loginBox">                
									<form id="loginForm">
											<fieldset id="body">
												<fieldset>
													  <label for="email">Email Address</label>
													  <input type="text" name="username" id="username">
												</fieldset>
												<fieldset>
														<label for="password">Password</label>
														<input type="password" name="password" id="password">
												 </fieldset>
												<input type="button" id="login" value="Sign in" onclick="validate()">
												<label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
											</fieldset>
										<span><a href="#">Forgot your password?</a></span>
								 </form>
							</div>
					    </div>
					    </div><script src="js/menu_jquery.js"></script>
					    </div>
			</nav>
<!--/script-->

		   <div class="clearfix"> </div>
</div>


<script>
var attempt = 3; 
function validate(){
var username = document.getElementById("username").value;
var password = document.getElementById("password").value;
if ( username == "admin@somaiya.edu" && password == "admin123"){
alert ("Login successfully");
window.location = "addword.php"; 
return false;
}
else{
	if(attempt>0)
	{attempt --;// Decrementing by one.
	alert("You have left "+attempt+" attempt;");}
	else
	alert("Max login attempts limit reached.");
// Disabling fields after 3 attempts.
if( attempt == 0){
document.getElementById("username").disabled = true;
document.getElementById("password").disabled = true;
document.getElementById("submit").disabled = true;
return false;
}
}
}
</script>












<br><br><br>
<h3>&#160&#160&#160&#160&#160&#160 Add Wordpair into the database.</h3><BR>
<form action="addword.php" method="POST" enctype="multipart/form-data">
<b>&#160&#160&#160&#160Wordpair :</b><br>
&#160&#160&#160&#160<input type = "text" name = "word" size="40">
<br><br>
&#160&#160&#160&#160<input type="submit" style="background-color: #E8E8E8;" name="submit" value="Add">
&#160&#160&#160&#160&#160&#160&#160&#160
<form>
<input type="button" value="Logout" onclick="window.location.href='index.php'" />
</form>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
</form>
</html>

<?php
if(isset($_POST['submit']))
{
$con=mysqli_connect("localhost","root","","pungen");
if (!$con) 
{
    die("Connection failed: " . mysqli_connect_error());
}
$sql = mysqli_query($con,"SELECT id FROM wordpair ORDER BY id DESC");
$j = mysqli_fetch_array($sql, MYSQLI_ASSOC);
$k= $j['id'];
$id= $k+1;
$word = mysqli_real_escape_string($con, $_POST['word']);
$res ="INSERT INTO wordpair(id,word) VALUES('','$word')";
if (mysqli_query($con, $res)) {
    
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

mysqli_close($con);
}
?>

















<html>				
<div class="copyright">
		<!-- container -->
		<div class="container">
			<div class="copyright-left">
			<p>©  Design by Chintan Thakkar and Priyanshi Shah</p>
			</div>
			<div class="copyright-right">
				<ul>
					<li><a href="#" class="twitter"> </a></li>
					<li><a href="#" class="twitter facebook"> </a></li>
					<li><a href="#" class="twitter chrome"> </a></li>
					<li><a href="#" class="twitter pinterest"> </a></li>
					<li><a href="#" class="twitter linkedin"> </a></li>
					<li><a href="#" class="twitter dribbble"> </a></li>
				</ul>
			</div>
			<div class="clearfix"> </div>
			
		</div>
		<!-- //container -->
				<!---->
<script type="text/javascript">
		$(document).ready(function() {
				/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
				*/
		$().UItoTop({ easingType: 'easeOutQuart' });
});
</script>
<a href="#to-top" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!----> 
	</div>
<!--/copy-rights-->
	</body>
	
</html>
