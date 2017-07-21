<form>
	<div class="mdl-textfield form-cadastro mdl-js-textfield mdl-textfield--floating-label">
		<input class="mdl-textfield__input" type="text" id="nome-treinador" pattern="[a-zA-Z\sà-ùÀ-Ù,ä-ü,Ä-Ü]*" />

		<label class="mdl-textfield__label" for="nome-treinador">Nome do Treinador</label>
		<span class="mdl-textfield__error">Caracteres especiais não são aceitos neste campo</span>
		<span class="erroNome"></span>

	</div>

	<div class="mdl-textfield form-cadastro mdl-js-textfield mdl-textfield--floating-label">
		<input class="mdl-textfield__input" type="text" id="data-nascimento">
		<label class="mdl-textfield__label" for="data-nascimento">Data da Nascimento(dd-mm-aaaa)</label>
		<span class="erroData"></span>
	</div>

	<div class="mdl-textfield form-cadastro mdl-js-textfield mdl-textfield--floating-label">
		<select class="mdl-textfield__input" id="clubeTorce">
		  <option value="" disabled selected></option>
		  <option value="botafogo">Botafogo</option>
		  <option value="corinthians">Corinthians</option>
		  <option value="flamengo">Flamengo</option>
		  <option value="fluminense">Fluminense</option>
		  <option value="palmeiras">Palmeiras</option>
		  <option value="santos">Santos</option>
		  <option value="spfc">São Paulo FC</option>
		  <option value="vasco">Vasco da Gama</option>
		</select>

		<label class="mdl-textfield__label" for="clubeTorce">Clube do Coração</label>
	</div>

	<div class="mdl-textfield form-cadastro mdl-js-textfield mdl-textfield--floating-label">
		<select  class="mdl-textfield__input" id="clubeEscolhido">
		  <option value="" disabled selected></option>
		  <option value="botafogo">Botafogo</option>
		  <option value="corinthians">Corinthians</option>
		  <option value="flamengo">Flamengo</option>
		  <option value="fluminense">Fluminense</option>
		  <option value="palmeiras">Palmeiras</option>
		  <option value="santos">Santos</option>
		  <option value="spfc">São Paulo FC</option>
		  <option value="vasco">Vasco da Gama</option>
		</select>

		<label class="mdl-textfield__label" for="clubeEscolhido">Clube que vai treinar</label>
	</div>

	<div class="button-container">

		<button type="submit" value="Submit" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary mdl-button--raised" onclick="return validacaoDeCadastro();">Confirma</button>
	</div>
</form>