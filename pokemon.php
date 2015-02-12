<!DOCTYPE html>


<?php
$link = mysql_connect('localhost', 'root', '');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
echo 'Connected successfully';
mysql_close($link);
?>


<sql:query var="pokemonPlayers" dataSource="${ds}" sql="SELECT name, college, year, email, friend_code, style FROM pokemon_gamers WHERE name=?">
	<sql:param value="${name}" />
</sql:query>
 
<html>
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
		<title>GGSC - Pokemon</title>
		<link rel="shortcut icon" href="../favicon.ico"> 
		<link rel="stylesheet" type="text/css" href="css2/gametable.css" />
		<link rel="stylesheet" type="text/css" href="css2/gamecss.css" />
		<link rel="stylesheet" type="text/css" href="css2/gamecomponent.css" />
		<script src="js/modernizr.custom.js"></script>
	</head>
	<body>
		<!-- All modals added here for the demo. You would of course just have one, dynamically created -->
		<div class="md-modal md-effect-1" id="modal-1">
			<div class="md-content">
				<h3>Add A Gamer</h3>
				<div>
					<p>Do you play this game? Well, let the world know and tell us your gamer info below.
			<form action="gamerHandler.jsp" name="addGamer" method="post">
				<strong>Name:</strong>
					<input type="text" name="addName" value="${param.addName}" maxlength="50" /></br>
				<strong>College:</strong>
					<input type="text" name="addCollege" value="${param.addCollege}" maxlength="20" /></br>
				<strong>Year:</strong>
					<input type="text" name="addYear" value="${param.addYear}" maxlength="4" /></br>
				<strong>Email Address:</strong>
					<input type="text" name="addEmail" value="${param.addEmail}" maxlength="" /></br>
				<strong>Friend Code:</strong>
					<input type="text" name="addFriendCode" value="${param.addFriendCode}" maxlength="15" /></br>
				<strong>Style:</strong>
					<input type="radio" name="addStyle" value="Casual" /><label>Casual </label>
					<input type="radio" name="addStyle" value="Competitive" /><label>Competitive</label></br>
				<button class="md-close" type="submit">Done!</button>
			</form>
		</p>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-2" id="modal-2">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-3" id="modal-3">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-4" id="modal-4">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-5" id="modal-5">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-6" id="modal-6">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-7" id="modal-7">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-8" id="modal-8">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-9" id="modal-9">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-10" id="modal-10">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-11" id="modal-11">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-12" id="modal-12">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-13" id="modal-13">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-14" id="modal-14">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-15" id="modal-15">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-16" id="modal-16">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-17" id="modal-17">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-18" id="modal-18">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-19" id="modal-19">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="md-modal md-effect-20" id="modal-20">
			<div class="md-content">
				<h3>Modal Dialog</h3>
				<div>
					<p>This is a modal window. You can do the following things with it:</p>
					<ul>
						<li><strong>Read:</strong> modal windows will probably tell you something important so don't forget to read what they say.</li>
						<li><strong>Look:</strong> a modal window enjoys a certain kind of attention; just look at it and appreciate its presence.</li>
						<li><strong>Close:</strong> click on the button below to close the modal.</li>
					</ul>
					<button class="md-close">Close me!</button>
				</div>
			</div>
		</div>
		<div class="container">
			<!-- Top Navigation -->
			<div class="codrops-top clearfix">
				<a class="codrops-icon codrops-icon-prev" href="http://tympanus.net/Development/DynamicGrid/"><span>Back to Homepage</span></a>
				<span class="right"><a class="codrops-icon codrops-icon-drop" href="http://tympanus.net/codrops/?p=15313"><span>Back to the Codrops Article</span></a></span>
			</div>
			<header>
				<h1>Pokemon<span>Gotta catch 'em all, bitch.</span></h1>
			</header>
			<div class="component">
				<h2>Gamers</h2>
				<p>Your fellow trainers that you can engage in battle with today. I'd consult <a href="http://bulbapedia.bulbagarden.net/wiki/Main_Page">Bulbapedia</a> if I were you.</p>
				<table>
					<thead>
						<tr>
							<th>Name</th>
							<th>College</th>
							<th>Email</th>
							<th>Friend Code</th>
						</tr>
					</thead>
					<tbody>
					<?php // pokemonQuery.php 
						require_once 'getGamers.php'; 
						$db_server = mysql_connect($db_hostname, $db_username, $db_password);
						if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());

							mysql_select_db($db_database)    
								or die("Unable to select database: " . mysql_error());
								
						$query = "SELECT * FROM pokemon_gamers"; 
						$result = mysql_query($query);

						if (!$result) die ("Database access failed: " . mysql_error());

						$rows = mysql_num_rows($result);

						for ($j = 0 ; $j < $rows ; ++$j) {
						echo '<tr><td class="user-name">' . mysql_result($result,$j,'name') .'</td>';
						echo '<td class="user-college">' . mysql_result($result,$j,'college') . '</td>';
						echo '<td class="user-email">' . mysql_result($result,$j,'email') . '</td>';
						echo '<td class="user-friend_code">' . mysql_result($result,$j,'friend_code') . '</td></tr>';
						
						}
						?>
					</tbody>
				</table>
			</div>
			<div class="main clearfix">
			
				<div class="column">
					<p>So you liek mudkips? Or other pokemon?
					Then you might wanna check out some
					other games students at the 5C's are 
					playing.</p>
				</div>
				<div class="column">
					<button class="md-trigger" data-modal="modal-1">Fade in &amp; Scale</button>
					<button class="md-trigger" data-modal="modal-2">Slide in (right)</button>
					<button class="md-trigger" data-modal="modal-3">Slide in (bottom)</button>
					<button class="md-trigger" data-modal="modal-4">Newspaper</button>
					<button class="md-trigger" data-modal="modal-5">Fall</button>
					<button class="md-trigger" data-modal="modal-6">Side Fall</button>
					<button class="md-trigger" data-modal="modal-7">Sticky Up</button>
					<button class="md-trigger" data-modal="modal-8">3D Flip (horizontal)</button>
					<button class="md-trigger" data-modal="modal-9">3D Flip (vertical)</button>
					<button class="md-trigger" data-modal="modal-10">3D Sign</button>
					<button class="md-trigger" data-modal="modal-11">Super Scaled</button>
					<button class="md-trigger" data-modal="modal-12">Just Me</button>
					<button class="md-trigger" data-modal="modal-13">3D Slit</button>
					<button class="md-trigger" data-modal="modal-14">3D Rotate Bottom</button>
					<button class="md-trigger" data-modal="modal-15">3D Rotate In Left</button>
					<button class="md-trigger" data-modal="modal-16">Blur</button>
					<!-- special modal that will add a perspective class to the html element -->
					<button class="md-trigger md-setperspective" data-modal="modal-17">Let me in</button>
					<button class="md-trigger md-setperspective" data-modal="modal-18">Make way!</button>
					<button class="md-trigger md-setperspective" data-modal="modal-19">Slip from top</button>
				</div>
			</div>
		</div><!-- /container -->
		<div class="md-overlay"></div><!-- the overlay element -->

		<!-- classie.js by @desandro: https://github.com/desandro/classie -->
		<script src="js/classie.js"></script>
		<script src="js/modalEffects.js"></script>

		<!-- for the blur effect -->
		<!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
		<script>
			// this is important for IEs
			var polyfilter_scriptpath = '/js/';
		</script>
		<script src="js/cssParser.js"></script>
		<script src="js/css-filters-polyfill.js"></script>
	</body>
</html>