<?php /* Smarty version 3.1.24, created on 2017-12-27 09:31:54
         compiled from "./tmpl/LoadingDialog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:199835a43688aa6f340_24481407%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb0ca12a91d261ee97b9ac7d3b8046233e5b6bfd' => 
    array (
      0 => './tmpl/LoadingDialog.tpl',
      1 => 1514366904,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '199835a43688aa6f340_24481407',
  'variables' => 
  array (
    'loadingImgPath' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5a43688aa72db4_76436089',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a43688aa72db4_76436089')) {
function content_5a43688aa72db4_76436089 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '199835a43688aa6f340_24481407';
?>
<div id="loadingDialog" data-dojo-type="dijit.Dialog"  style="display:none;">
	<img src="<?php echo $_smarty_tpl->tpl_vars['loadingImgPath']->value;?>
" alt="">
</div><?php }
}
?>