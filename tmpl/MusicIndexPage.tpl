<html>
    <head>
        <meta charset="UTF-8">
        <!-- Stylesheet -->
        <link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/dojo/1.10.4/dijit/themes/claro/claro.css" />
        <link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/dojo/1.10.4/dojox/layout/resources/ExpandoPane.css" />
        <link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/dojo/1.10.4/dojox/grid/resources/Grid.css" />
        <link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/dojo/1.10.4/dojox/grid/resources/claroGrid.css" />
        <link rel="stylesheet" type="text/css" href="<{$CSSDirUrl}>/musicbox.css" />
        <!-- Javascript -->
        <script src="//ajax.googleapis.com/ajax/libs/dojo/1.10.4/dojo/dojo.js" data-dojo-config="parseOnLoad:true"></script>
        <script type="text/javascript" src="<{$JSDirUrl}>/Music.js"></script>
		<script type="text/javascript" src="<{$JSDirUrl}>/ShareAddPlayListDialog.js"></script>

    </head>
    <body class="claro" onload="music.showPlayListPage()">
        <!-- Url -->
        <input type="hidden" id="showMusicListUrl" value="<{$showMusicListUrl}>" />
        <input type="hidden" id="showPlayListUrl" value="<{$showPlayListUrl}>" />
		<input type="hidden" id="addMusicToNewPlayListUrl" value="<{$addMusicToNewPlayListUrl}>" />
        <div data-dojo-type="dijit.layout.BorderContainer" id="borderContainer" style="width:100%">
            <div data-dojo-type="dijit.Toolbar" data-dojo-props="region:'top'">
                <button data-dojo-type="dijit.form.Button" onclick="music.showMusicListPage()">我的音樂</button>
                <button data-dojo-type="dijit.form.Button" onclick="music.showPlayListPage()">我的歌單</button>
                <button data-dojo-type="dijit.form.Button" onclick="music.showAddMusicDialog()">上傳音樂</button>
            </div>
            <div data-dojo-type="dijit.layout.BorderContainer" data-dojo-props="region:'center'" style="height: 100%">
                <div data-dojo-type="dojox.layout.ExpandoPane" data-dojo-props="splitter:true,region:'right',title: '稍後播放',startExpanded:false" style="width: 350px">
                    <div data-dojo-type="dijit.layout.ContentPane" class="dijitBorderContainer-child">	
                        <div data-dojo-type="dijit.Toolbar">
							<button data-dojo-type="dijit.form.Button" onclick="music.showAddMusicToNewPlayListDialog()" style="float:left">建立歌單</button>
                            <button data-dojo-type="dijit.form.Button" onclick="music.clearSongList()"style="float:right" >清除全部</button>
							<div style="clear:both" ></div>
                        </div>
                        <table id="songTable" style="width:320px">
                            <tr>
                                <td width="175px">名稱</td>
                                <td width="125px">演出者</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div data-dojo-type="dijit.layout.BorderContainer" data-dojo-props="region:'center', gutters:false">
                    <div id="content" data-dojo-type="dijit.layout.ContentPane" data-dojo-props="region:'center'"></div>
                </div>
            </div>
            <div data-dojo-type="dijit.Toolbar" data-dojo-props="region:'bottom'" style="height: 60px">
                <div id="playingSongDiv" style="text-align: center">正在播放</div>
                <div>
                    <button data-dojo-type="dijit.form.Button" style="margin-bottom: 20px" onclick="music.previousSong()"><img src="<{$previousImgSrc}>"/></button>
                    <button data-dojo-type="dijit.form.Button" style="margin-bottom: 20px" onclick="music.stopSong()"><img src="<{$stopImgSrc}>"/></button>
                    <button data-dojo-type="dijit.form.Button" style="margin-bottom: 20px" onclick="music.nextSong()"><img src="<{$nextImgSrc}>"/></button>
                    <audio id="audio" style="width: 75%; margin-left: 10px; margin-right: 10px;" controls></audio>
                    <button data-dojo-type="dijit.form.Button" style="margin-bottom: 20px" onclick="music.playShuffle()"><img src="<{$randomImgSrc}>"/></button>
                    <select id="repeat" data-dojo-type="dijit.form.Select" style="margin-bottom: 20px">
                        <option value="repeatOff">關閉循環</option>
                        <option value="repeatSong">單曲循環</option>
                        <option value="repeatAll">全部循環</option>
                    </select>
                </div>
            </div>
        </div>
    </body>
</html>
<{include file="AddMusicDialog.tpl"}>
<{include file="AddPlayListDialog.tpl"}>

