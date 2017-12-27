<?php /* Smarty version 3.1.24, created on 2017-12-16 07:21:19
         compiled from "./tmpl/AddMusicDialog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:210945a34c96fe15c81_56221428%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '998a2a2beddfe67b8a025183472b7cef0d058a85' => 
    array (
      0 => './tmpl/AddMusicDialog.tpl',
      1 => 1513408878,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '210945a34c96fe15c81_56221428',
  'variables' => 
  array (
    'addMusicUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5a34c96fe3b467_90315468',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a34c96fe3b467_90315468')) {
function content_5a34c96fe3b467_90315468 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '210945a34c96fe15c81_56221428';
?>
<div id="addMusicDialog" data-dojo-type="dijit.Dialog" style="display: none" title="上傳音樂">
    <form id="addMusicForm" action="<?php echo $_smarty_tpl->tpl_vars['addMusicUrl']->value;?>
" method="post" enctype="multipart/form-data">
		<fieldset>
			<input data-dojo-type="dojox/form/Uploader" multiple="true" id="file" name="file">
			<div data-dojo-type="dojox/form/uploader/FileList" id="files" uploaderId="file"></div>
		</fieldset>
    </form>
    <div class="dijitDialogPaneActionBar" style="align: right">
        <button data-dojo-type="dijit.form.Button" onclick="music.addMusic()">上傳</button>
        <button data-dojo-type="dijit.form.Button" onclick="dijit.byId('addMusicDialog').hide();">取消</button>
    </div>
</div>
<?php }
}
?>