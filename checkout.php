<!doctype	html>
<html>
    <head>
        <meta	charset="UTF-8">
        <title>Checkout	Mirror	Fashion</title>
        <meta	name="viewport"	content="width=device-width">
        <link	rel="stylesheet"	href="css/bootstrap.css">
        <link	rel="stylesheet"	href="css/checkout.css">
    </head>
    <body>
         <div	class="jumbotron">  <!-- cabeçalho da página -->
            <div	class="container">
                <h1>Ótima	escolha!</h1>
                <p>Obrigado	por	comprar	na	Mirror	Fashion.</p>
            </div>
        </div>
        <!-- <h2 class="panel-title">Sua	compra</h2> -->
        <div class="container">
            <div	class="panel	panel-default">

                <div	class="panel-heading">
                    <h2	class="panel-title">Cadastro</h2>
                </div><!--	fim	.panel-heading	-->

                <div	class="panel-body">
                    <!-- <img	src="img/produtos/foto1-<?=	$_POST['cor']	?>.png"	class="img-thumbnail	img-responsive"> -->

                    <form	action="/efetivar.php"	method="POST">
                        <fieldset>
                            <legend>Crie seu login</legend>
                        <p>
                            <label	for="nomeusuario">Nickname:</label>
                            <input	type="text"	name="nomeusuario" id="nomeusuario" autofocus required>
                            <input	type="submit">  
                            <!-- inicia	a chamada que envia	as informações do formulário para o	endereço indicado no atributo action do <form> -->
                        </p>
                        <p>
                            <label	for="password">password:</label>
                            <input	type="password"	name="senha" required>
                            <input	type="button"	name="mostra_dialogo"	value="Cancel">
                            <!-- <input	type="text"	pattern="^@\w{2,}"	name="usuario_twitter">  // PATTERN - Validação de campo -->
                        </p>
                        </fieldset> 
                        <fieldset> 
                            <legend>Dados	pessoais</legend>
                            <div	class="form-group">
                                <label	for="nome">Nome	completo</label>
                                <input	type="text"	class="form-control"	id="nome"	name="nome" required>
                            </div>
                            <div	class="form-group">
                                <label	for="email">Email</label>
                                <div	class="input-group">
                                    <span	class="input-group-addon"></span>
                                    <input	type="email"	class="form-control"	id="email"	name="email" placeholder="email@exemplo.com" required>
                                </div>
                            </div>
                            <div	class="form-group">
                                <label	for="cpf">CPF</label>
                                <input	type="number"	class="form-control"	id="cpf"	name="cpf" placeholder="000.000.000-00" required>
                            </div>
                            <div	class="checkbox">
                                <label>
                                    <input	type="checkbox"	value="sim"	name="spam"	checked>
                                    Quero	receber	spam	da	Mirror	Fashion
                                </label>
                            </div>

                        </fieldset> 
                        <fieldset>
                            <legend>Cartão	de	crédito</legend>
                            <div	class="form-group">
                                <label	for="numero-cartao">Número	-	CVV</label>
                                <input	type="number"	class="form-control"	id="numero-cartao"	name="numero-cartao">
                            </div>
                            <div	class="form-group">
                                <label	for="bandeira-cartao">Bandeira</label>
                                <select	name="bandeira-cartao"	id="bandeira-cartao"	class="form-control">
                                    <option	value="master">MasterCard</option>
                                    <option	value="visa">VISA</option>
                                    <option	value="amex">American	Express</option>
                                </select>
                            </div>
                            <div	class="form-group">
                                <label	for="validade-cartao">Validade</label>
                                <input	type="month"	class="form-control"	id="validade-cartao"	name="validade-cartao">
                            </div>

                        <!-- <label	for="contrato">Aceito	os	termos	do	contrato</label> 
                        <input	id="contrato"	name="contrato"	type="checkbox"	value="sim">
                        <p>
                            <input	type="radio"	name="idade"	id="idade5"	value="5">
                            <label	for="idade5">Menos	de	5	anos</label>
                        </p>
                        <p>
                            <input	type="radio"	name="idade"	id="idade10"	value="10">
                            <label	for="idade10">Menos	de	10	anos</label>
                        </p>
                        <p>
                            <input	type="radio"	name="idade"	id="idade15"	value="15">
                            <label	for="idade15">Menos	de	15	anos</label>
                        </p>
                        <p>
                            <input	type="radio"	name="idade"	id="idade20"	value="20">
                            <label	for="idade20">Menos	de	20	anos</label>
                        </p>
                        <p>
                            <input	type="image"	name="botao"	src="ims/produtos/foto1-azul.png"	width="20"	height="18">
                            <input	type="image"	name="botao"	src="images/enviar.png"	width="20"	height="18">
                        </p> 
                        <input	type="button"	name="mostra_dialogo"	value="Clique	aqui!">
                        -->
                        </fieldset>
                        <button	type="submit"	class="btn btn-l pull-right btn-primary ">
                            <span	class="glyphicon	glyphicon-thumbs-up"></span>
                            <!-- btn-lg DEIXA O BOTAO MAIOR // pull-right deve alinhar a direita // btn-primary formatação bootstrap azul -->
                            Confirmar	Pedido
                        </button>
                    </form>
                    <img	src="img/produtos/foto1-<?=	$_POST["cor"]	?>.png"	class="img-thumbnail	img-responsive">
                    <dl>
                        <dt>Cor</dt>
                            <dd><?=	$_POST['cor']	?></dd>
                        <dt>Tamanho</dt>
                            <dd><?= $_POST['tamanho']	?></dd>
                        <dt>Produto</dt>
                            <dd><?=	$_POST['nome']	?></dd>
                        <dt>R$ Preço</dt>
                            <dd id="preco"><?=	$_POST['preco']	?></dd>
                    </dl>
                    <div	class="form-group">
                        <label	for="qt">Quantidade</label>
                        <input	id="qt"	class="form-control"	type="number"	min="0"	max="99"	value="1">
                    </div>
                    <div	class="form-group">
                        <label	for="total">Total</label>
                        <output	id="total"	class="form-control">
                            <?=	$_POST["preco"]	?>
                        </output>
                    </div>
                    </div>
                </div><!--	fim	.panel-body	-->
            </div><!--	fim	.panel	-->
        </div>
        <script	src="js/total.js">
            document.querySelector('form	input').oninvalid	=	function(event)	{
				//	cancela	comportamento	padrão	do	browser
				event.preventDefault();
				//	verifica	a	validade	e	mostra	o	alert
				if	(!this.validity.valid)	{
					alert("Nome	obrigatório!");
				}
            };
        </script>
        <script	src="js/inputmask-plugin.js"></script>
    </body>
</html>

