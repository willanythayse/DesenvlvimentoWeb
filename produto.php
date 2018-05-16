<!DOCTYPE	html>
<html>
	<head>
		<meta	charset="utf-8">
		<meta	name="viewport"	content="width=device-width">
		<title>Produto da Mirror Fashion</title>
		<!--<link	rel="stylesheet"	href="css/reset.css">-->
		<link	rel="stylesheet"	href="css/produto.css">
		<link	rel="stylesheet"	href="css/estilos.css">
		<link	rel="stylesheet"	href="css/mobile.css"	media="(max-width:	939px)">
	</head>
		<body>
			<?php 
				//$cabecalho_title	=	"Produto	da	Mirror	Fashion";
				include ("cabecalho.php");
			?>	
			<div class="produto container">
				<h1>Fuzzy	Cardigan</h1>
				<p>por	apenas	R$	129,00</p>
				<form action="checkout.php" method="POST"> 
					<fieldset	class="cores">
						<legend>Escolha	a	cor:</legend>
						<input	type="radio"	name="cor"	value="verde"	id="verde"	checked>
						<label	for="verde">
							<img	src="img/produtos/foto2-verde.png"	alt="produto na cor verde">
						</label>
						<input	type="radio"	name="cor"	value="rosa"	id="rosa">
						<label	for="rosa">
							<img	src="img/produtos/foto2-rosa.png"	alt="produto na cor rosa">
						</label>
						<input	type="radio"	name="cor"	value="azul"	id="azul">
						<label	for="azul">
							<img	src="img/produtos/foto2-azul.png"	alt="produto na cor azul">
						</label>
						<input	type="submit"	class="comprar"	value="Comprar">
						<input	type="hidden"	name="nome"	value="Fuzzy	Cardigan">
						<input	type="hidden"	name="preco"	value="129,00">
					</fieldset>
					<fieldset	class="tamanhos">
						<legend>Escolha	o	tamanho:</legend>
						<input	type="range"	min="36"	max="46"	value="42"	step="2"	name="tamanho"	id="tamanho">
					</fieldset>
				</form>
			</div>
			<?php 
				include ("rodape.html");
			?>
		</body>
</html>