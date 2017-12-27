<?php /* Smarty version 3.1.24, created on 2016-05-06 21:00:08
         compiled from "./tmpl/MusicIndexPage.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:32367572ce9b868a7d9_93898945%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6c0b6df9aee4d1228783a466fd4b2c61477481dd' => 
    array (
      0 => './tmpl/MusicIndexPage.tpl',
      1 => 1451872172,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '32367572ce9b868a7d9_93898945',
  'variables' => 
  array (
    'CSSDirUrl' => 0,
    'JSDirUrl' => 0,
    'showMusicListUrl' => 0,
    'showPlayListUrl' => 0,
    'previousImgSrc' => 0,
    'stopImgSrc' => 0,
    'nextImgSrc' => 0,
    'shuffleImgSrc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_572ce9b8706659_69804407',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_572ce9b8706659_69804407')) {
function content_572ce9b8706659_69804407 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '32367572ce9b868a7d9_93898945';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <!-- Stylesheet -->
        <link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/dojo/1.10.4/dijit/themes/claro/claro.css" />
        <link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/dojo/1.10.4/dojox/layout/resources/ExpandoPane.css" />
        <link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/dojo/1.10.4/dojox/grid/resources/Grid.css" />
        <link rel="stylesheet" type="text/css" href="//ajax.googleapis.com/ajax/libs/dojo/1.10.4/dojox/grid/resources/claroGrid.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['CSSDirUrl']->value;?>
/musicbox.css" />
        <!-- Javascript -->
        <?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/dojo/1.10.4/dojo/dojo.js" data-dojo-config="parseOnLoad:true"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['JSDirUrl']->value;?>
/Music.js"><?php echo '</script'; ?>
>

    </head>
    <!--UI-->
    <body class="claro" onload="music.showMusicListPage()">
        <!-- Url -->
        <input type="hidden" id="showMusicListUrl" value="<?php echo $_smarty_tpl->tpl_vars['showMusicListUrl']->value;?>
" />
        <input type="hidden" id="showPlayListUrl" value="<?php echo $_smarty_tpl->tpl_vars['showPlayListUrl']->value;?>
" />
        <div data-dojo-type="dijit.layout.BorderContainer" id="borderContainer" style="width:100%">
            <div data-dojo-type="dijit.Toolbar" data-dojo-props="region:'top'">
                <button data-dojo-type="dijit.form.Button" onclick="music.showMusicListPage()">我的音樂</button>
                <button data-dojo-type="dijit.form.Button" onclick="music.showPlayListPage()">我的歌單</button>
                <button data-dojo-type="dijit.form.Button" onclick="music.showAddMusicDialog()">上傳音樂</button>
            </div>
            <div data-dojo-type="dijit.layout.BorderContainer" data-dojo-props="region:'center'" style="height: 100%">
                <div data-dojo-type="dojox.layout.ExpandoPane" data-dojo-props="splitter:false,region:'right',title: '稍後播放',startExpanded:false" >
                    <div data-dojo-type="dijit.layout.ContentPane" class="dijitBorderContainer-child" style="padding: 5px">	
                        <div data-dojo-type="dijit.Toolbar" style="text-align:right">
                            <button data-dojo-type="dijit.form.Button" onclick="music.claerSongList()">清除全部</button>
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
                    <button data-dojo-type="dijit.form.Button" style="margin-bottom: 20px" onclick="music.previousSong()"><img src="<?php echo $_smarty_tpl->tpl_vars['previousImgSrc']->value;?>
"/></button>
                    <button data-dojo-type="dijit.form.Button" style="margin-bottom: 20px" onclick="music.stopSong()"><img src="<?php echo $_smarty_tpl->tpl_vars['stopImgSrc']->value;?>
"/></button>
                    <button data-dojo-type="dijit.form.Button" style="margin-bottom: 20px" onclick="music.nextSong()"><img src="<?php echo $_smarty_tpl->tpl_vars['nextImgSrc']->value;?>
"/></button>
                    <audio id="audio" style="width: 75%; margin-left: -15px; margin-right: -15px;" controls></audio>
                    <button data-dojo-type="dijit.form.Button" style="margin-bottom: 20px" onclick="music.playShuffle()"><img src="<?php echo $_smarty_tpl->tpl_vars['shuffleImgSrc']->value;?>
"/></button>
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
<?php echo $_smarty_tpl->getSubTemplate ("AddMusicDialog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>