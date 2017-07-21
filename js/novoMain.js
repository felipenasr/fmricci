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
	console.log(uiLogin);

	var validacaoDeCadastro = function(e){
		e.preventDefault();
		campos.forEach( function(element, index) {
		});
	};
	var cadastro = function(){
    	uiLogin.button.addEventListener("click", validacaoDeCadastro);
	}();
})();