<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>{$page_title|default:"Moja aplikacja"}</title>

    <link rel="stylesheet" href="{$app_url}/css/style.css">

</head>

<body>
<div class="topbar">
    <div class="topbar-left">
        <h1>{$page_title|default:"Domyślny tytuł"}</h1>
    </div>
    {if isset($show_topbar) && $show_topbar}
        <div class="topbar-right">
            <a href="{$app_url}/app/security/logout.php">
                <button type="button" class="pure-button pure-button-secondary">Wyloguj</button>
            </a>
        </div>
    {/if}
</div>

<div class="header">
    <h1>{$page_heading|default:"Domyślny nagłówek"}</h1>
</div>

<div class="content">
    {block name=content}Domyślna treść{/block}
</div>

<div class="footer">
   {block name=footer}Domyślna treść stopki{/block}
</div>

</body>
</html>
