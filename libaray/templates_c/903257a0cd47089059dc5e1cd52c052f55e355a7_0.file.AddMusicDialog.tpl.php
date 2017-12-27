<?php /* Smarty version 3.1.24, created on 2015-11-30 13:33:19
         compiled from "./tmpl/AddMusicDialog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:17809565c420f0ff9a5_33114692%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '903257a0cd47089059dc5e1cd52c052f55e355a7' => 
    array (
      0 => './tmpl/AddMusicDialog.tpl',
      1 => 1448886642,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17809565c420f0ff9a5_33114692',
  'variables' => 
  array (
    'addMusicUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565c420f104858_69529284',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565c420f104858_69529284')) {
function content_565c420f104858_69529284 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '17809565c420f0ff9a5_33114692';
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