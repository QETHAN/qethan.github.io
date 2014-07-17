<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta content="telephone=no" name="format-detection" />
<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no">
<title>帖子内页</title>
<style>
/*! normalize.css v3.0.1 | MIT License | git.io/normalize */
*,
*:before,
*:after {
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    -webkit-user-select: none;
    user-select: none;
    margin: 0;
    padding: 0;
}

html,
body {
    height: 100%;
}

html {
    font-family: sans-serif; /* 1 */
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
    -ms-text-size-adjust: none; /* 2 */
    -webkit-text-size-adjust: none; /* 2 */
}

body {
    font: Helvetica, Arial, sans-serif;
    line-height: 1.6;
    overflow-y: scroll;
    -webkit-overflow-scrolling: touch;
}

audio,
canvas,
progress,
video {
    display: inline-block; /* 1 */
    vertical-align: baseline; /* 2 */
}

audio:not([controls]) {
    display: none;
    height: 0;
}

[hidden],
template {
    display: none;
}

a {
    background: transparent;
}

a:active,
a:hover {
    outline: 0;
}

abbr[title] {
    border-bottom: 1px dotted;
}

b,
strong {
    font-weight: bold;
}

dfn {
    font-style: italic;
}

h1 {
    color: #141414;
    font-size: 1em;
    margin: 0.67em 0;
}

mark {
    background: #ff0;
    color: #000;
}

small {
    font-size: 80%;
}

sub,
sup {
    font-size: 75%;
    line-height: 0;
    position: relative;
    vertical-align: baseline;
}

sup {
    top: -0.5em;
}

sub {
    bottom: -0.25em;
}

img {
    border: 0;
}

svg:not(:root) {
    overflow: hidden;
}

figure {
    margin: 1em 40px;
}

hr {
    -moz-box-sizing: content-box;
    box-sizing: content-box;
    height: 0;
}

pre {
    overflow: auto;
}

code,
kbd,
pre,
samp {
    font-family: monospace, monospace;
    font-size: 1em;
}

ol, ul {
    list-style: none;
}

blockquote, q {
    quotes: none;
}

blockquote:before, blockquote:after,
q:before, q:after {
    content: '';
    content: none;
}

table {
    border-collapse: collapse;
    border-spacing: 0;
}

td,
th {
    padding: 0;
}

.pull-left {
    float: left;
}

.pull-right {
    float: right;
}

.clearfix,
.clearfix:before,
.clearfix:after {
    content: '';
    display: table;
    *zoom: 1;
}
.clearfix:after {
    clear: both;
}

.inner-padding {
    padding: 12px;
}

.bg-white {
    background-color: #fff;
}

.bg-gray {
    background-color: #e9eff4;
}

.thread {
    background-color: #fff;
}

.thread header {
    line-height: 1;
    margin-bottom: 10px;
}

.avatar {
    position: absolute;
    border-radius: 50%;
}

.user-info {
    line-height: 1;
    padding-left: 43px;
}
.user-info-content {
    position: relative;
    text-align: right;
}

.user-info .nickname {
    font-size: 13px;
    color: #ae0a10;
}

.datetime,
.light,
.floor {
    display: inline-block;
    font-size: 10px;
    color: #8f8f8f;
    -webkit-transform: scale(0.875);
    transform: scale(0.875);
}
.datetime {
    margin-left: -4px;
}
.board-item .datetime {
    position: absolute;
    left: 0;
    bottom: 0;
}

.thread-title {
    padding-bottom: 10px;
    font-size: 14px;
    font-weight: bold;
    border-bottom: 1px dashed #ebeced;
}

.thread-content {
    color: #2e2e30;
}
.thread-content p {
    margin: 0 0 8px 0;
    text-indent: 1em;
}
.thread-content p img {
    max-width: 90%;
}
.reply p {
    margin-bottom: 8px;
}
.reply a,
.thread-content p a {
    word-wrap: break-word;
}
.reply p img {
    max-width: 100%;
}

.thread-content,
.reply {
    font-size: 14px;
}

.touch-row-active {
    background-color: #c3c3c2;
}
.approve-title {
    margin: 0 0 5px 0;
    color: #7d7a79;
}

.approve-avatars li {
    margin-right: 9px;
}

.approve-avatars li:nth-last-child(2) {
    margin-right: 18px;
}

.approve-avatars img {
    border-radius: 50%;
}
.approve-avatars .more {
    vertical-align: top;
    color: #7d7a79;
}

.board {
    margin-bottom: 15px;
}
.board .board-header {
    padding-top: 9px;
    padding-bottom: 9px;
    border-bottom: 1px solid #b1b6ba;
}
.board .board-header.fixTop {
    position: fixed;
    z-index: 100;
    top: 0;
    left: 0;
    width: 100%;
    background-color: #e9eff4;
}

.board .board-title {
    padding-left: 8px;
    color: #0f0f0f;
    border-left: 4px solid #ae0a10;
}

.board-item {
    padding-top: 8px;
    padding-bottom: 11px;
}
.board-item:last-child .reply {
    border-bottom: none;
}

.quotation {
    margin: 6px 0;
    padding: 10px;
    background-color: #d8dee3;
}
.quotation p {
    line-height: 1.5;
    font-size: 12px;
    text-indent: 0;
    text-align: left;
    margin-left: 1em;
}
.quotation-title {
    margin-bottom: 5px;
    color: #3d3d3d;
}
.quotation-title q {
    color: #5192c2;
}

.user-info > p:last-child,
.reply {
    line-height: 1.6;
    margin-top: 12px;
    padding-bottom: 12px;
    font-size: 14px;
    color: #1d1d1d;
    border-bottom: 1px solid #b1b1b1;
    text-indent: 0;
}

.floor {
    margin-left: 4px;
}

.show {
    display: block;
}
.hide {
    display: none;
}
.operation {
    display: none;
    position: absolute;
    top: 140px;
    left: 50px;
    width: 226px;
    height: 34px;
    color: #fff;
    background-color: #4e5562;
    opacity: .8;
    -webkit-box-shadow: 1px 1px 2px 2px rgba(60,60,60,.3),-1px -1px 2px 2px rgba(60,60,60,.3);
}
.operation ul {
    position: relative;
    line-height: 1;
}
.operation ul li {
    position: relative;
    width: 25%;
    padding: 10px 0px;
    float: left;
    font-size: 14px;
    text-align: center;
}
.operation ul li:nth-child(2) {
    padding-right: 5px;
}
.operation ul li:after {
    position: absolute;
    right: -1px;
    top: 10px;
    content: '|';
    display: block;
    height: 10px;
}
.operation ul li:last-child:after {
    content: '';
}
.operation ul li:first-child {
    padding-left: 0;
}
.operation ul li:last-child {
    padding-right: 0;
    border-right: none;
}
.operation-triangle {
    position: absolute;
    top: 33px;
    right: 20px;
    width: 20px;
    height: 20px;
    overflow: hidden;
    box-shadow: 0 16px 10px -17px rgba(0,0,0,0.5);
    opacity: .8;
    -webkit-transform: rotate(180deg);
}
.operation-triangle:after {
    content: "";
    position: absolute;
    top:14px;
    left: 3px;
    width: 10px;
    height: 10px;
    background: #4e5562;;
    -webkit-transform: rotate(45deg);
    -webkit-box-shadow: -1px -1px 10px -2px rgba(0,0,0,0.5);
}

</style>
</head>
<body class="bg-white">
<div class="container bg-white" >
    <section class="inner-padding thread" id="js-thread" style="display: none;">

    </section>


</div>
<div class="container bg-gray">
    <section class="inner-padding approve" id="js-threadZan" style="display: none;">
    </section>
    <!-- 热门回帖 start -->
    <section class="board" id="js-hotReplySection" style="display: none;">
        <header class="board-header" id="js-hotReplyHeader">
            <strong class="board-title">热门回帖</strong>
        </header>
        <ul id="js-threadHot">

        </ul>
    </section>
    <!-- 热门回帖 end -->

    <!-- 全部回帖 start -->
    <section class="board">

        <header class="board-header" id="js-allReplyHeader" style="display: none;">
            <strong class="board-title">全部回帖</strong>
        </header>
        <ul id="js-replyList">
        </ul>
    </section>
    <!-- 全部回帖 end -->
</div>

<div class="operation" id="js-operation">
    <ul>
        <li id="js-light">亮了</li>
        <li id="js-quote">引用</li>
        <li id="js-share">分享</li>
        <li id="js-copy">复制</li>
    </ul>
    <div class="operation-triangle">

    </div>
