<?php
/* Smarty version 4.1.0, created on 2022-03-28 21:22:26
  from 'C:\xampp\htdocs\05.Obiektowosc\app\calc.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62420af2a1fbc3_51523475',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '60ce3fdec702e7de88baf0aaf8af3ce3a9ab18ad' => 
    array (
      0 => 'C:\\xampp\\htdocs\\05.Obiektowosc\\app\\calc.html',
      1 => 1648495103,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62420af2a1fbc3_51523475 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_122966891062420af2a0c977_67302304', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_134405246362420af2a0e449_63430834', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.html");
}
/* {block 'footer'} */
class Block_122966891062420af2a0c977_67302304 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_122966891062420af2a0c977_67302304',
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
class Block_134405246362420af2a0e449_63430834 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_134405246362420af2a0e449_63430834',
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
	<h4>Rata wynosi:</h4>
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
