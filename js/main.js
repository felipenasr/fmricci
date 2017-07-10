// VARIÁVEIS GLOBIAS


var treinadorPrincipal = {};

// Funções gerais


function dadosDoTreinador(){

	var query = location.search.slice(1);
	var partes = query.split('&');

	partes.forEach(function (parte) {
	    var chaveValor = parte.split('=');
	    var chave = chaveValor[0];
	    var valor = chaveValor[1];
	    treinadorPrincipal[chave] = valor;
	});
}

function ajustaNome (){
	treinadorPrincipal.nome = treinadorPrincipal.nome.replace('+', ' ');
}

// aplicando mascaras jquery
$('#data-nascimento').mask('00-00-0000');
