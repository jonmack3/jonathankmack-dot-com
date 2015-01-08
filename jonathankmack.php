<?php
// jonathankmack_specific.php
// PHP scripts for jonathankmack.com
// By: Jonathan Mack; created: 2014/02/01; last edit: 2014/10/10

	// creates HTML5 head block using a user-defined title, keywords, and description
	function create_head($title, $keywords, $description) {
		echo "<html>
				<head>
					<meta charset='UTF-8'>
					<title>$title</title>
					<link rel='icon' href='favicon.ico'>
					<link rel='stylesheet' type='text/css' href='styles.css'>
					<meta name='keywords' content='$keywords'>
					<meta name='description' content='$description'>
				</head>\n";
	}

	// creates the title bar for a jonathankmack.com page
	function create_header() {
		echo "	<div id='header'>
				<img src='images/composite.jpg' width='320' height='100' alt='Composite clickable image' class='float-left' usemap='#indexmap' />
					<map id='indexmap' name='indexmap'>
						<area shape='rect' coords='0,0,80,100' alt='About Me' href='aboutme.php' />
						<area shape='rect' coords='81,0,160,100' alt='Helicopter Aviation' href='heloaviation.php' />
						<area shape='rect' coords='161,0,240,100' alt='Software Development' href='softwaredev.php' />
						<area shape='rect' coords='241,0,320,100' alt='Tutoring' href='tutoring.php' />
					</map>
				<h1>Jonathan K. Mack</h1>
				<p>Helicopter pilot, software engineer, academic tutor, aerospace engineer</p>
			</div>
			<div class='clear-block'></div>\n";
			}
		
	//creates the navmenu for a jonathankmack.com page
	function create_navmenu()
	{
		echo "		<div id=\"navmenu\">
				<hr class='white'>
				<ul>
					<li>Professional
						<ul>
							<li><a href='aeroengr.php'>Aerospace engineering</a></li>
							<li><a href='heloaviation.php'>Helicopter aviation</a></li>
							<li><a href='softwaredev.php'>Software development</a></li>
							<li><a href='tutoring.php'>Tutoring</a></li>
							<li><a href='cv.php'>Curriculum vitae</a></li>
						</ul>
					</li>
					<li>Personal
						<ul>
							<li><a href='aboutme.php'>About me</a></li>
							<li><a href='http://www.jonathankmack.com/blog/'>Blog</a></li>
							<li><a href='quotes.php'>Quotes</a></li>
							<li><a href='links.php'>Links</a></li>
						</ul>
					</li>
					<li >Software/website
						<ul>
							<li><a href='software.php'>Software</a></li>
							<li><a href='updatelog.php'>Site update log</a></li>
						</ul>
					</li>
					<li class='home'><a href='index.php'>Home</a></li>
				</ul>
			</div>
			<div class='clear-block'></div>
			<hr class='fade'>\n";
	}	
	
	//creates the footer for a jonathankmack.com page
	function create_footer($create_date, $edit_date) {
		echo "	<footer>
				<p class='footer-left'>Design and content: Jonathan Mack</p>
				<p class='footer-right'>Page created: $create_date</p>
				<div class='clear-block'></div>
				<p class='footer-left'>jonmack3 <strong>at</strong> gmail <strong>dot</strong> com</p>
				<p class='footer-right'>Last update: $edit_date</p>
				<div class='clear-block'></div>
			</footer>";
	}
	
	function insert_resume_item($name, $dates, $description, $entity, $location) {
		echo "				<p class='resume-item-title'>$name</p><p class='resume-item-dates'>$dates</p>
				<div class='clear-block'></div>
				<p>$description</p>
				<p class='resume-item-entity'>$entity</p><p class='resume-item-location'>$location</p>
				<div class='resume-item-end'></div>\n\n";
	}
?>