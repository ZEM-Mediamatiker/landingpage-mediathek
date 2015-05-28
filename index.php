<?php
include_once 'partitials/multilanguage.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="language" content="de" />
	<meta name="author" content="Zentrum elektronische Medien" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="Mediathek, MT, Mediathek Admin, mediathek.admin.ch, Schweiz, Suisse, Svizzera, Switzerland, Verwaltung, Administration, Amministrazione, Administration, design, logo, image, identity" />
	<meta name="robots" content="index,follow" />
	
	<link rel="shortcut icon" href="img/favicon/fav.ico" type="image/x-icon" />
	<link rel="icon" href="img/favicon/fav.ico" type="image/x-icon" /> 
	
	<link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-touch-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-touch-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-touch-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-touch-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-touch-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-touch-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-touch-icon-180x180.png">
	
	<!-- Open Graph Eigenschaften -->
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Mediathek VBS | Médiathèque DDPS">
	<!--<meta property="og:url" content="http://www.mediathek.admin.ch">-->
	<meta property="og:image" content="http://eckstein.be/r/media/img/favicon/mediathek-og-image.jpg">
	
	<!-- Windows 10 Kacheln -->
	<meta name="application-name" content="www.mediathek.admin.ch"> 
	<meta name="msapplication-TileImage" content="img/mediathek-msapplication-tileimage.png">
	<meta name="msapplication-TileColor" content="#3498db">
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/animate.css">
	
	<!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	
	<title><?php echo $lang['META_SEITENTITEL']; ?></title>	
	
		
</head>
<body>
	<input type="checkbox" id="check-flyout">
	
	<div id="pagewrapper">
	
		<header id="header">
			<img src="img/ch_pos_quer.svg" height="42" alt="Logo Schweizerische Eidgenossenschaft">
			<div id="language-switch">
				<label class="switch">
      				<input type="checkbox" onchange="toggle(this)" class="switch-input">
      				<span class="switch-label" data-on="FR" data-off="DE"></span>
      				<span class="switch-handle"></span>
    			</label>
			</div>
		
		</header>
		
		<section id="title">
			<h1><?php echo $lang['PAGE_WILLKOMMEN']; ?><span class="bold"><?php echo $lang['PAGE_WILLKOMMEN_BOLD']; ?></span></h1>
		</section>
		
		<div id="boxes">
			<div id="boxes-container">
				<div id="videoportal" class="boxes-box">
					<section class="boxes-content">
					<img src="img/logo-vp.svg" width="104" height="116" alt="Logo Videoportal mediathek.admin.ch" />
					<h2 class="boxes-title"><?php echo $lang['VIDEOPORTAL']; ?></h2>
					<p class="boxes-text">
						<?php echo $lang['CONTENT_VIDEOPORTAL']; ?>
					</p>
					</section>
					<div class="boxes-button">						
						<div class="button">
							<span class="button-label"><a href="#"><?php echo $lang['VIDEOPORTAL']; ?></a></span>
						</div>											
					</div>				
				</div>				
				<div id="fotoportal" class="boxes-box">
					<section class="boxes-content">
					<img src="img/logo-fp.svg" width="104" height="116" alt="Logo Fotoportal mediathek.admin.ch" />
					<h2 class="boxes-title"><?php echo $lang['FOTOPORTAL']; ?></h2>
					<p class="boxes-text">
						<?php echo $lang['CONTENT_FOTOPORTAL']; ?>
					</p>
					</section>
					<div class="boxes-button">
						<div class="button">
							<span class="button-label"><a class="link-splitted-button" href="#"><?php echo $lang['FOTOPORTAL']; ?></a></span>
							<label class="label" for="check-flyout">
							<span class="open-button-menu">	
								<span class="open-button-menu-button">
								</span>						
							</span>
							</label>
							<div class="button-flyover">
								<div class="flyover-arrow"></div>
								<div class="flyover-container">
									<ul>
										<li><a href="#1"><?php echo $lang['BACKEND']; ?></a></li>
										<li><a href="#2"><?php echo $lang['HANDBUCH']; ?></a></li>
									</ul>								
								</div>
							</div>
						</div>	
					</div>
				</div>
			</div>
			<div class="clearfix"></div>		
		</div>
		
		<div id="more" class="wow fadeInUp">
			<div id="more-text">
				<div class="linie">
				</div>
				<p class="more"><?php echo $lang['PAGE_ANGEBOTE']; ?></p>
				<div class="linie">
				</div>
			</div>
		</div>
		
		<section id="offers">
			<div id="offers-container">
				<a class="offer-link" href="#">
				<div id="youtube" class="offers-box wow fadeInUp">
				<!--[if lt IE 9]><img src="img/youtube_white.svg" width="44" height="30" alt="Logo YouTube" /><![endif]-->
					<p class="icon">&#xe601;</p>
					<h3 class="offer-link"><?php echo $lang['YOUTUBE']; ?></h3>
					<p class="offer-arrow">&gt;</p>					
				</div>
				</a>
				<a class="offer-link" href="#">
				<div id="itunes" class="offers-box wow fadeInUp">
				<!--[if lt IE 9]><img src="img/itunes_white.svg" width="35" height="35" alt="Logo iTunes" /><![endif]-->
					<p class="icon">&#xe600;</p>
					<h3 class="offer-link"><?php echo $lang['ITUNES']; ?></h3>
					<p class="offer-arrow">&gt;</p>
				</div>
				</a>
				<a class="offer-link" href="#">
				<div id="cards" class="offers-box wow fadeInUp">
				<!--[if lt IE 9]><img src="img/cards_white.svg" width="35" height="35" alt="Postkarten" /><![endif]-->
					<p class="icon">&#xe602;</p>
					<h3 class="offer-link"><?php echo $lang['POSTKARTEN']; ?></h3>
					<p class="offer-arrow">&gt;</p>
				</div>
				</a>
				<div class="clearfix"></div>
			</div>
			<div class="clearfix"></div>		
		</section>		
		
	</div>
	
	<footer id="footer">
		<img src="img/logo-mediathek.svg" height="30" alt="Logo mediathek.admin.ch"><br>
		<a href="http://zem.ch" target="_blank">© VBS/DDPS - ZEM</a>
	</footer>	
	
	<script>		
		function toggle(cb) {
			if(cb.checked){
				window.location.search = "lang=fr";
			} else {
				window.location.search = "lang=de";
			}			
		}
			
		if(window.location.search == "?lang=fr"){
			document.getElementsByClassName("switch-input")[0].checked = true;
		}else{
			document.getElementsByClassName("switch-input")[0].checked = false;
		}		
	</script>
	<script src="js/wow.min.js"></script>
	<script>
 		new WOW().init();
	</script>		
</body>
</html>