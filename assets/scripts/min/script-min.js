$(document).ready(function(){$("#toggleMenu").click(function(){return $("body").toggleClass("show-menu"),!1}),$("#closeMenu").click(function(){return $("body").toggleClass("show-menu"),!1}),$(".fancybox").fancybox({openEffect:"none",closeEffect:"none"}),$("img.lazy").lazyload({threshold:200,event:"click",effect:"fadeIn"})});