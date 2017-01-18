<!doctype html>
<?php 
	session_start(); 
	$_SESSION['temp']=1;?>
<html lang="en">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<head>
<title></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
<!--hover-girds-->
<link rel="stylesheet" type="text/css" href="css/default.css" />
<link rel="stylesheet" type="text/css" href="css/component.css" />
<script src="js/modernizr.custom.js"></script>
<!--/hover-grids-->
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



<!-- Top Navigation -->
<div class="banner">
	<div class="container">
	<script src="js/responsiveslides.min.js"></script>
 <script>
    $(function () {
      $("#slider").responsiveSlides({
      	auto: true,
      	nav: true,
      	speed: 500,
        namespace: "callbacks",
        pager: true,
      });
    });
  </script>
<div class="slider">
		   <div class="callbacks_container">
			  <ul class="rslides" id="slider">
				 <li>	    
				 	<h3>Laugh out Loud</h3>      
					 <p>Laughing is and will always be the best form of therapy.</p>		          
					<div class="readmore">
				 	<!--<a href="about.html">Read More<i class="glyphicon glyphicon-menu-right"> </i></a>-->
				 	</div>
				 </li>
				 <li>	
				 	<h3>Smile goes a mile</h3>            
					 <p>Life is better with a laughter</p>		          
				 <div class="readmore">
				<!-- <a href="about.html">Read More<i class="glyphicon glyphicon-menu-right"> </i></a>-->
				 </div>
				 </li>
				 <li>	
				 	<h3>Laugh and learn</h3>            
					 <p>Storytelling Education is the process of facilitating learning. Knowledge, skills, values, beliefs, and habits of a group of people are transferred to other people, through.</p>		          
				<div class="readmore">
				 <!--<a href="about.html">Read More<i class="glyphicon glyphicon-menu-right"> </i></a>-->
				 </div>
				 </li>
			  </ul>
		  </div>
	  </div>
</div>			
	</div>
<!--header-->
<!--weelcome-->
<style>
ul
{
    list-style-type: none;
}
</style>
<?php
$choice=rand(1,5);
if ($choice==2)
{
	$con=mysqli_connect("localhost","root","","pungen");
	$max=mysqli_num_rows(mysqli_query($con,"SELECT * FROM knock"));
	$i=rand(1,$max);
	$_SESSION["rate"] = $i;
	$_SESSION["ch"] = "knock"
	?>
	<br>
	<?php
		 $result=mysqli_query($con,"SELECT * FROM knock WHERE id='$i'");
											while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
										    {
												$question = $row['question'];
												$answer = $row['answer'];
											}
}	


if ($choice==5)
{
	$con=mysqli_connect("localhost","root","","pungen");
	$max=mysqli_num_rows(mysqli_query($con,"SELECT * FROM food"));
	$i=rand(1,$max);
	$_SESSION["rate"] = $i;
	$_SESSION["ch"] = "food"
	?>
	<br>
	<?php
		 $result=mysqli_query($con,"SELECT * FROM food WHERE id='$i'");
											while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
										    {
												$question = $row['question'];
												$answer = $row['answer'];
											}
}



