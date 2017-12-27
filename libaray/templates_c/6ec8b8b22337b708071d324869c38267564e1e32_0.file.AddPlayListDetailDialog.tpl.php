<?php /* Smarty version 3.1.24, created on 2015-11-30 17:03:27
         compiled from "./tmpl/AddPlayListDetailDialog.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:18513565c734f7676e5_44046110%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6ec8b8b22337b708071d324869c38267564e1e32' => 
    array (
      0 => './tmpl/AddPlayListDetailDialog.tpl',
      1 => 1448899402,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18513565c734f7676e5_44046110',
  'variables' => 
  array (
    'getMusicArrayUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_565c734f792405_66091935',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_565c734f792405_66091935')) {
function content_565c734f792405_66091935 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '18513565c734f7676e5_44046110';
?>
<div id="addPlayListDetailDialog" data-dojo-type="dijit.Dialog" style="display: none; height: auto; width: auto">
    <span data-dojo-type="dojox.data.QueryReadStore" data-dojo-id="musicStore" data-dojo-props="url: '<?php echo $_smarty_tpl->tpl_vars['getMusicArrayUrl']->value;?>
',requestMethod:'post'"></span>
    <table data-dojo-id="musicGrid" data-dojo-type="dojox.grid.DataGrid" onRowDblClick="music.addPlayListDetail()" data-dojo-props="store: musicStore, selectionMode: 'single', rowselector: '10px', noDataMessage :'查無音樂資料'" selectable="false" style="width: 600px; height: 400px">
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
        <button data-dojo-type="dijit.form.Button" onclick="dijit.byId('addPlayListDetailDialog').hide();">取消</button>
    </div>
</div><?php }
}
?>