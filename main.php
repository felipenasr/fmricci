<main class="mdl-layout__content">
<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
	<form id="form" action="autenticacao.php" method="get">
		
		<input name="nome" class="mdl-textfield__input" type="text" id="nome-treinador" pattern="[a-zA-Z\sà-ùÀ-Ù,ä-ü,Ä-Ü]*">

		<label class="mdl-textfield__label" for="nome-treinador">Nome do Treinador</label>
		<span class="mdl-textfield__error">Não temos caracteres especiais no nosso nome!</span>

		<input type="submit" value="Submit">
	
	</form>
</div>
</main>