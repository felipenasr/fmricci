<main class="mdl-layout__content">


	<form id="form" action="autenticacao.php" method="get">
		
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<input name="nome" class="mdl-textfield__input" type="text" id="nome-treinador" pattern="[a-zA-Z\sà-ùÀ-Ù,ä-ü,Ä-Ü]*" />

			<label class="mdl-textfield__label" for="nome-treinador">Nome do Treinador</label>
			<span class="mdl-textfield__error">Não temos caracteres especiais no nosso nome!</span>
		</div>
		
		<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
			<input name="nome" class="mdl-textfield__input" type="text" id="nome-treinador" pattern="[0-9,/,-]+11">

			<label class="mdl-textfield__label" for="nome-treinador">Data</label>
			<span class="mdl-textfield__error">Não temos caracteres especiais no nosso nome!</span>
		</div>

		<div class="button-container">

			<button type="submit" value="Submit" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary mdl-button--raised">Confirma</button>
		</div>
	
	</form>
</main>