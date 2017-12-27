<!-- Url -->
<input type="hidden" id="deleteMusicUrl" value="<{$deleteMusicUrl}>" />
<input type="hidden" id="getMusicDataUrl" value="<{$getMusicDataUrl}>" />
<!--UI-->
<div data-dojo-type="dijit.Toolbar" data-dojo-props="region:'top', splitter:false" style="text-align: right">
    <div type="button" data-dojo-type="dijit.form.Button" onclick="music.playingSongNow()">立即播放</div>
    <div type="button" data-dojo-type="dijit.form.Button" onclick="music.playSongLater()">稍後播放</div>
    <div type="button" data-dojo-type="dijit.form.Button" onclick="music.showUpdateMusicDialog()">修改</div>
    <div type="button" data-dojo-type="dijit.form.Button" onclick="music.showDeleteMusicDialog()">刪除</div>
</div>
<div data-dojo-type="dijit.layout.ContentPane" class="dijitBorderContainer-child" data-dojo-props="region:'center'">
    <span data-dojo-type="dojox.data.QueryReadStore" data-dojo-id="musicStore" data-dojo-props="url: '<{$getMusicArrayUrl}>',requestMethod:'post'"></span>
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
<{include file="UpdateMusicDialog.tpl"}>
<{include file="DeleteMusicDialog.tpl"}>