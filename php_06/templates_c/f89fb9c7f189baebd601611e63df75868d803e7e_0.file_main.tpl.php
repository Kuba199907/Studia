<?php
/* Smarty version 5.5.1, created on 2026-01-14 20:32:48
  from 'file:main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6967ef60d60693_89852356',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f89fb9c7f189baebd601611e63df75868d803e7e' => 
    array (
      0 => 'main.tpl',
      1 => 1768419167,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6967ef60d60693_89852356 (\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\php_06\\app\\views\\templates';
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
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_20914991386967ef60d5c1b5_37813335', 'content');
?>

</div>

<div class="footer">
   <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_4016308806967ef60d5fb62_22692905', 'footer');
?>

</div>

</body>
</html>
<?php }
/* {block 'content'} */
class Block_20914991386967ef60d5c1b5_37813335 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\php_06\\app\\views\\templates';
?>
Domyślna treść<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_4016308806967ef60d5fb62_22692905 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\php_06\\app\\views\\templates';
?>
Domyślna treść stopki<?php
}
}
/* {/block 'footer'} */
}
