{extends file="main.tpl"}

{block name=content}

<div class="bar_logout">
	<a href="{$conf->action_url}logout"  class="">Wyloguj</a>
	<span style="float:right;">użytkownik: {$user->login}, rola: {$user->role}</span>
</div>

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

{include file='messages.tpl'}

{if isset($res->result)}
<div class="result">
	Wynik: {$res->result}
</div>
{/if}

{/block}
