<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ConcertPush - Fan</title>
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/intranet.css">
	<link rel="stylesheet" href="css/fan.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
	<script src="js/src/menu.js"></script>
</head>
<body>
	<header>
		<?php require_once 'includes/header-intranet.php'; ?>
	</header>
	<div id="container">
		<div id="profile">
			<div class="content-container">
				<div id="profileImg"><a href=""><img src="img/fan.jpg" alt=""></a></div>
				<div id="profile-data">
					<h2>Lance A. Baker</h2>
					<ul id="profile-data-sub">
						<li><span class="fa fa-lg fa-map-marker icon-profile"></span><span>Barcelona</span></li>
						<li><span class="fa fa-lg fa-phone icon-profile"></span><span>674123123</span></li>
						<li><span class="fa fa-envelope icon-profile"></span><span>lance332@yahoo.com</span></li>
					</ul>
				</div>
			</div>
		</div>
		<div id="main">
			<div id="vote-concert" class="content">
				<div class="content-container">
					<h2><span class="fa fa-comments-o"></span>Vota conciertos</h2>
					<table class="contentTable">
						<thead>
							<tr>
								<th>Fecha</th>
								<th>Hora</th>
								<th width="20%">Ciudad</th>
								<th width="25%">Local</th>
								<th width="26%">Músico</th>
								<th>Votos</th>
								<th>Vota</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>12-12-2016</td>
								<td>11:30 PM</td>
								<td>Barcelona</td>
								<td><a href="">Palau Sant Jordi</a></td>
								<td><a href="">Michael Jackson</a></td>
								<td>14</td>
								<td><a href="" title="-1"><i class="fa fa-lg fa-thumbs-o-down thumbsdown"></i></a></td>
							</tr>
							<tr>
								<td>14-12-2016</td>
								<td>09:00 PM</td>
								<td>Sabadell</td>
								<td><a href="">Sala Rock</a></td>
								<td><a href="">Metallica</a></td>
								<td>34</td>
								<td><a href="" title="+1"><i class="fa fa-lg fa-thumbs-o-up thumbsup"></i></a></td>
							</tr>
							<tr>
								<td>15-12-2016</td>
								<td>10:30 PM</td>
								<td>Terrasa</td>
								<td><a href="">Rave Cave</td>
								<td><a href="">David Guetta</a></td>
								<td>41</td>
								<td><a href="" title="-1"><i class="fa fa-lg fa-thumbs-o-down thumbsdown"></i></a></td>
							</tr>
							<tr>
								<td>16-12-2016</td>
								<td>11:30 PM</td>
								<td>Granollers</td>
								<td><a href="">Disco Club</a></td>
								<td><a href="">ABBA</a></td>
								<td>33</td>
								<td><a href="" title="+1"><i class="fa fa-lg fa-thumbs-o-up thumbsup"></i></a></td>
							</tr>
							<tr>
								<td>17-12-2016</td>
								<td>06:30 PM</td>
								<td>Barcelona</td>
								<td><a href="">Fun Haus</a></td>
								<td><a href="">Gigi D'Agostino</a></td>
								<td>17</td>
								<td><a href="" title="+1"><i class="fa fa-lg fa-thumbs-o-up thumbsup"></i></a></td>
							</tr>
							<tr>
								<td>17-12-2016</td>
								<td>09:00 PM</td>
								<td>Madrid</td>
								<td><a href="">Mazo Punk</a></td>
								<td><a href="">Ramones</a></td>
								<td>29</td>
								<td><a href="" title="+1"><i class="fa fa-lg fa-thumbs-o-up thumbsup"></i></a></td>
							</tr>
							<tr>
								<td>18-12-2016</td>
								<td>12:30 PM</td>
								<td>Mataró</td>
								<td><a href="">The Tribune</a></td>
								<td><a href="">Louis Armstrong</a></td>
								<td>53</td>
								<td><a href="" title="-1"><i class="fa fa-lg fa-thumbs-o-down thumbsdown"></i></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<div id="vote-music" class="content">
				<div class="content-container">
					<h2><span class="fa fa-comments-o"></span>Vota músicos / grupos</h2>
					<table class="contentTable">
						<thead>
							<tr>
								<th colspan="2">Músico / Grupo</th>
								<th>Género</th>
								<th>Votos</th>
								<th>Vota</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><a href=""><img src="img/theoffspring.jpg" alt=""></a></td>
								<td width="60%"><a href="">The Offspring</a></td>
								<td width="25%">Punk</td>
								<td>49</td>
								<td><a href="" title="+1"><i class="fa fa-lg fa-thumbs-o-up thumbsup"></i></a></td>
							</tr>
							<tr>
								<td><a href=""><img src="img/metallica.jpg" alt=""></a></td>
								<td><a href="">Metallica</a></td>
								<td>Heavy Metal</td>
								<td>64</td>
								<td><a href="" title="-1"><i class="fa fa-lg fa-thumbs-o-down thumbsdown"></i></a></td>
							</tr>
							<tr>
								<td><a href=""><img src="img/davidguetta.jpg" alt=""></a></td>
								<td><a href="">David Guetta</a></td>
								<td>Dance</td>
								<td>71</td>
								<td><a href="" title="+1"><i class="fa fa-lg fa-thumbs-o-up thumbsup"></i></a></td>
							</tr>
							<tr>
								<td><a href=""><img src="img/queen.jpg" alt=""></a></td>
								<td><a href="">Queen</a></td>
								<td>Rock</td>
								<td>83</td>
								<td><a href="" title="+1"><i class="fa fa-lg fa-thumbs-o-up thumbsup"></i></a></td>
							</tr>
							<tr>
								<td><a href=""><img src="img/louis.jpg" alt=""></a></td>
								<td><a href="">Louis Armstrong</a></td>
								<td>Jazz</td>
								<td>45</td>
								<td><a href="" title="-1"><i class="fa fa-lg fa-thumbs-o-down thumbsdown"></i></a></td>
							</tr>
							<tr>
								<td><a href=""><img src="img/beethoven.jpg" alt=""></a></td>
								<td><a href="">Ludwig van Beethoven</a></td>
								<td>Clásica</td>
								<td>36</td>
								<td><a href="" title="+1"><i class="fa fa-lg fa-thumbs-o-up thumbsup"></i></a></td>
							</tr>
							<tr>
								<td><a href=""><img src="img/sia.jpg" alt=""></a></td>
								<td><a href="">Sia</a></td>
								<td>Pop</td>
								<td>30</td>
								<td><a href="" title="+1"><i class="fa fa-lg fa-thumbs-o-up thumbsup"></i></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
			<footer class="footer">
				<?php require_once '/includes/footer.php'; ?>
			</footer>
		</div>
	</div>
</body>
</html>