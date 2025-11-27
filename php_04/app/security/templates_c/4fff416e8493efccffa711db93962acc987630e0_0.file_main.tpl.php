<?php
/* Smarty version 5.5.1, created on 2025-11-27 20:35:02
  from 'file:D:\xampp\htdocs\php_04\templates\../templates/main.tpl' */

/* @var \Smarty\Template $_smarty_tpl */
if ($_smarty_tpl->getCompiled()->isFresh($_smarty_tpl, array (
  'version' => '5.5.1',
  'unifunc' => 'content_6928a7e6959463_22015576',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4fff416e8493efccffa711db93962acc987630e0' => 
    array (
      0 => 'D:\\xampp\\htdocs\\php_04\\templates\\../templates/main.tpl',
      1 => 1764272094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
))) {
function content_6928a7e6959463_22015576 (\Smarty\Template $_smarty_tpl) {
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
            <a href="<?php echo $_smarty_tpl->getValue('conf')->app_url;?>
/app/security/logout.php">
                <button type="button">Wyloguj</button>
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
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_5897768376928a7e6954176_35759618', 'content');
?>

</div>

<div class="footer">
   <?php 
$_smarty_tpl->getInheritance()->instanceBlock($_smarty_tpl, 'Block_9439067486928a7e69587c3_56932892', 'footer');
?>

</div>

</body>
</html>
<?php }
/* {block 'content'} */
class Block_5897768376928a7e6954176_35759618 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\php_04\\templates';
?>
Domyślna treść<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_9439067486928a7e69587c3_56932892 extends \Smarty\Runtime\Block
{
public function callBlock(\Smarty\Template $_smarty_tpl) {
$_smarty_current_dir = 'D:\\xampp\\htdocs\\php_04\\templates';
?>
Domyślna treść stopki<?php
}
}
/* {/block 'footer'} */
}
