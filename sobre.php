<!DOCTYPE html>
	<html>
		<head>
			<meta	charset="utf-8">
			<title>Sobre	a	Mirror	Fashion</title>
			<link	rel="stylesheet"	href="css/sobre.css">
			<link	rel="stylesheet"	href="css/estilos.css">
			<link	rel="stylesheet"	href="css/estilos.css" media="screen">
			<link	rel="stylesheet"	href="css/estilos.css" media="(max-width:	480px)">
		</head>
		<body>
			<?php
				include("cabecalho.php");
			?>

			<!--<img src="img/logo.png">-->
			<h1>A	Mirror	Fashion</h1>
			<!--<style type="text/css">
				p {
					background-color: yellow;
					color: blue;
				}
			</style> -->
				<p>
					A	<strong>Mirror	Fashion</strong>	é	a	maior	empresa	de	comércio	eletrônico	no	segmento
					de	moda	em	todo	o	mundo.	Fundada	em	1932,	possui	filiais	
					em	124	países, sendo líder de mercado com mais de 90% de participação em 118 deles. Fundada	há	<?php	print	date("Y")	-	1932;	?>	anos, ...
				</p>
				<p>
					Nosso centro de distribuição fica em <a	href="https://maps.google.com.br/?q=Jacarezinho">Jacarezinho,	no	Paraná</a>. De lá, saem 48 aviões que distribuem nossos produtos às casas do mundo todo.
				</p>
				<figure id="centro-distribuicao">
					<img src="img/centro-distribuicao.png" >
					<figcaption>Centro	de	distribuição da	Mirror	Fashion</figcaption>
				</figure>
				<p>	
					Compre suas roupas e acessórios na <strong>Mirror Fashion</strong>. Acesse nossa loja ou entre em contato se tiver duvidas. Conheça também nossa <a href="#historia"> história </a> e nossos <a href="#diferenciais">diferencias</a>.
				</p>
			<h2 id="historia">História</h2>
				<figure id="familia-pelho">
					<img	src="img/familia-pelho.jpg" >
					<figcaption>Família	Pelho</figcaption>
				</figure>
				<p>
					Fundação em 1932 ocorreu no momento da descoberta econômica do interior do Paraná. A família Pelho, tradicional da região, investiu todas as suas economias nessa nova iniciativa, revolucionária para a época. O fundador <em>Eduardo Simões Pelho</em>, dotado de particular visão administrativa, guiou os negócios da empresa durante mais de 50 anos, muitos deles ao lado de seu filho <em>E. S. Pelho Filho</em>, atual CEO. O nome da empresa é inspirado no nome da família.
				</p>
				<p>
					O crescimento da empresa foi praticamente instantâneo. Nos primeiros 5 anos, já atendia 18 países. Bateu a marca de 100 países em apenas 15 anos de existência. Até hoje, já atendeu 740 milhões de usuários diferentes, em bilhões de diferentes pedidos.
				</p>
				<p>
					O crescimento em número de funcionários é também assombroso. Hoje, é a maior empregadora do Brasil, mas mesmo após apenas 5 anos de sua existência, já possuia 30 mil funcionários. Fora do Brasil, há 240 mil funcionários, além dos 890 mil brasileiros nas instalações de Jacarezinho nos escritórios em todo país.
				</p>
				<p>
					Dada a importância econômica da empresa para o Brasil, a família Pelho já recebeu diversos prêmios, homenagens e condecorações. Todos os presidentes do Brasil já visitaram as instalações da Mirror Fashion, além de presidentes da União Européia, Ásia e o secretário-geral da ONU.
				</p>
				<p>
					Mais informações	<a	href="#info">aqui</a>.
				</p>
			<h2 id="diferenciais">Diferenciais</h2>
				<ul>
					<li>Menor	preço	do	varejo,	garantido;</li>
					<li>Se	você	achar	uma	loja	mais	barata,	leva	o	produto	de	graça;</li>
					<li>Menor preço do varejo, garantido;</li>
					<li>Se você achar uma loja mais barata, leva o produto de graça;</li>
					<li>Pague em reais, dólares, euros ou bitcoins;</li>
					<li>Todas as compras com frete grátis para o mundo todo;</li>
					<li>Maior comércio eletrônico de moda do mundo;</li>
					<li>Atendimento via telefone, email, chat, twitter, facebook, carta, fax e telegrama;</li>
					<li>Presente em 124 países;</li>
					<li>Mais de um milhão de funcionários em todo o mundo.</li>
				</ul>
			<p>
				Link <a	href="http://www.caelum.com.br">Caelum</a>.
			</p>
<!--			<h2>Mais	informações	sobre	o	assunto:</h2>
				<p>Informações...</p>
			<h2>Mais	informações	sobre DIV e SPAN:</h2>
				<p>Informações...</p>
				<div> Testando o DIV</div>
				<span> Testando o Span</span>-->
			<div	id="rodape">
				<img	src="img/logo.png">  
				&copy;	Copyright	Mirror	Fashion
			</div>
			<?php
				include("rodape.html");
			?>
		</body>
	</html>




<!--  LISTA NAO ORDENADA
<ul>
	<li>Primeiro	item	da	lista</li>
	<li>
			Segundo	item	da	lista:
			<ul>
					<li>Primeiro	item	da	lista	aninhada</li>
					<li>Segundo	item	da	lista	aninhada</li>
			</ul>
	</li>
	<li>Terceiro	item	da	lista</li>
</ul>


   LISTA OREDENADA 

<ol>
	<li>Primeiro	item	da	lista</li>
	<li>Segundo	item	da	lista</li>
	<li>Terceiro	item	da	lista</li>
	<li>Quarto	item	da	lista</li>
	<li>Quinto	item	da	lista</li>
</ol>

	LISTA DE DEFINIÇÃO


<dl>
	<dt>HTML</dt>
	<dd>
		HTML	é	a	linguagem	de	marcação	de	textos	utilizada	
		para	exibir	textos	como	páginas	na	Internet.
	</dd>
	<dt>Navegador</dt>
	<dd>
		Navegador	é	o	software	que	requisita	um	documento	HTML.
		através	do	protocolo	HTTP	e	exibe	seu	conteúdo	em	uma
		janela.
	</dd>
</dl>

-->