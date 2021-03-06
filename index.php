<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<title>Novanto Ji</title>
<link rel="stylesheet" href="css/skeleton.css"/>
<link rel="stylesheet" href="css/base.css"/>
<link rel="stylesheet" href="css/layout.css"/>
<link rel="stylesheet" href="css/bjqs.css"/>
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script src="js/bjqs-1.3.js"></script>
<script>
	jQuery(document).ready(function($) {
	    $('#content').bjqs({
	    	'animtype' : 'slide',
	    	'animspeed' : 10000, 
	    	'animduration' : 550, 
	    	'automatic' : false,
	        'height' : 600,
	        'width' : 940,
	        'showcontrols' : false,
	        'responsive' : true
	    });
	    $('.bjqs-markers').prependTo($('#menu'));
	});

	window.onload = function(){ document.getElementById('loader').style.display = "none"; } 
</script>
</head>
<body>
	<header>
		<div class="container grid">
			<div id="name" class="five columns alpha"><p>novanto ji</p></div>
			<div id="menu" class="ten columns omega">
				
			</div>
		</div>
	</header>	
	<div class="container grid">
		<div class="sixteen columns clearfix" id="content">
			<ul class="bjqs">
				<li class="content-child">
					<div class="two-third column alpha">
						<h2>Howdy!</h2>
						<p>As this is a one-page portofolio website, you won't be needing to either scroll down or up to navigate, made by <a href="http://getskeleton.com"><strong>skeleton</strong></a>, which supposed to be a responsive css framework. </p>
						<p id='cheers'>Feel free to browse my site. Cheers!</p>
					</div>
				</li>
				<li class="content-child"  id="about">
					<h2>HELLO!</h2>
						<div class="circle"><img src="images/portofoto.png"></div>
					<div id="me">
						<p class="mid">My Name is Novanto Ji,</p>
						<p class="mid">A web developer, newbie system administrator, network security enthusiast and soon-to-be-Bachelor in Computer Science, specifically majoring in Information Systems at University of Indonesia.<br><br>You can follow me on social networks and get to know more about me by clicking at contact on menu tab above.</p>
						<p class="mid"><br>I build hand-coded, responsive websites, with a focus on web standards. And I am still honing my skills on Mobile Application Development in order to adapt with the current needs of many workplaces.</p>
					</div>
				</li>
				<li class="content-child" id="works">
					<div class="one-third column alpha">
						<h3>WEBSITE DEVELOPMENT</h3>
					</div>
					<div class="one-third column">
						<h3>SYSTEM ADMINISTRATION</h3>
					</div>
					<div class="one-third column omega">
						<h3>SOFTWARE DEVELOPMENT</h3>
					</div>
				</li>
				<li class="content-child" id="contact">
					<div class="mid">
						<h2 class='cheader'>SAY HELLO!</h2><br>
						<p>Interested in hiring me?</p><br>
						<p>You can contact me on below:</p><br><br>
						<p>
							<a href="https://facebook.com/novanto.ji"><img src="images/facebook.jpg" class="social"></a>
							<a href="https://twitter.com/novantonono"><img src="images/twitter.jpg" class="social"></a>
							<a href="http://www.linkedin.com/profile/view?id=201499396&goback=%2Enmp_*1_*1_*1_*1_*1_*1_*1_*1_*1_*1_*1&trk=spm_pic"><img src="images/linkedin.jpg" class="social"></a>
							<a href="mailto:novanto.ji@gmail.com"><img src="images/mail.jpg" class="social"></a>
						</p>
					</div>			
				</li>
			</ul>
		</div>
	</div>
	<div id="loader">
		Please wait for your connection to displaying this site
		<img src="images/loading.gif">
	</div>

</body>