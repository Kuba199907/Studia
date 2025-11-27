<?php
/* Smarty version 5.5.1, created on 2025-11-27 19:56:27
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_69289edbbd2118_89159590',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '66f87bcfbef018eb216c40548b60aca202c1fcbf' => 
    array (
      0 => 'main.tpl',
      1 => 1764269781,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_69289edbbd2118_89159590 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\php_04\\templates';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Moja aplikacja" ?? null : $tmp);?>
</title>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/css/style.css">

</head>

<body>
<div class="topbar">
    <div class="topbar-left">
        <h1><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Domyślny tytuł" ?? null : $tmp);?>
</h1>
    </div>
    <?php if ((true && ($_smarty_tpl->hasVariable('show_topbar') && null !== ($_smarty_tpl->getValue('show_topbar') ?? null))) && $_smarty_tpl->getValue('show_topbar')) {?>
        <div class="topbar-right">
            <a href="<?php echo $_smarty_tpl->getValue('app_url');?>
/app/security/logout.php">
                <button type="button" class="pure-button pure-button-secondary">Wyloguj</button>
            </a>
        </div>
    <?php }?>
</div>

<div class="header">
    <h1><?php echo (($tmp = $_smarty_tpl->getValue('page_heading') ?? null)===null||$tmp==='' ? "Domyślny nagłówek" ?? null : $tmp);?>
</h1>
</div>

<div class="content">
    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_160190865369289edbbce164_13353486', 'content');
?>

</div>

<div class="footer">
   <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_2553915969289edbbd1950_39895567', 'footer');
?>

</div>

</body>
</html>
<?php }
/* {block 'content'} */
class Block_160190865369289edbbce164_13353486 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\php_04\\templates';
?>
Domyślna treść<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_2553915969289edbbd1950_39895567 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\php_04\\templates';
?>
Domyślna treść stopki<?php
}
}
/* {/block 'footer'} */
}
