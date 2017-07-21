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
		uiLogin.campos.forEach( function(campo, index) {
			console.log(campo.value);
		});
	};
	var cadastro = function(){
    	uiLogin.button.addEventListener("click", validacaoDeCadastro);
	}();
})();