<?php
/* Smarty version 5.5.1, created on 2025-11-28 20:37:21
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6929f9f1dec9a8_22257455',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b370558518da21c98112f09ae09812340e306c8' => 
    array (
      0 => 'main.tpl',
      1 => 1764358627,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6929f9f1dec9a8_22257455 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\php_05\\app\\views\\templates';
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
</div>

<div class="header">
    <h1><?php echo (($tmp = $_smarty_tpl->getValue('page_heading') ?? null)===null||$tmp==='' ? "Domyślny nagłówek" ?? null : $tmp);?>
</h1>
</div>

<div class="content">
    <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_1267842586929f9f1de85a5_34868331', 'content');
?>

</div>

<div class="footer">
   <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_12438874936929f9f1debf69_89557719', 'footer');
?>

</div>

</body>
</html>
<?php }
/* {block 'content'} */
class Block_1267842586929f9f1de85a5_34868331 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\php_05\\app\\views\\templates';
?>
Domyślna treść<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_12438874936929f9f1debf69_89557719 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\php_05\\app\\views\\templates';
?>
Domyślna treść stopki<?php
}
}
/* {/block 'footer'} */
}
