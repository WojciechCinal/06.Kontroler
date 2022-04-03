<?php
/* Smarty version 4.1.0, created on 2022-04-02 17:20:20
  from 'C:\xampp\htdocs\06.Kontroler\templates\main.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624869b4763e03_19786021',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a40c5e2d15cb4c85f7bc5ef16f6b229c0eb8d8c7' => 
    array (
      0 => 'C:\\xampp\\htdocs\\06.Kontroler\\templates\\main.html',
      1 => 1648912818,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624869b4763e03_19786021 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE HTML>
<!--
	Photon by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Photon by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/main.css" />
		<noscript><link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/assets/css/noscript.css" /></noscript>
	</head>
<body>

<div class="header">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_284104892624869b475e4f8_01627300', 'header');
?>

</div>

<div class="content">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1413698552624869b475f607_71415509', 'content');
?>

</div>

<div class="footer">
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_64695678624869b475fe61_97322065', 'footer');
?>
	
</div>
    
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->{$_smarty_tpl->tpl_vars['app_url']->value};?>
/assets/js/jquery.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->{$_smarty_tpl->tpl_vars['app_url']->value};?>
/assets/js/jquery.scrolly.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->{$_smarty_tpl->tpl_vars['app_url']->value};?>
/assets/js/browser.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->{$_smarty_tpl->tpl_vars['app_url']->value};?>
/assets/js/breakpoints.min.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->{$_smarty_tpl->tpl_vars['app_url']->value};?>
/assets/js/util.js"><?php echo '</script'; ?>
>
			<?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->{$_smarty_tpl->tpl_vars['app_url']->value};?>
/assets/js/main.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block 'header'} */
class Block_284104892624869b475e4f8_01627300 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'header' => 
  array (
    0 => 'Block_284104892624869b475e4f8_01627300',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 naglowek .... <?php
}
}
/* {/block 'header'} */
/* {block 'content'} */
class Block_1413698552624869b475f607_71415509 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_1413698552624869b475f607_71415509',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 kontent .... <?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_64695678624869b475fe61_97322065 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_64695678624869b475fe61_97322065',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 stopka ....<?php
}
}
/* {/block 'footer'} */
}
