<?php /* Smarty version 3.1.24, created on 2015-11-26 13:59:21
         compiled from "./tmpl/IndexPage.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:30881565702295e1443_93372199%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1516413d0c16f51417f8fefd6dba23ee5178f3d1' => 
    array (
      0 => './tmpl/IndexPage.tpl',
      1 => 1448542759,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30881565702295e1443_93372199',
  'variables' => 
  array (
    'CSSDirUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56570229612d80_52291378',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56570229612d80_52291378')) {
function content_56570229612d80_52291378 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '30881565702295e1443_93372199';
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
        <?php echo '<script'; ?>
 src="//ajax.googleapis.com/ajax/libs/dojo/1.10.4/dojo/dojo.js" data-dojo-config="parseOnLoad:true"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript">
            require([
                "dojo/parser",
                "dijit/layout/BorderContainer",
                "dijit/layout/ContentPane",
                "dojox/layout/ExpandoPane",
                "dijit/form/Button",
                "dijit/Toolbar",
                "dojox/grid/DataGrid",
                "dojo/data/ItemFileReadStore",
            ]);
            var storeData2 = {identifier: 'abbr',
                    label: 'name',
                    items: [
            {abbr:'ec', name:'Ecuador',           capital:'Quito'},
            {abbr:'eg', name:'Egypt',             capital:'Cairo'},
            {abbr:'sv', name:'El Salvador',       capital:'San Salvador'},
            {abbr:'gq', name:'Equatorial Guinea', capital:'Malabo'},
            {abbr:'er', name:'Eritrea',           capital:'Asmara'},
            {abbr:'ee', name:'Estonia',           capital:'Tallinn'},
            {abbr:'et', name:'Ethiopia',          capital:'Addis Ababa'}
                ]};
        <?php echo '</script'; ?>
>
    </head>
    <body class="claro">
        <div data-dojo-type="dijit.layout.BorderContainer" id="borderContainer">
            <div data-dojo-type="dojox.layout.ExpandoPane" data-dojo-props="splitter:false,region:'right',title: '正在播放',startExpanded:true" >
                <div data-dojo-type="dijit.layout.ContentPane" class="dijitBorderContainer-child" style="padding: 5px">
                    <div data-dojo-props="region:'bottom'">			
                        <audio controls>
                            <src></src>
                        </audio>
                    </div>
                </div>
            </div>
            <div data-dojo-type="dijit.layout.BorderContainer" data-dojo-props="region:'center'" style="height: 100%">
                <div data-dojo-type="dijit.Toolbar" data-dojo-props="region:'top'">
                    <button data-dojo-type="dijit.form.Button">我的音樂</button>
                    <button data-dojo-type="dijit.form.Button">播放清單</button>
                    <button data-dojo-type="dijit.form.Button">上傳音樂</button>
                </div>
                <div data-dojo-type="dijit.layout.BorderContainer" data-dojo-props="region:'center', gutters:false" style="height: 100%">
                    <div data-dojo-type="dijit.Toolbar" data-dojo-props="region:'top', splitter:false" style="text-align: right">
                        <div type="button" data-dojo-type="dijit.form.Button" iconClass="insertButton">播放</div>
                        <div type="button" data-dojo-type="dijit.form.Button" iconClass="editButton">修改</div>
                        <div type="button" data-dojo-type="dijit.form.Button" iconClass="deleteButton">刪除</div>
                    </div>
                    <div data-dojo-type="dijit.layout.ContentPane" data-dojo-props="region:'center'" style="font-size: 12px">
                        <div data-dojo-type="dojo.data.ItemFileReadStore" data-dojo-props="data:storeData2" data-dojo-id="musicStore"></div>
                        <table data-dojo-id="musicGrid" data-dojo-type="dojox.grid.DataGrid" onRowDblClick="" style="width: 100%; height: 100%" data-dojo-props="store: musicStore , selectionMode: 'single', rowselector: '10px', noDataMessage :'查無音樂資料'" selectable="false">
                            <thead>
                                <tr>
                                    <th field="name" width="24%" styles="white-space:nowrap; overflow: hidden; ">名稱</th>
                                    <th field="time" width="9%" styles="white-space:nowrap; overflow: hidden;">長度</th>
                                    <th field="type" width="7%" styles="white-space:nowrap; overflow: hidden;">分類</th>
                                    <th field="artist" width="15%" styles="white-space:nowrap; overflow: hidden;">演出者</th>
                                    <th field="album" width="15%" styles="white-space:nowrap; overflow: hidden;">專輯</th>
                                    <th field="createTime" width="15%" styles="white-space:nowrap; overflow: hidden;">加入日期</th>
                                    <th field="updateTime" width="15%" styles="white-space:nowrap; overflow: hidden;">修改日期</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
<?php }
}
?>