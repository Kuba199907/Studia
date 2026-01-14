{extends file="main.tpl"}

{block name=content}
<form action="{$conf->action_url}login" method="post">
	<legend>Logowanie do systemu</legend>
	<fieldset>
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login"/>
			<label for="id_pass">pass: </label>
			<input id="id_pass" type="password" name="pass" /><br />
			<button type="submit">Zaloguj</button>
	</fieldset>
</form>	

{include file='messages.tpl'}

{/block}
