

init();

function init() {

var images = document.images;

// 加载首屏图片

for (var i = 0, len = images.length; i < len; i++) {

var obj = images[i];

// 如果在可视区域并且还没被加载过

if(obj.getBoundingClientRect().top < document.documentElement.clientHeight && !obj.isLoad) {

obj.isLoad = true;

// 先调用 HTML5 方法

if (obj.dataset) 

imageLoaded(obj, obj.dataset.original);

else 

imageLoaded(obj, obj.getAttribute('data-original'));

} else {

break;

}

}

}

window.onscroll = function() {

lazyload();

};

function lazyload() {

var lazy = 500;

var images = document.images;

for (var i = 0, len = images.length; i < len; i++) {

var obj = images[i];

if (obj.getBoundingClientRect().top - lazy < document.documentElement.clientHeight && !obj.isLoad) {

obj.isLoad = true;

obj.style.cssText = "transition: ''; opacity: 0;"

if (obj.dataset) 

imageLoaded(obj, obj.dataset.original);

else 

imageLoaded(obj, obj.getAttribute('data-original'));

}

if (obj.getBoundingClientRect().top < document.documentElement.clientHeight && !obj.isShow) {

obj.isShow = true;

obj.style.cssText = "transition: 1s; opacity: 1;"

}

}

}

function imageLoaded(obj, src) {

var img = new Image();

img.onload = function() {

obj.src = src;

};

img.src = src;

}

