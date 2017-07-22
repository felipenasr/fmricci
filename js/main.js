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
				if (campo.id=="dataNascimento") {
					if(!verificaData(campo.value)){
						$('.'+campo.id).text('Erro na data!');
						erros++;
					}
				}
			}
		});
		uiLogin.selectors.forEach(function(seletor, key){
			if(seletor.value == ''){
				erros++;
				$('.'+seletor.id).text('Campo obrigatório');
			}
			else{
				data[seletor.id]=seletor.value;
				$('.'+seletor.id).text('');
			}
		});
		if(erros == 0 ){
			gravacaoDeDados(data);
		}
	};

	var gravacaoDeDados= function(data){
		localStorage.dadosTreinador = JSON.stringify(data);
		window.location.replace('game.php');
	};
	var cadastro = function(){
		if(localStorage.dadosTreinador == undefined){
    		uiLogin.button.addEventListener("click", validacaoDeCadastro);
		}else{
			var local = window.location.href;
			local = local.replace(window.location.origin, '');
			if(local == '/' || local=='/index.php'){
				window.location.replace('game.php');
			}
		}
	}();
})();