if ($choice==1)
{
	$con=mysqli_connect("localhost","root","","pungen");
	$max=mysqli_num_rows(mysqli_query($con,"SELECT * FROM animal"));
	$i=rand(1,$max);
	$_SESSION["rate"] = $i;
	$_SESSION["ch"] = "animal"
	?>
	<br>
	<?php
		 $result=mysqli_query($con,"SELECT * FROM animal WHERE id='$i'");
											while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
										    {
												$question = $row['question'];
												$answer = $row['answer'];
											}
}
if ($choice==3)
{
	$con=mysqli_connect("localhost","root","","pungen");
	$max=mysqli_num_rows(mysqli_query($con,"SELECT * FROM lol"));
	$i=rand(1,$max);
	$_SESSION["rate"] = $i;
	$_SESSION["ch"] = "lol"
	?>
	<br>
	<?php
		 $result=mysqli_query($con,"SELECT * FROM lol WHERE id='$i'");
											while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
										    {
												$question = $row['question'];
												$answer = $row['answer'];
											}
}
if ($choice==4)
{
	$con=mysqli_connect("localhost","root","","pungen");
	$max=mysqli_num_rows(mysqli_query($con,"SELECT * FROM riddles"));
	$i=rand(1,$max);
	$_SESSION["rate"] = $i;
	$_SESSION["ch"] = "riddles"
	?>
	<br>
	<?php
		 $result=mysqli_query($con,"SELECT * FROM riddles WHERE id='$i'");
											while($row = mysqli_fetch_array($result,MYSQLI_ASSOC))
										    {
												$question = $row['question'];
												$answer = $row['answer'];
											}
}
?>
	
	
<div class="welcome">
	<div class="container">
		<h2>Welcome To The Laughter Club </h2>
		<p><font color="#0000e6" size="6">Joke of the day:</font><br>
		<font color="#2e2e1f" size="5">
		<?php
			$array =  (explode("\n",$question));
			foreach ($array as $item) {
			echo "<ul>$item</ul>";}
		?></font>
		<font color="#89895d" size="4">
		<?php
			echo "".$answer;
		?></font>
		</p>
	</div>
</div>



<h3 align="center"><font color="red" size="5">Rate the joke:</font></h3>
<h4 style="margin: 0px -5px 10px 578px">
<form action="try2.php" method="post" onsubmit="phunction()">
  <input type="radio" name="rating" value="excellent" checked> I am loving it!<br>
  <input type="radio" name="rating" value="good"> Good<br>
  <input type="radio" name="rating" value="average"> Average<br>
  <input type="radio" name="rating" value="bad"> Bad<br><br>
 <!-- <input type="submit">-->
  <button name="submit" type="submit" value="submit">Rate it!</button>
</form> </h4>
<script>


function phunction()
{
	alert("We appreciate you for the feedback as it will help us improve :)");
	window.location.href="index.php";
}
</script>


<!--/welcome-->

<div class="welcome-grids">
	<div class="container">
		<div class="welcome-gridsinfo">
		<!--<div class="col-md-3 welcome-grid">
			 <i class="glyphicon glyphicon-pencil"> </i> 
			 <img scr="C:\xampp\htdocs\web\knock.jpg" width="50" height="50">
			<h3> Knock, knock. Who's there?</h3>
			<p> We have tons of knock knock jokes that are sure to tickle the tummies of your little pranksters!</p>
		    
		</div>
		
		<div class="col-md-3 welcome-grid">
			<i class="glyphicon glyphicon-font"> </i>
			<h3></h3>
			<p></p>
		</div>
		<div class="col-md-3 welcome-grid">
			<i class="glyphicon glyphicon-blackboard"> </i>
			<h3></h3>
			<p></p>
		</div>
		<div class="col-md-3 welcome-grid">
			<i class="glyphicon glyphicon-education"> </i>
			<h3></h3>
			<p></p>
		</div>
		<div class="clearfix"> </div>
		</div>
	</div>
</div>-->
<p><h2>Choose the Category</h2></p>
<!--effect-grid-->

<script type="text/javascript">
$(function() {
	$('body').on('click','.closePopup', function() {
		$('.action input').css({backgroundColor: 'white'}).fadeOut(300, function() {
			$('.popupElement').remove()
		});
	});
	$('a.pop').click(function(e) {
		e.preventDefault();
		var overlay = $('<div style="position:fixed"/>').addClass('overlay').addClass('popupElement');
		$('body').append(overlay);
		var popup = $('<div/>').addClass('popup').addClass('popupElement').css({left: '-999px'});
		var html = '<div class="action"><input type="button" value="CLOSE" class="closePopup"/></div><img src="' + $(this).attr('href') + '" />';
		popup.html(html);
		$('body').append(popup);
		var left = ($(window).width() - popup.width()) >> 1;
		var top = ($(window).height() - popup.height()) >> 1;
		popup.css({left: left + 'px', top: top + 'px'});
		$("html, body").animate({
              scrollTop: 0
          }, 600);
	});
});
</script>
<style type="text/css">
.overlay {
	background: #000000;
	position: absolute;
	left: 0;
	right: 0;
	bottom: 0;
	top: 0;
	opacity: 0.80;
	filter: alpha(opacity=95);
	z-index: 1;
}
.popup {
	background: #000000;
	position: absolute;
	z-index: 1000;
}
.popup img {
	width:800px;
	display: block;
	margin-bottom:0px;
}
.popup div.action {
	text-align: right;
}
.popup div.action input {
	background: #000000;
	color: white;
}


