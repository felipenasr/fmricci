var dadosTreinador =localStorage.dadosTreinador;

if (dadosTreinador==undefined){
	window.location.replace('index.php');
}else{
	dadosTreinador =JSON.parse(localStorage.dadosTreinador);
	$('.nome-treinador').text('Olá ' + dadosTreinador.nomeTreinador);
	$('.time').text(dadosTreinador.clubeEscolhido);
}
