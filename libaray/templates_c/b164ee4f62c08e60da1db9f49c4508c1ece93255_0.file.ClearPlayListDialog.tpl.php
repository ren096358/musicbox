<?php /* Smarty version 3.1.24, created on 2017-12-27 09:31:55
         compiled from "./tmpl/ClearPlayListDialog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:267605a43688b5c1df2_72505002%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b164ee4f62c08e60da1db9f49c4508c1ece93255' => 
    array (
      0 => './tmpl/ClearPlayListDialog.tpl',
      1 => 1451872164,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '267605a43688b5c1df2_72505002',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5a43688b5c45c0_83287158',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a43688b5c45c0_83287158')) {
function content_5a43688b5c45c0_83287158 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '267605a43688b5c1df2_72505002';
?>
<div id="clearPlayListDialog" data-dojo-type="dijit.Dialog" style="display: none" title="清空播放清單">
    <div id="clearPlayListMessage"></div>
    <div class="dijitDialogPaneActionBar" style="align: right">
        <button data-dojo-type="dijit.form.Button" onclick="music.clearPlayList()">清空</button>
        <button data-dojo-type="dijit.form.Button" onclick="dijit.byId('clearPlayListDialog').hide();">取消</button>
    </div>
</div>

<?php }
}
?>