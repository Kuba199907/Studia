{extends file="main.tpl"}

{block name=content}
    {* Intro lub informacja wstępna *}
    {if !$hide_intro}
        <div class="intro">
            <p>Wprowadź dane, aby obliczyć miesięczną ratę pożyczki.</p>
        </div>
    {/if}

    {* Formularz danych *}
    <form action="index.php" method="post">

        Kwota pożyczki (zł):  
        <input type="text" name="kwota" value="{$form.kwota}" />

        Okres spłaty (lata):  
        <select name="lata">
            <option value="2" {if $form.lata == 2}selected{/if}>2</option>
            <option value="5" {if $form.lata == 5}selected{/if}>5</option>
            <option value="10" {if $form.lata == 10}selected{/if}>10</option>
        </select>

        Oprocentowanie (%):
        <select name="opro">
            <option value="2" {if $form.opro == 2}selected{/if}>2%</option>
            <option value="4" {if $form.opro == 4}selected{/if}>4%</option>
            <option value="8" {if $form.opro == 8}selected{/if}>8%</option>
            <option value="10" {if $form.opro == 10}selected{/if}>10%</option>
        </select>

        <button type="submit">Oblicz</button>
    </form>

    {* Błędy *}
    {if isset($messages) && $messages|@count > 0}
        <div class="messages">
            <strong>Wystąpiły błędy:</strong>
            <ul>
                {foreach from=$messages item=msg}
                    <li>{$msg}</li>
                {/foreach}
            </ul>
        </div>
    {/if}

    {* Wynik *}
    {if isset($result)}
        <div class="result">
            Miesięczna rata wynosi: <strong>{$result} zł</strong>
        </div>
    {/if}

{/block}
