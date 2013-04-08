<html>
	<head>
		<title>YOUSCOOT</title>
		<link href="/templates/style.css" rel="stylesheet">
		<meta http-equiv="content-type" content="texte/html"; charset="utf-8" />
		<link rel="icon" href="logo.png" />
	</head>
	
	<body>
			<div id="bloc_raccourcis">
				<div id="accident">
					<img class="logo_raccourci" src="/images/warning.png" alt="Si vous avez eu un accident cliquez-ici" />
					<a class="lien_raccourci" href="#">accident</a>
				</div>
				
				<div id="pv">
					<img class="logo_raccourci" src="/images/logopolice.png" alt="Si vous vous êtes pris un PV cliquez ici"/>
					<a class="lien_raccourci" href="#">PV</a>
				</div>
			</div>
			
			<div id="header">
	 			<img src="/images/logoblue.png" alt="Accueil" id="logo"/>
	 				<div id="blocmenu">
	 					<div id="blocup">
	 					</div>	
						
						<ul id="menu">
						  <li><a href="#">Acheter un scooter sans se faire rouler</a>
						    <div class="menu-container-2"> <!--Home Start -->
						      <div class="column-2">
						        <p><a href="#" title="Pourquoi un scooter ?">Pourquoi un scooter ?</a></p>
						        <p><a href="#" title="Combien ça coûte">Combien ça coûte ?</a></p>
						        <p><a href="#" title="Choisir son scooter">Choisir son scooter</a></p>
						        <p><a href="#" title="Les scooters populaires">Les scooters populaires</a></p>
						        <p><a href="#" title="À quoi faire attention lors de l'achat de votre scooter ?">Points et pièces auxquels faire attention</a></p>
						        <p><a href="#" title="Papiers que vous devrez remplir lors de l'achat">Papiers lors de l'achat</a></p>
						      </div>
						    </div>
						  </li>
						  
						  <li><a href="#">Conduite</a>
						    <div class="menu-container-2"> <!--Home Start -->
						      <div class="column-2">
						        <p><a href="#" title="Comment conduire dans un environnement urbain ?">Conseils de comportement sur la route</a></p>
						        <p><a href="#" title="Positions des radars à Paris">Radars à Paris</a></p>
						        <p><a href="#" title="Quand se prend-on des PV ?">Cas de PV fréquents</a></p>
						        <p><a href="#" title="Faut-il débrider un cyclo ?">Débridage</a></p>
						        <p><a href="#" title="Vous vous êtes pris un PV ? Ça ne se passera pas commce ça !">Contester un PV</a></p>
						      </div>
						    </div>
						  </li>
						  
						  <li><a href="#">Garages</a>
						    <div class="menu-container-2"> <!--Home Start -->
						      <div class="column-2">
						      	<p><a href="#" title="Pourquoi faut-il au bon garage ?">Pourquoi faire attention à son garage ?</a></p>
						      	<p><a href="#" title="Comment shoisir son gargae">Comment choisir son garage ?</a></p>
						        <p><a href="#" title="Les garages fiables">Adresses de garages à Paris</a></p>
						      </div>
						    </div>
						  </li>
						  <li><a href="#">Sécurité</a>
						    <div class="menu-container-2"> <!--Home Start -->
						      <div class="column-2">
						        <p><a href="#" title="Les causes principales d'accidents">Causes principales d'accidents</a></p>
						        <p><a href="#" title="Calculez vos risques pour chacuns de vos trajets">Calculateur de risques</a></p>
						        <p><a href="#" title="Comment se protéger">Les moyens de prévention</a></p>
						      </div>
						    </div>
						  </li>
						  
						  <li><a href="#">Accessoires</a>
						  </li>
						  
						  <li><a href="#">Contact</a>
						  </li>  
						    
						</ul>
					</div>
  				
  				<img src="/images/feu.png" alt="logodroite" id="feu"/>
  			</div>
  		
  			<div id="headerline">
  			</div>
  			<div id="site">
  			
  				<div id="articles">
  				
  					<div id="article1">
  						<div id="categorie1">Catégorie 1 : </div>
  						<div id="title1">Titre 1</div><br />
  						<div id="title1infos">Date, auteur, ceci cela</div>
  						<div id="titleline"></div>
  						<img id="pic1" src="/images/vespapicto.png" alt="image article 1" />
  						<p id="text1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis enim justo, lacinia eget varius vel, rutrum vel enim. Vivamus eu lorem dolor, at tristique ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a nisi urna, sed varius felis. Praesent nec neque vel erat convallis aliquet. In vestibulum dignissim eleifend.
  						</p>
  						<br />
  						<div id="suite1">Lire la suite>></div>
  					</div>

  					<div id="article2">
  						<div id="categorie1">Catégorie 2 : </div>
  						<div id="title1">Titre 2</div><br />
  						<div id="title1infos">Date, auteur, ceci cela</div>
  						<div id="titleline"></div>
  						<img id="pic1" src="/images/vespapicto.png" alt="image article 2" />
  						<p id="text1">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis enim justo, lacinia eget varius vel, rutrum vel enim. Vivamus eu lorem dolor, at tristique ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam a nisi urna, sed varius felis. Praesent nec neque vel erat convallis aliquet. In vestibulum dignissim eleifend.
  						</p>
  						<br />
  						<div id="suite1">Lire la suite>></div>
  					</div>
				</div>
				
				<div id="traitvertical">
				</div>
				
				<div id="faq">
					<div id="titlefaq">
						<div id="intitulefaq">FAQ</div>
					</div>
					<div id="content_faq">
						<?php include($_SERVER["DOCUMENT_ROOT"].'/components/faq/faq.php'); ?>
					</div>
				</div>
  			</div>
	</body>
</html>
	