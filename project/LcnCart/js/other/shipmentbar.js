var serverPage = 'http://jd2008.360buy.com/Service/ShipmentBarService.aspx';
var ShipmentBarPanel = 'shipBarPanel';
var ShipM_wait = '请等待...';
var ShipM_template = "<a style='font-size: 10px; position: absolute; right: 5px; top: 0pt;cursor: pointer;' onclick='CloseObject(this)'>关闭</a><div style='padding:5px 10px;'>"; //border:blue 2px solid;
ShipM_template += "<div id='sb_area'>送货至：<span id='sb_area_level0'>{ddlAreaLevel0}</span>&nbsp;&nbsp;<span id='sb_area_level1'>{ddlAreaLevel1}</span>&nbsp;&nbsp;<span id='sb_area_level2'>{ddlAreaLevel2}</span></div>";
ShipM_template += "<div id='sb_shipItems'></div>";
ShipM_template += "</div>";
var ShipM_template_ship = "<table cellspacing='0' width='100%' style='margin-top: 8px;'><tr  style='color: rgb(153, 153, 153);'><td  align='left' style='border-bottom: 1px solid rgb(221, 229, 239); width: 180px;'>配送方式</td><td style='border-bottom: 1px solid rgb(221, 229, 239); width: 100px;'>运费</td><td  style='border-bottom: 1px solid rgb(221, 229, 239);'>预计送达时间</td></tr>";
ShipM_template_ship += "{Items}</table><div style='margin-top: 5px;'>{message}</div>";
var ShipM_template_shipItem = "<tr><td><b>{Name}</b></td><td>{Fee}</td><td>{Days}</td></tr>";
var ShipmentBar_skuId = 0;
function g(nodeId) { return document.getElementById(nodeId); }
function CloseObject(target) {
    var shipBarPanel = g(ShipmentBarPanel);
    if (shipBarPanel) { shipBarPanel.style.display = "none"; }
}function AjaxRequestJson() {
    this.url = ''; this.param = ''; this.process = function() {
        var js = document.createElement('script'); js.type = 'text/javascript'; js.src = 'http://jd2008.360buy.com/Service/ShipmentBarService.aspx?roid=' + Math.random() + '&' + this.param;
        js.charset = 'GB2312'; document.getElementsByTagName('head')[0].appendChild(js);
}}function ShipmentBarDt() {
    this.skuId = 0; this.show = function() {
        ShipmentBar_skuId = this.skuId; g(ShipmentBarPanel).innerHTML = '请等待...'; var a = new AjaxRequestJson();
        a.url = serverPage; a.param = 'action=showShipmentBar&skuId=' + this.skuId + '&callBack=ShipmentBarDt_callBack({obj})'; a.process();
}}function ShipmentBarDt_callBack(obj) {
    var html = ShipM_template.replace(/{ddlAreaLevel0}/i, showAreaSelectDt(0, obj)); html = html.replace(/{ddlAreaLevel1}/i, showAreaSelectDt(1, null)); html = html.replace(/{ddlAreaLevel2}/i, showAreaSelectDt(2, null));
    g(ShipmentBarPanel).innerHTML = html;
} function showShipBarDt(skuId) {
    var shipBarPanel = g(ShipmentBarPanel); if (shipBarPanel && shipBarPanel.style.display == "none") {   shipBarPanel.style.display = ""; } var s = new ShipmentBarDt(); s.skuId = skuId; s.show();
} function showAreaSelectDt(level, obj) { var html = "<select id='sb_area_select" + level + "' onchange=\"selectAreaDt('" + level + "',this.value);\" style=\"width: 110px;\">"; html += "<option value='-1'>请选择</option>";
    if (obj != null) {
        if (obj.json != null) { obj = obj.json; }
        for (var i = 0; i < obj.length; i++) {
            html += "<option value='" + obj[i].Id + "'>" + obj[i].Name;
            if (obj[i].IsCod == '1') { html += "*"; }
            html += "</option>"; }  } html += "</select>"; return html;
} function selectAreaDt(level, idArea) {
    if (level < 2) {
        if (idArea < 0) {
            selectAreaDt_callback(++level, null);
        } else { var pLevel = ++level; var a = new AjaxRequestJson();
            a.url = serverPage; a.param = "action=selectArea&parentId=" + idArea + "&level=" + pLevel + "&provinceId=" + g('sb_area_select0').value + "&callBack=selectAreaDt_callback('" + pLevel + "',{obj})";
            a.process(); } while (level < 2) {  level++; selectAreaDt_callback(level, null);
        } g('sb_shipItems').innerHTML = '';
    } else {
        showShipmentTypesDt(ShipmentBar_skuId);
    } 
} function selectAreaDt_callback(level, obj) {  g('sb_area_level' + level).innerHTML = showAreaSelectDt(level, obj);  g('sb_shipItems').innerHTML = "<div style=\"margin: 5px 0pt 0pt 54px;\">加“*”号地区支持货到付款</div>";}
function showShipmentTypesDt(skuId) {
    var Infos = "";
    if (stockdata != null) {
        var obj = stockdata;
        for (var i = 0; i < obj.length; i++) {
            if (i == obj.length - 1)
                Infos += obj[i].Rid + "-" + obj[i].Stock;
            else
                Infos += obj[i].Rid + "-" + obj[i].Stock + "$";
        }
    }
    var idArea = g('sb_area_select2').value; if (idArea < 0) { g('sb_shipItems').innerHTML = ''; return; }
    var idProvince = g('sb_area_select0').value; var idCity = g('sb_area_select1').value; var a = new AjaxRequestJson(); a.url = serverPage;
    a.param = "action=showShipmentTypes&idArea=" + idArea + "&idProvince=" + idProvince + "&idCity=" + idCity + "&skuId=" + skuId + "&stockStatus=" + Infos + "&callBack=showShipmentTypesDt_callback({obj})";
    a.process(); g('sb_shipItems').innerHTML = ShipM_wait;
} function showShipmentTypesDt_callback(obj) {
    var message = ""; var html = ""; if (obj != null) {
        if (obj.json != null) { obj = obj.json; } for (var i = 0; i < obj.length; i++) {
            if (obj[i].Id == "-1") {
                if (obj[i].Name == "djd" && message.indexOf("此商品属于大家电，只能选择“京东快递”或是“快递运输”;") == -1) { message += "此商品属于大家电，只能选择“京东快递”或是“快递运输”;"; } if (obj[i].Name == "weight") { message += "此商品重量大于10公斤，不适用于<a style='color:#0000A0;' target=\"_blank\" href=\"http://www.360buy.com/help/kdexpress.aspx#kdmyf\">免运费规则</a>，请您谅解;"; }
                if (i < obj.length) { message += "<br/>"; } continue;
            } html += ShipM_template_shipItem; html = html.replace(/{Name}/i, obj[i].Name);
            if (obj[i].Fee == "0.00") html = html.replace(/{Fee}/i, obj[i].Fee + "<span style='color: red;'>(免运费)</span>");
            else html = html.replace(/{Fee}/i, obj[i].Fee);
            html = html.replace(/{Days}/i, obj[i].Days);
        } }  g('sb_shipItems').innerHTML = ShipM_template_ship.replace(/{Items}/i, html).replace(/{message}/i, "<p style='color: red;'> 提示:</p><p>" + message + "该运费只适用于当前商品，购买多个商品以最终下单为准。</p>");
}
