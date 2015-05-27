<?php
include_once 'partitials/multilanguage.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="css/animate.css">
	
	<script src="js/wow.min.js"></script>
	<script>
 		new WOW().init();
	</script>
	
	<title><?php echo $lang['META_SEITENTITEL']; ?></title>	
		
</head>
<body>
	<input type="checkbox" id="check-flyout">
	
	<div id="pagewrapper">
	
		<section id="header">
			<img src="img/ch_pos_quer.svg" height="42" alt="Logo Schweizerische Eidgenossenschaft">
			<div id="language-switch">
				<label class="switch">
      				<input type="checkbox" onchange="toggle(this)" class="switch-input">
      				<span class="switch-label" data-on="FR" data-off="DE"></span>
      				<span class="switch-handle"></span>
    			</label>
			</div>
		
		</section>
		
		<section id="title">
			<h1><?php echo $lang['PAGE_WILLKOMMEN']; ?><span class="bold"><?php echo $lang['PAGE_WILLKOMMEN_BOLD']; ?><span></h1>
		</section>
		
		<section id="boxes">
			<div id="boxes-container">
				<div id="videoportal" class="boxes-box">
					<section class="boxes-content">
					<img src="img/logo-vp.svg" width="104" height="116" alt="Logo Videoportal mediathek.admin.ch" />
					<h2 class="boxes-title"><?php echo $lang['VIDEOPORTAL']; ?></h2>
					<p class="boxes-text">
						<?php echo $lang['CONTENT_VIDEOPORTAL']; ?>
					</p>
					</section>
					<section class="boxes-button">						
						<div class="button">
							<span class="button-label"><a href="#"><?php echo $lang['VIDEOPORTAL']; ?></a></span>
						</div>											
					</section>				
				</div>				
				<div id="fotoportal" class="boxes-box">
					<section class="boxes-content">
					<img src="img/logo-fp.svg" width="104" height="116" alt="Logo Fotoportal mediathek.admin.ch" />
					<h2 class="boxes-title"><?php echo $lang['FOTOPORTAL']; ?></h2>
					<p class="boxes-text">
						<?php echo $lang['CONTENT_FOTOPORTAL']; ?>
					</p>
					</section>
					<section class="boxes-button">
						<div class="button">
							<span class="button-label"><a class="link-splitted-button" href="#"><?php echo $lang['FOTOPORTAL']; ?></a></span>
							<label class="label" for="check-flyout">
							<div class="open-button-menu">	
								<div class="open-button-menu-button">
								</div>						
							</div>
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
					</section>
				</div>
			</div>
			<div class="clearfix"></div>		
		</section>
		
		<section id="more" class="wow fadeInUp">
			<div id="more-text">
				<div class="linie">
				</div>
				<p class="more"><?php echo $lang['PAGE_ANGEBOTE']; ?></p>
				<div class="linie">
				</div>
			</div>
		</section>
		
		<section id="offers">
			<div id="offers-container">
				<a class="offer-link" href="#">
				<div id="youtube" class="offers-box wow fadeInUp">
				<!--[if IE]><img src="img/youtube_white.svg" width="44" height="30" alt="Logo YouTube" /><![endif]-->
					<p class="icon">&#xe601;</p>
					<h3 class="offer-link"><?php echo $lang['YOUTUBE']; ?></h3>
					<p class="offer-arrow">&gt;</p>					
				</div>
				</a>
				<a class="offer-link" href="#">
				<div id="itunes" class="offers-box wow fadeInUp">
				<!--[if IE]><img src="img/itunes_white.svg" width="35" height="35" alt="Logo iTunes" /><![endif]-->
					<p class="icon">&#xe600;</p>
					<h3 class="offer-link"><?php echo $lang['ITUNES']; ?></h3>
					<p class="offer-arrow">&gt;</p>
				</div>
				</a>
				<a class="offer-link" href="#">
				<div id="cards" class="offers-box wow fadeInUp">
				<!--[if IE]><img src="img/cards_white.svg" width="35" height="35" alt="Postkarten" /><![endif]-->
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
	
	<section id="footer">
		<img src="img/logo-mediathek.svg" height="30" alt="Logo mediathek.admin.ch"><br>
		<a href="http://zem.ch" alt="Zentrum elektronische Medien - ZEM" target="_blank">© VBS/DDPS - ZEM</a>
	</section>	
	
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
</body>
</html>