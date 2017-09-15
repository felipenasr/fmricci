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
	}else if(ano == NaN || ano == undefined || ano == null){
		return false;
	}
	else{
		return true;
	}
	
}


function verificaMes(mes) {
	if(mes> 12 ||mes <= 0){
	    return false;
    }else if(mes == NaN || mes == undefined || mes == null){
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


function verificaData(data){
	var valida = true;
    var vetorData = data.split('-');
    vetorData.forEach(function(valor, indice){
    	if(valor == NaN || valor == null || valor == undefined){
    		valida = false;
    	}
    })
    if(!(verificaAno(vetorData[2]))){
		$('.erroData').text('Formato inválido!');
    	valida = false;
    }
    if(!(verificaMes(vetorData[1]))){
    	$('.erroData').text('Formato inválido!');
    	valida = false;
    }if(vetorData[0] > verificaDiasMes(vetorData[1], vetorData[2]) || vetorData[0]<= 0){
    	$('.erroData').text('Formato inválido!');
    	valida = false;
    }
    return valida;
}