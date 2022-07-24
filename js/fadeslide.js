        // 控制內文滑進來
        $(document).ready(function () {

            

            var aboutY = $('#about').offset().top;
            var aboutHight = $('#about').height();
            // let aboutY = ('#about').pageYOffset
            // let aboutY = offset('#about').top
            
            $(window).on('scroll', function () {
                var value = window.scrollY;
                let nowloc = 0
                console.log("現在Y軸"+value);
                console.log("aboutY"+aboutY);
                console.log("高度"+aboutHight);

                // 目前捲軸捲動的距離(與最頂端 0 之間的距離)
                nowloc = $(window).scrollTop()
                if (nowloc >= (aboutY - aboutHight - 400)) {
                    $("#mypic").animate({
                        right: '0px',
                        top: '0px',
                        opacity: "1",
                        height: '200px',
                        width: '200px',

                      },1000);
                } 
            })

            // let nowloc = 0

            $(window).on('scroll', function () {
                // 目前捲軸捲動的距離(與最頂端 0 之間的距離)
                nowloc = $(window).scrollTop()
                if (nowloc >= (aboutY - aboutHight - 400)) {
                    
                    $("#profile").animate({
                        left: '0px',
                        top: '0px',
                        opacity: "1",

                        width: '200px',

                      },1000);
                }
            })




            // window.addEventListener('scroll', function () {
            //     var value = window.scrollY;

            //     console.log(value);

            //     if (value>300) {
            //         $("#mypic").animate({
            //             right: '0px',
            //             top: '0px',
            //             opacity: "1",
            //             height: '200px',
            //             width: '200px',

            //           },1000);


            //         $("#profile").animate({
            //             left: '0px',
            //             top: '0px',
            //             opacity: "1",

            //             width: '200px',

            //           },1000);
            //     }


            // })

        })