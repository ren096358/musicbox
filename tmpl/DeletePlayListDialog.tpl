<div id="deletePlayListDialog" data-dojo-type="dijit.Dialog" style="display: none" title="刪除播放清單">
    <div id="deletePlayListMessage"></div>
    <div class="dijitDialogPaneActionBar" style="align: right">
        <button data-dojo-type="dijit.form.Button" onclick="music.deletePlayList()">刪除</button>
        <button data-dojo-type="dijit.form.Button" onclick="dijit.byId('deletePlayListDialog').hide();">取消</button>
    </div>
</div>
