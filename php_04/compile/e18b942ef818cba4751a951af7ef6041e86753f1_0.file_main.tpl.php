<?php
/* Smarty version 5.5.1, created on 2025-11-26 18:06:49
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_692733a9717e42_29024518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e18b942ef818cba4751a951af7ef6041e86753f1' => 
    array (
      0 => 'main.tpl',
      1 => 1763150039,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_692733a9717e42_29024518 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\php_04\\template';
$_smarty_tpl->getInheritance()->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title><?php echo (($tmp = $_smarty_tpl->getValue('page_title') ?? null)===null||$tmp==='' ? "Moja aplikacja" ?? null : $tmp);?>
</title>

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->getValue('app_url');?>
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
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_310341693692733a9716f35_05828671', 'content');
?>

</div>

<div class="footer">
   <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_263813235692733a97177b8_43706617', 'footer');
?>

</div>

</body>
</html>
<?php }
/* {block 'content'} */
class Block_310341693692733a9716f35_05828671 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\php_04\\template';
?>
Domyślna treść<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_263813235692733a97177b8_43706617 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\php_04\\template';
?>
Domyślna treść stopki<?php
}
}
/* {/block 'footer'} */
}
