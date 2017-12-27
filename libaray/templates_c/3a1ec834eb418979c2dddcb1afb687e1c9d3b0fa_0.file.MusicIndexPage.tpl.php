<?php /* Smarty version 3.1.24, created on 2017-12-20 07:26:33
         compiled from "./tmpl/MusicIndexPage.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:22915a3a10a99d0983_09510550%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3a1ec834eb418979c2dddcb1afb687e1c9d3b0fa' => 
    array (
      0 => './tmpl/MusicIndexPage.tpl',
      1 => 1513754792,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22915a3a10a99d0983_09510550',
  'variables' => 
  array (
    'CSSDirUrl' => 0,
    'JSDirUrl' => 0,
    'showMusicListUrl' => 0,
    'showPlayListUrl' => 0,
    'addMusicToNewPlayListUrl' => 0,
    'previousImgSrc' => 0,
    'stopImgSrc' => 0,
    'nextImgSrc' => 0,
    'randomImgSrc' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_5a3a10a9a155e1_92824475',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5a3a10a9a155e1_92824475')) {
function content_5a3a10a9a155e1_92824475 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '22915a3a10a99d0983_09510550';
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
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['JSDirUrl']->value;?>
/ShareAddPlayListDialog.js"><?php echo '</script'; ?>
>

    </head>
    <body class="claro" onload="music.showPlayListPage()">
        <!-- Url -->
        <input type="hidden" id="showMusicListUrl" value="<?php echo $_smarty_tpl->tpl_vars['showMusicListUrl']->value;?>
" />
        <input type="hidden" id="showPlayListUrl" value="<?php echo $_smarty_tpl->tpl_vars['showPlayListUrl']->value;?>
" />
		<input type="hidden" id="addMusicToNewPlayListUrl" value="<?php echo $_smarty_tpl->tpl_vars['addMusicToNewPlayListUrl']->value;?>
" />
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
                    <button data-dojo-type="dijit.form.Button" style="margin-bottom: 20px" onclick="music.previousSong()"><img src="<?php echo $_smarty_tpl->tpl_vars['previousImgSrc']->value;?>
"/></button>
                    <button data-dojo-type="dijit.form.Button" style="margin-bottom: 20px" onclick="music.stopSong()"><img src="<?php echo $_smarty_tpl->tpl_vars['stopImgSrc']->value;?>
"/></button>
                    <button data-dojo-type="dijit.form.Button" style="margin-bottom: 20px" onclick="music.nextSong()"><img src="<?php echo $_smarty_tpl->tpl_vars['nextImgSrc']->value;?>
"/></button>
                    <audio id="audio" style="width: 75%; margin-left: 10px; margin-right: 10px;" controls></audio>
                    <button data-dojo-type="dijit.form.Button" style="margin-bottom: 20px" onclick="music.playShuffle()"><img src="<?php echo $_smarty_tpl->tpl_vars['randomImgSrc']->value;?>
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

<?php echo $_smarty_tpl->getSubTemplate ("AddPlayListDialog.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<?php }
}
?>