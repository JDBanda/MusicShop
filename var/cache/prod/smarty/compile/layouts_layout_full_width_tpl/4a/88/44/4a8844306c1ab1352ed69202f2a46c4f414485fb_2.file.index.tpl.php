<?php
/* Smarty version 3.1.33, created on 2020-11-01 21:09:26
  from 'C:\xampp\htdocs\MusicStore\themes\classic\templates\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5f9f78665b5653_52099024',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a8844306c1ab1352ed69202f2a46c4f414485fb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\MusicStore\\themes\\classic\\templates\\index.tpl',
      1 => 1600977448,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f9f78665b5653_52099024 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16533300945f9f78665ae370_06797492', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_17099594415f9f78665af1f4_13864879 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_19933056925f9f78665b13a9_84434992 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_9538760195f9f78665b0863_72846312 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19933056925f9f78665b13a9_84434992', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_16533300945f9f78665ae370_06797492 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_16533300945f9f78665ae370_06797492',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_17099594415f9f78665af1f4_13864879',
  ),
  'page_content' => 
  array (
    0 => 'Block_9538760195f9f78665b0863_72846312',
  ),
  'hook_home' => 
  array (
    0 => 'Block_19933056925f9f78665b13a9_84434992',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_17099594415f9f78665af1f4_13864879', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9538760195f9f78665b0863_72846312', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
