<?php /* Smarty version 3.1.24, created on 2016-05-06 21:00:09
         compiled from "./tmpl/DeleteMusicDialog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:25088572ce9b9c97447_60954203%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2d6135a80342e6c9d583007b4218ddbdf993fe95' => 
    array (
      0 => './tmpl/DeleteMusicDialog.tpl',
      1 => 1451872166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '25088572ce9b9c97447_60954203',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_572ce9b9c9a6f5_30486244',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572ce9b9c9a6f5_30486244')) {
function content_572ce9b9c9a6f5_30486244 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '25088572ce9b9c97447_60954203';
?>
<div id="deleteMusicDialog" data-dojo-type="dijit.Dialog" style="display: none" title="刪除音樂">
    <div id="deleteMusicMessage"></div>
    <div class="dijitDialogPaneActionBar" style="align: right">
        <button data-dojo-type="dijit.form.Button" onclick="music.deleteMusic()">刪除</button>
        <button data-dojo-type="dijit.form.Button" onclick="dijit.byId('deleteMusicDialog').hide();">取消</button>
    </div>
</div>


<?php }
}
?>