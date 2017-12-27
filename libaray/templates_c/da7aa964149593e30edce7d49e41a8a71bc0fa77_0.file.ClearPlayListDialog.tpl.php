<?php /* Smarty version 3.1.24, created on 2016-05-07 15:25:57
         compiled from "./tmpl/ClearPlayListDialog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:8165572dece5dfaa12_23767103%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'da7aa964149593e30edce7d49e41a8a71bc0fa77' => 
    array (
      0 => './tmpl/ClearPlayListDialog.tpl',
      1 => 1451872164,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8165572dece5dfaa12_23767103',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_572dece5e04377_37131668',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572dece5e04377_37131668')) {
function content_572dece5e04377_37131668 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '8165572dece5dfaa12_23767103';
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