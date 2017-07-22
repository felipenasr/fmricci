// escopo do cadastro
// 1 - Autenticação dos dados
// 2 - Tratamento dos dados
// 3 - Gravação dos dados e encaminhamento para uma página com as informações printadas

(function  () {
	// ui do login
	var uiLogin ={
		campos: document.querySelectorAll('input'),
		selectors: document.querySelectorAll('select'),
		button: document.querySelector('#submitCadastro')
	};

	var validacaoDeCadastro = function(e){
		e.preventDefault();
		var data = {};
		var erros = 0;
		uiLogin.campos.forEach( function(campo, index) {
			if(campo.value.length===0){
				$('.'+campo.id).text('Campo obrigatório!');
				erros++;
			}else{
				data[campo.id] = campo.value;
				$('.'+campo.id).text('');
				if (campo.id=="data-nascimento") {
					if(!verificaData(campo.value)){
						$('.'+campo.id).text('Erro na data!');
						erros++;
					}
				}
			}
		});
		uiLogin.selectors.forEach(function(seletor, key){
			if(seletor.value == ''){
				$('#'+seletor.id).attr('require');
				console.log(seletor.id);

			}
		});
		// console.log(erros);
		// console.log(data);
	};
	var cadastro = function(){
    	uiLogin.button.addEventListener("click", validacaoDeCadastro);
	}();
})();