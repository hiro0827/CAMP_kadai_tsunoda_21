// フェードイン〜末尾への文章追加まで

$(function(){
    $('#ex').html("かきくけこ")
    $('#ex').hide().fadeIn(4000);
    $('#ex').css("color", "white")
    $('#ex').css("background", "black")
    $('#ex').before('<p class="one">あいうえお</p>')
    $('#ex').after('<p class="three">さしすせそ</p>')
})


// 偶数行だけ背景を変化

$(function(){
    $('#ex_b :nth-child(odd)').css("background", "black")
    $('#ex_b :nth-child(odd)').css("color", "white")
    $('#ex_b :nth-child(even)').css("background", "white")
})