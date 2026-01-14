<?php
/* Smarty version 5.5.1, created on 2025-11-28 20:40:21
  from 'file:CalcView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6929faa5d5cc03_73160551',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '0b1bf0cf90845f42bd388982f5b6a6303771b697' => 
    array (
      0 => 'CalcView.tpl',
      1 => 1764358687,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6929faa5d5cc03_73160551 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\php_05\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_3501374406929faa5d47571_45057499', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_3501374406929faa5d47571_45057499 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\php_05\\app\\views';
?>

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

        <?php if ($_smarty_tpl->getValue('msgs')->isError()) {?>
        <div class="messages">
            <h4>Wystąpiły błędy: </h4>
            <ol class="err">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getErrors(), 'err');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('err')->value) {
$foreach0DoElse = false;
?>
            <li><?php echo $_smarty_tpl->getValue('err');?>
</li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ol>
        </div>
    <?php }?>

        <?php if ($_smarty_tpl->getValue('msgs')->isInfo()) {?>
        <div class="messages">
            <h4>Informacje: </h4>
            <ol class="inf">
            <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('msgs')->getInfos(), 'inf');
$foreach1DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('inf')->value) {
$foreach1DoElse = false;
?>
            <li><?php echo $_smarty_tpl->getValue('inf');?>
</li>
            <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ol>
        </div>
    <?php }?>

    <?php if ((true && (true && null !== ($_smarty_tpl->getValue('res')->result ?? null)))) {?>
        <div class="result">
            <h4>Wynik</h4>
            <?php echo $_smarty_tpl->getValue('res')->result;?>

        </p>
        </div>
    <?php }?>

<?php
}
}
/* {/block 'content'} */
}
