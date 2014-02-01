<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Apartment MAnagement Software</title>
		<link rel="stylesheet" type="text/css" href="bootstrap-Flat-UI-Orange.css"/>
		<link rel="stylesheet" type="text/css" href="main.css"/>
	</head>
	<body>
		<div class="navbar">
			<div class="navbar-inner">
				<a class="brand" href="#">RealEstate</a>
				<ul class="nav">
					<li>
						<a href="contactus.php">Contact Us</a>
					</li>
				</ul>
			</div>
		</div>
		<!-- End of Navbar -->
		<div class="content_holder">
			<div id="mainmenu">
				<img src="images/logo2.jpg" width="200" height="200">
				<ul class="nav pull-right">
					<li>
						<input type="button" value="Sign in" class="btn btn-primary btn-large" id="loginbutton"/>
					</li>
				</ul>
			</div>
			<hr/>
			<div id="content">
				<div id="myCarousel" class="carousel slide">
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
						<li data-target="#myCarousel" data-slide-to="1"></li>
						<li data-target="#myCarousel" data-slide-to="2"></li>
					</ol>
					<div class="carousel-inner">
						<div class="active item">
							<img src="images/Snowed-House-HD-Wallpaper-Kenya-for-Computers.jpg">
						</div>
						<div class="item">
							<img src="images/HOUSE5.jpg">
						</div>
						<div class="item">
							<img src="images/HOUSE6.jpg">
						</div>
					</div>
					<a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					<a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
				</div>

				<div id="registration">
					<p class="lead">
						Manage Your Houses and apartments,
						<br/>
						Get Started below.
					</p>
					<form action="controller.php" method="post">
						<table>
							<tr>
								<td>First Name</td>
								<td>
								<input type="text" name="firstname" id="firstname"/>
								</td>
							</tr>
							<tr>
								<td>Second Name</td>
								<td>
								<input type="text" name="secondname" id="secondname"/>
								</td>
							</tr>
							<tr>
								<td>ID number</td>
								<td>
								<input type="text" name="idnumber" id="idnumber"/>
								</td>
							</tr>
							<tr>
								<td>Phone Number</td>
								<td>
								<input type="text" name="phonenumber" id="phonenumber"/>
								</td>
							</tr>

							<tr>
								<td>Location</td>

								<td>
								<input type="text" name="location" id="location"/>
								</td>
							</tr>
							<tr>
								<td>Email</td>
								<td>
								<input type="text" name="email" id="email"/>
								</td>
							</tr>

							<tr>
								<td>
								<input type="button" value="Register" class="btn btn-primary btn-large"/>
								</td>
							</tr>
						</table>

					</form>
				</div>
			</div>
			<!-- Login form -->
			<div class="modal hide fade" id="loginModal">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
						&times;
					</button>
					<h3>Login</h3>
				</div>
				<div class="modal-body" id="loginModal" align="center">
					<div id="resp"></div>
					<form id="loginform">
						<p>
							Username
							<br/>
							<input type="text" name="username" id="username"/>
						</p>
						<p>
							Password
							<br/>
							<input type="password" name="password" id="password"/>
						</p>
					</form>
				</div>
				<div class="modal-footer">
					<a href="#" class="btn btn-primary" id="loginuser">Login</a>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="jquery1.9.js"></script>
		<script type="text/javascript" src="bootstrap.min.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$('.carousel').carousel({
					interval : 4000
				});

				$("#loginbutton").click(function() {
					$('#loginModal').modal();
				});
				
				$("#loginuser").click(function(){
					
					var username=$("#username").val();
					var password=$("#password").val();
					
					if(username=="" || password==""){
						$("#resp").html("<div class='alert alert-error'>Please fill in all fields</div>s");
					}else{
						
					}
					
				});
			});
		</script>
	</body>
</html>

