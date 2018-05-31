<!DOCTYPE	html>
<html>
	<head>
		<title>Mirror	Fashion</title>
		<meta	charset="utf-8">
		<!--<meta	name="viewport"	content="width=320">   ajusta para o mobile q chega em wifth= 320-->
		<!--<meta	name="viewport"	content="width=device-width"> Ajuste De acordo com o modelo do fabricante mobile-->
		<link	rel="stylesheet"	href="css/estilos.css">
		<link	rel="stylesheet"	href="css/estilos.css" media="screen">
		<link	rel="stylesheet"	href="css/estilos.css" media="(max-width:	480px)">
		<!--<link	rel="stylesheet"	href="css/reset.css">		
		<link	rel="stylesheet"	href="css/base.css"		media="screen">
		<link	rel="stylesheet"	href="css/mobile.css"	media="(max-width:	480px)">-->

	</head>
	<body>
		<?php
			include("cabecalho.php");
		?>
		<div	class="container	destaque">
		<section	class="busca">
			<h2>Busca</h2>
			<form>
				<input	type="search">
				<input	type="image"	src="img/busca.png">
			</form>
		</section><!--	fim	.busca	-->
		<section	class="menu-departamentos"> 
			<h2>Departamentos</h2>
			<nav>
				<ul>
					<li><a	href="#">Blusas	e	Camisas</a>
						<ul>
							<li><a	href="#">Manga	curta</a></li>
							<li><a	href="#">Manga	comprida</a></li>
							<li><a	href="#">Camisa	social</a></li>
							<li><a	href="#">Camisa	casual</a></li>
						</ul>
					</li>
					<li><a	href="#">Calças</a></li>
					<li><a	href="#">Saias</a></li>
					<li><a	href="#">Vestidos</a></li>
					<li><a	href="#">Sapatos</a></li>
					<li><a	href="#">Bolsas	e	Carteiras</a></li>
					<li><a	href="#">Acessórios</a></li>
				</ul>
			</nav>
		</section><!--	fim	.menu-departamentos	-->
		<img src="img/destaque-home.png" alt="Promoção:	Big	City	Night">
		<a	href="#"	class="pause"></a>
		</div>
		<div class="container">
			<!--	os	paineis	de	novidades	e	mais	vendidos	entrarão	aqui	dentro	-->
			<section class="painel novidades">
				<h2>Novidades</h2>
				<div>
				<ol class="novidadesol">
					<li>
						<a	href="produto.html">
							<figure class="centralizar-foto">
									<img	src="img/produtos/miniatura1.png">
									<figcaption>Fuzz	Cardigan	por	R$	129,90</figcaption>
							</figure>
						</a>
					</li><li>
						<a	href="produto.html">
							<figure class="centralizar-foto">
									<img	src="img/produtos/miniatura2.png">
									<figcaption>Fuzz	Blussa Básica	por	R$	80,90</figcaption>
							</figure>
						</a>
					</li><li>
						<a	href="produto.html">
							<figure class="centralizar-foto">
									<img	src="img/produtos/miniatura3.png">
									<figcaption>Fuzz	Blazer	por	R$	169,90</figcaption>
							</figure>
						</a>
					</li><li>
						<a	href="produto.html">
							<figure class="centralizar-foto">
									<img	src="img/produtos/miniatura4.png">
									<figcaption>Fuzz	Casaco	por	R$	319,90</figcaption>
							</figure>
						</a>
					</li><li>
						<a	href="produto.html">
							<figure class="centralizar-foto">
									<img	src="img/produtos/miniatura5.png">
									<figcaption>Fuzz	Regata	por	R$	59,90</figcaption>
							</figure>
						</a>
					</li><li>
						<a	href="produto.html">
							<figure class="centralizar-foto">
									<img	src="img/produtos/miniatura6.png">
									<figcaption>Fuzz	Regata	por	R$	59,90</figcaption>
							</figure>
						</a>
					</li>
				</ol>
				</div>
			</section>
			<section class="painel mais-vendidos">
			<div>
				<h2>Mais	Vendidos</h2>
				<ol class="maisvendido">
					<li>
						<a	href="produto.html">
							<figure class="centralizar-foto">
									<img	src="img/produtos/miniatura7.png">
									<figcaption>Fuzz	Blussa Básica	por	R$	61,50</figcaption>
							</figure>
						</a>
					</li><li>
						<a	href="produto.html">
							<figure class="centralizar-foto">
									<img	src="img/produtos/miniatura8.png">
									<figcaption>Fuzz	Blussa Básica	por	R$	54,90</figcaption>
							</figure>
						</a>
					</li><li>
						<a	href="produto.html">
							<figure class="centralizar-foto">
									<img	src="img/produtos/miniatura9.png">
									<figcaption>Fuzz	Blusa Social Xadrez	por	R$	169,90</figcaption>
							</figure>
						</a>
					</li><li>
						<a	href="produto.html">
							<figure class="centralizar-foto">
									<img	src="img/produtos/miniatura10.png" .centralizar-foto>
									<figcaption>Fuzz	Cardigan	por	R$	119,90</figcaption>
							</figure>
						</a>
					</li><li>
						<a	href="produto.html">
							<figure class="centralizar-foto">
									<img	src="img/produtos/miniatura11.png">
									<figcaption>Fuzz	Shorts	por	R$	39,90</figcaption>
							</figure>
						</a>					</li><li>
						<a	href="produto.html">
							<figure class="centralizar-foto">
									<img	src="img/produtos/miniatura12.png">
									<figcaption>Fuzz Blusa Social por	R$	99,90</figcaption>
							</figure>
						</a>
					</li>
				</ol>
			</div>
			</section>
			<?php
				include("rodape.html");
			?>
		</div>
		<script>
		var	banners	=	["img/destaque-home.png",	"img/destaque-home-2.png"];
			var	bannerAtual	=	0;
			function	trocaBanner()	{
				bannerAtual	=	(bannerAtual	+	1)	%	2;
				document.querySelector('.destaque	img').src	=	banners[bannerAtual];
			}
			setInterval(trocaBanner,	4000);
			var	timer	=	setInterval(trocaBanner,	4000);
				var	controle	=	document.querySelector('.pause');
				controle.onclick	=	function()	{
				if	(controle.className	==	'pause')	{
					clearInterval(timer);
					controle.className	=	'play';
				}	else	{
					timer	=	setInterval(trocaBanner,	4000);
					controle.className	=	'pause';
				}
				return	false;
			};
		</script>	

		<!--	fim	.container	.destaque	-->
		<!--<form class="busca menu-departamentos">
			<p>Busca</p>
			<input	type="search">
			<input	type="image"	src="img/busca.png"	class="lupa">
			<img src="img/destaque-home.png" id="classprincipal">
			<ul id="menu-opcoes">
				<li>Departamentos</li>
				<li>Blusas e Camisas</li>
				<li>Calças</li>
				<li>Saias</li>
				<li>Vestidos</li>
				<li>Sapatos</li>
				<li>Bolsas e Carteiras</li>
				<li>Acessórios</li>
			</ul>
		</form>
		<h1>Mirror	Fashion.</h1>
			<h2>Bem-vindo	à	Mirror	Fashion,	sua	loja	de	roupas	e	acessórios.</h2>
			<p><em>Compre</em>	suas	<small>roupas</small>	e	<small>acessórios</small>	na	<strong>Mirror	Fashion</strong>.</p>
			<ul>
				<li>Confira	nossas	promoções.</li>
				<li>Receba	informações	sobre	nossos	lançamentos	por	email.</li>.
				<li>Navegue	por	todos	nossos	produtos	em	catálogo.</li>
				<li>Compre	sem	sair	de	casa.</li>
			</ul>
			<div	class="quadrado	relativo">
			<div	class="quadrado	absoluto"></div>
			<article>
				<h1>Título	principal</h1>
				<section>
					<h1>Título	da	seção</h1>
				</section>
			</article>
		</div>-->
	</body>
</html>