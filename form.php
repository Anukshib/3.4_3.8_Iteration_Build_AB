<html>
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Sri Lanka Travel PHP Form </title>
		<meta charset="UTF-8">
		<meta name="keywords" content="HTML, CSS, JavaScript">
		<meta name="Anukshi Balasuriya" content="Sri Lankan travel Website">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<!--import the webpage's stylesheet -->
		<link rel="stylesheet" href="css/stylev3.css">
		
	</head>
	
	
	<body>
		<div id ="main" >
			
	<div class="nav" style = "display:flex;"> 

		
				<div class = "navb">
					<ul>
						<li><a href="index_v3.html">Home</a></li>
						<li><a href="#">Places to go </a>
							<ul>
								<li><a href="page2.html">Ella</a></li>
								<li><a href="page3.html">Sigiriya</a></li>
								<li><a href="galle.html">Galle</a></li>
								<li><a href="kandy.html">Kandy</a></li>

							</ul>
						</li>

						<li><a href>Things to do </a>
							<ul>
								<li><a href="kitesurfing.html">Kite Surfing</a></li>
								<li><a href="nationalparks.html">National Parks</a></li>
								<li><a href="ancientruins.html">Ancient Ruins</a></li>
								<li><a href="snorkeling.html">Snorkeling</a></li>
							</ul>
						</li>
						<li><a href="form.php">Contact us</a></li>

					</ul>

				</div>
				<div id="Menu" class="overlay" style = "z-index:1; margin-top:20px;">

					<!-- Button to close the overlay navigation -->
					<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

					<!-- Overlay content -->
					<div class="overlay-content">
						
						<a href="index_v3.html">Home</a>
						<a href="page2.html">Places to go</a>
						<a href="kitesurfing.html"> Things to do</a>
						<a href="form.php">Contact Us</a>
						

					</div>

				</div>
				<!-- Use any element to open/show the overlay navigation menu -->
				<span style="cursor:pointer, right:0;" onclick="openNav()">
					<div class="container" stle = "margin-top:30px;">
						<div class="bar1"></div>
						<div class="bar2"></div>
						<div class="bar3"></div>
					</div>
				</span>	


			</div>
<div class="header1"> <h1>CONTACT US</h1> </div> 
			
			
			<?php
			//Get the connection to the database...
			require_once("13dit_phpform_mysqli.php");
			?>
		
		<!--Form-->
			<div class="contact_container">
				<form action="connect.php" method="post">
					
					<!-- Name Field -->
					
					<div class="row">

						<div class="box">

							<label for="name">Full name</label>

						</div>
						<div class="box2">

							<input type="text" id="name" name="name" placeholder="Your full name">

						</div>
						
					</div>
					
					<!-- Email Field -->
					
					<div class="row">

						<div class="box">

							<label for="email">Email Address</label>

						</div>
						
						<div class="box2">

							<input type="text" id="email" name="email" placeholder="Youre email address">

						</div>
					</div>
					
					<!--Contact Number Fioeld -->
					
					<div class="row">

						<div class="box">

							<label for="phone">Contact number</label>
						</div>
						
						<div class="box2">

							<input type="text" id="phone" name="phone" placeholder="A contact number ">

						</div>
					</div>
					
					<!--Subject field-->
					
					<div class="row">

						<div class="box">

							<label for="mesage">Inquiries</label>

						</div>
						<div class="box2">

							<textarea id="body" name="message" placeholder="Any questions.." style="height: 200px"></textarea>

						</div>
					</div>
					
					<!--Submit Button -->
					
					<div class="row">
					<input type="submit" value="submit">	
					</div>
				</form>
			</div>
		</div>
					<!--copyright statement-->

		<div class="footer">
		<p> Anukshi Balasuriya © copyright, all rights reserved, 2024</p>
		</div>
				<script>
			function openNav() {
				document.getElementById("Menu").style.width = "100%";
				document.getElementById("main").style.marginLeft = "250px";
			}

			function closeNav() {
				document.getElementById("Menu").style.width = "0%";
				document.getElementById("main").style.marginLeft= "0";
			}
		</script>	
	</body>
</html>			
			
			
			