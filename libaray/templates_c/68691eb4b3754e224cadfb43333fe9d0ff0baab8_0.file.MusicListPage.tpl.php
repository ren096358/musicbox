<?php /* Smarty version 3.1.24, created on 2017-12-27 09:32:12
         compiled from "./tmpl/MusicListPage.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:304015a43689cdf56e0_74992366%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '68691eb4b3754e224cadfb43333fe9d0ff0baab8' => 
    array (
      0 => './tmpl/MusicListPage.tpl',
      1 => 1513677195,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '304015a43689cdf56e0_74992366',
  'variables' => 
  array (
    'deleteMusicUrl' => 0,
    'getMusicDataUrl' => 0,
    'getMusicArrayUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5a43689ce33cd5_09608272',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a43689ce33cd5_09608272')) {
function content_5a43689ce33cd5_09608272 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '304015a43689cdf56e0_74992366';
?>
<!-- Url -->
<input type="hidden" id="deleteMusicUrl" value="<?php echo $_smarty_tpl->tpl_vars['deleteMusicUrl']->value;?>
" />
<input type="hidden" id="getMusicDataUrl" value="<?php echo $_smarty_tpl->tpl_vars['getMusicDataUrl']->value;?>
" />
<!--UI-->
<div data-dojo-type="dijit.Toolbar" data-dojo-props="region:'top', splitter:false" style="text-align: right">
    <div type="button" data-dojo-type="dijit.form.Button" onclick="music.playingSongNow()">立即播放</div>
    <div type="button" data-dojo-type="dijit.form.Button" onclick="music.playSongLater()">稍後播放</div>
    <div type="button" data-dojo-type="dijit.form.Button" onclick="music.showUpdateMusicDialog()">修改</div>
    <div type="button" data-dojo-type="dijit.form.Button" onclick="music.showDeleteMusicDialog()">刪除</div>
</div>
<div data-dojo-type="dijit.layout.ContentPane" class="dijitBorderContainer-child" data-dojo-props="region:'center'">
    <span data-dojo-type="dojox.data.QueryReadStore" data-dojo-id="musicStore" data-dojo-props="url: '<?php echo $_smarty_tpl->tpl_vars['getMusicArrayUrl']->value;?>
',requestMethod:'post'"></span>
    <table data-dojo-id="musicGrid" data-dojo-type="dojox.grid.DataGrid" style="width: 80%; height: 85%;" data-dojo-props="store: musicStore, selectionMode: 'single', rowselector: '10px', noDataMessage :'查無音樂資料'" onRowDblClick="music.playingSongNow()">
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
</div>
<?php echo $_smarty_tpl->getSubTemplate ("UpdateMusicDialog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php echo $_smarty_tpl->getSubTemplate ("DeleteMusicDialog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);

}
}
?>