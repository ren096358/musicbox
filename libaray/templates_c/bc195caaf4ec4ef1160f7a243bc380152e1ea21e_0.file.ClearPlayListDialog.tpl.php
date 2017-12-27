<?php /* Smarty version 3.1.24, created on 2015-11-30 18:34:50
         compiled from "./tmpl/ClearPlayListDialog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5577565c88bac7eb32_26865575%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bc195caaf4ec4ef1160f7a243bc380152e1ea21e' => 
    array (
      0 => './tmpl/ClearPlayListDialog.tpl',
      1 => 1448904865,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5577565c88bac7eb32_26865575',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565c88bac9d6b8_50317197',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565c88bac9d6b8_50317197')) {
function content_565c88bac9d6b8_50317197 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5577565c88bac7eb32_26865575';
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