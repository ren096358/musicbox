<div id="addPlayListDetailDialog" data-dojo-type="dijit.Dialog" style="display: none; height: auto; width: auto">
    <span data-dojo-type="dojox.data.QueryReadStore" data-dojo-id="musicStore" data-dojo-props="url: '<{$getMusicArrayUrl}>',requestMethod:'post'"></span>
    <table data-dojo-id="musicGrid" data-dojo-type="dojox.grid.DataGrid" onRowDblClick="music.addPlayListDetail()" data-dojo-props="store: musicStore, selectionMode: 'single', rowselector: '10px', noDataMessage :'查無音樂資料'" selectable="false" style="width: 600px; height: 400px" title="請快速點選兩下，將歌曲加入清單中">
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
</div>