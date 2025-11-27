<?php
/* Smarty version 5.5.1, created on 2025-11-26 18:06:49
  from 'file:D:\xampp\htdocs\php_04/template/calc.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_692733a92b4820_50533564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '285608a2b59e82131808b20398ad249f09decdff' => 
    array (
      0 => 'D:\\xampp\\htdocs\\php_04/template/calc.tpl',
      1 => 1763148580,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692733a92b4820_50533564 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\php_04\\template';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_856985640692733a8d27ef9_19940706', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_856985640692733a8d27ef9_19940706 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\php_04\\template';
?>

        <?php if (!$_smarty_tpl->getValue('hide_intro')) {?>
        <div class="intro">
            <p>Wprowadź dane, aby obliczyć miesięczną ratę pożyczki.</p>
        </div>
    <?php }?>

        <form action="index.php" method="post">

        Kwota pożyczki (zł):  
        <input type="text" name="kwota" value="<?php echo $_smarty_tpl->getValue('form')['kwota'];?>
" />

        Okres spłaty (lata):  
        <select name="lata">
            <option value="2" <?php if ($_smarty_tpl->getValue('form')['lata'] == 2) {?>selected<?php }?>>2</option>
            <option value="5" <?php if ($_smarty_tpl->getValue('form')['lata'] == 5) {?>selected<?php }?>>5</option>
            <option value="10" <?php if ($_smarty_tpl->getValue('form')['lata'] == 10) {?>selected<?php }?>>10</option>
        </select>

        Oprocentowanie (%):
        <select name="opro">
            <option value="2" <?php if ($_smarty_tpl->getValue('form')['opro'] == 2) {?>selected<?php }?>>2%</option>
            <option value="4" <?php if ($_smarty_tpl->getValue('form')['opro'] == 4) {?>selected<?php }?>>4%</option>
            <option value="8" <?php if ($_smarty_tpl->getValue('form')['opro'] == 8) {?>selected<?php }?>>8%</option>
            <option value="10" <?php if ($_smarty_tpl->getValue('form')['opro'] == 10) {?>selected<?php }?>>10%</option>
        </select>

        <button type="submit">Oblicz</button>
    </form>

        <?php if ((true && ($_smarty_tpl->hasVariable('messages') && null !== ($_smarty_tpl->getValue('messages') ?? null))) && $_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) > 0) {?>
        <div class="messages">
            <strong>Wystąpiły błędy:</strong>
            <ul>
                <?php
$_from = $_smarty_tpl->getSmarty()->getRuntime('Foreach')->init($_smarty_tpl, $_smarty_tpl->getValue('messages'), 'msg');
$foreach0DoElse = true;
foreach ($_from ?? [] as $_smarty_tpl->getVariable('msg')->value) {
$foreach0DoElse = false;
?>
                    <li><?php echo $_smarty_tpl->getValue('msg');?>
</li>
                <?php
}
$_smarty_tpl->getSmarty()->getRuntime('Foreach')->restore($_smarty_tpl, 1);?>
            </ul>
        </div>
    <?php }?>

        <?php if ((true && ($_smarty_tpl->hasVariable('result') && null !== ($_smarty_tpl->getValue('result') ?? null)))) {?>
        <div class="result">
            Miesięczna rata wynosi: <strong><?php echo $_smarty_tpl->getValue('result');?>
 zł</strong>
        </div>
    <?php }?>

<?php
}
}
/* {/block 'content'} */
}
