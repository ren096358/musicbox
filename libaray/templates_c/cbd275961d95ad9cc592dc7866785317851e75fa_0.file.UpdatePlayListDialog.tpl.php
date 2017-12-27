<?php /* Smarty version 3.1.24, created on 2016-11-14 02:47:22
         compiled from "./tmpl/UpdatePlayListDialog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:23134582925ba9a8ec8_39414585%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cbd275961d95ad9cc592dc7866785317851e75fa' => 
    array (
      0 => './tmpl/UpdatePlayListDialog.tpl',
      1 => 1451872180,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '23134582925ba9a8ec8_39414585',
  'variables' => 
  array (
    'addPlayListDetailUrl' => 0,
    'deletePlayListDetailUrl' => 0,
    'updatePlayListUrl' => 0,
    'getPlayListDetailArrayUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_582925ba9fa0b7_45642196',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_582925ba9fa0b7_45642196')) {
function content_582925ba9fa0b7_45642196 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '23134582925ba9a8ec8_39414585';
?>
<!-- Url -->
<input type="hidden" id="addPlayListDetailUrl" value="<?php echo $_smarty_tpl->tpl_vars['addPlayListDetailUrl']->value;?>
" />
<input type="hidden" id="deletePlayListDetailUrl" value="<?php echo $_smarty_tpl->tpl_vars['deletePlayListDetailUrl']->value;?>
" />
<!-- Ui -->
<div id="updatePlayListDialog" data-dojo-type="dijit.Dialog" style="display: none; height: auto; width: auto" title="修改播放清單">
    <form id="updatePlayListForm" data-dojo-type="dijit.form.Form" action="<?php echo $_smarty_tpl->tpl_vars['updatePlayListUrl']->value;?>
" method="post">
        <input type="hidden" id="playlist_id" name="playlist_id">
        <table>
            <tr>
                <td>
                    <label for="name">名稱:</label>
                </td>
                <td style="padding-left: 10px">
                    <input type="text" id="name" name="name" data-dojo-type="dijit/form/ValidationTextBox"  data-dojo-props="placeHolder: '請輸入播放清單名稱', maxlength:'50', required:true" />
                </td>
            </tr>
        </table>
    </form>
    <div data-dojo-props="region:'top', splitter:false" style="text-align: right">
        <div type="button" data-dojo-type="dijit.form.Button" onclick="music.showAddPlayListDetailDialog()">新增</div>
        <div type="button" data-dojo-type="dijit.form.Button" onclick="music.showDeletePlayListDetailDialog()">刪除</div>
    </div>
    <span data-dojo-type="dojox.data.QueryReadStore" data-dojo-id="playListDetailStore" data-dojo-props="url: '<?php echo $_smarty_tpl->tpl_vars['getPlayListDetailArrayUrl']->value;?>
',requestMethod:'post'"></span>
    <table data-dojo-id="playListDetailGrid" data-dojo-type="dojox.grid.DataGrid" data-dojo-props="store: playListDetailStore, selectionMode: 'single', rowselector: '10px', noDataMessage :'查無音樂資料'" selectable="false" style="width: 600px; height: 400px">
        <thead>
            <tr>
                <th field="name" width="200px" styles="white-space:nowrap;">名稱</th>
                <th field="time" width="88px" styles="white-space:nowrap;">長度</th>
                <th field="genre" width="90px" styles="white-space:nowrap;">分類</th>
                <th field="artist" width="200px" styles="white-space:nowrap;">演出者</th>
                <th field="album" width="200px" styles="white-space:nowrap;">專輯</th>
                <th field="addtime" width="200px" styles="white-space:nowrap;">加入日期</th>
                <th field="updatetime" width="200px" styles="white-space:nowrap;">修改日期</th>
            </tr>
        </thead>
    </table>
    <div class="dijitDialogPaneActionBar" style="align: right">
        <button data-dojo-type="dijit.form.Button" onclick="music.updatePlayList()">確定</button>
        <button data-dojo-type="dijit.form.Button" onclick="dijit.byId('updatePlayListDialog').hide();">取消</button>
    </div>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("AddPlayListDetailDialog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("DeletePlayListDetailDialog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>