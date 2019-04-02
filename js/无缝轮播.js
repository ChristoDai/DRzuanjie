$(function() {
    var index = 0;
    var oimgList = document.querySelector('.share-imgList');
    $(".hd-right").on('click', function() {
        if (index == 6) {
            oimgList.style.left = 0 + 'px';
            index = 0;
        }
        index++;
        // oimgList.style.left = -262 * index + 'px';
        $(".share-imgList").stop().animate({
            left: -300 * index
        }, 400);
    })
    $(".hd-left").on('click', function() {
        if (index == 0) {
            oimgList.style.left = -300 * 6 + 'px';
            index = 6;
        }
        index--;
        // oimgList.style.left = -262 * index + 'px';
        $(".share-imgList").stop().animate({
            left: -300 * index
        }, 400);
    })
})