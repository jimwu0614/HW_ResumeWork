        // 控制內文滑進來
        $(document).ready(function () {

            //先宣告各種trigger的Y軸位置為變數

            var aboutY = $('#trigger_About').offset().top;
            console.log('aboutY:'+aboutY);

            var experienceY = $('#trigger_Experience').offset().top;
            console.log('experienceY:'+experienceY);

            var skillY = $('#trigger_Skill').offset().top;
            console.log('skillY:'+skillY);

            var designY = $('#trigger_Design').offset().top;
            console.log('designY:'+designY);

            var portfolioY = $('#trigger_Portfolio').offset().top;
            console.log('portfolioY:'+portfolioY);

            
            
            $(window).on('scroll', function () {
                
                //宣告用戶Y軸位置
                var value = window.scrollY;
                console.log("現在Y軸value"+value);

                //另一種宣告用戶Y軸位置的方式
                /*let nowloc = 0
                nowloc = $(window).scrollTop()
                console.log("現在Y軸nowloc"+nowloc);*/


                // 經過about區
                if (value >= aboutY && value<experienceY) {

                    // $("#nav_about").attr('style', 'text-decoration: underline')
                    //nav_bar根據現在位置變色
                    $(".nav-link").removeClass("focus");
                    $("#nav_about").addClass("focus")



                    
                    //我的照片跟自我介紹滑進來
                    $("#mypic").animate({
                        right: '0px',
                        top: '0px',
                        opacity: "1",
                        height: '200px',
                        width: '200px',

                      },1000);

                    $("#profile").animate({
                        left: '0px',
                        top: '0px',
                        opacity: "1",

                        width: '200px',

                    },1000);


                    // 經過experience區
                }else if (value >= experienceY && value<skillY){
                    //nav_bar根據現在位置變色
                    $(".nav-link").removeClass("focus");
                    $("#nav_experience").addClass("focus")



                    
                    // 經過skill區
                }else if (value >= skillY && value<designY){
                    //nav_bar根據現在位置變色
                    $(".nav-link").removeClass("focus");
                    $("#nav_skill").addClass("focus")



                    
                    // 經過design區
                }else if (value >= designY && value<portfolioY){
                    //nav_bar根據現在位置變色
                    $(".nav-link").removeClass("focus");
                    $("#nav_design").addClass("focus")

                    $(".animal").animate({
                        left: '0px',
                        top: '0px',
                    },800);

                    
                    //經過portfolio區
                }else if (value >= portfolioY){
                    //nav_bar根據現在位置變色
                    $(".nav-link").removeClass("focus");
                    $("#nav_portfolio").addClass("focus")



                    
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