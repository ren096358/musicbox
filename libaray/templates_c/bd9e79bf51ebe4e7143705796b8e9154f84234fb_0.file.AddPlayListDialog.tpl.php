<?php /* Smarty version 3.1.24, created on 2016-05-07 15:25:57
         compiled from "./tmpl/AddPlayListDialog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2601572dece5ceb8f6_84112312%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bd9e79bf51ebe4e7143705796b8e9154f84234fb' => 
    array (
      0 => './tmpl/AddPlayListDialog.tpl',
      1 => 1451872162,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2601572dece5ceb8f6_84112312',
  'variables' => 
  array (
    'addPlayListUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_572dece5d2e593_58780614',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572dece5d2e593_58780614')) {
function content_572dece5d2e593_58780614 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2601572dece5ceb8f6_84112312';
?>
<div id="addPlayListDialog" data-dojo-type="dijit.Dialog" style="display: none" title="新增播放清單">
    <form id="addPlayListForm" data-dojo-type="dijit.form.Form" action="<?php echo $_smarty_tpl->tpl_vars['addPlayListUrl']->value;?>
" method="post">
        <table>
            <tr>
                <td>
                    <label for="name">名稱:</label>
                </td>
                <td style="padding-left: 10px">
                    <input type="text" name="name" data-dojo-type="dijit/form/ValidationTextBox"  data-dojo-props="placeHolder: '請輸入播放清單名稱', maxlength:'50', required:true" />
                </td>
            </tr>
        </table>
    </form>
    <div class="dijitDialogPaneActionBar" style="align: right">
        <button data-dojo-type="dijit.form.Button" onclick="music.addPlayList()">確定</button>
        <button data-dojo-type="dijit.form.Button" onclick="dijit.byId('addPlayListDialog').hide();">取消</button>
    </div>
</div>
<?php }
}
?>