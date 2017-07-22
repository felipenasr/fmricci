<form >
	<div class="mdl-textfield form-cadastro mdl-js-textfield mdl-textfield--floating-label">
		<input class="mdl-textfield__input" type="text" id="nomeTreinador" pattern="[a-zA-Z\sà-ùÀ-Ù,ä-ü,Ä-Ü]{10,32}" />

		<label class="mdl-textfield__label" for="nomeTreinador">Nome do Treinador</label>
		<span class="mdl-textfield__error"></span>
		<span class="nomeTreinador errorinput"></span>

	</div>

	<div class="mdl-textfield form-cadastro mdl-js-textfield mdl-textfield--floating-label">
		<input class="mdl-textfield__input data-campo" type="text" id="dataNascimento">
		<label class="mdl-textfield__label" for="dataNascimento">Data da Nascimento(dd-mm-aaaa)</label>
		<span class="dataNascimento errorinput"></span>
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
		<span class="clubeTorce errorinput"></span>
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
		<span class="clubeEscolhido errorinput"></span>
	</div>

	<div class="button-container">

		<button type="submit" value="Submit" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary mdl-button--raised" id="submitCadastro">Confirma</button>
	</div>
</form>