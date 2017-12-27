<?php /* Smarty version 3.1.24, created on 2016-05-06 21:00:09
         compiled from "./tmpl/UpdateMusicDialog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20611572ce9b9c75365_64602665%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b38ba7c0ccc2a3b98fe9321ce13dade492b60ae9' => 
    array (
      0 => './tmpl/UpdateMusicDialog.tpl',
      1 => 1451872178,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20611572ce9b9c75365_64602665',
  'variables' => 
  array (
    'updateMusicUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_572ce9b9c7bee9_24665681',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572ce9b9c7bee9_24665681')) {
function content_572ce9b9c7bee9_24665681 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '20611572ce9b9c75365_64602665';
?>
<div id="updateMusicDialog" data-dojo-type="dijit.Dialog" style="display: none" title="修改音樂">
    <form id="updateMusicForm" data-dojo-type="dijit.form.Form" action="<?php echo $_smarty_tpl->tpl_vars['updateMusicUrl']->value;?>
" method="post">
        <input type="hidden" id="music_id" name="music_id">
        <table style=" width: 320px;">
            <tr>
                <td>
                    <label for="name">名稱:</label>
                </td>
                <td>
                    <input type="text" name="name" id="name" data-dojo-type="dijit/form/ValidationTextBox"  data-dojo-props="placeHolder: '請輸入音樂名稱', maxlength:'50', required:true" />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="time">長度:</label>
                </td>
                <td>
                    <div name="time" id="time"></div>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="genre">分類:</label>
                </td>
                <td>
                    <input type="text" name="genre" id="genre"  data-dojo-type="dijit/form/ValidationTextBox"  data-dojo-props="placeHolder: '請輸入分類', maxlength:'50'"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="artist">演出者:</label>
                </td>
                <td>
                    <input type="text" name="artist" id="artist" data-dojo-type="dijit/form/ValidationTextBox"  data-dojo-props="placeHolder: '請輸入演出者', maxlength:'50'"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="album">專輯:</label>
                </td>
                <td>
                    <input type="text" name="album" id="album" data-dojo-type="dijit/form/ValidationTextBox"  data-dojo-props="placeHolder: '請輸入專輯', maxlength:'50'"/>
                </td>
            </tr>
        </table>
    </form>
    <div class="dijitDialogPaneActionBar" style="align: right">
        <button data-dojo-type="dijit.form.Button" onclick="music.updateMusic()">修改</button>
        <button data-dojo-type="dijit.form.Button" onclick="dijit.byId('updateMusicDialog').hide();">取消</button>
    </div>
</div>

<?php }
}
?>