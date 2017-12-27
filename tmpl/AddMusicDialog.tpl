<div id="addMusicDialog" data-dojo-type="dijit.Dialog" style="display: none" title="上傳音樂">
    <form id="addMusicForm" action="<{$addMusicUrl}>" method="post" enctype="multipart/form-data">
		<fieldset>
			<input data-dojo-type="dojox/form/Uploader" multiple="true" id="file" name="file">
			<div data-dojo-type="dojox/form/uploader/FileList" id="files" uploaderId="file"></div>
		</fieldset>
    </form>
    <div class="dijitDialogPaneActionBar" style="align: right">
        <button data-dojo-type="dijit.form.Button" onclick="music.addMusic()">上傳</button>
        <button data-dojo-type="dijit.form.Button" onclick="dijit.byId('addMusicDialog').hide();">取消</button>
    </div>
</div>
