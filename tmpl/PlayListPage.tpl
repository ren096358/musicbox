<!-- Url -->
<input type="hidden" id="deletePlayListUrl" value="<{$deletePlayListUrl}>" />
<input type="hidden" id="clearPlayListUrl" value="<{$clearPlayListUrl}>" />
<!--UI-->
<div data-dojo-type="dijit.Toolbar" data-dojo-props="region:'top', splitter:false" style="text-align: right">
    <div type="button" data-dojo-type="dijit.form.Button" onclick="music.playPlayList()">播放</div>
    <div type="button" data-dojo-type="dijit.form.Button" onclick="music.showAddPlayListDialog()">新增</div>
    <div type="button" data-dojo-type="dijit.form.Button" onclick="music.showUpdatePlayListDialog()">修改</div>
    <div type="button" data-dojo-type="dijit.form.Button" onclick="music.showClearPlayListDialog()">清空</div>
    <div type="button" data-dojo-type="dijit.form.Button" onclick="music.showDeletePlayListDialog()">刪除</div>
</div>
<div data-dojo-type="dijit.layout.ContentPane" class="dijitBorderContainer-child" data-dojo-props="region:'center'">
    <span data-dojo-type="dojox.data.QueryReadStore" data-dojo-id="playListStore" data-dojo-props="url: '<{$getPlayListArrayUrl}>',requestMethod:'post'"></span>
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
<{include file="UpdatePlayListDialog.tpl"}>
<{include file="ClearPlayListDialog.tpl"}>
<{include file="DeletePlayListDialog.tpl"}>