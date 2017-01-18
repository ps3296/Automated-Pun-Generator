
<!doctype html>
<?php      															//for displaying jokes on clicking previous button
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

				<?php
				$tname=$_SESSION["ch"]
				?>
<!-- Top Navigation -->

<!--header-->
		<!-- contact -->
		<div class="contact">
			<!-- container -->
			<div class="container1">
				<div class="contact-info">
					<u><h3 class="c-text">				
					
				<div align="center"><?php echo " "; echo " "; echo "  "; echo $_SESSION['ch']," Jokes"; echo " "; echo " "; echo " ";?></div>
				 </b>
				</u></h3>
					<br>
				</div>
				
				
<?if($_SESSION['temp']!=2) {?>	
<div align="left">
<form action="category_joke_disp2.php?tname=<?php echo $_SESSION[ch];?>">
	<?php/* $_SESSION['temp']=$_SESSION['temp']-1;*/?>
    <input type="submit" value="Previous">
</form>
</div>
<? } ?>


<div align="right">
<form action="category_joke_disp1.php?tname=<?php echo $_SESSION[ch];?>">
	<?php/* $_SESSION['temp']=$_SESSION['temp']+1;*/?>
    <input type="submit" value="Next">
</form>
</div>
				
				
				
				 <div class="span9">
                    <div class="content">
                        <div class="module">
                            <!--<div class="module-head">
                                <h3>
                                    KNOCK KNOCK</h3>
                            </div>
							<div class="module-option clearfix">
                                <form>
                              <div class="input-append pull-left">                                
                               </div>
                                </form>
                                <h3 align="right"><a href="advertisements_all.php" class="btn btn-default" style="position:relative; left: -20px;">VIEW ALL </a></h3><br>
                                   
                                </div>-->
								<div class="module-option clearfix">
                                <form>
                              <div class="input-append pull-left">                                
                               </div>
                                </form>
                                <!--<h3 align="right"><a href="advertisements_all.php" class="btn btn-default" style="position:relative; left: -20px;">VIEW ALL </a></h3><br>-->
                                   
                                </div>
                            <div class="module-body">
							<?php
							$con=mysqli_connect("localhost","root","","pungen");
										
										
									/*$res = mysqli_query($con,"SELECT id FROM $tname ORDER BY id DESC limit 1");
									if (!$res) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
									$j = mysqli_fetch_array($res, MYSQLI_ASSOC);
									$k = $j['id'];
									$id=$k;
								
								$_SESSION["rate"]= $id;
								//echo $_SESSION["tn"];
								//echo $_SESSION["id"];*/
						/*for($i=$k;$i>($k-1)&&$i>0;$i--)
						{*/
							$var1=$_SESSION['temp'];
							$var1=$var1-1;
							echo $var1;
							$result = mysqli_query($con,"SELECT question as n FROM $_SESSION[ch] WHERE id=$var1"); 
							if (!$result) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}
else{
							while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
							{  
								$question=$row['n'] . ' ';
							}
							
							$result = mysqli_query($con,"SELECT answer as n FROM $_SESSION[ch] WHERE id=$var1"); 
							while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
							{    
								$answer=$row['n'] . ' ';
							}
							$_SESSION['temp']=$var1;
							
								
							/*$result = mysqli_query($con,"SELECT image FROM advertisement WHERE id=$i"); 
							while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
							{  
							    $a="../backend/";
								$image=$row['image'] . ' ';
								$image=$a.$image;
							}
							*/
}
							
							?>
                                <div class="row-fluid">
                                  <!--  <div class="span4"> -->
                                        <div class="media user">
                                            
                                            <div class="media-body">
                                                
                                                <p>
                                                    <small  style="margin-left:40%;" class="muted">  
			<div align="center">
			<!--<font size="10" color="blue">-->
			<?php
			if($_SESSION['ch']=="knock" or $_SESSION['ch']=="food")
			{
			$array =  (explode("\n",$question));
			foreach ($array as $item) {
			echo "<ul>$item</ul>";}
			?></div>
			<form action="cat.php?tname=<?php echo $_SESSION[ch];?>" method="post"> <!--onsubmit="phunction()-->
										<h4 style="margin: 0px -5px 10px 557px">
										<input type="radio" name="rating" value="excellent" checked> I am loving it!<br>
										<input type="radio" name="rating" value="good"> Good<br>
										<input type="radio" name="rating" value="average"> Average<br>
										<input type="radio" name="rating" value="bad"> Bad<br><br>
										<button name="submit" type="submit" value="submit">Rate it!</button></h4>
										</form> </h4>
										<?php
			}
			else {?>
				<div align="center">
			<?php echo $question;} ?>
				</div>
				
			<?php//echo $answer;
		?></small><br></div>
                                      
										<?php
										if($_SESSION['ch']!="knock" and $_SESSION['ch']!="food")
										{
										?>
										<h4 style="margin: 0px -5px 10px 500px">
										<form action="result.php" method="post">
										<input type="text"name="answer" required placeholder="Enter your answer here...">
										<button name="submit" type="submit" value="submit">Go</button></h4><?php
										}
										?>
										<br><br>
										</form> </h4>
										 </p>
										</div>
									 </div>
                                </div>
                                <br />
                      <?php
					  /*
						}*/
						
					?>
						
											
                                
								</div>
								</div>
                    <!--/.content-->
                </div>
				
				
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
