<?php /* Smarty version 3.1.24, created on 2015-11-30 18:14:00
         compiled from "./tmpl/DeleteMusicDialog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:6373565c83d821d6d4_15547764%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9b4a956d24242ca2d7b2a1c62df51cbb753b1fc1' => 
    array (
      0 => './tmpl/DeleteMusicDialog.tpl',
      1 => 1448903637,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6373565c83d821d6d4_15547764',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565c83d824f524_95494650',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565c83d824f524_95494650')) {
function content_565c83d824f524_95494650 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '6373565c83d821d6d4_15547764';
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