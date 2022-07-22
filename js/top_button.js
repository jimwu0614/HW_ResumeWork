        //返回頁首的按鈕
        $('#go_top_page').css({
            display: 'none'
        })
        let nowloc = 0

        $(window).on('scroll', function () {
            // 目前捲軸捲動的距離(與最頂端 0 之間的距離)
            nowloc = $(window).scrollTop()
            if (nowloc > 600) {
                $('#go_top_page').fadeIn()
            } else {
                $('#go_top_page').fadeOut()
            }
        })