// ボタンアニメ
$(document).ready(function(){
    $('.btn').hover(function(){
    $(this).stop(true).animate({
    'width':'74px','height':'31px','marginTop':'5px'},'fast');
    },
    function(){
    $(this).animate({
    'width':'62px','height':'21px','marginTop':'10px'},'fast');
    });
});

// スライドショー
$(function(){
    $('.slider').slick({
        autoplay:true,
        autoplaySpeed:4000,
        dots:true,
    });
});