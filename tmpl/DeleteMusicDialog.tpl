<div id="deleteMusicDialog" data-dojo-type="dijit.Dialog" style="display: none" title="刪除音樂">
    <div id="deleteMusicMessage"></div>
    <div class="dijitDialogPaneActionBar" style="align: right">
        <button data-dojo-type="dijit.form.Button" onclick="music.deleteMusic()">刪除</button>
        <button data-dojo-type="dijit.form.Button" onclick="dijit.byId('deleteMusicDialog').hide();">取消</button>
    </div>
</div>


