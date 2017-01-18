
<!DOCTYPE html>
<html>
																	<!--code for displaying top puns-->
<head>
<title>Education Tutorial a Educational Category Flat Bootstrap Responsive Website Template | Gallery :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta charset="UTF-8" />
<meta name="keywords" content="Education Tutorial Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--bootstrap-->
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
								<!--<li><a href="about.html"><span data-hover="About">About</span></a></li>-->
								<!--<li><a href="typography.html"><span data-hover="Shortcodes">Shortcodes</span></a></li>-->
								<li><a href="gallery.php"><span data-hover="Gallery">Top Puns</span></a></li>
								<!--<li><a href="contact.html"><span data-hover="Contact">Contact</span></a></li>-->
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


<!-- Top Navigation 
<div class="banner banner5"> -->
	<div class="container">
	<h2 style="margin-left: 44%;">Gallery</h2>
	</div>

<!--header   </div>-->
<!-- gallery -->
		<div class="gallery">
			<!-- Page Starts Here -->
			<div class="content">
				<div class="container">
					<div class="gallery">
						<div class="gallery-top">
							<div class="view view-tenth">
								<img src="images/g1.jpg" alt=""/>
								<div class="mask">
								<?php
								$con=mysqli_connect("localhost","root","","pungen");
								$res = mysqli_query($con,"SELECT id FROM knock ORDER BY rating DESC");
								$x=0;
								while($row =  mysqli_fetch_array($res,MYSQLI_ASSOC))
								{
									$arr1[$x]=$row['id'];
									$x=$x+1;
								}
								/*
									$j = mysqli_fetch_array($res, MYSQLI_ASSOC);
									$k = $j['id'];
									//$id=$k;*/
								$result = mysqli_query($con,"SELECT question as n FROM knock WHERE id=$arr1[0]"); 
							while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
							{  
								$question=$row['n'] . ' ';
							}
							
							$result = mysqli_query($con,"SELECT answer as n FROM knock WHERE id=$arr1[0]"); 
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
								</p>
									
								</div>
							</div>
							<div class="view view-tenth">
								<img src="images/smile.jpg" alt=""/>
								<div class="mask">
									<?php 
									$res = mysqli_query($con,"SELECT id FROM animal ORDER BY rating DESC");
									
									
									$y=0;
								while($row = mysqli_fetch_assoc($res))
								{
									$arr2[$y]=$row['id'];
									$y=$y+1;
								}
									
									
									
									
									
								/*	$j = mysqli_fetch_array($res, MYSQLI_ASSOC);
									$a = $j['id'];
									//$id=$k;*/
								$result = mysqli_query($con,"SELECT question as n FROM animal WHERE id=$arr2[0]"); 
							while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
							{  
								$question=$row['n'] . ' ';
							}
							
							$result = mysqli_query($con,"SELECT answer as n FROM animal WHERE id=$arr2[0]"); 
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
								</p>
								</div>
							</div>
							<div class="view view-tenth">
								<img src="images/g3.jpg" alt=""/>
								<div class="mask">
									<?php 
									$res = mysqli_query($con,"SELECT id FROM lol ORDER BY rating DESC");
									
									
									$z=0;
								while($row = mysqli_fetch_assoc($res))
								{
									$arr3[$z]=$row['id'];
									$z=$z+1;
								}
									
									
									
								/*	$j = mysqli_fetch_array($res, MYSQLI_ASSOC);
									$l = $j['id'];
									//$id=$k;*/
								$result = mysqli_query($con,"SELECT question as n FROM lol WHERE id=$arr3[0]"); 
							while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
							{  
								$question=$row['n'] . ' ';
							}
							
							$result = mysqli_query($con,"SELECT answer as n FROM lol WHERE id=$arr3[0]"); 
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
								</p>
								</div>
							</div>
							<div class="view view-tenth">
								<img src="images/g4.jpg" alt=""/>
								<div class="mask">
									<?php 
								$res = mysqli_query($con,"SELECT id FROM riddles ORDER BY id DESC");
								
								
								
								$z1=0;
								while($row = mysqli_fetch_assoc($res))
								{
									$arr4[$z1]=$row['id'];
									$z1=$z1+1;
								}
								
								
								
								
								
								
								
									/*$j = mysqli_fetch_array($res, MYSQLI_ASSOC);
									$r = $j['id'];
									//$id=$k;*/
								$result = mysqli_query($con,"SELECT question as n FROM riddles WHERE id=$arr4[0]"); 
							while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
							{  
								$question=$row['n'] . ' ';
							}
							
							$result = mysqli_query($con,"SELECT answer as n FROM riddles WHERE id=$arr4[0]"); 
							while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
							{    
								$answer=$row['n'] . ' ';
							}
			$array =  (explode("\n",$question));
			foreach ($array as $item) {?>
			<p><?php
			echo "<ul>$item</ul>";}
			?><br><?php
			echo $answer;
								?>
								</p>
								</div>
							</div>
							
							
							
							
							<div class="view view-tenth">
								<img src="images/g5.jpg" alt=""/>
								<div class="mask">
									<?php
									
									//$k--;
									//$id=$k;
									$x=1;
								$result = mysqli_query($con,"SELECT question as n FROM knock WHERE id=$arr1[1]"); 
							while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
							{  
								$question=$row['n'] . ' ';
								//$question = filter_var($question, FILTER_SANITIZE_STRING);
							}
							$result = mysqli_query($con,"SELECT answer as n FROM knock WHERE id=$arr1[1]"); 
							while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
							{    
								$answer=$row['n'] . ' ';
								//$answer = filter_var($answer, FILTER_SANITIZE_STRING);
							}
			$array =  (explode("\n",$question));
			foreach ($array as $item) {?>
			<p><?php
			echo "<ul>".$item."</ul>";}
			echo $answer;
								?>
								
								
								

								</p>
								</div>
							</div>
							<div class="view view-tenth">
								<img src="images/g6.jpg" alt=""/>
								<div class="mask">
									<?php
									
									//$a--;
									//$id=$k;
								$result = mysqli_query($con,"SELECT question as n FROM animal WHERE id=$arr2[1]"); 
							while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
							{  
								$question=$row['n'] . ' ';
							}
							
							$result = mysqli_query($con,"SELECT answer as n FROM animal WHERE id=$arr2[1]"); 
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
								</p>
								</div>
							</div>
							<div class="view view-tenth">
								<img src="images/g7.jpg" alt=""/>
								<div class="mask">
									<?php
									
									//$l--;
									//$id=$k;
								$result = mysqli_query($con,"SELECT question as n FROM lol WHERE id=$arr3[1]"); 
							while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
							{  
								$question=$row['n'] . ' ';
							}
							
							$result = mysqli_query($con,"SELECT answer as n FROM lol WHERE id=$arr3[1]"); 
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
								</p>
								</div>
							</div>
							<div class="view view-tenth">
								<img src="images/g8.jpg" alt=""/>
								<div class="mask">
									<?php
									
									//$r--;
									//$id=$k;
								$result = mysqli_query($con,"SELECT question as n FROM riddles WHERE id=$arr4[1]"); 
							while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
							{  
								$question=$row['n'] . ' ';
							}
							
							$result = mysqli_query($con,"SELECT answer as n FROM riddles WHERE id=$arr4[1]"); 
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
								</p>
								</div>
							</div>
							<div class="view view-tenth">
								<img src="images/g9.jpg" alt=""/>
								<div class="mask">
									<?php
									
									//$k--;
									//$id=$k;
								$result = mysqli_query($con,"SELECT question as n FROM knock WHERE id=$arr1[2]"); 
							while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
							{  
								$question=$row['n'] . ' ';
							}
							
							$result = mysqli_query($con,"SELECT answer as n FROM knock WHERE id=$arr1[2]"); 
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
								</p>
								</div>
							</div>
							<div class="view view-tenth">
								<img src="images/g10.jpg" alt=""/>
								<div class="mask">
									<?php
									
									//$a--;
									//$id=$k;
								$result = mysqli_query($con,"SELECT question as n FROM animal WHERE id=$arr2[2]"); 
							while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
							{  
								$question=$row['n'] . ' ';
							}
							
							$result = mysqli_query($con,"SELECT answer as n FROM animal WHERE id=$arr2[2]"); 
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
								</p>
								</div>
							</div>
							<div class="view view-tenth">
								<img src="images/g11.jpg" alt=""/>
								<div class="mask">
									<?php
									
									//$l--;
									//$id=$k;
								$result = mysqli_query($con,"SELECT question as n FROM lol WHERE id=$arr3[2]"); 
							while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
							{  
								$question=$row['n'] . ' ';
							}
							
							$result = mysqli_query($con,"SELECT answer as n FROM lol WHERE id=$arr3[2]"); 
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
								</p>
								</div>
							</div>
							<div class="view view-tenth">
								<img src="images/g12.jpg" alt="" />
								<div class="mask">
									<?php
									
									//$r--;
									//$id=$k;
								$result = mysqli_query($con,"SELECT question as n FROM riddles WHERE id=$arr4[2]"); 
							while($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
							{  
								$question=$row['n'] . ' ';
							}
							
							$result = mysqli_query($con,"SELECT answer as n FROM riddles WHERE id=$arr4[2]"); 
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
								</p>
								</div>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
			</div>
			<!-- Page Ends Here -->
		</div>
		<!-- //gallery -->
<!--footer-->
<div class="footer">
		<!-- container -->
		<div class="container">
			<div class="col-md-6 footer-left">
				<ul>
					<li><a href="index.php">Home</a></li>
					<!--<li><a href="about.html">About</a></li>
					<li><a href="typography.html">Shortcodes</a></li>-->
					<li><a href="gallery.php">Top Puns</a></li>
					<!--<li><a href="contact.html">Contact</a></li>-->
				</ul>
				<form>
					<input type="text" placeholder="Email" required="">
					<input type="submit" value="Subscribe">
				</form>
			</div>
			<div class="col-md-3 footer-middle">
				<h3>Address</h3>
				<div class="address">
					<p>KJ SOMAIYA COLLEGE
						<span>OF ENGINEERING.</span>
					</p>
				</div>
				<div class="phone">
					<p>022-25698765</p>
				</div>
			</div>
			<div class="col-md-3 footer-right">
				</div>
			<div class="clearfix"> </div>	
		</div>
		<!-- //container -->
	</div>
<!--/footer-->
<!--copy-rights-->
<div class="copyright">
		<!-- container -->
		<div class="container">
			<div class="copyright-left">
			<p> ©  Design by Chintan Thakkar and Priyanshi Shah</p>
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
