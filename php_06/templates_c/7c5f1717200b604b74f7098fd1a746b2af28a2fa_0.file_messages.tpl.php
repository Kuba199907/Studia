<?php
/* Smarty version 5.5.1, created on 2026-01-14 20:15:44
  from 'file:messages.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6967eb607a73e1_96302808',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c5f1717200b604b74f7098fd1a746b2af28a2fa' => 
    array (
      0 => 'messages.tpl',
      1 => 1768418110,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6967eb607a73e1_96302808 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\php_06\\app\\views\\templates';
?>        <?php if ($_smarty_tpl->getValue('msgs')->isError()) {?>
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
    <?php }
}
}
