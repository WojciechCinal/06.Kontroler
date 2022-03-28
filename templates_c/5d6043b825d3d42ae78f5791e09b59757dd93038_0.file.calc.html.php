<?php
/* Smarty version 4.1.0, created on 2022-03-28 21:18:02
  from 'C:\xampp\htdocs\04.Smarty\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624209ea54e492_30767900',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5d6043b825d3d42ae78f5791e09b59757dd93038' => 
    array (
      0 => 'C:\\xampp\\htdocs\\04.Smarty\\app\\calc.html',
      1 => 1648495016,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624209ea54e492_30767900 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_733342557624209ea53eae8_15064280', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_399492294624209ea53f598_73302993', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_733342557624209ea53eae8_15064280 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_733342557624209ea53eae8_15064280',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
   
<ul >
       &copy; Untitled. All rights reserved. Design: <a href="http://html5up.net"> HTML5 UP</a>
</ul><?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_399492294624209ea53f598_73302993 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_399492294624209ea53f598_73302993',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h3>Prosty kalkulator</h2>


<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
    <fieldset>
        <label for="kwota">Kwota kredytu: </label>
        <input id="id_kw" type="text" name="kwota" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['kwota'];?>
" /><br />
        <label for="id_cz">Czas spłaty: </label>
        <select name="czas">
            <option value="6m">6 miesięcy</option>
            <option value="12m">12 miesięcy</option>
            <option value="2r">2 lata</option>
            <option value="3r">3 lata</option>
            <option value="5r">5 lat</option>
            <option value="10r">10 lat</option>
            <option value="15r">15 lat</option>
            <option value="20r">20 lat</option>
            <option value="25r">25 lat</option>
        </select><br />
        <label for="id_op">Oprocentowanie (w %): </label>
        <input id="id_op" type="text" name="oprocentowanie" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['oprocentowanie'];?>
" /><br />
    </fieldset>
    <button type="submit" class="pure-button pure-button-primary">Oblicz</button>
</form>

<div class="messages">

<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?> 
		<h4>Informacje: </h4>
		<ol class="inf">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['rata']->value))) {?>
	<h4>Wynik:</h4>
	<p class="res">
        <?php echo $_smarty_tpl->tpl_vars['rata']->value;?>
    
	</p>
<?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
