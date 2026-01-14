<?php
/* Smarty version 5.5.1, created on 2026-01-14 20:48:03
  from 'file:CalcView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6967f2f3dc5e07_89165547',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95fb3168095f4ce215d8d75cf236904bfba249da' => 
    array (
      0 => 'CalcView.tpl',
      1 => 1768420069,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
))) {
function content_6967f2f3dc5e07_89165547 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\php_06\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_7839274746967f2f3dafa21_64829045', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_7839274746967f2f3dafa21_64829045 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\php_06\\app\\views';
?>


<div class="bar_logout">
	<a href="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
logout"  class="">Wyloguj</a>
	<span style="float:right;">użytkownik: <?php echo $_smarty_tpl->getValue('user')->login;?>
, rola: <?php echo $_smarty_tpl->getValue('user')->role;?>
</span>
</div>

        <?php if (!$_smarty_tpl->getValue('hide_intro')) {?>
        <div class="intro">
            <p>Wprowadź dane, aby obliczyć miesięczną ratę pożyczki.</p>
        </div>
    <?php }?>

        <form action="<?php echo $_smarty_tpl->getValue('conf')->action_root;?>
calcCompute" method="post">
        <fieldset>
            <label for="kwota"> Kwota pożyczki (zł): </label>
            <input id="kwota" type="text" placeholder="Kwota" name="kwota" value="<?php echo $_smarty_tpl->getValue('form')->kwota;?>
">

            <label for="lata">Okres spłaty (lata):</label>
            <select id="lata" name="lata">
<?php if ((true && (true && null !== ($_smarty_tpl->getValue('res')->lata_name ?? null)))) {?>
<option value="<?php echo $_smarty_tpl->getValue('form')->lata;?>
">ponownie: <?php echo $_smarty_tpl->getValue('res')->lata_name;?>
</option>
<option value="" disabled="true">---</option>
<?php }?>
                <option value="2">2</option>
                <option value="5">5</option>
                <option value="10">10</option>
            </select>

            <label for="opro">Oprocentowanie (%):</label>
            <select id="opro" name="opro">
<?php if ((true && (true && null !== ($_smarty_tpl->getValue('res')->opro_name ?? null)))) {?>
<option value="<?php echo $_smarty_tpl->getValue('form')->opro;?>
">ponownie: <?php echo $_smarty_tpl->getValue('res')->opro_name;?>
%</option>
<option value="" disabled="true">---</option>
<?php }?>
                <option value="2">2%</option>
                <option value="4">4%</option>
                <option value="8">8%</option>
                <option value="10">10%</option>
            </select>
        </fieldset>
        <button type="submit">Oblicz</button>
    </form>

<?php $_smarty_tpl->renderSubTemplate('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php if ((true && (true && null !== ($_smarty_tpl->getValue('res')->result ?? null)))) {?>
<div class="result">
	Wynik: <?php echo $_smarty_tpl->getValue('res')->result;?>

</div>
<?php }?>

<?php
}
}
/* {/block 'content'} */
}
