<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->helper('url');
?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<title>Empire BD</title>
		<!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
		<link rel="stylesheet" href="<?php echo base_url('content/style.css');?>">
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
		
		<!-- Compiled and minified JavaScript -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
		
		
		<script>
		$(document).ready(function() {
		$(".button-collapse").sideNav();
		});
		</script>
	</head>
	
	<body>
		<main>
			<nav class="nav-center" role="navigation">
				<div class="nav-wrapper container">
					<a id="logo-container" href="#!" class="brand-logo">Logo</a>
					
					<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
					
					<ul class="right hide-on-med-and-down">
						<li class="white-text light"  ><a class="active" href="#test1">Home</a></li>
						<li class="white-text light" ><a href="#test2">Services</a></li>
						<li class="white-text light" ><a href="#test3">Work</a></li>
						<li class="white-text light" ><a href="#test4">About</a></li>
						
					</ul>
					
					
					<ul class="side-nav" id="mobile-demo">
						<li><a href="#test1">Home</a></li>
						<li><a href="#test2">Services</a></li>
						<li><a href="#test3">Work</a></li>
						<li><a href="#test4">About</a></li>
					</ul>
					
					
				</div>
			</nav>
			<nav class="nav-wrapper">
			</nav>
			<div id="upper-space">
				<div class="container">
					<div class="section">
						<div class="row">
							<div class="col s12 m6 l6 push -s12">
							<img src=<?php echo base_url('images/comp1.jpg');?>>
							</div>
							<div class="col s12 m6 l6 pull -s12">
							<br><br>
							<h1 class="center-align white-text"><strong>WE LIVE &
							<br/>
							BREATH
							<br/>
							CREATIVITY.</strong></h1>
							<p class="center-align">
								<a class="waves-effect waves-light btn-large black">View projects</a>
							</p>
							</div>
						</div>
					</div>
				</div>
			</div>
				
				<div id="middle_space">
					<div class="container">
						<div class="section">
							<div class="row">
								
								<div class="col s12 m6 l6">
									<h4 class="center">We are a digital marketing &</br>media agency.We are committed to meeting</br>your company’s needs.</h4>
									<br><br>
									<p class="light" style="text-align:justify">We did most of the heavy lifting for you to provide a default stylings that incorporate our custom components. Additionally, we refined animations and transitions to provide a smoother experience for developers.</p>
								</div>
								<div class="col s12 m6 l6">
									<div class="row">
										
										<div class="col s12 m6 l6">
											<img src=<?php echo base_url('images/im1.jpg');?>>
										</div>
										<div class="col s12 m6 l6">
											<h5 class="red-text light">Digital Marketing</h5>
											<br/>
											<p class="light">
												'm a paragraph. Click here to add your own text and edit me.
											</p>
										</div>
									</div>
									
									<div class="row">
										
										<div class="col s12 m6 l6">
											<img src=<?php echo base_url('images/im2.jpg');?>>
										</div>
										<div class="col s12 m6 l6">
											<h5 class="red-text light">Media Strategy</h5>
											<br/>
											<p class="light">
												'm a paragraph. Click here to add your own text and edit me.
											</p>
										</div>
									</div>
									<div class="row">
										<div class="col s12 m6 l6">
											<img src=<?php echo base_url('images/im3.jpg');?>>
										</div>
										<div class="col s12 m6 l6">
											<h5 class="red-text light">Consulting</h5>
											<br>
											<p class="light">
												'm a paragraph. Click here to add your own text and edit me.
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				
			</main>


			<nav class="nav-fixed">
			</nav>
			
			<footer class="page-footer black">
				
				<div class="container">
					<div class="row">
						<div class="col s12 m6 l6">
							<h5 class="white-text light">Contacts</h5>
							
							<ul>
								<li><a class="white-text light" href="#!">Link 1</a></li>
								<li><a class="white-text light" href="#!">Link 2</a></li>
								<li><a class="white-text light" href="#!">Link 3</a></li>
								<li><a class="white-text light" href="#!">Link 4</a></li>
							</ul>
							
						</div>
						
						<div class="col s12 m6 l6">
							<h5 class="white-text light">Clients</h5>
							<ul>
								<li><a class="white-text light" href="#!">Link 1</a></li>
								<li><a class="white-text light" href="#!">Link 2</a></li>
								<li><a class="white-text light" href="#!">Link 3</a></li>
								<li><a class="white-text light" href="#!">Link 4</a></li>
							</ul>
						</div>
						
					</div>
				</div>
				
				<nav class="nav-wrap">
					<p class="center light">All rights reserved Shreya K. 2017</p>
				</nav>
			</footer>
		
			
		</body>
	</html>
