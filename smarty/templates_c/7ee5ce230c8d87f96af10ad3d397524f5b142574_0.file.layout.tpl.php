<?php
/* Smarty version 3.1.30, created on 2017-12-22 12:17:53
  from "C:\wamp\www\shop_hoa-master\smarty\templates\gioi_thieu\layout.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a3ce9e17bbac0_15753733',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ee5ce230c8d87f96af10ad3d397524f5b142574' => 
    array (
      0 => 'C:\\wamp\\www\\shop_hoa-master\\smarty\\templates\\gioi_thieu\\layout.tpl',
      1 => 1513884612,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:layout.tpl' => 1,
  ),
),false)) {
function content_5a3ce9e17bbac0_15753733 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_61625a3ce9e17b7dc6_37678467', "slider");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_276195a3ce9e17bbac0_73812879', "san_pham");
$_smarty_tpl->inheritance->endChild();
$_smarty_tpl->_subTemplateRender("file:layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 2, false);
}
/* {block "slider"} */
class Block_61625a3ce9e17b7dc6_37678467 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "slider"} */
/* {block "san_pham"} */
class Block_276195a3ce9e17bbac0_73812879 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "san_pham"} */
}
