<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head
		content must come *after* these tags -->

	<title>CulturalCouncil IITK</title>

	<link rel="icon" href="<?=base_url()?>/images/favicon.ico" type="image/ico" >

	<!-- Included Bootstrap CSS Files -->
	<link rel="stylesheet" href="<?=base_url()?>/css/bootstrap.min.css" />

	<link href="<?=base_url()?>/css/font-awesome.min.css" rel="stylesheet">

	<link href="<?=base_url()?>/css/bootstrap-social.css" rel="stylesheet">

	<!-- Just include this Css file -->
	<link rel="stylesheet" href="<?=base_url()?>/css/jquery.carousel.fullscreen.css" />

	<link rel="stylesheet" href="<?=base_url()?>/css/mystyles.css" />

</head>
<body>

	<!-- This is a typical Twitter Bootstrap Carousel -->
	<!-- Carousel -->
	<div id="homeCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<!--<ol class="carousel-indicators">
			<li data-target="#homeCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#homeCarousel" data-slide-to="1"></li>
			<li data-target="#homeCarousel" data-slide-to="2"></li>
			<li data-target="#homeCarousel" data-slide-to="3"></li>
			<li data-target="#homeCarousel" data-slide-to="4"></li>
			<li data-target="#homeCarousel" data-slide-to="5"></li>
			<li data-target="#homeCarousel" data-slide-to="6"></li>
		</ol> -->

		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			<div class="item active">
				<img src="<?=base_url()?>/images/01.jpg" alt="" />
				<div class="container">
					<div class="carousel-caption">
					</div>
				</div>
			</div>
		</div>
		</div>

	<div class="global-bar">
			<div class="topBar">
			</div>
	</div>

	<div class="container parent">
		<div class="row">
			<!-- Left Sidebar START -->
			<div class="col-xs-2 leftBar alpha" style=" ">
				<!--<h2 class="logo" style="background: url('<?=base_url()?>/images/favicon.ico') no-repeat;"><a href="">	</a></h2> -->
				<img src="<?=base_url()?>/images/favicon.ico" class="logo" />

				<ul class="navigation">
					<li id="council_home" class="parent council-nav"><a href="<?php echo site_url('') ?>">Home</a></li>
					<li id="council_clubs" class="parent has-sub council-nav"><a href="">Clubs</a>
						<ul class="sub-menu col-xs-10	 alpha omega">
							<li id="music" class="council-nav"><a href="">Music</a></li>
							<li id="dance" class="council-nav"><a href="">Dance</a></li>
							<li id="dramatics" class="council-nav"><a href="">Dramatics</a></li>
						</ul>
					</li>

					<li id="page_galaxy" class="parent council-nav"><a href="">Galaxy</a></li>
					<li id="page_schedule" class="parent council-nav"><a href="">Schedule</a></li>
					<li id="page_team" class="parent council-nav"><a href="<?php echo site_url('welcome/team') ?>">Team</a></li>
					<li id="page_gallery" class="parent council-nav"><a href="">Gallery</a></li>

				</ul>

			</div>
			<!-- Left Sidebar END -->

			<div class="social rightBar omega">
        <a class="fb" target="_blank" href=""><i class="fa fa-facebook"></i></a>
        <a class="gp" target="_blank" href=""><i class="fa fa-google-plus"></i></a>
        <a class="tw" target="_blank" href=""><i class="fa fa-twitter"></i></a>
        <a class="yt" target="_blank" href=""><i class="fa fa-youtube-play"></i></a>
    </div>

		</div><!-- END of Row -->
	</div><!-- END of Container -->