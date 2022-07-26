        // 控制內文滑進來
        $(document).ready(function () {

            

            var aboutY = $('#trigger_About').offset().top;

            var value = window.scrollY;

            console.log("現在Y軸value"+value);
            
            $(window).on('scroll', function () {

                console.log('aboutY'+aboutY);



                // let nowloc = 0
                // nowloc = $(window).scrollTop()
                // console.log("現在Y軸nowloc"+nowloc);





                    //value=用戶滾軸位置
                              //  
                if (value >= aboutY) {
                // if ((aboutY - aboutHight) == 0) {
                // if (value >= (aboutY - aboutHight - 400)) {

                    $("#mypic").animate({
                        right: '0px',
                        top: '0px',
                        opacity: "1",
                        height: '200px',
                        width: '200px',

                      },1000);
                } 
            })



            $(window).on('scroll', function () {
                var value = window.scrollY;

                // if (value >= (aboutY - aboutHight - 400)) {
                if (value >= aboutY) {
                    
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