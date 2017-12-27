<?php /* Smarty version 3.1.24, created on 2017-12-27 09:31:55
         compiled from "./tmpl/DeletePlayListDialog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:87375a43688b5fdf29_87163925%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5725889a23e3104b3a13314e9aec239263eb6a5f' => 
    array (
      0 => './tmpl/DeletePlayListDialog.tpl',
      1 => 1513674841,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87375a43688b5fdf29_87163925',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5a43688b60dd11_32458872',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a43688b60dd11_32458872')) {
function content_5a43688b60dd11_32458872 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '87375a43688b5fdf29_87163925';
?>
<div id="deletePlayListDialog" data-dojo-type="dijit.Dialog" style="display: none" title="刪除播放清單">
    <div id="deletePlayListMessage"></div>
    <div class="dijitDialogPaneActionBar" style="align: right">
        <button data-dojo-type="dijit.form.Button" onclick="music.deletePlayList()">刪除</button>
        <button data-dojo-type="dijit.form.Button" onclick="dijit.byId('deletePlayListDialog').hide();">取消</button>
    </div>
</div>
<?php }
}
?>