</div>
<script type="text/javascript">
    var Zepto=function(){function F(a){return null==a?String(a):x[y.call(a)]||"object"}function G(a){return"function"==F(a)}function H(a){return null!=a&&a==a.window}function I(a){return null!=a&&a.nodeType==a.DOCUMENT_NODE}function J(a){return"object"==F(a)}function K(a){return J(a)&&!H(a)&&Object.getPrototypeOf(a)==Object.prototype}function L(a){return"number"==typeof a.length}function M(a){return g.call(a,function(a){return null!=a})}function N(a){return a.length>0?c.fn.concat.apply([],a):a}function O(a){return a.replace(/::/g,"/").replace(/([A-Z]+)([A-Z][a-z])/g,"$1_$2").replace(/([a-z\d])([A-Z])/g,"$1_$2").replace(/_/g,"-").toLowerCase()}function P(a){return a in j?j[a]:j[a]=new RegExp("(^|\\s)"+a+"(\\s|$)")}function Q(a,b){return"number"!=typeof b||k[O(a)]?b:b+"px"}function R(a){var b,c;return i[a]||(b=h.createElement(a),h.body.appendChild(b),c=getComputedStyle(b,"").getPropertyValue("display"),b.parentNode.removeChild(b),"none"==c&&(c="block"),i[a]=c),i[a]}function S(a){return"children"in a?f.call(a.children):c.map(a.childNodes,function(a){return 1==a.nodeType?a:void 0})}function T(c,d,e){for(b in d)e&&(K(d[b])||E(d[b]))?(K(d[b])&&!K(c[b])&&(c[b]={}),E(d[b])&&!E(c[b])&&(c[b]=[]),T(c[b],d[b],e)):d[b]!==a&&(c[b]=d[b])}function U(a,b){return null==b?c(a):c(a).filter(b)}function V(a,b,c,d){return G(b)?b.call(a,c,d):b}function W(a,b,c){null==c?a.removeAttribute(b):a.setAttribute(b,c)}function X(b,c){var d=b.className,e=d&&d.baseVal!==a;return c===a?e?d.baseVal:d:(e?d.baseVal=c:b.className=c,void 0)}function Y(a){var b;try{return a?"true"==a||("false"==a?!1:"null"==a?null:/^0/.test(a)||isNaN(b=Number(a))?/^[\[\{]/.test(a)?c.parseJSON(a):a:b):a}catch(d){return a}}function Z(a,b){b(a);for(var c=0,d=a.childNodes.length;d>c;c++)Z(a.childNodes[c],b)}var a,b,c,d,A,B,e=[],f=e.slice,g=e.filter,h=window.document,i={},j={},k={"column-count":1,columns:1,"font-weight":1,"line-height":1,opacity:1,"z-index":1,zoom:1},l=/^\s*<(\w+|!)[^>]*>/,m=/^<(\w+)\s*\/?>(?:<\/\1>|)$/,n=/<(?!area|br|col|embed|hr|img|input|link|meta|param)(([\w:]+)[^>]*)\/>/gi,o=/^(?:body|html)$/i,p=/([A-Z])/g,q=["val","css","html","text","data","width","height","offset"],r=["after","prepend","before","append"],s=h.createElement("table"),t=h.createElement("tr"),u={tr:h.createElement("tbody"),tbody:s,thead:s,tfoot:s,td:t,th:t,"*":h.createElement("div")},v=/complete|loaded|interactive/,w=/^[\w-]*$/,x={},y=x.toString,z={},C=h.createElement("div"),D={tabindex:"tabIndex",readonly:"readOnly","for":"htmlFor","class":"className",maxlength:"maxLength",cellspacing:"cellSpacing",cellpadding:"cellPadding",rowspan:"rowSpan",colspan:"colSpan",usemap:"useMap",frameborder:"frameBorder",contenteditable:"contentEditable"},E=Array.isArray||function(a){return a instanceof Array};return z.matches=function(a,b){var c,d,e,f;return b&&a&&1===a.nodeType?(c=a.webkitMatchesSelector||a.mozMatchesSelector||a.oMatchesSelector||a.matchesSelector)?c.call(a,b):(e=a.parentNode,f=!e,f&&(e=C).appendChild(a),d=~z.qsa(e,b).indexOf(a),f&&C.removeChild(a),d):!1},A=function(a){return a.replace(/-+(.)?/g,function(a,b){return b?b.toUpperCase():""})},B=function(a){return g.call(a,function(b,c){return a.indexOf(b)==c})},z.fragment=function(b,d,e){var g,i,j;return m.test(b)&&(g=c(h.createElement(RegExp.$1))),g||(b.replace&&(b=b.replace(n,"<$1></$2>")),d===a&&(d=l.test(b)&&RegExp.$1),d in u||(d="*"),j=u[d],j.innerHTML=""+b,g=c.each(f.call(j.childNodes),function(){j.removeChild(this)})),K(e)&&(i=c(g),c.each(e,function(a,b){q.indexOf(a)>-1?i[a](b):i.attr(a,b)})),g},z.Z=function(a,b){return a=a||[],a.__proto__=c.fn,a.selector=b||"",a},z.isZ=function(a){return a instanceof z.Z},z.init=function(b,d){var e;if(!b)return z.Z();if("string"==typeof b)if(b=b.trim(),"<"==b[0]&&l.test(b))e=z.fragment(b,RegExp.$1,d),b=null;else{if(d!==a)return c(d).find(b);e=z.qsa(h,b)}else{if(G(b))return c(h).ready(b);if(z.isZ(b))return b;if(E(b))e=M(b);else if(J(b))e=[b],b=null;else if(l.test(b))e=z.fragment(b.trim(),RegExp.$1,d),b=null;else{if(d!==a)return c(d).find(b);e=z.qsa(h,b)}}return z.Z(e,b)},c=function(a,b){return z.init(a,b)},c.extend=function(a){var b,c=f.call(arguments,1);return"boolean"==typeof a&&(b=a,a=c.shift()),c.forEach(function(c){T(a,c,b)}),a},z.qsa=function(a,b){var c,d="#"==b[0],e=!d&&"."==b[0],g=d||e?b.slice(1):b,h=w.test(g);return I(a)&&h&&d?(c=a.getElementById(g))?[c]:[]:1!==a.nodeType&&9!==a.nodeType?[]:f.call(h&&!d?e?a.getElementsByClassName(g):a.getElementsByTagName(b):a.querySelectorAll(b))},c.contains=h.documentElement.contains?function(a,b){return a!==b&&a.contains(b)}:function(a,b){for(;b&&(b=b.parentNode);)if(b===a)return!0;return!1},c.type=F,c.isFunction=G,c.isWindow=H,c.isArray=E,c.isPlainObject=K,c.isEmptyObject=function(a){var b;for(b in a)return!1;return!0},c.inArray=function(a,b,c){return e.indexOf.call(b,a,c)},c.camelCase=A,c.trim=function(a){return null==a?"":String.prototype.trim.call(a)},c.uuid=0,c.support={},c.expr={},c.map=function(a,b){var c,e,f,d=[];if(L(a))for(e=0;e<a.length;e++)c=b(a[e],e),null!=c&&d.push(c);else for(f in a)c=b(a[f],f),null!=c&&d.push(c);return N(d)},c.each=function(a,b){var c,d;if(L(a)){for(c=0;c<a.length;c++)if(b.call(a[c],c,a[c])===!1)return a}else for(d in a)if(b.call(a[d],d,a[d])===!1)return a;return a},c.grep=function(a,b){return g.call(a,b)},window.JSON&&(c.parseJSON=JSON.parse),c.each("Boolean Number String Function Array Date RegExp Object Error".split(" "),function(a,b){x["[object "+b+"]"]=b.toLowerCase()}),c.fn={forEach:e.forEach,reduce:e.reduce,push:e.push,sort:e.sort,indexOf:e.indexOf,concat:e.concat,map:function(a){return c(c.map(this,function(b,c){return a.call(b,c,b)}))},slice:function(){return c(f.apply(this,arguments))},ready:function(a){return v.test(h.readyState)&&h.body?a(c):h.addEventListener("DOMContentLoaded",function(){a(c)},!1),this},get:function(b){return b===a?f.call(this):this[b>=0?b:b+this.length]},toArray:function(){return this.get()},size:function(){return this.length},remove:function(){return this.each(function(){null!=this.parentNode&&this.parentNode.removeChild(this)})},each:function(a){return e.every.call(this,function(b,c){return a.call(b,c,b)!==!1}),this},filter:function(a){return G(a)?this.not(this.not(a)):c(g.call(this,function(b){return z.matches(b,a)}))},add:function(a,b){return c(B(this.concat(c(a,b))))},is:function(a){return this.length>0&&z.matches(this[0],a)},not:function(b){var e,d=[];return G(b)&&b.call!==a?this.each(function(a){b.call(this,a)||d.push(this)}):(e="string"==typeof b?this.filter(b):L(b)&&G(b.item)?f.call(b):c(b),this.forEach(function(a){e.indexOf(a)<0&&d.push(a)})),c(d)},has:function(a){return this.filter(function(){return J(a)?c.contains(this,a):c(this).find(a).size()})},eq:function(a){return-1===a?this.slice(a):this.slice(a,+a+1)},first:function(){var a=this[0];return a&&!J(a)?a:c(a)},last:function(){var a=this[this.length-1];return a&&!J(a)?a:c(a)},find:function(a){var b,d=this;return b=a?"object"==typeof a?c(a).filter(function(){var a=this;return e.some.call(d,function(b){return c.contains(b,a)})}):1==this.length?c(z.qsa(this[0],a)):this.map(function(){return z.qsa(this,a)}):[]},closest:function(a,b){var d=this[0],e=!1;for("object"==typeof a&&(e=c(a));d&&!(e?e.indexOf(d)>=0:z.matches(d,a));)d=d!==b&&!I(d)&&d.parentNode;return c(d)},parents:function(a){for(var b=[],d=this;d.length>0;)d=c.map(d,function(a){return(a=a.parentNode)&&!I(a)&&b.indexOf(a)<0?(b.push(a),a):void 0});return U(b,a)},parent:function(a){return U(B(this.pluck("parentNode")),a)},children:function(a){return U(this.map(function(){return S(this)}),a)},contents:function(){return this.map(function(){return f.call(this.childNodes)})},siblings:function(a){return U(this.map(function(a,b){return g.call(S(b.parentNode),function(a){return a!==b})}),a)},empty:function(){return this.each(function(){this.innerHTML=""})},pluck:function(a){return c.map(this,function(b){return b[a]})},show:function(){return this.each(function(){"none"==this.style.display&&(this.style.display=""),"none"==getComputedStyle(this,"").getPropertyValue("display")&&(this.style.display=R(this.nodeName))})},replaceWith:function(a){return this.before(a).remove()},wrap:function(a){var d,e,b=G(a);return this[0]&&!b&&(d=c(a).get(0),e=d.parentNode||this.length>1),this.each(function(f){c(this).wrapAll(b?a.call(this,f):e?d.cloneNode(!0):d)})},wrapAll:function(a){if(this[0]){c(this[0]).before(a=c(a));for(var b;(b=a.children()).length;)a=b.first();c(a).append(this)}return this},wrapInner:function(a){var b=G(a);return this.each(function(d){var e=c(this),f=e.contents(),g=b?a.call(this,d):a;f.length?f.wrapAll(g):e.append(g)})},unwrap:function(){return this.parent().each(function(){c(this).replaceWith(c(this).children())}),this},clone:function(){return this.map(function(){return this.cloneNode(!0)})},hide:function(){return this.css("display","none")},toggle:function(b){return this.each(function(){var d=c(this);(b===a?"none"==d.css("display"):b)?d.show():d.hide()})},prev:function(a){return c(this.pluck("previousElementSibling")).filter(a||"*")},next:function(a){return c(this.pluck("nextElementSibling")).filter(a||"*")},html:function(a){return 0 in arguments?this.each(function(b){var d=this.innerHTML;c(this).empty().append(V(this,a,b,d))}):0 in this?this[0].innerHTML:null},text:function(a){return 0 in arguments?this.each(function(b){var c=V(this,a,b,this.textContent);this.textContent=null==c?"":""+c}):0 in this?this[0].textContent:null},attr:function(c,d){var e;return"string"!=typeof c||1 in arguments?this.each(function(a){if(1===this.nodeType)if(J(c))for(b in c)W(this,b,c[b]);else W(this,c,V(this,d,a,this.getAttribute(c)))}):this.length&&1===this[0].nodeType?!(e=this[0].getAttribute(c))&&c in this[0]?this[0][c]:e:a},removeAttr:function(a){return this.each(function(){1===this.nodeType&&W(this,a)})},prop:function(a,b){return a=D[a]||a,1 in arguments?this.each(function(c){this[a]=V(this,b,c,this[a])}):this[0]&&this[0][a]},data:function(b,c){var d="data-"+b.replace(p,"-$1").toLowerCase(),e=1 in arguments?this.attr(d,c):this.attr(d);return null!==e?Y(e):a},val:function(a){return 0 in arguments?this.each(function(b){this.value=V(this,a,b,this.value)}):this[0]&&(this[0].multiple?c(this[0]).find("option").filter(function(){return this.selected}).pluck("value"):this[0].value)},offset:function(a){if(a)return this.each(function(b){var d=c(this),e=V(this,a,b,d.offset()),f=d.offsetParent().offset(),g={top:e.top-f.top,left:e.left-f.left};"static"==d.css("position")&&(g.position="relative"),d.css(g)});if(!this.length)return null;var b=this[0].getBoundingClientRect();return{left:b.left+window.pageXOffset,top:b.top+window.pageYOffset,width:Math.round(b.width),height:Math.round(b.height)}},css:function(a,d){var e,f,g,h;if(arguments.length<2){if(e=this[0],f=getComputedStyle(e,""),!e)return;if("string"==typeof a)return e.style[A(a)]||f.getPropertyValue(a);if(E(a))return g={},c.each(E(a)?a:[a],function(a,b){g[b]=e.style[A(b)]||f.getPropertyValue(b)}),g}if(h="","string"==F(a))d||0===d?h=O(a)+":"+Q(a,d):this.each(function(){this.style.removeProperty(O(a))});else for(b in a)a[b]||0===a[b]?h+=O(b)+":"+Q(b,a[b])+";":this.each(function(){this.style.removeProperty(O(b))});return this.each(function(){this.style.cssText+=";"+h})},index:function(a){return a?this.indexOf(c(a)[0]):this.parent().children().indexOf(this[0])},hasClass:function(a){return a?e.some.call(this,function(a){return this.test(X(a))},P(a)):!1},addClass:function(a){return a?this.each(function(b){d=[];var e=X(this),f=V(this,a,b,e);f.split(/\s+/g).forEach(function(a){c(this).hasClass(a)||d.push(a)},this),d.length&&X(this,e+(e?" ":"")+d.join(" "))}):this},removeClass:function(b){return this.each(function(c){return b===a?X(this,""):(d=X(this),V(this,b,c,d).split(/\s+/g).forEach(function(a){d=d.replace(P(a)," ")}),X(this,d.trim()),void 0)})},toggleClass:function(b,d){return b?this.each(function(e){var f=c(this),g=V(this,b,e,X(this));g.split(/\s+/g).forEach(function(b){(d===a?!f.hasClass(b):d)?f.addClass(b):f.removeClass(b)})}):this},scrollTop:function(b){if(this.length){var c="scrollTop"in this[0];return b===a?c?this[0].scrollTop:this[0].pageYOffset:this.each(c?function(){this.scrollTop=b}:function(){this.scrollTo(this.scrollX,b)})}},scrollLeft:function(b){if(this.length){var c="scrollLeft"in this[0];return b===a?c?this[0].scrollLeft:this[0].pageXOffset:this.each(c?function(){this.scrollLeft=b}:function(){this.scrollTo(b,this.scrollY)})}},position:function(){if(this.length){var a=this[0],b=this.offsetParent(),d=this.offset(),e=o.test(b[0].nodeName)?{top:0,left:0}:b.offset();return d.top-=parseFloat(c(a).css("margin-top"))||0,d.left-=parseFloat(c(a).css("margin-left"))||0,e.top+=parseFloat(c(b[0]).css("border-top-width"))||0,e.left+=parseFloat(c(b[0]).css("border-left-width"))||0,{top:d.top-e.top,left:d.left-e.left}}},offsetParent:function(){return this.map(function(){for(var a=this.offsetParent||h.body;a&&!o.test(a.nodeName)&&"static"==c(a).css("position");)a=a.offsetParent;return a})}},c.fn.detach=c.fn.remove,["width","height"].forEach(function(b){var d=b.replace(/./,function(a){return a[0].toUpperCase()});c.fn[b]=function(e){var f,g=this[0];return e===a?H(g)?g["inner"+d]:I(g)?g.documentElement["scroll"+d]:(f=this.offset())&&f[b]:this.each(function(a){g=c(this),g.css(b,V(this,e,a,g[b]()))})}}),r.forEach(function(a,b){var d=b%2;c.fn[a]=function(){var a,f,e=c.map(arguments,function(b){return a=F(b),"object"==a||"array"==a||null==b?b:z.fragment(b)}),g=this.length>1;return e.length<1?this:this.each(function(a,i){f=d?i:i.parentNode,i=0==b?i.nextSibling:1==b?i.firstChild:2==b?i:null;var j=c.contains(h.documentElement,f);e.forEach(function(a){if(g)a=a.cloneNode(!0);else if(!f)return c(a).remove();f.insertBefore(a,i),j&&Z(a,function(a){null==a.nodeName||"SCRIPT"!==a.nodeName.toUpperCase()||a.type&&"text/javascript"!==a.type||a.src||window.eval.call(window,a.innerHTML)})})})},c.fn[d?a+"To":"insert"+(b?"Before":"After")]=function(b){return c(b)[a](this),this}}),z.Z.prototype=c.fn,z.uniq=B,z.deserializeValue=Y,c.zepto=z,c}();window.Zepto=Zepto,void 0===window.$&&(window.$=Zepto),function(a){function l(a){return a._zid||(a._zid=b++)}function m(a,b,c,d){if(b=n(b),b.ns)var e=o(b.ns);return(g[l(a)]||[]).filter(function(a){return!(!a||b.e&&a.e!=b.e||b.ns&&!e.test(a.ns)||c&&l(a.fn)!==l(c)||d&&a.sel!=d)})}function n(a){var b=(""+a).split(".");return{e:b[0],ns:b.slice(1).sort().join(" ")}}function o(a){return new RegExp("(?:^| )"+a.replace(" "," .* ?")+"(?: |$)")}function p(a,b){return a.del&&!i&&a.e in j||!!b}function q(a){return k[a]||i&&j[a]||a}function r(b,d,e,f,h,i,j){var m=l(b),o=g[m]||(g[m]=[]);d.split(/\s/).forEach(function(d){var g,l;return"ready"==d?a(document).ready(e):(g=n(d),g.fn=e,g.sel=h,g.e in k&&(e=function(b){var c=b.relatedTarget;return!c||c!==this&&!a.contains(this,c)?g.fn.apply(this,arguments):void 0}),g.del=i,l=i||e,g.proxy=function(a){if(a=x(a),!a.isImmediatePropagationStopped()){a.data=f;var d=l.apply(b,a._args==c?[a]:[a].concat(a._args));return d===!1&&(a.preventDefault(),a.stopPropagation()),d}},g.i=o.length,o.push(g),"addEventListener"in b&&b.addEventListener(q(g.e),g.proxy,p(g,j)),void 0)})}function s(a,b,c,d,e){var f=l(a);(b||"").split(/\s/).forEach(function(b){m(a,b,c,d).forEach(function(b){delete g[f][b.i],"removeEventListener"in a&&a.removeEventListener(q(b.e),b.proxy,p(b,e))})})}function x(b,d){return(d||!b.isDefaultPrevented)&&(d||(d=b),a.each(w,function(a,c){var e=d[a];b[a]=function(){return this[c]=t,e&&e.apply(d,arguments)},b[c]=u}),(d.defaultPrevented!==c?d.defaultPrevented:"returnValue"in d?d.returnValue===!1:d.getPreventDefault&&d.getPreventDefault())&&(b.isDefaultPrevented=t)),b}function y(a){var b,d={originalEvent:a};for(b in a)v.test(b)||a[b]===c||(d[b]=a[b]);return x(d,a)}var c,t,u,v,w,b=1,d=Array.prototype.slice,e=a.isFunction,f=function(a){return"string"==typeof a},g={},h={},i="onfocusin"in window,j={focus:"focusin",blur:"focusout"},k={mouseenter:"mouseover",mouseleave:"mouseout"};h.click=h.mousedown=h.mouseup=h.mousemove="MouseEvents",a.event={add:r,remove:s},a.proxy=function(b,c){var h,g=2 in arguments&&d.call(arguments,2);if(e(b))return h=function(){return b.apply(c,g?g.concat(d.call(arguments)):arguments)},h._zid=l(b),h;if(f(c))return g?(g.unshift(b[c],b),a.proxy.apply(null,g)):a.proxy(b[c],b);throw new TypeError("expected function")},a.fn.bind=function(a,b,c){return this.on(a,b,c)},a.fn.unbind=function(a,b){return this.off(a,b)},a.fn.one=function(a,b,c,d){return this.on(a,b,c,d,1)},t=function(){return!0},u=function(){return!1},v=/^([A-Z]|returnValue$|layer[XY]$)/,w={preventDefault:"isDefaultPrevented",stopImmediatePropagation:"isImmediatePropagationStopped",stopPropagation:"isPropagationStopped"},a.fn.delegate=function(a,b,c){return this.on(b,a,c)},a.fn.undelegate=function(a,b,c){return this.off(b,a,c)},a.fn.live=function(b,c){return a(document.body).delegate(this.selector,b,c),this},a.fn.die=function(b,c){return a(document.body).undelegate(this.selector,b,c),this},a.fn.on=function(b,g,h,i,j){var k,l,m=this;return b&&!f(b)?(a.each(b,function(a,b){m.on(a,g,h,b,j)}),m):(f(g)||e(i)||i===!1||(i=h,h=g,g=c),(e(h)||h===!1)&&(i=h,h=c),i===!1&&(i=u),m.each(function(c,e){j&&(k=function(a){return s(e,a.type,i),i.apply(this,arguments)}),g&&(l=function(b){var c,f=a(b.target).closest(g,e).get(0);return f&&f!==e?(c=a.extend(y(b),{currentTarget:f,liveFired:e}),(k||i).apply(f,[c].concat(d.call(arguments,1)))):void 0}),r(e,b,i,h,g,l||k)}))},a.fn.off=function(b,d,g){var h=this;return b&&!f(b)?(a.each(b,function(a,b){h.off(a,d,b)}),h):(f(d)||e(g)||g===!1||(g=d,d=c),g===!1&&(g=u),h.each(function(){s(this,b,g,d)}))},a.fn.trigger=function(b,c){return b=f(b)||a.isPlainObject(b)?a.Event(b):x(b),b._args=c,this.each(function(){"dispatchEvent"in this?this.dispatchEvent(b):a(this).triggerHandler(b,c)})},a.fn.triggerHandler=function(b,c){var d,e;return this.each(function(g,h){d=y(f(b)?a.Event(b):b),d._args=c,d.target=h,a.each(m(h,b.type||b),function(a,b){return e=b.proxy(d),d.isImmediatePropagationStopped()?!1:void 0})}),e},"focusin focusout load resize scroll unload click dblclick mousedown mouseup mousemove mouseover mouseout mouseenter mouseleave change select keydown keypress keyup error".split(" ").forEach(function(b){a.fn[b]=function(a){return a?this.bind(b,a):this.trigger(b)}}),["focus","blur"].forEach(function(b){a.fn[b]=function(a){return a?this.bind(b,a):this.each(function(){try{this[b]()}catch(a){}}),this}}),a.Event=function(a,b){var c,d,e;if(f(a)||(b=a,a=b.type),c=document.createEvent(h[a]||"Events"),d=!0,b)for(e in b)"bubbles"==e?d=!!b[e]:c[e]=b[e];return c.initEvent(a,d,!0),x(c)}}(Zepto),function(a){a.fn.serializeArray=function(){var c,b=[];return a([].slice.call(this.get(0).elements)).each(function(){c=a(this);var d=c.attr("type");"fieldset"!=this.nodeName.toLowerCase()&&!this.disabled&&"submit"!=d&&"reset"!=d&&"button"!=d&&("radio"!=d&&"checkbox"!=d||this.checked)&&b.push({name:c.attr("name"),value:c.val()})}),b},a.fn.serialize=function(){var a=[];return this.serializeArray().forEach(function(b){a.push(encodeURIComponent(b.name)+"="+encodeURIComponent(b.value))}),a.join("&")},a.fn.submit=function(b){if(b)this.bind("submit",b);else if(this.length){var c=a.Event("submit");this.eq(0).trigger(c),c.isDefaultPrevented()||this.get(0).submit()}return this}}(Zepto),function(a){"__proto__"in{}||a.extend(a.zepto,{Z:function(b,c){return b=b||[],a.extend(b,a.fn),b.selector=c||"",b.__Z=!0,b},isZ:function(b){return"array"===a.type(b)&&"__Z"in b}});try{getComputedStyle(void 0)}catch(b){var c=getComputedStyle;window.getComputedStyle=function(a){try{return c(a)}catch(b){return null}}}}(Zepto);
    !function(a){function e(b){return b=a(b),!(!b.width()&&!b.height())&&"none"!==b.css("display")}function j(a,b){var c,d,e,h;return a=a.replace(/=#\]/g,'="#"]'),e=g.exec(a),e&&e[2]in f&&(c=f[e[2]],d=e[3],a=e[1],d&&(h=Number(d),d=isNaN(h)?d.replace(/^["']|["']$/g,""):h)),b(a,c,d)}var b=a.zepto,c=b.qsa,d=b.matches,f=a.expr[":"]={visible:function(){return e(this)?this:void 0},hidden:function(){return e(this)?void 0:this},selected:function(){return this.selected?this:void 0},checked:function(){return this.checked?this:void 0},parent:function(){return this.parentNode},first:function(a){return 0===a?this:void 0},last:function(a,b){return a===b.length-1?this:void 0},eq:function(a,b,c){return a===c?this:void 0},contains:function(b,c,d){return a(this).text().indexOf(d)>-1?this:void 0},has:function(a,c,d){return b.qsa(this,d).length?this:void 0}},g=new RegExp("(.*):(\\w+)(?:\\(([^)]+)\\))?$\\s*"),h=/^\s*>/,i="Zepto"+ +new Date;b.qsa=function(d,e){return j(e,function(f,g,j){var k,l;try{!f&&g?f="*":h.test(f)&&(k=a(d).addClass(i),f="."+i+" "+f),l=c(d,f)}catch(m){throw console.error("error performing selector: %o",e),m}finally{k&&k.removeClass(i)}return g?b.uniq(a.map(l,function(a,b){return g.call(a,b,l,j)})):l})},b.matches=function(a,b){return j(b,function(b,c,e){return!(b&&!d(a,b)||c&&c.call(a,null,e)!==a)})}}(Zepto);
    !function(a){function i(a,b,c,d){return Math.abs(a-b)>=Math.abs(c-d)?a-b>0?"Left":"Right":c-d>0?"Up":"Down"}function j(){f=null,b.last&&(b.el.trigger("longTap"),b={})}function k(){f&&clearTimeout(f),f=null}function l(){c&&clearTimeout(c),d&&clearTimeout(d),e&&clearTimeout(e),f&&clearTimeout(f),c=d=e=f=null,b={}}function m(a){return("touch"==a.pointerType||a.pointerType==a.MSPOINTER_TYPE_TOUCH)&&a.isPrimary}function n(a,b){return a.type=="pointer"+b||a.type.toLowerCase()=="mspointer"+b}var c,d,e,f,h,b={},g=750;a(document).ready(function(){var o,p,s,t,q=0,r=0;"MSGesture"in window&&(h=new MSGesture,h.target=document.body),a(document).bind("MSGestureEnd",function(a){var c=a.velocityX>1?"Right":a.velocityX<-1?"Left":a.velocityY>1?"Down":a.velocityY<-1?"Up":null;c&&(b.el.trigger("swipe"),b.el.trigger("swipe"+c))}).on("touchstart MSPointerDown pointerdown",function(d){(!(t=n(d,"down"))||m(d))&&(s=t?d:d.touches[0],d.touches&&1===d.touches.length&&b.x2&&(b.x2=void 0,b.y2=void 0),o=Date.now(),p=o-(b.last||o),b.el=a("tagName"in s.target?s.target:s.target.parentNode),c&&clearTimeout(c),b.x1=s.pageX,b.y1=s.pageY,p>0&&250>=p&&(b.isDoubleTap=!0),b.last=o,f=setTimeout(j,g),h&&t&&h.addPointer(d.pointerId))}).on("touchmove MSPointerMove pointermove",function(a){(!(t=n(a,"move"))||m(a))&&(s=t?a:a.touches[0],k(),b.x2=s.pageX,b.y2=s.pageY,q+=Math.abs(b.x1-b.x2),r+=Math.abs(b.y1-b.y2))}).on("touchend MSPointerUp pointerup",function(f){(!(t=n(f,"up"))||m(f))&&(k(),b.x2&&Math.abs(b.x1-b.x2)>30||b.y2&&Math.abs(b.y1-b.y2)>30?e=setTimeout(function(){b.el.trigger("swipe"),b.el.trigger("swipe"+i(b.x1,b.x2,b.y1,b.y2)),b={}},0):"last"in b&&(30>q&&30>r?d=setTimeout(function(){var d=a.Event("tap");d.cancelTouch=l,b.el.trigger(d),b.isDoubleTap?(b.el&&b.el.trigger("doubleTap"),b={}):c=setTimeout(function(){c=null,b.el&&b.el.trigger("singleTap"),b={}},250)},0):b={}),q=r=0)}).on("touchcancel MSPointerCancel pointercancel",l),a(window).on("scroll",l)}),["swipe","swipeLeft","swipeRight","swipeUp","swipeDown","doubleTap","tap","singleTap","longTap"].forEach(function(b){a.fn[b]=function(a){return this.on(b,a)}})}(Zepto);
</script>
<script type="text/javascript">
window.Echo=(function(f,a){var h=function(i){this.elem=i;this.render();this.listen()};var g=[];var e=function(i){var j=i.getBoundingClientRect();return((j.top>=0&&j.left>=0&&j.top)<=(f.innerHeight||a.documentElement.clientHeight)*2)};var c=function(i,j){i.src=i.getAttribute("data-echo");if(j){j()}};var d=function(j,i){if(g.indexOf(j)!==-1){g.splice(i,1)}};var b=function(){for(var k=0;k<g.length;k++){var j=g[k];if(e(j)){c(j,d(j,k))}}};h.prototype={init:function(){g.push(this.elem)},render:function(){if(a.addEventListener){a.addEventListener("DOMContentLoaded",b,false)}else{f.onload=b}},listen:function(){f.onscroll=b}};return h})(window,document);
var APP = {
    data: {
        config:{
            noimg: 0
        }
    },
    view: {},
    model: {},

    util: {},
    event: {}
};

APP.util.turnObjToArray = function (obj) {
    return [].map.call(obj, function (element) {
        return element;
    })
};
APP.util.dateFormat = function (date, format) {
    var date = {
        "M+": date.getMonth() + 1,
        "d+": date.getDate(),
        "h+": date.getHours(),
        "m+": date.getMinutes(),
        "s+": date.getSeconds(),
        "q+": Math.floor((date.getMonth() + 3) / 3),
        "S+": date.getMilliseconds()
    };
    if (/(y+)/i.test(format)) {
        format = format.replace(RegExp.$1, (date.getFullYear() + '').substr(4 - RegExp.$1.length));
    }
    for (var k in date) {
        if (new RegExp("(" + k + ")").test(format)) {
            format = format.replace(RegExp.$1, RegExp.$1.length == 1
                ? date[k] : ("00" + date[k]).substr(("" + date[k]).length));
        }
    }
    return format;
};

APP.event.eventRegister = function (domId, event, cb) {
    document.getElementById(domId).addEventListener(event, cb);
};

/**
 * 点击头像进入个人主页
 */
function goProfilePage() {
    var param = {
            "uid": $(this).data('uid')
        },
        paramStr = JSON.stringify(param);
    window.location.href = 'hupuapp://goHomePage?p=' + paramStr;
}


/**
 * =====================================================
 * 帖子内容
 * =====================================================
 */
/**
 * 帖子内容视图
 * @param thread Thread json data
 * @constructor
 */
APP.view.Thread = function () {
    this.DomContainer = $("#js-thread");
}
/**
 * 帖子内容渲染
 * @param model Thread json data
 */
APP.view.Thread.prototype.render = function (data) {
    if(data && data.ThreadInfo) {
        this.DomContainer.show();
        this.DomContainer.html(this.template(data.ThreadInfo));
        //1：无图模式 0：有图模式
        //添加图片加载事件
        if(APP.data.config.noimg == 1) {
            //点击加载
            $('img').on('tap', function(e) {
                //显示loading

                //加载图片
                $(e.target).attr('src', $(e.target).data('src'));
            });
            $('img').on('load', function(e) {

            })

        } else {

        }
    } else {
        this.DomContainer.hide();
    }
}

/**
 * 帖子内容模板
 * @param model Thread json data
 * @returns {string}
 */
APP.view.Thread.prototype.template = function (model) {
    var templateSnippets = [],
        output = '';

    templateSnippets.push('<header>');

    //1：无图模式 0：有图模式
    if(APP.data.config.noimg == 1) {
        templateSnippets.push('<img class="avatar js-avatar" src="http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png" width="33" height="33" data-uid="' + model.uid + '">');
    } else {
        templateSnippets.push('<img class="avatar js-avatar" src="http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png" data-echo="' + model.user_avator + '" width="33" height="33" data-uid="' + model.uid + '">');
    }

    templateSnippets.push('<div class="user-info">');
    templateSnippets.push('<span class="nickname">' + model.username + '</span><br/>');
    templateSnippets.push('<span class="datetime">' + APP.util.dateFormat(new Date(Number(model.create_at) * 1000), 'M-dd h:mm') + '</span>');
    templateSnippets.push('</div>');
    templateSnippets.push('</header>');
    templateSnippets.push('<article class="thread-content">');
    templateSnippets.push('<h1 id="js-thread-title" class="thread-title">' + model.title + '</h1>');
    //1：无图模式 0：有图模式
    if(APP.data.config.noimg == 1) {
        var content = model.content.replace(/<img[^>]+src\s*=\s*['\"]([^'\"]+)['\"][^>]*>/gi,function(m, p1 ,p2 ,p3) {

            return '<img data-src="' + p1 + '" src="http://b1.hoopchina.com.cn/images/hupu_app/clickdefault.png">';
        });
        templateSnippets.push('<p>' + content + '</p>');
    } else {
        var content = model.content.replace(/<img[^>]+src\s*=\s*['\"]([^'\"]+)['\"][^>]*>/gi,function(m, p1 ,p2 ,p3) {

            return '<img data-echo="' + p1 + '" src="http://b1.hoopchina.com.cn/images/hupu_app/1x1.png">';
        });
        templateSnippets.push('<p>' + content + '</p>');
    }

    templateSnippets.push('</article>');

    for (var i = 0, len = templateSnippets.length; i < len; i++) {
        output += templateSnippets[i];
    }
    return output;
};


/**
 * =====================================================
 * 赞
 * =====================================================
 */
/**
 * 赞内容视图
 * @param container dom container id
 * @constructor
 */
APP.view.ThreadZan = function (container) {
    this.DomContainer = $('#' + container);
}
/**
 * 赞内容渲染
 * @param model Thread json data
 */
APP.view.ThreadZan.prototype.render = function (data) {
    console.log(data && data.ThreadZan && data.ThreadZan.length)
    if(data && data.ThreadZan && data.ThreadZan.length) {
        this.DomContainer.html(this.template(data));
        $("#js-threadZan").show();
    } else {
        this.DomContainer.hide();
        $("#js-threadZan").hide();
    }
}
/**
 * 赞内容模板
 * @param model Thread json data
 * @returns {string}
 */
APP.view.ThreadZan.prototype.template = function (data) {
    var templateSnippets = [],
        output = '',
        collection = data ? data.ThreadZan : null,
        len = collection ? collection.length : 0;

    templateSnippets.push('<input type="hidden" id="js-zan-count" value="' + len + '">');
    templateSnippets.push('<input type="hidden" id="js-group-article-id" value="' + data.ThreadInfo.id + '">');
    templateSnippets.push('<h1 class="approve-title" data-count="' + len + '">' + len + '人点赞过这个帖子</h1>');
    templateSnippets.push('<ul class="clearfix approve-avatars">');
    for (var i = 0; i < len; i++) {
        //1：无图模式 0：有图模式
        if(APP.data.config.noimg == 1) {
            templateSnippets.push('<li class="pull-left"><img data-src="' + collection[i].user_avator + '" src="http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png" width="33" height="33"');
        } else {
            templateSnippets.push('<li class="pull-left"><img src="' + collection[i].user_avator + '" width="33" height="33"></li>');
        }

        if (i >= 5) {
            templateSnippets.push('<li class="pull-left"><img src="' + collection[i].user_avator + '" width="33" height="33"></li>');
            templateSnippets.push('<li class="pull-left"><span class="more">...</span></li>');
            break;
        }
    }
    templateSnippets.push('</ul>');

    for (var i = 0, len = templateSnippets.length; i < len; i++) {
        output += templateSnippets[i];
    }
    return output;
}

/**
 * =====================================================
 * 回帖
 * =====================================================
 */
/**
 * 回帖视图
 * @param container dom容器
 * @constructor
 */
APP.view.Reply = function (container) {
    this.DomContainer = document.getElementById(container);
}

// 操作事件
var opertionDiv = $('#js-operation'),
    startX = 0,
    startY = 0;

APP.event.popUpOperation = function (e) {
    opertionDiv.data('content', this.textContent.substring(0,40));
    opertionDiv.data('group-article-id', $(this).data('group-article-id'));
    opertionDiv.data('reply-id', $(this).data("reply-id"));
    opertionDiv.data('floor', $(this).data('floor'));
    opertionDiv.data('tid', $(this).data('tid'));

    startX = e.target.offsetLeft;
    startY = e.target.offsetTop;

    if (opertionDiv.css('display') == "none") {
        opertionDiv.show();
        opertionDiv.css('top',(startY - 20) + 'px');
    } else {
        opertionDiv.hide();
        opertionDiv.css('top',(startY - 20) + 'px');
        opertionDiv.show();
    }
};

/**
 * 回帖内容渲染
 * @param model Thread json data
 */
APP.view.Reply.prototype.render = function (data, category) {
    this.DomContainer.innerHTML = this.template(data, category);
    // 点击头像
    $('.js-avatar').off('tap');
    $('.js-avatar').each(function(index, item) {
        $(this).on('tap', goProfilePage);
    });


    var allReplySections = $('.reply'),
        lastTarget = null;
    allReplySections.on('tap', APP.event.popUpOperation);

}

/**
 * 回帖内容模板
 * @param model Thread json data
 * @returns {string}
 */
APP.view.Reply.prototype.template = function (data, category) {
    if(data) {

        var templateSnippets = [],
            collection = null,
            len = -1;

        switch(category) {
            case "hot":
                collection = data ? data.ThreadHot : null,
                    len = collection ? collection.length : 0;
                if(len) {
                    $('#js-hotReplySection').show();
                } else {
                    return "";
                }
                break;
            case "all":
                collection = data ? data.ReplyList : null,
                    len = collection ? collection.length : 0;
                if(len) {
                    $('#js-allReplyHeader').show();
                } else {
                    return "";
                }
                break;
            default :
                return "";
        }


        for (var i = 0, len = collection.length; i < len; i++) {
            templateSnippets.push('<li class="board-item inner-padding" id="' + collection[i].id + '">');
            //1：无图模式 0：有图模式
            if(APP.data.config.noimg == 1) {
                templateSnippets.push('<img class="avatar js-avatar" data-src="' + collection[i].user_avator + '" src="http://b1.hoopchina.com.cn/images/default_hupu_app3.0.png" width="33" height="33" data-uid="' + collection[i].uid + '">');
            } else {
                templateSnippets.push('<img class="avatar js-avatar" data-echo="' + collection[i].user_avator + '" src="' + collection[i].user_avator + '" width="33" height="33" data-uid="' + collection[i].uid + '">');
            }

            templateSnippets.push('<div class="user-info">');
            templateSnippets.push('<span class="nickname">' + collection[i].username + '</span><br/>');
            templateSnippets.push('<div class="user-info-content">');
            templateSnippets.push('<span class="datetime">' + APP.util.dateFormat(new Date(Number(collection[i].create_at) * 1000), 'M-dd h:mm') + '</span>');
            templateSnippets.push('<span class="light js-light' + collection[i].id + '">' + collection[i].lights + '亮</span>');

            if (collection[i].floor) {
                templateSnippets.push('<span class="floor">' + collection[i].floor + '楼</span>');
            }
            templateSnippets.push('</div>');
            //1：无图模式 0：有图模式
            if(APP.data.config.noimg == 1) {
                var content = collection[i].content.replace(/<img[^>]+src\s*=\s*['\"]([^'\"]+)['\"][^>]*>/gi,function(m, p1 ,p2 ,p3) {

                    return '<img data-src="' + p1 + '" src="http://b1.hoopchina.com.cn/images/hupu_app/clickdefault.png">';
                });
                templateSnippets.push('<div class="reply" data-tid="' + data.ThreadInfo.tid + '" data-floor="' + collection[i].floor + '" data-group-article-id="' + collection[i].group_article_id + '" data-reply-id="' + collection[i].id + '">' + content + '</div>');
            } else {
                var content = collection[i].content.replace(/<img[^>]+src\s*=\s*['\"]([^'\"]+)['\"][^>]*>/gi,function(m, p1 ,p2 ,p3) {

                    return '<img data-echo="' + p1 + '" src="http://b1.hoopchina.com.cn/images/hupu_app/1x1.png">';
                });
                templateSnippets.push('<div class="reply" data-tid="' + data.ThreadInfo.tid + '" data-floor="' + collection[i].floor + '" data-group-article-id="' + collection[i].group_article_id + '" data-reply-id="' + collection[i].id + '">' + content + '</div>');
            }

            templateSnippets.push('</div>');
            templateSnippets.push('</li>');
        }

        return templateSnippets.join('');
    } else {
        return "";
    }

}

// 亮了
APP.event.eventRegister('js-light', 'touchend', function () {
    var param = {
            "group_article_id": opertionDiv.data("group-article-id"),
            "reply_id": opertionDiv.data("reply-id")
        },
        paramStr = JSON.stringify(param);

    window.location.href = 'hupuapp://addLight?p=' + paramStr;
    opertionDiv.hide();
});
//点亮回调函数
function addLightCallback(id, config) {
    var num = config.num;
     $('.js-light'+id).each(function(index,dmo){
            originLightCount = $(dmo).text().slice(0,-1) * 1;
            $(dmo).text((originLightCount + num) + '亮');
    });
}

// 引用
APP.event.eventRegister('js-quote', 'touchend', function () {
    var param = {
            "group_article_id": opertionDiv.data("group-article-id"),
            "reply_id": opertionDiv.data("reply-id"),
            "floor": opertionDiv.data("floor")
        },
        paramStr = JSON.stringify(param);

    window.location.href = 'hupuapp://addQuote?p=' + paramStr;
    opertionDiv.hide();
});

// 分享
APP.event.eventRegister('js-share', 'touchend', function () {
    var param = {
            "url": "http://bbs.hupu.com/"+opertionDiv.data("tid")+".html",
            "content": opertionDiv.data("content"),
            "title": $("#js-thread-title").text()
        },
    paramStr = JSON.stringify(param);
    console.log(param)
    window.location.href = 'hupuapp://addShare?p=' + paramStr;
    opertionDiv.hide();
});

// 复制
APP.event.eventRegister('js-copy', 'touchend', function () {
    var param = {
            content: opertionDiv.data('content')
        },
        paramStr = JSON.stringify(param);

    window.location.href = 'hupuapp://addCopy?p=' + paramStr;
    opertionDiv.hide();
});


/**
 * 初始化帖子内容和赞
 * @param data
 * @param config
 */
function initThread(data, config) {
    window.scrollTo(0,0)
    var threadData = data,
        config = config;
    APP.data.config = config;
    new APP.view.Thread().render(threadData.data);
    new APP.view.ThreadZan("js-threadZan").render(threadData.data);
    new APP.view.Reply("js-threadHot").render(threadData.data, "hot");
    new APP.view.Reply("js-replyList").render(threadData.data, "all");
    imgModeSetup();

}
/**
 * 初始化 热门回帖和全部回帖
 * @param data
 * @param config
 */
function initReply(data, config) {
    window.scrollTo(0,0)
    var replyData = data,
        config = config;
    APP.data.config = config;
    new APP.view.Thread().render({});
    new APP.view.ThreadZan("js-threadZan").render([]);
    new APP.view.Reply("js-threadHot").render([], "hot");
    new APP.view.Reply("js-replyList").render(replyData.data, "all");

    imgModeSetup();
}

function imgModeSetup() {
    //1：无图模式 0：有图模式
    // 有图时延迟加载
    if(APP.data.config.noimg == 0) {
        $('img[data-echo]').each(function (index, img) {
            if(index < 5) {
                $(img).attr('src', $(img).data('echo'));
            } else {
                new Echo(img).init();
            }
        });

        // 点击后手机展示原图
        $('p>img').on('tap', function() {
            var param = {src:this.src};
            var paramStr = JSON.stringify(param);
            window.location.href = 'hupuapp://showImg?p=' + paramStr;
        });
    } else {
        //添加图片加载事件
        //点击加载
        $('p>img').on('tap', function(e) {
            //显示loading
            //加载图片
            $(e.target).attr('src', $(e.target).data('src'));
            //再次点击手机展示图片
            $(e.target).on('tap', function() {
                var param = {src:this.src};
                var paramStr = JSON.stringify(param);
                window.location.href = 'hupuapp://showImg?p=' + paramStr;
            });
        });
    }
    //a 标记处理
    $('.reply a').on('tap', function(e) {
        if(this.href.indexOf('hupuapp://') != 0 )
        {
            var param = {href:this.href};
            var paramStr = JSON.stringify(param);
            window.location.href = 'hupuapp://goLink?p=' + paramStr;
        }
        e.preventDefault();
        return false;
    });
    $('.thread-content a').on('tap', function(e) {
        if(this.href.indexOf('hupuapp://') != 0 )
        {
            var param = {href:this.href};
            var paramStr = JSON.stringify(param);
            window.location.href = 'hupuapp://goLink?p=' + paramStr;
        }
        e.preventDefault();
        return false;
    });

}

//赞点击事件
var threadZanSection = $('#js-threadZan');
threadZanSection.on('touchstart', function () {
    threadZanSection.addClass('touch-row-active');
});
threadZanSection.on('tap', function () {
    threadZanSection.removeClass('touch-row-active');
    var param = {
            "group_article_id": $('#js-group-article-id').val(),
            "count": $('#js-zan-count').val()
        },
        paramStr = JSON.stringify(param);
    window.location.href = 'hupuapp://goZanList?p=' + paramStr;
});

// 滚动事件
window.addEventListener('scroll', function () {
    //关闭操作菜单
    if(!opertionDiv.is(":hidden")) {
        opertionDiv.hide();
    }
});


//initThread(
//    {"data":{"ReplyList":[{"id":"522290","group_article_type":"1","group_article_id":"33","pid":"138493","uid":"3823030","username":"\u4fe1\u4ef0\u97e6\u5fb7","content":"\u8fd9\u4e00\u573a\u7684\u6c57\u6512\u4e0b\u6765\u5e94\u8be5\u53ef\u4ee5\u6d17\u6b21\u6fa1\u4e86<br\/><br><br\/><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204677649261_3000*2220.jpg\" link=\"\"><\/p><br>","lights":"1","create_at":"1402048794","banned":0,"user_avator":"http:\/\/b1.hoopchina.com.cn\/images\/default_hupu_app3.0.png","floor":1},{"id":"1090829","group_article_type":"1","group_article_id":"33","pid":"135981","uid":"18579626","username":"\u6f9c\u6e57","content":"<P>\u8fd9\u7fa4\u8d27 <BR>\u90fd\u81ea\u5e26\u987a\u98ce\u7403\u5c5e\u6027<\/P>  <P>\u539f\u5148\u5f00\u59cb\u94c1\u7684 \u4e00\u770b\u6211\u70ed\u82b1\u4e86 <\/P>  <P>\u6700\u540e\u4e00\u5206\u949f \u5f80\u6b7b\u4e86\u8279<\/P>  <P>\u826f\u5fc3\u5927\u5927\u7684\u574f\u554a<\/P>","lights":"0","create_at":"1402047296","banned":0,"user_avator":"http:\/\/b1.hoopchina.com.cn\/images\/default_hupu_app3.0.png","floor":2},{"id":"1090830","group_article_type":"1","group_article_id":"33","pid":"138685","uid":"17482001","username":"6vs23","content":"\u8fd9\u6837\u7684\u8a79\u59c6\u65af\uff0c\u90fd\u6709\u4eba\u9ed1\uff0c\u771f\u4e0d\u77e5\u9053\u8fd9\u79cd\u4eba\u5728\u73b0\u5b9e\u751f\u6d3b\u4e2d\u662f\u591a\u4e48\u7684low","lights":"0","create_at":"1402048905","banned":0,"user_avator":"http:\/\/b1.hoopchina.com.cn\/images\/default_hupu_app3.0.png","floor":3},{"id":"1090831","group_article_type":"1","group_article_id":"33","pid":"154111","uid":"3144964","username":"ONLY.LBJ","content":"\u8865\u4e0a\u4e00\u4e9b\u5427~<p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205350273470_1560*2224.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg14020535213462_2460*1596.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205354441762_2628*1824.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205360682727_4410*3156.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg14020536643439_2910*4453.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205370467413_2327*3456.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205379729071_4326*2850.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i3.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205403958148_3348*2442.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg14020540862484_2592*1816.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg14020541502495_2046*2966.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i3.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205419042120_2064*2942.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i3.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205427617610_2896*4392.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205437384590_2815*4079.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i3.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205446281495_2600*3912.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg14020545041764_2416*3472.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205460830159_2713*4105.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205465454400_3208*2208.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i3.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205474419866_3192*4408.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205483872514_2600*3640.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205493995701_3085*4500.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i3.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205496951119_1688*2368.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i3.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205499893291_1984*2624.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205509784664_4394*3011.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205511868646_1480*2112.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205520910655_2512*3776.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i3.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205523943036_2848*1960.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205526894195_2848*1960.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205529760619_2848*1960.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205537672880_2888*4448.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg14020554112228_2120*3144.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i3.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205546669933_3080*4656.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i3.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205550068978_3448*2400.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205553773040_3534*2418.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205557151382_3004*2128.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205562537437_2712*4096.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205567125282_2624*3952.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i3.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205571288232_2760*4032.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205578094538_3334*5001.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205580739693_2808*2000.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205584653386_2464*3720.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205590163161_3456*5184.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205594623516_2520*3680.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205599672535_3690*2652.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg14020560315771_3304*2168.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205609779101_2872*4224.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i3.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205612786497_1888*2696.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i3.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205615241463_2752*2120.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i3.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205619852022_2744*3976.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg14020562584994_3160*4816.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg14020562932150_2400*3536.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i3.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205631836830_2143*3038.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i3.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205636520732_2752*3800.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i3.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205639871814_2046*2940.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205647443070_3930*2754.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i3.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205652770540_2592*3792.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205657079122_2304*3496.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205665216043_4074*3108.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg14020566817951_2528*1688.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i3.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205674034787_2768*4248.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205679043733_2472*3656.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205681828984_2552*1696.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205687546181_2960*4272.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205694748607_3048*4680.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205700741446_4065*2669.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205708532109_3876*2610.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205712076690_2064*3072.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i3.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205719810012_4368*3318.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i3.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205724112668_2392*1608.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205726015757_1256*1632.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205731149807_2868*2026.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i3.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205734844346_3030*2202.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205739642872_2560*1720.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i3.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205745463569_2848*4304.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205753198230_3840*2736.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i3.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205757038358_3342*2442.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205761769051_3606*2694.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205765428510_2118*3024.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205770943250_2274*3192.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i3.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205773040275_2304*1584.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg14020577541718_2601*1782.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205779481785_2536*3752.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg14020578252861_2160*3240.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205787447109_2032*2776.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i3.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg14020579183148_2480*3640.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i3.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205795722775_2152*2968.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i3.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg14020579866613_2604*1956.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205802516850_2326*3370.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205806725971_2176*3176.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg14020581083779_3069*2190.jpg\" link=\"\"><\/p><br><br><br\/><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg14020581469921_3708*2724.jpg\" link=\"\"><\/p><br\/><br><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205818820772_1984*2840.jpg\" link=\"\"><\/p><br\/><br><p><img src=\"http:\/\/i3.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205822314632_2088*2936.jpg\" link=\"\"><\/p><br\/><br><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205832465618_3456*5184.jpg\" link=\"\"><\/p><br\/><br><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205837462745_2472*3576.jpg\" link=\"\"><\/p><br\/><br><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205843265039_2744*3831.jpg\" link=\"\"><\/p><br\/><br><p><img src=\"http:\/\/i2.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205847938222_4266*2874.jpg\" link=\"\"><\/p><br\/><br><p><img src=\"http:\/\/i3.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205852251780_2688*3752.jpg\" link=\"\"><\/p><br\/><br><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205858136594_3192*4560.jpg\" link=\"\"><\/p><br\/><br><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140205866183071_3340*4667.jpg\" link=\"\"><\/p><br\/><br><br><br\/>","lights":"1","create_at":"1402058797","banned":0,"user_avator":"http:\/\/b1.hoopchina.com.cn\/images\/default_hupu_app3.0.png","floor":4},{"id":"1090832","group_article_type":"1","group_article_id":"33","pid":"163339","uid":"17184382","username":"Kobe\u4e36Lebron","content":"\u611f\u8c22\u5206\u4eab\uff01\uff01\uff01\uff01\u652f\u6301\u697c\u4e3b\u5de5\u4f5c\u3002<div><br><\/div><div>\u987a\u4fbf\u95ee\u4e0b\uff0c\u8d5b\u524d\u7684\u4fbf\u88c5\u5165\u573a\u5927\u56fe\u6709\u5417\uff1f<\/div>","lights":"0","create_at":"1402063582","banned":0,"user_avator":"http:\/\/b1.hoopchina.com.cn\/images\/default_hupu_app3.0.png","floor":5},{"id":"1090833","group_article_type":"1","group_article_id":"33","pid":"164898","uid":"5057217","username":"Heat\u9e21\u5934","content":"\u6709\u70b9\u597d\u5947\u8fd9\u4e9b\u56fe\u662f\u4ece\u54ea\u91cc\u5f97\u6765\u7684\u5462\uff1f\u6c42\u79d1\u666e","lights":"0","create_at":"1402064385","banned":0,"user_avator":"http:\/\/b1.hoopchina.com.cn\/images\/default_hupu_app3.0.png","floor":6},{"id":"1090834","group_article_type":"1","group_article_id":"33","pid":"166216","uid":"3808828","username":"nexus1","content":"<blockquote class=\"quotation\"><p class=\"quotation-title\">\u5f15\u75286\u697c<q>@Heat\u9e21\u5934<\/q>\u53d1\u8868\u7684\uff1a<\/p> <p class=\"quotation-content\"> <br>\u6709\u70b9\u597d\u5947\u8fd9\u4e9b\u56fe\u662f\u4ece\u54ea\u91cc\u5f97\u6765\u7684\u5462\uff1f\u6c42\u79d1\u666e<\/p><\/blockquote> <br>\u4eba\u5bb6\u7b2c\u4e8c\u53e5\u8bdd\u5c31\u6709\u554a","lights":"0","create_at":"1402065027","banned":0,"user_avator":"http:\/\/b1.hoopchina.com.cn\/images\/default_hupu_app3.0.png","floor":7}],"ReplyTotal":1,"ThreadInfo":{"id":"33","group_id":"5","tid":"9670307","title":"\u3010\u9ad8\u6e05\u5927\u56fe\u30112014.06.06\u9a6c\u523avs\u70ed\u706b\u7f55\u89c1\u56fe\u5e93\u7cbe\u9009\u9ad8\u6e05\u65e0\u7801\u8d5b\u573a\u716766p","uid":"18440084","username":"\u67cf\u8fe6","zan":"1","lights":"0","replies":"14","note":"\u9ad8\u6e05\u5927\u56fe\u7684\u76f8\u518c\u5730\u5740\u53ef\u4ee5\u5230\u8fd9\u91cc\u53bb\u770b\u770b\uff1ahttp:\/\/my.hupu.com\/18440084\/photo\/a1794158-1.html\u7167\u7247\u5747\u6765\u6e90\u4e8eNBAE\/GettyImages\u8fd8\u6709\u90e8\u5206\u6b27\u6d32\u5c0f\u56fe\u5e93\u9ad8\u6e05\u65e0\u7801\u53ef\u4ee5\u8fdb\u5165\u76f8\u518c\u67e5\u770b\u6c42\u522b\u9ed1\uff01","cover":"","last_reply_time":"1402065027","create_at":"1402047135","group_article_type":1,"user_avator":"http:\/\/b1.hoopchina.com.cn\/images\/default_hupu_app3.0.png","content":"<b style=\"color: rgb(18, 18, 18); font-family: Arial, Helvetica, sans-serif, \u5b8b\u4f53; background-color: rgb(241, 241, 241);\">\u9ad8\u6e05\u5927\u56fe\u7684\u76f8\u518c\u5730\u5740\u53ef\u4ee5\u5230\u8fd9\u91cc\u53bb\u770b\u770b\uff1a<\/b><a href=\"http:\/\/my.hupu.com\/18440084\/photo\/a1794158-1.html\">http:\/\/my.hupu.com\/18440084\/photo\/a1794158-1.html<\/a>\u7167\u7247\u5747\u6765\u6e90\u4e8eNBAE\/GettyImages \u8fd8\u6709 \u90e8\u5206\u6b27\u6d32\u5c0f\u56fe\u5e93\u9ad8\u6e05\u65e0\u7801 \u53ef\u4ee5\u8fdb\u5165\u76f8\u518c\u67e5\u770b\u6c42\u522b\u9ed1\uff01<p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204547985702_3640*2422.jpglink=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204550192738_3717*3201.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204552075773_3280*4928.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204553898497_2443*3670.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg14020455459279_1458*2187.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204556399116_2945*4425.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204557349194_3000*2002.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204557981962_1458*2187.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204560273596_4928*3280.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg14020456234812_3120*3456.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204563586010_2400*3600.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204565892192_4271*3456.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204568427614_3280*4928.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204570055685_4256*2832.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204570625386_2187*1458.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204571172773_2187*1458.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204573186283_3978*3051.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204574536159_2754*4138.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204575763757_4308*2940.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204576460001_2187*1458.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204577282669_1920*1280.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204578824479_3777*2580.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204580644760_4128*2656.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204602343812_2462*3888.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204604217204_4630*3030.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204605250681_3333*2951.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204606356921_2441*3666.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204607191408_2307*2888.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204608535672_2754*3888.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204609997323_2539*3888.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204611327858_3888*2668.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204613480158_3888*3130.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204616013209_3888*2826.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204617033057_3600*2824.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204619322992_3027*4096.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204620550114_3600*1696.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204621732188_3600*2184.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204623344219_3600*4000.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204624724892_3600*2669.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204626147592_3600*4045.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204627583619_2952*4096.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204629517457_3600*3720.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204630772485_3043*4096.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204631635389_3600*2183.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204632815594_3310*4096.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204634139027_3136*4096.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204635611706_3600*3877.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204665843371_3371*4096.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204667237067_3007*4096.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204668834653_3293*4096.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204670486653_3512*4096.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204672788151_4038*4096.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204674490634_3277*4096.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg14020467544975_3600*2475.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204676460517_3000*1920.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204677649261_3000*2220.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204678497793_3000*1997.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204679262690_2095*3000.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204680346874_2230*3000.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204681469115_3000*1997.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204682342621_3000*1997.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204684730754_3500*2263.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204685797140_3500*2303.jpg\" link=\"\" link=\"\"><\/p><\/p><p><p><img src=\"http:\/\/i1.hoopchina.com.cn\/blogfile\/201406\/06\/BbsImg140204686613203_3500*2254.jpg\" link=\"\" link=\"\"><\/p><\/p>"},"ThreadZan":[{"uid":"18232103","user_avator":"http:\/\/b1.hoopchina.com.cn\/images\/default_hupu_app3.0.png"}],"ThreadHot":[],"ThreadIsZan":false,"GroupReplyPage":1},"status":200,"msg":"ok"},{"mode":0,"noimg":0})


</script>
</body>
</html>