</style>

<head>
<style type="text/css">
.button
{
	width: 150px;
	padding: 10px;
	background-color: #red;
	box-shadow: -8px 8px 10px 3px rgba(0,0,0,0.2);
    font-weight:bold;
	text-decoration:none;
}
#cover{
    position:fixed;
    top:0;
    left:0;
    background:rgba(0,0,0,0.6);
    z-index:5;
    width:100%;
    height:100%;
    display:none;
}
#loginScreen
{
    height:380px;
    width:340px;
    margin:0 auto;
    position:relative;
    z-index:10;
    display:none;
	background: url(lol.png) no-repeat center;
	border:5px solid #cccccc;
	border-radius:10px;
}
#loginScreen:target, #loginScreen:target + #cover{
    display:block;
    opacity:5;
}
.cancel
{
    display:block;
    position:absolute;
    top:3px;
    right:2px;
    background:rgb(245,245,245);
    color:black;
    height:30px;
    width:35px;
    font-size:30px;
    text-decoration:none;
    text-align:center;
    font-weight:bold;
}
</style>
</head>
<body>
<div id="cover" >
</div>
</body>




<div class="effect-grid">
	<div class="container">
		<ul class="grid cs-style-5">
				<li>
					<figure>
						<img src="images/knock3.jpg" height="280" width="400" alt="img03">
						<figcaption>
							<h3>Knock knock jokes</h3>
							<a class="button" href="category_joke_disp.php?tname=knock">Get some more
							</a>
							<div id="loginScreen">
    <a href="#" class="cancel">&times;</a> </div>
						</figcaption>
					</figure>
				</li>
				
				
				
				<li>
					<figure>
						<img src="images/pingu.gif" height="280" width="400" alt="img04">
						<figcaption>
							<h3>Animal jokes</h3>
							<a href="category_joke_disp.php?tname=animal">Get some more</a>
						</figcaption>
					</figure>
				</li>
				
				
				<li>
					<figure>
						<img src="images/a3.jpg" alt="img01">
						<figcaption>
							<h3>Rapid Fire questions</h3>			
							<a href="category_joke_disp.php?tname=lol">Read More</a>
						</figcaption>
					</figure>
				</li>
				
				
				<li>
					<figure>
						<img src="images/a4.jpg" alt="img02">
						<figcaption>
							<h3>Punning riddles</h3>			
							<a href="category_joke_disp.php?tname=generated">Read More</a>
						</figcaption>
					</figure>
				</li>
				
				
				<li>
					<figure>
						<img src="images/qtn.gif" alt="img06" width="400" height="280">
						<figcaption>
							<h3>Riddles</h3>			
							<a href="category_joke_disp.php?tname=riddles">Read More</a>
						</figcaption>
					</figure>
				</li>
				
				
				<li>
					<figure>
						<img src="images/a6.gif" alt="img05">
						<figcaption>
							<h3>Food Jokes</h3>
							<a href="category_joke_disp.php?tname=food">Read More</a>
						</figcaption>
					</figure>
				</li>
			</ul>
	</div>
</div>
<div class="footer">
		<!-- container -->
		<div class="container">
			<div class="col-md-6 footer-left">
				<ul>
					<li><a href="index.php">Home</a></li>
					<!--<li><a href="about.html">About</a></li>
					<li><a href="typography.html">Short</a></li>-->
					<li><a href="gallery.php">Top Puns</a></li>
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
				<h3>Book Info</h3>
				<p></p>
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
