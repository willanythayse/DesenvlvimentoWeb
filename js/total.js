var	$input_quantidade	=	document.querySelector("#qt");
var	$output_total	=	document.querySelector("#total");

$input_quantidade.oninput	=	function(){
    var	preco	=	document.querySelector("#preco").textContent;
    preco	=	preco.replace("R$	",	"");
    preco	=	preco.replace(",",	".");
    preco	=	parseFloat(preco);
    var	quantidade	=	$input_quantidade.value;
    var	total	=	quantidade	*	preco;
    total	=	"R$	"	+	total.toFixed(2)
    total	=	total.replace(".",	",");
    $output_total.value	=	total;
}



	////	agenda	uma	execução	qualquer
//var	timer	=	setInterval(minhaFuncao,	1000);
    ////	cancela	execução (execução infinita)
//clearInterval(timer);