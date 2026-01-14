<?php
/* Smarty version 5.5.1, created on 2026-01-14 20:52:03
  from 'file:LoginView.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6967f3e331edf3_13979579',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d4dd77779a0fcfec577fce9a072a1f2e8388356' => 
    array (
      0 => 'LoginView.tpl',
      1 => 1768420320,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:messages.tpl' => 1,
  ),
))) {
function content_6967f3e331edf3_13979579 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\php_06\\app\\views';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_19424085736967f3e3315ba6_93303590', 'content');
?>

<?php $_smarty_tpl->getInheritance()->endChild($_smarty_tpl, "main.tpl", $_smarty_current_dir);
}
/* {block 'content'} */
class Block_19424085736967f3e3315ba6_93303590 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\php_06\\app\\views';
?>

<form action="<?php echo $_smarty_tpl->getValue('conf')->action_url;?>
login" method="post">
	<legend>Logowanie do systemu</legend>
	<fieldset>
			<label for="id_login">login: </label>
			<input id="id_login" type="text" name="login"/>
			<label for="id_pass">pass: </label>
			<input id="id_pass" type="password" name="pass" /><br />
			<button type="submit">Zaloguj</button>
	</fieldset>
</form>	

<?php $_smarty_tpl->renderSubTemplate('file:messages.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), (int) 0, $_smarty_current_dir);
?>

<?php
}
}
/* {/block 'content'} */
}
