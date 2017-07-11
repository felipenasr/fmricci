// VARIÁVEIS GLOBIAS


var treinadorPrincipal = {};
var vetorData = {};

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
function validacaoDeCadastro(){
	var teste = formcad.data.value;
    vetorData = teste.split('-');
    alert(vetorData);
}
// aplicando mascaras jquery
$('#data-nascimento').mask('00-00-0000');⁠⁠⁠⁠