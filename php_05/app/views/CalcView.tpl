{extends file="main.tpl"}

{block name=content}
    {* Intro lub informacja wstępna *}
    {if !$hide_intro}
        <div class="intro">
            <p>Wprowadź dane, aby obliczyć miesięczną ratę pożyczki.</p>
        </div>
    {/if}

    {* Formularz danych *}
    <form action="{$conf->action_root}calcCompute" method="post">
        <fieldset>
            <label for="kwota"> Kwota pożyczki (zł): </label>
            <input id="kwota" type="text" placeholder="Kwota" name="kwota" value="{$form->kwota}">

            <label for="lata">Okres spłaty (lata):</label>
            <select id="lata" name="lata">
{if isset($res->lata_name)}
<option value="{$form->lata}">ponownie: {$res->lata_name}</option>
<option value="" disabled="true">---</option>
{/if}
                <option value="2">2</option>
                <option value="5">5</option>
                <option value="10">10</option>
            </select>

            <label for="opro">Oprocentowanie (%):</label>
            <select id="opro" name="opro">
{if isset($res->opro_name)}
<option value="{$form->opro}">ponownie: {$res->opro_name}%</option>
<option value="" disabled="true">---</option>
{/if}
                <option value="2">2%</option>
                <option value="4">4%</option>
                <option value="8">8%</option>
                <option value="10">10%</option>
            </select>
        </fieldset>
        <button type="submit">Oblicz</button>
    </form>

    {* wyświeltenie listy błędów, jeśli istnieją *}
    {if $msgs->isError()}
        <div class="messages">
            <h4>Wystąpiły błędy: </h4>
            <ol class="err">
            {foreach $msgs->getErrors() as $err}
            {strip}
                <li>{$err}</li>
            {/strip}
            {/foreach}
            </ol>
        </div>
    {/if}

    {* wyświeltenie listy informacji, jeśli istnieją *}
    {if $msgs->isInfo()}
        <div class="messages">
            <h4>Informacje: </h4>
            <ol class="inf">
            {foreach $msgs->getInfos() as $inf}
            {strip}
                <li>{$inf}</li>
            {/strip}
            {/foreach}
            </ol>
        </div>
    {/if}

    {if isset($res->result)}
        <div class="result">
            <h4>Wynik</h4>
            {$res->result}
        </p>
        </div>
    {/if}

{/block}
