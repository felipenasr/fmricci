var treinadorPrincipal = {};

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