<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=No">
    <meta name="description" content="Start your development with Rubic landing page.">
    <meta name="author" content="Devcrud">
    <title>Rubic Landing page | Free Bootstrap 4.1 landing page</title>
    <!-- font icons -->
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
    <!-- Bootstrap + Rubic main styles -->
	<link rel="stylesheet" href="assets/css/rubic.css">
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">

    <nav id="scrollspy" class="navbar page-navbar navbar-dark navbar-expand-md fixed-top" data-spy="affix" data-offset-top="20">
        <div class="container">
            <a class="navbar-brand" ><strong class="text-primary">SIGN LANGUAGE </strong><span class="text-light">DETECTION</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    
                   
                </ul>
            </div>
        </div>
    </nav>
	
	<section class="section" id="contact" style="min-height:600px;">
        <div class="container text-center">

            <div class="row h-100 align-items-center">
			 <div class="col-md-12">
			 <br><br><br>
            <h6 class="display-4 has-line"> </h6>
			<br><br><br>
			</div>
		
		
		 <div class="col-md-6  lign-items-center">
             <div class="header-content">
			<form method="POST"  action='upload.php' enctype="multipart/form-data"> 
				<button type="submit" class="btn btn-danger btn-lg" name="upload">upload Image<br></button><br><br>	
			</form>
		</div>	</div>

			
			
		 <div class="col-md-6 lign-items-center">
			  <div class="header-content">
				<form method="POST"  action='' enctype="multipart/form-data"> 
					<button type="submit" class="btn btn-success btn-lg" name="webcam">WebCam<br></button><br><br>	
				</form>
			</div>
		</div>
			
			
		
			 </div>
        </div>
    </section>
	<?php

			set_time_limit(0);
			if(isset($_POST['webcam']))
			{
				
			
				$python = `python classify_webcam.py`;

			
			}  
			
			?>
    
	<?php
	#include("footer.php");
	?>
	
	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
    <!-- bootstrap 3 affix -->
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Rubic js -->
    <script src="assets/js/rubic.js"></script>

</body>
</html>
