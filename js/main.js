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


function verificaAnoBissexto(ano){
	if ( ( ano % 4 == 0 && ano % 100 != 0 ) || (ano % 400 == 0) ) {
		return true;
	}else{
		return false;
	}
}

function verificaAno(ano){
	if(ano > 2010 || ano < 1900){
		return false;
	}else{
		return true;
	}
}


function verificaMes(mes) {
	if(mes> 12 ||mes < 0){
	    return false;
    }else{
		return true;
	}
}
function verificaDiasMes(mes, ano){
	if(mes == 1 || mes == 3 || mes == 5 || mes == 7 || mes == 8 || mes == 10 || mes == 12 ){
		return 31;
	}else if(mes == 2){
		 if(verificaAnoBissexto(ano)){
		 	return 29;
		 }else{
		 	return 28;
		 }
	}else{
		return 30;
	}
}
function validacaoDeCadastro(){
	var teste = formcad.data.value;
	valida = true;
    vetorData = teste.split('-');

    if(!(verificaAno(vetorData[2]))){
		$('.erroData').text('Formato inválido!');
    	valida = false;
    }
    if(!(verificaMes(vetorData[1]))){
    	$('.erroData').text('Formato inválido!');
    	valida = false;
    }if(vetorData[0] > verificaDiasMes(vetorData[1], vetorData[2]) || vetorData[0]< 0){
    	$('.erroData').text('Formato inválido!');
    	valida = false;
    }
    return valida;
}
$('#data-nascimento').mask('00-00-0000');