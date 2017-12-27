<!-- Url -->
<input type="hidden" id="addPlayListDetailUrl" value="<{$addPlayListDetailUrl}>" />
<input type="hidden" id="deletePlayListDetailUrl" value="<{$deletePlayListDetailUrl}>" />
<!-- Ui -->
<div id="updatePlayListDialog" data-dojo-type="dijit.Dialog" style="display: none; height: auto; width: auto" title="修改播放清單">
    <form id="updatePlayListForm" data-dojo-type="dijit.form.Form" action="<{$updatePlayListUrl}>" method="post">
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
    <span data-dojo-type="dojox.data.QueryReadStore" data-dojo-id="playListDetailStore" data-dojo-props="url: '<{$getPlayListDetailArrayUrl}>',requestMethod:'post'"></span>
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
<{include file="AddPlayListDetailDialog.tpl"}>
<{include file="DeletePlayListDetailDialog.tpl"}>

