<div id="clearPlayListDialog" data-dojo-type="dijit.Dialog" style="display: none" title="清空播放清單">
    <div id="clearPlayListMessage"></div>
    <div class="dijitDialogPaneActionBar" style="align: right">
        <button data-dojo-type="dijit.form.Button" onclick="music.clearPlayList()">清空</button>
        <button data-dojo-type="dijit.form.Button" onclick="dijit.byId('clearPlayListDialog').hide();">取消</button>
    </div>
</div>

