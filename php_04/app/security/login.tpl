{extends file="../../templates/main.tpl"}

{block name=content}

<form action="{$conf->app_url}/app/security/login.php" method="post">

    <label for="id_login">Login:</label>
    <input id="id_login" type="text" name="login" value="{$form.login}" />

    <label for="id_pass">Hasło:</label>
    <input id="id_pass" type="password" name="pass" />

    <button type="submit">Zaloguj</button>
</form>

{if $messages|@count > 0}
    <div class="messages">
        <strong>Wystąpiły błędy:</strong>
        <ul>
            {foreach from=$messages item=msg}
                <li>{$msg}</li>
            {/foreach}
        </ul>
{/if}
{/block}
