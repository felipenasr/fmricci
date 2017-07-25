var JOGO = (function(module) {
  var box = module || {};

  box.verificaAnoBissexto = function(ano){
  	if ( ( ano % 4 == 0 && ano % 100 != 0 ) || (ano % 400 == 0) ) {
  		return true;
  	}else{
  		return false;
  	}
  }

  box.verificaAno = function(ano){
  	if(ano > 2010 || ano < 1900){
  		return false;
  	}else if(ano == NaN || ano == undefined || ano == null){
  		return false;
  	}
  	else{
  		return true;
  	}
  }

  box.teste = "Legal"

  return box;
})(window.JOGO);
