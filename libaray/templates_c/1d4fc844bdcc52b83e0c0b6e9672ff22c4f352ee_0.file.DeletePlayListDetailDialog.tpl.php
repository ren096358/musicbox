<?php /* Smarty version 3.1.24, created on 2016-11-14 02:47:22
         compiled from "./tmpl/DeletePlayListDetailDialog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13068582925baab6df5_45648129%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1d4fc844bdcc52b83e0c0b6e9672ff22c4f352ee' => 
    array (
      0 => './tmpl/DeletePlayListDetailDialog.tpl',
      1 => 1451872168,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13068582925baab6df5_45648129',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_582925baac2f44_75722402',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_582925baac2f44_75722402')) {
function content_582925baac2f44_75722402 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '13068582925baab6df5_45648129';
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