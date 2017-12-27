<div id="updateMusicDialog" data-dojo-type="dijit.Dialog" style="display: none" title="修改音樂">
    <form id="updateMusicForm" data-dojo-type="dijit.form.Form" action="<{$updateMusicUrl}>" method="post">
        <input type="hidden" id="music_id" name="music_id">
        <table style=" width: 320px;">
            <tr>
                <td>
                    <label for="name">名稱:</label>
                </td>
                <td>
                    <input type="text" name="name" id="name" data-dojo-type="dijit/form/ValidationTextBox"  data-dojo-props="placeHolder: '請輸入音樂名稱', maxlength:'50', required:true" />
                </td>
            </tr>
            <tr>
                <td>
                    <label for="time">長度:</label>
                </td>
                <td>
                    <div name="time" id="time"></div>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="genre">分類:</label>
                </td>
                <td>
                    <input type="text" name="genre" id="genre"  data-dojo-type="dijit/form/ValidationTextBox"  data-dojo-props="placeHolder: '請輸入分類', maxlength:'50'"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="artist">演出者:</label>
                </td>
                <td>
                    <input type="text" name="artist" id="artist" data-dojo-type="dijit/form/ValidationTextBox"  data-dojo-props="placeHolder: '請輸入演出者', maxlength:'50'"/>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="album">專輯:</label>
                </td>
                <td>
                    <input type="text" name="album" id="album" data-dojo-type="dijit/form/ValidationTextBox"  data-dojo-props="placeHolder: '請輸入專輯', maxlength:'50'"/>
                </td>
            </tr>
        </table>
    </form>
    <div class="dijitDialogPaneActionBar" style="align: right">
        <button data-dojo-type="dijit.form.Button" onclick="music.updateMusic()">修改</button>
        <button data-dojo-type="dijit.form.Button" onclick="dijit.byId('updateMusicDialog').hide();">取消</button>
    </div>
</div>

