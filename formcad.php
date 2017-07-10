<form id="form" action="autenticacao.php" method="get">
		<div class="mdl-textfield form-cadastro mdl-js-textfield mdl-textfield--floating-label">
			<input required name="nome" class="mdl-textfield__input" type="text" id="nome-treinador" pattern="[a-zA-Z\sà-ùÀ-Ù,ä-ü,Ä-Ü]*" />

			<label class="mdl-textfield__label" for="nome-treinador">Nome do Treinador</label>
			<span class="mdl-textfield__error">Esse campo não pode ficar em branco!</span>
		</div>

		<div class="mdl-textfield form-cadastro mdl-js-textfield mdl-textfield--floating-label">
			<input required name="data" class="mdl-textfield__input" type="text"	id="data-nascimento">
			<label class="mdl-textfield__label" for="data-nascimento">Data da Nascimento</label>
		</div>

		<div class="mdl-textfield form-cadastro mdl-js-textfield mdl-textfield--floating-label">
			<select required class="mdl-textfield__input" name="clubeTorce" id="clubeTorce">
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
			<select required class="mdl-textfield__input" name="clubeEscolhido" id="clubeEscolhido">
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

			<button type="submit" value="Submit" class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--primary mdl-button--raised">Confirma</button>
		</div>
	</form>