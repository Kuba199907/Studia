<?php
/* Smarty version 5.5.1, created on 2025-11-27 20:03:39
  from 'file:D:\xampp\htdocs\php_04/templates/login.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6928a08be46c93_29202487',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e1828791f62b7d82c535786ef49867ecb358248b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\php_04/templates/login.tpl',
      1 => 1764270218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6928a08be46c93_29202487 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\php_04\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_20926323326928a08be35402_29269774', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "../templates/main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_20926323326928a08be35402_29269774 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\php_04\\templates';
?>


<form action="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/app/security/login.php" method="post">

    <label for="id_login">Login:</label>
    <input id="id_login" type="text" name="login" value="<?php echo $_smarty_tpl->getValue('form')['login'];?>
" />

    <label for="id_pass">Hasło:</label>
    <input id="id_pass" type="password" name="pass" />

    <button type="submit">Zaloguj</button>
</form>

<?php if ($_smarty_tpl->getSmarty()->getModifierCallback('count')($_smarty_tpl->getValue('messages')) > 0) {?>
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
<?php }
}
}
/* {/block 'content'} */
}
