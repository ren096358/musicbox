<?php /* Smarty version 3.1.24, created on 2017-12-19 09:15:38
         compiled from "./tmpl/PlayListPage.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:65885a38d8ba85e402_57942504%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0141e551cc2ec0de80c4d82aee4b3e6275ad6bfb' => 
    array (
      0 => './tmpl/PlayListPage.tpl',
      1 => 1513674934,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '65885a38d8ba85e402_57942504',
  'variables' => 
  array (
    'deletePlayListUrl' => 0,
    'clearPlayListUrl' => 0,
    'getPlayListArrayUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5a38d8ba898f82_00527991',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a38d8ba898f82_00527991')) {
function content_5a38d8ba898f82_00527991 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '65885a38d8ba85e402_57942504';
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
<?php echo $_smarty_tpl->getSubTemplate ("UpdatePlayListDialog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("ClearPlayListDialog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("DeletePlayListDialog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>