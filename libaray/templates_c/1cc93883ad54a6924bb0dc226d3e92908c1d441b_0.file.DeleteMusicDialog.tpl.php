<?php /* Smarty version 3.1.24, created on 2017-12-27 09:32:13
         compiled from "./tmpl/DeleteMusicDialog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:260235a43689d02b568_95020410%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1cc93883ad54a6924bb0dc226d3e92908c1d441b' => 
    array (
      0 => './tmpl/DeleteMusicDialog.tpl',
      1 => 1451872166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '260235a43689d02b568_95020410',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5a43689d03a194_86647542',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a43689d03a194_86647542')) {
function content_5a43689d03a194_86647542 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '260235a43689d02b568_95020410';
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