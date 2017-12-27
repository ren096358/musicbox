<?php /* Smarty version 3.1.24, created on 2017-12-19 08:25:28
         compiled from "./tmpl/AddMusicToNewPlayListDialog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:175525a38ccf84586f5_23609510%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '82daae69d5918bc78020da0075b385d035649ca5' => 
    array (
      0 => './tmpl/AddMusicToNewPlayListDialog.tpl',
      1 => 1513671917,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '175525a38ccf84586f5_23609510',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5a38ccf845ad33_12898399',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a38ccf845ad33_12898399')) {
function content_5a38ccf845ad33_12898399 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '175525a38ccf84586f5_23609510';
?>
<div id="addMusicToNewPlayListDialog" data-dojo-type="dijit.Dialog" style="display: none" title="建立歌單">
    <div id="addMusicToNewPlayListMessage"></div>
    <div class="dijitDialogPaneActionBar" style="align: right">
        <button data-dojo-type="dijit.form.Button" onclick="music.showAddPlayListDialog()">確認</button>
        <button data-dojo-type="dijit.form.Button" onclick="dijit.byId('addMusicToNewPlayListDialog').hide();">取消</button>
    </div>
</div>
<?php }
}
?>