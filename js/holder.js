
/*
Holder - 2.2 - client side image placeholders
(c) 2012-2013 Ivan Malopinsky / http://imsky.co
Provided under the MIT License.
Commercial use requires attribution.
*/
var Holder = Holder || {};
(function (app, win) {
var preempted = false,
fallback = false,
canvas = document.createElement('canvas');
var dpr = 1, bsr = 1;
var resizable_images = [];
if (!canvas.getContext) {
fallback = true;
} else {
if (canvas.toDataURL("image/png")
.indexOf("data:image/png") < 0) {
//Android doesn't support data URI
fallback = true;
} else {
var ctx = canvas.getContext("2d");
}
}
if(!fallback){
dpr = window.devicePixelRatio || 1,
bsr = ctx.webkitBackingStorePixelRatio || ctx.mozBackingStorePixelRatio || ctx.msBackingStorePixelRatio || ctx.oBackingStorePixelRatio || ctx.backingStorePixelRatio || 1;
}
var ratio = dpr / bsr;
var settings = {
domain: "holder.js",
images: "img",
bgnodes: ".holderjs",
themes: {
"gray": {
background: "#eee",
foreground: "#aaa",
size: 12
},
"social": {
background: "#3a5a97",
foreground: "#fff",
size: 12
},
