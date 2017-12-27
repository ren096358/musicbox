<?php /* Smarty version 3.1.24, created on 2015-11-30 18:19:35
         compiled from "./tmpl/DeletePlayListDialog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:16150565c8527871a15_37602735%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fa8d8323b1634dc8cd1e8b342eb7560db7d31c40' => 
    array (
      0 => './tmpl/DeletePlayListDialog.tpl',
      1 => 1448903754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16150565c8527871a15_37602735',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565c8527893ac2_76251191',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565c8527893ac2_76251191')) {
function content_565c8527893ac2_76251191 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '16150565c8527871a15_37602735';
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