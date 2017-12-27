<?php /* Smarty version 3.1.24, created on 2016-05-06 21:00:08
         compiled from "./tmpl/AddMusicDialog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:22396572ce9b8777958_09293351%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a37f01b4c1ab41307a5f80c42ccc7a217581f946' => 
    array (
      0 => './tmpl/AddMusicDialog.tpl',
      1 => 1451872158,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22396572ce9b8777958_09293351',
  'variables' => 
  array (
    'addMusicUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_572ce9b8780301_07430148',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572ce9b8780301_07430148')) {
function content_572ce9b8780301_07430148 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '22396572ce9b8777958_09293351';
?>
<div id="addMusicDialog" data-dojo-type="dijit.Dialog" style="display: none" title="上傳音樂">
    <form id="addMusicForm" action="<?php echo $_smarty_tpl->tpl_vars['addMusicUrl']->value;?>
" method="post" enctype="multipart/form-data">
        <table>
            <tr>
                <td>
                    <input data-dojo-type="dojox/form/Uploader" id="file" name="file">
                </td>
                <td>
                    <span data-dojo-type="dojox/form/uploader/FileList" id="files" uploaderId="file">
                </td>
            </tr>
        </table>
    </form>
    <div class="dijitDialogPaneActionBar" style="align: right">
        <button data-dojo-type="dijit.form.Button" onclick="music.addMusic()">上傳</button>
        <button data-dojo-type="dijit.form.Button" onclick="dijit.byId('addMusicDialog').hide();">取消</button>
    </div>
</div>
<?php }
}
?>