<?php
/* Smarty version 3.1.33, created on 2020-11-01 21:06:59
  from 'C:\xampp\htdocs\MusicStore\admin740gxfd8b\themes\default\template\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f9f77d300ebc4_48395928',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b0a79c419b9e31b9924335ae4b4545eb6a2cb7ec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MusicStore\\admin740gxfd8b\\themes\\default\\template\\content.tpl',
      1 => 1600977448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9f77d300ebc4_48395928 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
