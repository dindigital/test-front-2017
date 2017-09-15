<!doctype html>
<html lang="pt">
	<head>
	  <meta charset="utf-8">
	  <meta name="viewport" content="width=device-width, user-scalable=no">
	  <title>Din Digital - Test Front-End 2017</title>
	  <meta name="description" content="Din Digital - Test Front-End 2017">
	  <meta name="author" content="Paulo Vinicius - ploviniciusplo@gmail.com">
	  <!--  Site desenvolvido por Paulo Vinicius - ploviniciusplo@gmail.com -->
	  <link rel="stylesheet" href="lib/css/style.css">
	  <link rel="stylesheet" href="lib/css/nivo-slider.css">
	  <!--[if lt IE 9]>
	    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
	  <![endif]-->
	</head>
	<body>
		<header id="topo" class="fulldiv">
			<div class="limit-conteudo">
				<div class="col-xs-12">
					<div id="topbar" class="fulldiv">
						<div id="sociais">
							<a class="linkedin icone-sociais"></a>
							<a class="twitter icone-sociais"></a>
							<a class="pinterest icone-sociais"></a>
							<a class="googleplus icone-sociais"></a>
							<a class="rss icone-sociais"></a>
						</div>
						<div id="pesquisar">
							<form>
								<input type="text" class="campo-pesquisa" placeholder="Search Our Website..."/>
								<input type="submit" id="btn-pesquisar" value="SEARCH" />
							</form>
						</div>
					</div>
					<div id="logo">
						<img width="175" height="auto" src="imagens/logo.png" />
					</div>
					<div id="menu">
						<div class="navbar-header">
					      	<button type="button" class="navbar-toggle collapsed">
					        	<span class="sr-only">Toggle navigation</span>
					        	<span class="icon-bar"></span>
					        	<span class="icon-bar"></span>
					        	<span class="icon-bar"></span>
					      	</button>
					      	<div class="collapse navbar-collapse" id="lista-menu">
						      	<ul class="nav navbar-nav">
						      		<li><a class="active" href="#">HOME</a></li>
						      		<li><a href="#">STYLE DEMO</a></li>
						      		<li><a href="#">FULL WIDTH</a></li>
						      		<li><a href="#">DROPDOWN</a></li>
						      		<li><a href="#">PORTFOLIO</a></li>
						      		<li><a href="#">GALLERY</a></li>
						      </ul>
						  </div>
					    </div>
					</div>
				</div>
			</div>
		</header>
		<!-- CONTEUDO -->
		<main id="conteudo" class="fulldiv">
			<div class="limit-conteudo">
				<!-- BANNERS -->
				<section id="banners" class="col-xs-12">
					<div id="slider">
						<img width="100%" height="auto" src="imagens/banner1.jpg"/>
						<img width="100%" height="auto" src="imagens/banner2.jpg"/>
					</div>
				</section>
				<!-- DESTAQUES -->
				<section id="destaques" class="fulldiv">
					<?php for($i = 0; $i < 3; $i++) { ?>
						<div class="destaque-item col-xs-6 col-sm-4">
							<div class="thumb">
								<img width="300" height="auto" src="imagens/thumb-300x160.jpg" />
							</div>
							<h2 class="titulo texto-medio">YOUR TITTLE HERE</h2>
							<div class="descricao texto-pequeno">
								Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed. Facilispede estibulum nulla orna nisl velit elit ac aliquat non tincidunt.
							</div>
							<a class="btn-ler-mais texto-pequeno">READ MORE &#187;</a>
						</div>
					<?php } ?>
				</section>
				<!-- TODOS OS ITENS -->
				<section id="todos-itens" class="fulldiv">
					<div class="col-xs-12">
						<h1 class="titulo-intro texto-grande">“ Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc non diam erat. In fringilla massa ut nisi ullamcorper pellentesque „</h1>
					</div>
					<div id="list-itens" class="fulldiv">
						<?php for($i = 0; $i < 6; $i++) { ?>
							<div class="item col-xs-6 col-lg-4">
								<a class="item-link">
									<div class="thumb">
										<img width="80" height="auto" src="imagens/thumb-80x80.jpg" />
									</div>
									<div class="conteudo">
										<h2 class="titulo texto-pequeno">Title goes Here</h2>
										<div class="descricao  texto-semi-pequeno">Morbit incidunt maurisque eros molest nunc anteget sed vel lacus mus semper. Anter dumnullam.</div>
									</div>
								</a>
							</div>
						<?php } ?>
					</div>
				</section>
			</div>
		</main>
		<!-- RODAPE -->
	 	<footer id="rodape" class="fulldiv">
	 		<!-- Site desenvolvido por Paulo Vinicius - ploviniciusplo@gmail.com -->
	 		<script type="text/javascript" src="lib/js/jquery-3.2.1.min.js"></script>
	 		<script type="text/javascript" src="lib/js/jquery.nivo.slider.js"></script>
	 		<script type="text/javascript" src="lib/js/customjs.js"></script>
	 		<script type="text/javascript" src="lib/js/scrollreveal.min.js"></script>
	 		<script>
	 			$('#slider').nivoSlider({ 
				    effect: 'fade',
				    animSpeed: 200,
				    pauseTime: 7000,
				    directionNav: false,
				    pauseOnHover: true,
				});
	 		</script>
	 		<section id="cols-rodape" class="fulldiv">
	 			<div class="limit-conteudo">
	 				<div class="custom-display">
						<div id="contato-col" class="custom-col col-xs-6 col-md-3">
							<h2 class="titulo-col texto-semi-grande">Contact Details</h2>
							<ul class="list texto-semi-pequeno">
								<li>Company Name</li>
								<li>Street Name & Number</li>
								<li>Town</li>
								<li>Postcode/Zip</li>
								<li>Tel: xxxxxx xxxx</li>
								<li>Fax: xxxxxx xxxx</li>
								<li>Email: <a>contact@mydomain.com</a></li>
							</ul>
						</div>
						<div id="links-col" class="custom-col col-xs-6 col-md-3">
							<h2 class="titulo-col texto-semi-grande">Quick Links</h2>
							<ul class="list texto-semi-pequeno">
								<li><a>Link Text Here</a></li>
								<li><a>Link Text Here</a></li>
								<li><a>Link Text Here</a></li>
								<li><a>Link Text Here</a></li>
							</ul>
						</div>
						<div id="blog-col" class="custom-col col-xs-6 col-md-3">
							<h2 class="titulo-col texto-semi-grande">From The Blog</h2>
							<div class="conteudo">
								<h2 class="titulo texto-pequeno">Blog Post Title</h2>
								<p class="autor texto-pequeno">Posted by Admin on 00.00.0000</p>
								<div class="descricao texto-semi-pequeno">
									Vestibulumaccumsan egestibulum eu justo convallis augue estas aenean elit intesque sed facilispede estibulum.
								</div>
								<a class="btn-ler-mais texto-semi-pequeno">Read More &#187;</a>
							</div>
						</div>
						<div id="newsletter-col" class="custom-col col-xs-6 col-md-3">
							<h2 class="titulo-col texto-semi-grande">Newsletter</h2>
							<div class="conteudo">
								<form>
									<input type="text" class="newsletter-campo texto-pequeno" name="nome" placeholder="Name"/>
									<input type="text" class="newsletter-campo texto-pequeno" name="email" placeholder="Email"/>
									<input class="btn-submit texto-pequeno" type="submit" value="SUBMIT" />
								</form>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section id="copyright-bar" class="fulldiv">
				<div class="limit-conteudo">
			 		<p class="copyright texto-semi-pequeno">Copyright &#9400; 2013 Domain Name - All Rights Reserved</p>
			 		<p class="template-owner texto-semi-pequeno">Template by OG Templates</p>
			 	</div>
		 	</section>
	 	</footer>
	</body>
</html>