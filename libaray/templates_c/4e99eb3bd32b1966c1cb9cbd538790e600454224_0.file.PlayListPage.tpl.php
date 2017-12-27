<?php /* Smarty version 3.1.24, created on 2016-05-07 15:25:57
         compiled from "./tmpl/PlayListPage.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:19376572dece56b07c9_28886441%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4e99eb3bd32b1966c1cb9cbd538790e600454224' => 
    array (
      0 => './tmpl/PlayListPage.tpl',
      1 => 1451872176,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19376572dece56b07c9_28886441',
  'variables' => 
  array (
    'deletePlayListUrl' => 0,
    'clearPlayListUrl' => 0,
    'getPlayListArrayUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_572dece5c0db84_52504615',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572dece5c0db84_52504615')) {
function content_572dece5c0db84_52504615 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '19376572dece56b07c9_28886441';
?>
<!-- Url -->
<input type="hidden" id="deletePlayListUrl" value="<?php echo $_smarty_tpl->tpl_vars['deletePlayListUrl']->value;?>
" />
<input type="hidden" id="clearPlayListUrl" value="<?php echo $_smarty_tpl->tpl_vars['clearPlayListUrl']->value;?>
" />
<!--UI-->
<div data-dojo-type="dijit.Toolbar" data-dojo-props="region:'top', splitter:false" style="text-align: right">
    <div type="button" data-dojo-type="dijit.form.Button" onclick="music.playPlayList()">播放</div>
    <div type="button" data-dojo-type="dijit.form.Button" onclick="music.showAddPlayListDialog()">新增</div>
    <div type="button" data-dojo-type="dijit.form.Button" onclick="music.showUpdatePlayListDialog()">修改</div>
    <div type="button" data-dojo-type="dijit.form.Button" onclick="music.showClearPlayListDialog()">清空</div>
    <div type="button" data-dojo-type="dijit.form.Button" onclick="music.showDeletePlayListDialog()">刪除</div>
</div>
<div data-dojo-type="dijit.layout.ContentPane" class="dijitBorderContainer-child" data-dojo-props="region:'center'">
    <span data-dojo-type="dojox.data.QueryReadStore" data-dojo-id="playListStore" data-dojo-props="url: '<?php echo $_smarty_tpl->tpl_vars['getPlayListArrayUrl']->value;?>
',requestMethod:'post'"></span>
    <table data-dojo-id="playListGrid" data-dojo-type="dojox.grid.DataGrid" style="width: 80%; height: 85%;" data-dojo-props="store: playListStore, selectionMode: 'single', rowselector: '10px', noDataMessage :'查無清單資料'" selectable="false" >
        <thead>
            <tr>
                <th field="name" width="40%" styles="white-space:nowrap;">名稱</th>
                <th field="addtime" width="30%" styles="white-space:nowrap;">加入日期</th>
                <th field="updatetime" width="30%" styles="white-space:nowrap;">修改日期</th>
            </tr>
        </thead>
    </table>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("AddPlayListDialog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("UpdatePlayListDialog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("ClearPlayListDialog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("DeletePlayListDialog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>