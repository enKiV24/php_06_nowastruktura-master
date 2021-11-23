<?php
/* Smarty version 3.1.30, created on 2021-04-25 20:11:36
  from "C:\xampp\htdocs\php_06_nowastruktura\app\views\CalcView.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6085b0d8d3c1d4_87600365',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '29ee67b0828a4e833a61d42173cbcbf75993f417' => 
    array (
      0 => 'C:\\xampp\\htdocs\\php_06_nowastruktura\\app\\views\\CalcView.html',
      1 => 1619374293,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:main.html' => 1,
  ),
),false)) {
function content_6085b0d8d3c1d4_87600365 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>



<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_13949533516085b0d8d2ebc7_39747716', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4671491476085b0d8d3bdc2_66174220', 'content');
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:main.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block 'footer'} */
class Block_13949533516085b0d8d2ebc7_39747716 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_4671491476085b0d8d3bdc2_66174220 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


<h3>Kalkulator kredytowy</h2>


<form class="pure-form pure-form-stacked" action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
calcCompute" method="post">
	<fieldset>
		<label for="x">Kwota</label>
		<input id="x" type="text" placeholder="Kwota" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->x;?>
">
		<label for="op">Oprocentowanie</label>
		<select id="op" name="op">

<?php if (isset($_smarty_tpl->tpl_vars['res']->value->op_value)) {?>
<option value="<?php echo $_smarty_tpl->tpl_vars['form']->value->op;?>
">ponownie: <?php echo $_smarty_tpl->tpl_vars['res']->value->op_value;?>
</option>
<option value="" disabled="true">---</option>
<?php }?>
			<option value="5">5%</option>
			<option value="10">10%</option>
			<option value="20">20%</option>
			<option value="50">50%</option>
		</select>
					
		<label for="y">Czas spłaty </label>
		<input id="y" type="text" placeholder="Czas" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->y;?>
">
	</fieldset>
	<button type="submit" class="pure-button pure-button-primary">Oblicz</button>
</form>

<div class="messages">


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
	<h4>Wystąpiły błędy: </h4>
	<ol class="err">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ol>
<?php }?>


<?php if ($_smarty_tpl->tpl_vars['msgs']->value->isInfo()) {?>
	<h4>Informacje: </h4>
	<ol class="inf">
	<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getInfos(), 'inf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['inf']->value) {
?>
	<li><?php echo $_smarty_tpl->tpl_vars['inf']->value;?>
</li>
	<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

	</ol>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['res']->value->result)) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['res']->value->result;?>

	</p>
<?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
