<?php /* Smarty version 3.1.24, created on 2015-11-30 18:14:14
         compiled from "./tmpl/DeletePlayListDetailDialog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:15409565c83e672a845_08237983%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '887802b6c1dcda1ce48a0dcc7c093870bc6fcaf8' => 
    array (
      0 => './tmpl/DeletePlayListDetailDialog.tpl',
      1 => 1448903637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15409565c83e672a845_08237983',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565c83e6749065_54701646',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565c83e6749065_54701646')) {
function content_565c83e6749065_54701646 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '15409565c83e672a845_08237983';
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