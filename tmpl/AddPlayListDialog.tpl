<div id="addPlayListDialog" data-dojo-type="dijit.Dialog" style="display: none" title="新增播放清單">
    <form id="addPlayListForm" data-dojo-type="dijit.form.Form" action="" method="post">
        <table>
            <tr>
                <td>
                    <label for="name">名稱:</label>
                </td>
                <td style="padding-left: 10px">
                    <input type="text" name="name" data-dojo-type="dijit/form/ValidationTextBox"  data-dojo-props="placeHolder: '請輸入播放清單名稱', maxlength:'50', required:true" />
                </td>
            </tr>
        </table>
    </form>
    <div class="dijitDialogPaneActionBar" style="align: right">
        <button id="addPlayListButton" data-dojo-type="dijit.form.Button" onclick="music.addPlayList()">確定</button>
        <button data-dojo-type="dijit.form.Button" onclick="dijit.byId('addPlayListDialog').hide();">取消</button>
    </div>
</div>
