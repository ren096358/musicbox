<?php /* Smarty version 3.1.24, created on 2016-05-07 15:25:57
         compiled from "./tmpl/DeletePlayListDialog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2746572dece5e1b5b4_89362393%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '153f4e12feb06c923717d461e71fcb157c85c57f' => 
    array (
      0 => './tmpl/DeletePlayListDialog.tpl',
      1 => 1451872170,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2746572dece5e1b5b4_89362393',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_572dece5e254d1_77930531',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572dece5e254d1_77930531')) {
function content_572dece5e254d1_77930531 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2746572dece5e1b5b4_89362393';
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