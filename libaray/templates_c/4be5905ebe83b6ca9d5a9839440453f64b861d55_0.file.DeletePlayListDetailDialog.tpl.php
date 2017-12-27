<?php /* Smarty version 3.1.24, created on 2016-05-07 15:25:57
         compiled from "./tmpl/DeletePlayListDetailDialog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:29404572dece5dda246_80217510%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4be5905ebe83b6ca9d5a9839440453f64b861d55' => 
    array (
      0 => './tmpl/DeletePlayListDetailDialog.tpl',
      1 => 1451872168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '29404572dece5dda246_80217510',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_572dece5de38e7_67969615',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572dece5de38e7_67969615')) {
function content_572dece5de38e7_67969615 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '29404572dece5dda246_80217510';
?>
<div id="deletePlayListDetailDialog" data-dojo-type="dijit.Dialog" style="display: none" title="刪除播放清單細項">
    <div id="deletePlayListDetailMessage"></div>
    <div class="dijitDialogPaneActionBar" style="align: right">
        <button data-dojo-type="dijit.form.Button" onclick="music.deletePlayListDetail()">刪除</button>
        <button data-dojo-type="dijit.form.Button" onclick="dijit.byId('deletePlayListDetailDialog').hide();">取消</button>
    </div>
</div>
<?php }
}
?>