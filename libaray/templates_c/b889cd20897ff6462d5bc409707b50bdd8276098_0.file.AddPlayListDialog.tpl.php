<?php /* Smarty version 3.1.24, created on 2017-12-19 09:12:55
         compiled from "./tmpl/AddPlayListDialog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:53625a38d817bbdc48_47660357%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b889cd20897ff6462d5bc409707b50bdd8276098' => 
    array (
      0 => './tmpl/AddPlayListDialog.tpl',
      1 => 1513674772,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '53625a38d817bbdc48_47660357',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5a38d817be0bd5_41028701',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a38d817be0bd5_41028701')) {
function content_5a38d817be0bd5_41028701 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '53625a38d817bbdc48_47660357';
?>
<div id="addPlayListDialog" data-dojo-type="dijit.Dialog" style="display: none" title="新增播放清單">
    <form id="addPlayListForm" data-dojo-type="dijit.form.Form" action="" method="post">
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
        <button id="addPlayListButton" data-dojo-type="dijit.form.Button" onclick="music.addPlayList()">確定</button>
        <button data-dojo-type="dijit.form.Button" onclick="dijit.byId('addPlayListDialog').hide();">取消</button>
    </div>
</div>
<?php }
}
?>