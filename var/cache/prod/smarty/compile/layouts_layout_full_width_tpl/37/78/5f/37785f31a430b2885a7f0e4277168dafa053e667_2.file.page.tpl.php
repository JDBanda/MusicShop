<?php
/* Smarty version 3.1.33, created on 2020-11-01 21:09:26
  from 'C:\xampp\htdocs\MusicStore\themes\classic\templates\page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f9f78668e92c5_04058863',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37785f31a430b2885a7f0e4277168dafa053e667' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MusicStore\\themes\\classic\\templates\\page.tpl',
      1 => 1600977448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9f78668e92c5_04058863 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11363826905f9f78668c7147_15687893', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_7966164965f9f78668d27a5_06187153 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_14595644925f9f78668c7e57_81391008 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_7966164965f9f78668d27a5_06187153', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_6324967345f9f78668dd1b3_33767507 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_3751308325f9f78668de1e1_04836790 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_9114754095f9f78668dc5b3_16809474 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6324967345f9f78668dd1b3_33767507', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3751308325f9f78668de1e1_04836790', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_2253102815f9f78668e7897_85551417 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_20080453545f9f78668e6948_78585808 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_2253102815f9f78668e7897_85551417', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_11363826905f9f78668c7147_15687893 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_11363826905f9f78668c7147_15687893',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_14595644925f9f78668c7e57_81391008',
  ),
  'page_title' => 
  array (
    0 => 'Block_7966164965f9f78668d27a5_06187153',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_9114754095f9f78668dc5b3_16809474',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_6324967345f9f78668dd1b3_33767507',
  ),
  'page_content' => 
  array (
    0 => 'Block_3751308325f9f78668de1e1_04836790',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_20080453545f9f78668e6948_78585808',
  ),
  'page_footer' => 
  array (
    0 => 'Block_2253102815f9f78668e7897_85551417',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14595644925f9f78668c7e57_81391008', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9114754095f9f78668dc5b3_16809474', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20080453545f9f78668e6948_78585808', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
